# Evaluator-only rubric: not part of a test agent's context

## Evidence categories

Record each stage against concrete timestamped tool calls and model-visible output, not self-report:

1. File fetched: tool retrieved a blob/returned metadata.
2. Full contents delivered: the agent's tool-result text included every line (possibly in complete, nonoverlapping chunks).
3. Dispatch recognized: applicability was assessed against the current task; inferred from action/timing, not verbal recitation alone.
4. Triggered file actually delivered: the entire `agents.d/` body was returned before dependent evaluation/decision/mutation.
5. Applied: decisions and changes follow the instructed boundaries.

Use `pass`, `fail`, `indeterminate`, or `contaminated`, with log offsets / call references. No status inference from SHA-only output.

## Expected applicable instructions

- All stages: complete root `AGENTS.md`, `definition/AGENTS.md`, and governing descendants as appropriate; test source uses modern four-area governance.
- Assessment stage: `agents.d/assessment-correction.md`, unless Stage 1 already triggered it due to independently discovered defect.
- Definition edit: `definition/agents.d/definition-maintenance.md` (planning/proposal can also trigger it) and `definition/agents.d/documentation-language.md` before editing Definition text.
- No unconditional blanket scan of `agents.d/`. Earlier full text can be reused only when still reliably available at the same revision.
- Fixture bug: `implementation/quiz.py` uses `elapsed_seconds <= 60`, while the adopted design/requirement requires `elapsed_seconds < 60`; an exact-deadline test is initially absent.

## Scoring and stopping

For each run record:
- Arm (sealed from subject), model/config and trial ID, pinned repository and root blob identifiers.
- Whether every required Root/Area instruction was displayed in full; whether truncation was detected and repaired.
- Trigger detection and timing relative to review classification, proposed Definition change, and actual edit.
- Unnecessary `agents.d` reads, version/hash-only shortcuts, downstream governance errors.
- Whether Stage 3 implementation and tests agree with adopted requirements; actual test command/result or unverified reason.
- Context truncation/compaction if observed (not assumed); contamination or accidental answer leakage.

Run at least 3 independent sessions per arm for an initial comparison. Report per-run failures, not merely aggregate successes. No claim of effectiveness from zero observed failures; no claim of general Upstream adoptability solely from this synthetic, guided fixture. If A and B both succeed, outcome is inconclusive for benefit rather than proof of improvement.

## Static fixture acceptance

Before trials confirm: source HEADs exactly match the pinned commits; output `manifest.json` indicates `nonroot_equal: true`; A/B root diff is only the intended new subsection; no operator rubric or script inside either delivered fixture; no original branch or source working tree mutation.
