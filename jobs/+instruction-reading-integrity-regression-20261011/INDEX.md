# Instruction Reading Integrity: controlled consumer diagnostic

## Purpose and authorization

Authorized candidate work: clarify Root `AGENTS.md` instruction-reading integrity and prepare a controlled A/B diagnostic using the nearly empty `joyrswd/1minute-wiki` repository. This is non-authoritative work/test material, not an adopted governance rule or evidence of consumer regression success.

- Upstream baseline: `joyrswd/AIDDSkeleton` commit `c892dc29bf7f805333514c338d99550dff6ed140` (`main` at preparation).
- Source Consumer: `joyrswd/1minute-wiki` commit `942e13ab033b1936b1a88159bd0b7590bef464ef` (an older, uninitialized five-area template).
- Candidate: this branch's Root `AGENTS.md` only; every other instruction must match the Upstream baseline.
- No source Consumer `main` modification, initialization, PR action, or Upstream `main` change.

## Setup commands (operator only)

Use clean, detached checkouts of the exact pinned source SHAs, not a mutable `main` checkout. Export the candidate Root from the branch at a fixed candidate commit:

```sh
git -C /path/to/AIDDSkeleton-candidate show <candidate-commit>:AGENTS.md > /tmp/candidate-root.md
python3 /path/to/build-fixtures.py \
  --consumer /path/to/1minute-wiki-pinned \
  --upstream /path/to/AIDDSkeleton-baseline-pinned \
  --candidate-root /tmp/candidate-root.md \
  --output /tmp/wiki-instruction-ab
```

The source checkouts must match the pinned SHAs and be clean; generation refuses existing output. The command produces `A/`, `B/`, and `manifest.json` outside both checkouts. Show only a fresh copy of one arm to each test agent; keep this job and `manifest.json` outside its workspace. If a runner cannot materialize the pinned source checkouts, report fixture-generation as **not run**, rather than substituting the mutable consumer repository or silently weakening A/B equality.

## Work and evidence boundary

1. Assemble isolated initialized A/B diagnostic copies using [build-fixtures.py](build-fixtures.py) and the pinned source snapshots. The old Consumer's governance is replaced by the same modern Upstream governance in both copies; this **synthetic migration is test setup, not adoption evidence**.
2. Execute the three-stage instruction in [trial-prompts.md](trial-prompts.md) with independent AI sessions (prefer at least three per arm), retaining their actual tool calls and model-visible outputs. Keep the evaluator-only key separate.
3. Evaluate with [evaluation.md](evaluation.md); score per phase and distinguish instruction-fetch success, actual content delivered to the AI, correctly triggered subsidiary instructions, and dependent work decisions.
4. Report observed support/failures and limits; do not claim upstream general adoptability from these synthetic, guided fixtures. Representative initialized Consumer black-box evidence is separately required where the existing Consumer Regression dispatch calls for it.

## Local smoke verification (2026-10-11)

Verified the **exact candidate** `build-fixtures.py` content by matching local `git hash-object` to GitHub blob `7181ea644a8051bed014dd529ee9abb9f7cb7829`. Python 3.13.5 `py_compile` and `--help` passed. A locally constructed **mock-source harness** replaced only the pinned-Git-checkout precondition (the clone is unavailable in the execution environment; `git ls-remote` returned `Could not resolve host: github.com`). It then executed the real fixture builder and confirmed:

- A and B generated successfully, differing only in the Root `AGENTS.md`; the manifest's `nonroot_equal` was `true`.
- Retired `etc/` and `products/` were removed, and synthetic initialized Definition indexes were created.
- Both identical quiz Unit test runs passed, while the deliberate exact-60-second defect still returned `True`.
- Unexpected additional Root edits and attempts to overwrite an existing output directory were rejected.

This is **only a smoke test of generation logic using mock source trees**. Pinned source checkouts, their full governance trees, real clean-checkout verification, link/index validation against actual source files, and independent AI trials remain **not executed**. Neither model behavior nor Consumer adoptability has been verified by these results.

## Current state

Candidate Root addition and diagnostic preparation are the current outcome. Fixture generation in an executable environment and independent AI A/B trials are **not yet verified**. Keep the job active for results and subsequent adoption decision; a prepared script is not a run.

## Exit

After evidence is evaluated, seek an explicit decision on adopting/discarding the Root candidate. Reconcile the retained job's outcome and evidence under the applicable job-exit rules; remove disposable fixture copies. The experimental materials do not themselves authorize Consumer edits or Upstream adoption.
