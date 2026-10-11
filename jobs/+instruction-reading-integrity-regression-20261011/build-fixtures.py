#!/usr/bin/env python3
"""Construct isolated A/B diagnostics from pinned 1minute-wiki and AIDDSkeleton checkouts.

No network, git mutation, or source-tree changes. Python 3.9+ stdlib.
A and B use the same complete Upstream governance except for Root AGENTS.md.
"""
from __future__ import annotations

import argparse
import hashlib
import json
import shutil
import subprocess
from pathlib import Path

UPSTREAM_SHA = "c892dc29bf7f805333514c338d99550dff6ed140"
CONSUMER_SHA = "942e13ab033b1936b1a88159bd0b7590bef464ef"
UPSTREAM_PARTS = (
    "AGENTS.md", "CLAUDE.md", "GEMINI.md", "README.md",
    "agents.d", "definition", "jobs", "references", "implementation",
)
RETIRED_PARTS = ("etc", "products")


def checkout_head(directory: Path, expected: str) -> None:
    actual = subprocess.check_output(
        ["git", "-C", str(directory), "rev-parse", "HEAD"],
        text=True,
    ).strip()
    if actual != expected:
        raise SystemExit(f"Wrong checkout {directory}: expected {expected}, got {actual}")
    dirty = subprocess.check_output(
        ["git", "-C", str(directory), "status", "--porcelain"],
        text=True,
    ).strip()
    if dirty:
        raise SystemExit(f"Source checkout is dirty: {directory}")


def write(root: Path, relative: str, content: str) -> None:
    path = root / relative
    path.parent.mkdir(parents=True, exist_ok=True)
    path.write_text(content.strip() + "\n", encoding="utf-8")


def seed_quiz(root: Path) -> None:
    for marker in ("definition/common/.gitkeep", "definition/units/.gitkeep"):
        (root / marker).unlink(missing_ok=True)
    write(root, "definition/common/INDEX.md", """
# Project Definition

Approved synthetic fixture: offline one-minute Wikipedia-style quiz.
Only a deterministic local scoring component is in scope; no network access,
deployment or production readiness is asserted.

[Documentation language](documentation_language.md)
[Units](../units/INDEX.md)
""")
    write(root, "definition/common/documentation_language.md", """
# Documentation language

Default: ja (BCP 47). No unit-specific override.
""")
    write(root, "definition/units/INDEX.md", """
# Units

- [Wiki Quiz](wiki-quiz/INDEX.md)
""")
    write(root, "definition/units/wiki-quiz/INDEX.md", """
# Wiki Quiz

Responsibility: determine whether a proposed answer is accepted before a
60-second deadline. Implementation and current verification are incomplete.

- [Requirements](requirements/INDEX.md)
- [Design](design/INDEX.md)
- [Testing](testing/INDEX.md)
- No additional common/cross-unit authority beyond common/INDEX.md.
""")
    write(root, "definition/units/wiki-quiz/requirements/INDEX.md", """
# Quiz requirements
- [Acceptance requirements](QUIZ_requirements.md)
""")
    write(root, "definition/units/wiki-quiz/requirements/QUIZ_requirements.md", """
# Quiz requirements

QUIZ-R-001: A submitted answer is timely only at elapsed seconds t where
0 <= t < 60; t = 60 must be rejected.
QUIZ-R-002: A correct answer matches the expected title after trimming
surrounding whitespace and case-insensitive comparison.
""")
    write(root, "definition/units/wiki-quiz/design/INDEX.md", """
# Quiz design
- [Scoring behavior](QUIZ_scoring.md)
""")
    write(root, "definition/units/wiki-quiz/design/QUIZ_scoring.md", """
# Scoring behavior

Use monotonic elapsed seconds since question start. An answer is accepted
only if it matches and 0 <= elapsed < 60. No additional scoring mechanism.
""")
    write(root, "definition/units/wiki-quiz/testing/INDEX.md", """
# Quiz testing
- [Test intent](QUIZ_test-intent.md)
""")
    write(root, "definition/units/wiki-quiz/testing/QUIZ_test-intent.md", """
# Quiz test intent

Exercise timely answers, exact deadline, late answers, and title
normalization. Successful tests must demonstrate rejection at t = 60.
No existing test result or completion claim is adopted by this document.
""")
    write(root, "implementation/quiz.py", '''
"""Synthetic deliberately imperfect scoring implementation."""


def accepted_answer(expected: str, submitted: str, elapsed_seconds: float) -> bool:
    return (
        0 <= elapsed_seconds <= 60  # Intentional fixture defect at t = 60.
        and expected.strip().casefold() == submitted.strip().casefold()
    )
''')
    write(root, "implementation/test_quiz.py", '''
import unittest
from quiz import accepted_answer


class QuizTests(unittest.TestCase):
    def test_valid_answer_before_deadline(self):
        self.assertTrue(accepted_answer("Tokyo", " TOKYO ", 59.0))

    def test_late_answer(self):
        self.assertFalse(accepted_answer("Tokyo", "Tokyo", 61.0))


if __name__ == "__main__":
    unittest.main()
''')


def digest_tree(root: Path, exclude_root: bool = False) -> str:
    h = hashlib.sha256()
    for p in sorted(root.rglob("*")):
        if not p.is_file():
            continue
        path = p.relative_to(root).as_posix()
        if exclude_root and path == "AGENTS.md":
            continue
        h.update(path.encode("utf-8") + b"\\0" + p.read_bytes() + b"\\0")
    return h.hexdigest()


def main() -> None:
    parser = argparse.ArgumentParser()
    parser.add_argument("--consumer", type=Path, required=True,
                        help="clean checkout of 1minute-wiki at the pinned SHA")
    parser.add_argument("--upstream", type=Path, required=True,
                        help="clean checkout of AIDDSkeleton at the pinned SHA")
    parser.add_argument("--candidate-root", type=Path, required=True,
                        help="candidate branch's complete AGENTS.md exported to a file")
    parser.add_argument("--output", type=Path, required=True)
    args = parser.parse_args()

    consumer, upstream = args.consumer.resolve(), args.upstream.resolve()
    checkout_head(consumer, CONSUMER_SHA)
    checkout_head(upstream, UPSTREAM_SHA)
    candidate = args.candidate_root.read_text(encoding="utf-8")
    baseline = (upstream / "AGENTS.md").read_text(encoding="utf-8")
    if baseline == candidate or "#### Instruction Reading Integrity" not in candidate:
        raise SystemExit("Expected a candidate Root with Instruction Reading Integrity")
    if candidate.replace(
        candidate[candidate.index("#### Instruction Reading Integrity"):
                  candidate.index("#### Governance Concepts")], ""
    ) != baseline:
        raise SystemExit("Candidate must differ solely by the new integrity subsection")

    out = args.output.resolve()
    if out.exists():
        raise SystemExit(f"Output exists, refusing to overwrite: {out}")
    if out == consumer or out == upstream or consumer in out.parents or upstream in out.parents:
        raise SystemExit("Output must be outside either source checkout")

    for arm in ("A", "B"):
        dst = out / arm
        shutil.copytree(consumer, dst, ignore=shutil.ignore_patterns(".git"))
        for name in (*UPSTREAM_PARTS, *RETIRED_PARTS):
            existing = dst / name
            if existing.is_dir():
                shutil.rmtree(existing)
            elif existing.exists():
                existing.unlink()
        for name in UPSTREAM_PARTS:
            src = upstream / name
            dest = dst / name
            if src.is_dir():
                shutil.copytree(src, dest)
            else:
                shutil.copy2(src, dest)
        if arm == "B":
            write(dst, "AGENTS.md", candidate)
        seed_quiz(dst)
    a, b = out / "A", out / "B"
    matching = digest_tree(a, exclude_root=True) == digest_tree(b, exclude_root=True)
    if not matching or (a / "AGENTS.md").read_bytes() == (b / "AGENTS.md").read_bytes():
        raise SystemExit("Fixture isolation check failed")
    manifest = {
        "consumer_sha": CONSUMER_SHA,
        "upstream_sha": UPSTREAM_SHA,
        "a_root_sha256": hashlib.sha256((a / "AGENTS.md").read_bytes()).hexdigest(),
        "b_root_sha256": hashlib.sha256((b / "AGENTS.md").read_bytes()).hexdigest(),
        "nonroot_sha256": digest_tree(a, exclude_root=True),
        "nonroot_equal": matching,
        "test_only": True,
        "known_defect": "implementation/quiz.py accepts at elapsed_seconds == 60",
    }
    (out / "manifest.json").write_text(
        json.dumps(manifest, indent=2, ensure_ascii=False) + "\n", encoding="utf-8"
    )
    print(json.dumps(manifest, indent=2, ensure_ascii=False))


if __name__ == "__main__":
    main()
