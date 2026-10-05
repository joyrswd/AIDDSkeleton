# Project Initialization Instructions

## Scope

- Applies only when dispatched by root `AGENTS.md` because the project initialization state is `Uninitialized` or `Inconsistent`.
- Inherits root governance. Definition-owned initialization mechanics remain governed separately by `definition/AGENTS.md` and its dispatched instructions.
- Loading this file does not itself authorize project-specific initialization, adoption, or implementation. The initialization-job rules below apply only when the user's request otherwise authorizes project-specific repository modification.

## Human-facing Orientation

- When the project is `Uninitialized` and the user has not already supplied a more specific initialization request, begin with a concise read-only orientation before asking project-specific questions or making project-specific changes.
- Explain in plain language what initialization will establish: project purpose/scope, responsibility boundaries and unit/common routing, documentation language, adopted definition/verification/lifecycle foundations, and the initial human-facing project guidance. Summarize the expected repository changes from the applicable initialization rules—including the temporary initialization job, project-specific definition structure, and replacement of the starter `README.md`—without creating a second contract that duplicates the definition-owned file/layout rules.
- Offer two interaction modes when the user has not already selected one:
  - **Guided:** confirm material user-owned decisions progressively, use available evidence, propose defaults when useful, and follow root Decision Requests.
  - **Assumption-led:** the user may explicitly authorize proceeding from supplied information plus reasonable assumptions; minimize advance questions and surface proposed assumptions in the initialization summary before they are adopted.
- A greeting, orientation, or interaction-mode choice alone does not authorize repository modification. Treat a mode choice as interaction preference unless the same user request also clearly authorizes initialization changes.
- Do not ask the user to choose a mode again when their request already clearly selects one.
- For an `Inconsistent` project, explain the detected inconsistency and required reconciliation path rather than presenting it as a clean new-project initialization; interaction mode must not bypass reconciliation or existing authority.

## Initialization Job

- Once an `Uninitialized` or `Inconsistent` project is entering initialization under an authorized project-specific modification request, read and apply `jobs/AGENTS.md`, then create or activate exactly one initialization job under `jobs/` before further project-specific clarification, initialization-summary preparation, or initialization changes. Reuse the same initialization job for the current initialization attempt rather than creating a new job for each clarification or summary revision.
- The initialization job is non-authoritative working control. Retain proportionally the approved basis/request, confirmed user decisions, proposed assumptions separately from decisions, open questions/blockers, initialization-summary state, and enough remaining-work/context to resume coherently.
- Creation and maintenance of that initialization job is the only project-specific repository modification permitted by this file before initialization-summary approval. It does not initialize the project, establish project facts, adopt proposals/assumptions, or grant implementation authority.
- If initialization pauses, is abandoned, or later resumes, apply the ordinary `jobs/` lifecycle and retention rules to the same initialization job.
- The initialization job's purpose ends with initialization. Do not expand it to absorb post-initialization implementation or verification. If already-authorized work remains after the project becomes `Initialized`, reconcile that remaining outcome into separate ordinary `jobs/` control before ending the initialization job when repository-managed continuation is required. Once the project is `Initialized`, do not create or reactivate an initialization job for that completed initialization attempt; reconcile any retained initialization context before that job ends.

## Preparation and Authorization

- Before project-specific repository modification is authorized, initialization orientation and clarification remain read-only and do not create the initialization job. Once initialization changes are authorized, establish the required initialization job before any further project-specific clarification, initialization-summary preparation, or initialization changes.
- Before project-specific changes other than the initialization job, present one initialization summary: verified facts, user decisions, proposed assumptions, open questions, blockers, files/directories to change, target lifecycle state, and work left unstarted.
- When future intent is present, classify it explicitly in the summary using the assumed/decided/open distinction owned by `definition/AGENTS.md` Definition Authority; do not infer one category from another.
- Summary approval authorizes only listed project-specific artifacts/assumptions; protected instruction changes require explicit inclusion.
- After summary approval, preserve the approved future-intent classification during initialization. Current-scope exclusion alone must not reopen decided future intent or settle an assumed or open possibility; reclassification requires an explicit user decision.
- If `README.md` still identifies the repository as AIDD Skeleton or contains template-use guidance, include replacement with project-specific human guidance in the initialization summary; after approval, replace that starter content during initialization.
- If assumption-led initialization from supplied information + reasonable assumptions is explicitly requested together with authorization to initialize, advance discussion may be omitted, but the initialization job and initialization summary are still required before adoption proceeds; report every adopted assumption at completion.
