# Instruction Reading Integrity: controlled consumer diagnostic

## Purpose and authorization

Authorized candidate work: clarify Root `AGENTS.md` instruction-reading integrity and prepare a controlled A/B diagnostic using the nearly empty `joyrswd/1minute-wiki` repository. This is non-authoritative work/test material, not an adopted governance rule or evidence of consumer regression success.

- Upstream baseline: `joyrswd/AIDDSkeleton` commit `c892dc29bf7f805333514c338d99550dff6ed140` (`main` at preparation).
- Source Consumer: `joyrswd/1minute-wiki` commit `942e13ab033b1936b1a88159bd0b7590bef464ef` (an older, uninitialized five-area template).
- Candidate: this branch's Root `AGENTS.md` only; every other instruction must match the Upstream baseline.
- No source Consumer `main` modification, initialization, PR action, or Upstream `main` change.

## Work and evidence boundary

1. Assemble isolated initialized A/B diagnostic copies using [build-fixtures.py](build-fixtures.py) and the pinned source snapshots. The old Consumer's governance is replaced by the same modern Upstream governance in both copies; this **synthetic migration is test setup, not adoption evidence**.
2. Execute the three-stage instruction in [trial-prompts.md](trial-prompts.md) with independent AI sessions (prefer at least three per arm), retaining their actual tool calls and model-visible outputs. Keep the evaluator-only key separate.
3. Evaluate with [evaluation.md](evaluation.md); score per phase and distinguish instruction-fetch success, actual content delivered to the AI, correctly triggered subsidiary instructions, and dependent work decisions.
4. Report observed support/failures and limits; do not claim upstream general adoptability from these synthetic, guided fixtures. Representative initialized Consumer black-box evidence is separately required where the existing Consumer Regression dispatch calls for it.

## Current state

Candidate Root addition and diagnostic preparation are the current outcome. Fixture generation in an executable environment and independent AI A/B trials are **not yet verified**. Keep the job active for results and subsequent adoption decision; a prepared script is not a run.

## Exit

After evidence is evaluated, seek an explicit decision on adopting/discarding the Root candidate. Reconcile the retained job's outcome and evidence under the applicable job-exit rules; remove disposable fixture copies. The experimental materials do not themselves authorize Consumer edits or Upstream adoption.
