# Project Initialization Instructions

## Scope

- Applies only when dispatched by root `AGENTS.md` because the project initialization state is `Uninitialized` or `Inconsistent`.
- Inherits root governance. Definition-owned initialization mechanics remain governed separately by `definition/AGENTS.md` and its dispatched instructions.
- Loading this file does not itself authorize project-specific initialization, adoption, or implementation. An explicit request to initialize, or a clear Guided/Fast selection after the onboarding explanation below, authorizes only the initialization workflow described here; project-specific changes beyond the initialization job still require initialization-summary approval. A greeting or other conversation opener alone is not modification authorization.

## Human Onboarding

- When initialization is needed and the user has not already chosen how to proceed, explain in plain language that initialization establishes the project's starting definition and human guidance, uses one temporary initialization job to preserve continuity, and requires a summary approval before project-specific changes beyond that job.
- Offer two interaction modes:
  - **Guided**: work through material user-owned project decisions interactively, proposing concise options or defaults when useful, then present the initialization summary for approval.
  - **Fast**: use supplied information, verified repository facts, and reasonable proposed assumptions to prepare the initialization summary with minimal advance discussion; ask only questions needed to avoid an unsafe, invalid, or materially ambiguous initialization.
- A clear Guided/Fast selection starts initialization and authorizes creation/maintenance of the initialization job, but it does not approve the later project-specific changes listed in the initialization summary.
- If the user already explicitly requested immediate, fast, or assumption-driven initialization, treat that as Fast mode and do not ask them to choose again.
- Mode selection changes interaction cadence, not authority, acceptance, or verification requirements.

## Initialization Job

- Once an `Uninitialized` or `Inconsistent` project is entering initialization under an authorized project-specific modification request, read and apply `jobs/AGENTS.md`, then create or activate exactly one initialization job under `jobs/` before further project-specific clarification, initialization-summary preparation, or initialization changes. Reuse the same initialization job for the current initialization attempt rather than creating a new job for each clarification or summary revision.
- The initialization job is non-authoritative working control. Retain proportionally the approved basis/request, confirmed user decisions, proposed assumptions separately from decisions, open questions/blockers, initialization-summary state, and enough remaining-work/context to resume coherently.
- Creation and maintenance of that initialization job is the only project-specific repository modification permitted by this file before initialization-summary approval. It does not initialize the project, establish project facts, adopt proposals/assumptions, or grant implementation authority.
- If initialization pauses, is abandoned, or later resumes, apply the ordinary `jobs/` lifecycle and retention rules to the same initialization job.
- The initialization job's purpose ends with initialization. Do not expand it to absorb post-initialization implementation or verification. If already-authorized work remains after the project becomes `Initialized`, reconcile that remaining outcome into separate ordinary `jobs/` control before ending the initialization job when repository-managed continuation is required. Once the project is `Initialized`, do not create or reactivate an initialization job for that completed initialization attempt; reconcile any retained initialization context before that job ends.

## Preparation and Authorization

- Start read-only only long enough to establish the initialization state and applicable governance, then establish the required initialization job before continuing project-specific clarification or preparation.
- Before project-specific changes other than the initialization job, present one initialization summary: verified facts, user decisions, proposed assumptions, open questions, blockers, files/directories to change, target lifecycle state, and work left unstarted.
- When future intent is present, classify it explicitly in the summary using the assumed/decided/open distinction owned by `definition/AGENTS.md` Definition Authority; do not infer one category from another.
- Summary approval authorizes only listed project-specific artifacts/assumptions; protected instruction changes require explicit inclusion.
- After summary approval, preserve the approved future-intent classification during initialization. Current-scope exclusion alone must not reopen decided future intent or settle an assumed or open possibility; reclassification requires an explicit user decision.
- If `README.md` still identifies the repository as AIDD Skeleton or contains template-use guidance, include replacement with project-specific human guidance in the initialization summary; after approval, replace that starter content during initialization.
- In Guided mode, resolve material user-owned choices progressively and avoid asking repository-verifiable or immaterial questions.
- In Fast mode, prepare the summary from supplied information, verified repository facts, and reasonable proposed assumptions with minimal advance discussion; every assumption remains proposed until summary approval and every adopted assumption is reported at completion.
