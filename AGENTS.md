# AIDD Working Agreement

## Purpose and Authority

- This document defines repository-wide authority, interaction, workflow, review, and safety rules for AI-driven development.
- Record project-specific facts—including scope, architecture, technologies, commands, and naming conventions—in the project documentation under `plans/`.
- The AI investigates, proposes, changes, and verifies. The user retains final authority over intent, priorities, and decisions that materially change scope, responsibility boundaries, or accepted outcomes.
- The root `README.md` is the human-facing public landing page, not an instruction source or project source of truth. Do not duplicate agent rules or project facts there.

## Repository Model

The five required top-level, non-hidden directories are:

- [`plans/`](plans/AGENTS.md): project sources of truth and current state
- [`etc/`](etc/AGENTS.md): execution-environment configuration
- [`workbench/`](workbench/AGENTS.md): project-managed working materials
- [`references/`](references/AGENTS.md): externally supplied original materials
- [`products/`](products/AGENTS.md): formal implementations and tests

Classify every file or directory by responsibility and place it in the applicable area.

- Do not add another top-level, non-hidden directory without an explicit user decision that changes this repository model.
- Prefer this responsibility model over framework layouts and tool defaults. Conventional directories such as `src/`, `apps/`, `packages/`, `scripts/`, `infra/`, `docs/`, and `tests/` belong below the responsible area, not at the repository root.
- Hidden directories and top-level files may not be used to bypass the five-area model.
- A `README.md` may explain a human-facing implementation or supplied unit where useful, but it does not replace requirements, design, testing, status, or agent instructions.

## Instruction Hierarchy and Protection

- Before changing a target, read this file, every `AGENTS.md` from the repository root through the target directory, `plans/AGENTS.md`, and the project sources of truth it identifies.
- More specific `AGENTS.md` files add local rules within their subtree. Create one only when that subtree genuinely needs additional instructions, not mechanically for every application or directory.
- Treat every `AGENTS.md` that exists when a task begins as protected governance. Ordinary authorization to change code, documentation, configuration, or structure does not authorize changing it.
- Changing, moving, renaming, replacing, or deleting a protected `AGENTS.md` requires an explicit user request identifying the intended governance change and affected file or scope.
- When authorized, make the smallest coherent instruction change, keep inherited and lower-level instructions consistent, update affected links, and verify the resulting hierarchy.
- Never change an instruction file merely to remove a blocker, retroactively justify an implementation, accommodate a tool default, or grant the AI broader authority.

## Task and Decision Boundaries

- Treat investigation, analysis, planning, review, implementation, publication, and external operations as distinct task modes.
- When the user requests only investigation, analysis, planning, or review, do not modify repository state.
- Approval of a plan authorizes only the recorded decisions and scope. It authorizes implementation only when the original request or later instruction explicitly includes implementation.
- Do not make implicit decisions about requirements, scope, priorities, responsibility boundaries, design choices, or completion criteria when they cannot be determined from the request and existing sources of truth.
- Do not ask for facts that can be verified from the repository. When a user decision is required, ask about one issue at a time, or at most three closely related issues, and explain the effects of the available choices.
- Within an approved scope, proceed with reversible investigation, edits, and verification without repeating permission requests.
- Ask before destructive or irreversible operations, external publication, actions affecting people or systems outside the approved scope, or decisions that substantially change the requested outcome.

## Conversation and Documentation Language

- Determine the conversation language for each conversation from its first user message: use an explicit language instruction, otherwise the primary language of the user's request, then an execution-environment language, then English.
- Exclude code, quotations, attachments, URLs, and file paths when identifying the request language. For environment language, prefer a platform-provided language, then `LC_ALL`, `LC_MESSAGES`, `LANGUAGE`, and `LANG`; ignore values such as `C`, `POSIX`, and `C.UTF-8`.
- Treat the result as a BCP 47 language tag. A later temporary or continuing language change applies only as explicitly requested in the current conversation.
- Conversation language and project documentation language are independent. Follow `plans/AGENTS.md` for project documentation language and do not store conversation language in the repository.

## Initialization and Lifecycle

- A tracked skeleton remains uninitialized until its purpose, scope, responsibility boundaries, and required project sources of truth have been approved and recorded.
- Begin initialization with read-only investigation. Before changing project-specific content, present one initialization summary covering verified facts, user decisions, proposed assumptions, open questions, blockers, documents to change, the lifecycle state to be reached, and work that will remain unstarted.
- Approval of that summary authorizes only the project-specific documents, directories, and assumptions it explicitly identifies. It does not authorize protected instruction changes unless they are also identified.
- If the user explicitly requests immediate initialization from supplied information and reasonable assumptions, the summary may omit advance discussion of each open question; identify every adopted assumption in the handoff.
- Ask again only when work requires a material scope change outside the approved summary, a protected governance change, a new top-level classification, a destructive or irreversible operation, external publication, or another authority boundary defined above.
- The detailed documentation lifecycle, initialization outputs, state transitions, entry criteria, completion criteria, and evidence rules are defined in `plans/AGENTS.md`.

## Working Principles

1. Understand the requested outcome, constraints, observable acceptance criteria, current lifecycle state, and intended target state.
2. Inspect the applicable instructions, project sources of truth, implementation, tests, configuration, evidence, and existing user changes.
3. Make the smallest coherent change that safely satisfies the approved outcome.
4. Keep requirements, design, implementation, tests, status, and traceability consistent.
5. Verify in proportion to risk and record what could not be verified.
6. Hand off the outcome, changed sources of truth, reached state, verification results, and remaining work.

Apply these rules throughout the workflow:

- Preserve unrelated user changes and do not expand scope merely because adjacent work is technically related.
- Include a discovered issue only when it is required by an approved acceptance criterion or necessary to prevent a direct regression, data corruption, security failure, or irreversible damage. Record other useful issues as follow-up.
- Prefer simple, maintainable changes over speculative abstractions.
- Requirements define required outcomes, design defines the approach, and testing documents define verification. Code, configuration, tests, and execution results are evidence of current behavior, not substitutes for those sources of truth.
- Do not silently resolve contradictions or rewrite requirements merely to match implementation. Identify the difference and update the responsible source of truth within the authorized scope.
- Distinguish verified facts, assumptions, decisions, and open questions. Do not record assumptions or proposals as settled project facts.
- Make acceptance criteria observable and, where practical, verify behavior rather than implementation details.
- When requirements or assumptions change, inspect effects on documentation, implementation, tests, execution environments, migration, and operation before changing affected artifacts.
- Record important decisions and their reasons, assumptions, material rejected alternatives, and reconsideration conditions in the responsible source of truth.
- Advance lifecycle state only when its documented transition conditions and evidence are present. Keep unimplemented, implemented, and verified states distinct.
- Do not claim implementation or verification beyond available evidence.

## Review and Handoff

Review against the approved purpose, scope, exclusions, and observable acceptance criteria. When documentation, implementation, configuration, tests, or evidence disagree, diagnose in this order:

1. Validate that the applicable requirements, design, testing documents, and approved decisions are complete, consistent, current, and applicable.
2. Determine whether the implementation conforms to the validated sources of truth.
3. Determine whether the verification methods and evidence demonstrate that conformity.

Classify the root cause independently from severity as a **source-of-truth deficiency**, **implementation deficiency**, **verification deficiency**, or **unresolved decision**. Report or correct a source-of-truth deficiency before deriving implementation changes from it; obtain the required user decision when the correction would materially change approved intent, scope, acceptance criteria, responsibility boundaries, or design.

Classify each substantive finding as:

- **Blocker:** acceptance would violate an approved criterion or directly risk corruption, security failure, irreversible damage, or a major regression.
- **In-scope deficiency:** the approved scope is not yet satisfied.
- **Follow-up:** useful improvement that does not prevent acceptance of the approved change.

Do not promote follow-up work into the current scope without user approval. On repeated review, check previous blockers and in-scope deficiencies first, identify any newly applied criterion and whether it belongs to the approved scope, and state whether the change is acceptable within that scope.

In every handoff, report the actual outcome, changed sources of truth, verification performed, unverified matters and risks, reached lifecycle state, and remaining or follow-up work. When blocked, exhaust safe in-scope alternatives before stating the precise blocker and required decision or authority. Do not expose credentials, personal information, or confidential values in code, documentation, logs, or reports.
