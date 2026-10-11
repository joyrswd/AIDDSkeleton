# ChatGPT + GitHub plugin: primary A/B trial

## Why this is the primary environment

The original incident concerned ChatGPT using the GitHub plugin through `functions.exec`: the connector could fetch a governance file while the acting model received only `SHA`, character counts, or excerpts. A local `git clone` plus Codex does not test that path.

**Run the subjects in ordinary new ChatGPT conversations with the same connected GitHub plugin and otherwise identical model, project instructions, tools, and thinking setting.** Do not move the subject to Codex, a shell, Work cloud browser, or a locally generated fixture. The operator may use any tooling to inspect evidence, but do not add instruction-reading hints to the subject prompts.

## Immutable initial fixtures already on GitHub

Repository: `joyrswd/1minute-wiki`. All six branches were created from the **same source parent** `942e13ab033b1936b1a88159bd0b7590bef464ef`, with synthetic modern AIDDSkeleton governance, approved test-scope project definition and the same unfinished scoring code.

| Trial ID | Subject branch | Initial commit | Root group (operator-only) |
|---|---|---|---|
| 101 | `trial/wiki-read-101-20261011` | `95c9da3e1f6ab0c8311e83c087b36aa6e804b36b` | A / current Root |
| 102 | `trial/wiki-read-102-20261011` | `4e95d8ebbcadb1c592b4493e4f6c07961ceef8d6` | B / candidate Root |
| 103 | `trial/wiki-read-103-20261011` | `95c9da3e1f6ab0c8311e83c087b36aa6e804b36b` | A / current Root |
| 104 | `trial/wiki-read-104-20261011` | `4e95d8ebbcadb1c592b4493e4f6c07961ceef8d6` | B / candidate Root |
| 105 | `trial/wiki-read-105-20261011` | `95c9da3e1f6ab0c8311e83c087b36aa6e804b36b` | A / current Root |
| 106 | `trial/wiki-read-106-20261011` | `4e95d8ebbcadb1c592b4493e4f6c07961ceef8d6` | B / candidate Root |

- Baseline Root blob: `a1a34cb4935b19b9125fd480c0b1f5f9b0c3c82b`; candidate Root blob: `e4fd0adf91a26e607c037bde2757640c822d6e22`.
- Verified before trials via GitHub recursive tree: **31 files per fixture and exactly one differing file, `AGENTS.md`**. The old `etc/`, `products/`, and obsolete definition markers are absent.
- Both groups contain the same `implementation/quiz.py` with an observable deadline boundary mismatch. The testing SoT describes boundary verification without already prescribing the exact new test case; Stage 3 can legitimately add it.
- The synthetic four-area governance layout is a **controlled test fixture**, not evidence that `1minute-wiki/main` has adopted that governance or completed initialization.
- Source `main` is never a subject. If the agent reads or edits default `main` instead of the explicit trial ref, record a wrong-ref contamination/failure and do not attribute its result to the A/B Root difference.

## Run protocol

1. **Pilot**: run trials 101 and 102 independently first. If the trial format permits comparable observation, continue 103–106. Each numbered branch is allocated to one subject session; never re-use an edited branch for a fresh run.
2. For each trial, start a **new, non-history-inheriting ChatGPT session** with GitHub plugin connected. Keep the same model, thinking setting, ChatGPT Project instructions, plugin permissions, and subject prompts across trials. Avoid putting this evaluation guide, an Upstream candidate link, prior trials, or expected dispatch names into the subject context.
3. Send **Stage 1** from [trial-prompts.md](trial-prompts.md), substituting that trial's exact branch name. Require all repository operations to target this explicit ref rather than the repository default. Do not tell the subject to read a particular `agents.d` file, to dump every file, or to treat SHA-only output as insufficient: those are measured behaviors.
4. In the **same chat**, send Stage 2 and then Stage 3, only after the preceding response ends. Stage 1 and Stage 2 are read-only; Stage 3 authorizes modifications **only within that trial branch**, not `main`, other trials, PR creation/close, or merge.
5. Preserve observable tool-call arguments and **model-visible tool output** at each stage. For `functions.exec` wrappers, distinguish the data a JS helper obtained internally from data actually returned to the AI via `text(...)`. When only filename/SHA/snippet was returned, score the body unread unless another actual full-text delivery is evidenced. A plain statement "read" is insufficient.
6. Grade with [evaluation.md](evaluation.md) **after** the subject run; never feed the rubric or hidden expected target paths to the subject. Observe which instructions were triggered and delivered **before** review assessment or Definition mutation. A reading from an earlier phase can count if complete, same revision, and still genuinely available.
7. Record A/B differences, ties, unexpected behavior and indeterminate cases. No claim of context-compaction robustness unless compaction actually occurred and its effects were observed.

## Critical guardrails

- Branch names are neutral to subjects, but the branch itself is required and may be visible; report that residual exposure. Mask the A/B mapping and candidate intent.
- Do not demand a PR or merge to prove a read behavior. Committing a Stage-3 fix within its own trial branch is sufficient. If the GitHub plugin cannot perform the required branch-scoped write, classify the write phase as tool-limited, and still assess prior reading evidence separately.
- Expected triggered instruction paths belong only to the operator key. An agent's own legitimate discovery of a root dispatch is valid; the operator prompting those paths is not.
- Capture tool calls and outputs immediately, before long continuation or history summarization. If model-visible output is not observable with sufficient fidelity, mark read-completion **indeterminate**, not success.
- No ordinary Consumer deployment, repository initialization, or main-branch adoption is inferred by these mock trial branches.
