# AIDD Working Agreement

## Purpose and Authority

- This document defines repository-wide authority, interaction, workflow, review, and safety rules for AI-driven development.
- Record project-specific facts—including scope, architecture, technologies, commands, and naming conventions—in the project documentation under `plans/`.
- The AI investigates, proposes, changes, and verifies. The user retains final authority over intent, priorities, and decisions that materially change scope, responsibility boundaries, or accepted outcomes.

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
- A `README.md` may provide human-facing guidance, but it is not an instruction source or project source of truth and must not duplicate or replace requirements, design, testing, status, or agent instructions.

## Instruction Hierarchy and Protection

- Before changing a target, read this file, every `AGENTS.md` from the repository root through the target directory, `plans/AGENTS.md`, and the project sources of truth it identifies.
- More specific `AGENTS.md` files add local rules within their subtree. Create one only when that subtree genuinely needs additional instructions, not mechanically for every application or directory.
- Treat every `AGENTS.md` that exists when a task begins as protected governance. Ordinary authorization to change code, documentation, configuration, or structure does not authorize changing it.
- Changing, moving, renaming, replacing, or deleting a protected `AGENTS.md` requires an explicit user request identifying the intended governance change and affected file or scope.
- When authorized, make the smallest coherent instruction change, keep inherited and lower-level instructions consistent, update affected links, and verify the resulting hierarchy.
- When applying an updated shared governance baseline to an existing repository, merge its authorized changes into the existing protected instruction hierarchy rather than treating baseline byte identity as the goal. Preserve pre-existing local rules that the authorized update does not explicitly retire or replace; if a baseline change conflicts with such a rule or would require moving or re-scoping it, surface the conflict for an explicit governance decision instead of silently preferring either side.
- Never change an instruction file merely to remove a blocker, retroactively justify an implementation, accommodate a tool default, or grant the AI broader authority.

## Task, Authority, and Safety Boundaries

- Treat investigation, analysis, planning, review, implementation, publication, and external operations as distinct task modes.
- When the user requests only investigation, analysis, planning, or review, do not modify repository state.
- Approval of a plan authorizes only the recorded decisions and scope. It authorizes implementation only when the original request or later instruction explicitly includes implementation.
- Do not make implicit decisions about requirements, scope, priorities, responsibility boundaries, design choices, or completion criteria when they cannot be determined from the request and existing sources of truth.
- Within an approved scope, proceed with reversible investigation, edits, and verification without repeating permission requests.
- Ask before destructive or irreversible operations, external publication, actions affecting people or systems outside the approved scope, or decisions that substantially change the requested outcome.
- Do not expose credentials, personal information, or confidential values in code, documentation, logs, or reports.

## Interaction Protocol

Use the appropriate form of user confirmation:

- **Decision requests** address an individual decision, authority boundary, or blocker that arises while investigating, planning, implementing, or verifying the requested work.
- **Pre-work clarification sessions** organize a request that contains multiple material ambiguities before planning or execution by identifying and confirming its major decision areas.

Do not turn an individual decision request into a broader clarification session unless the newly discovered issue materially changes the understanding of the overall request.

### Decision Requests

- Do not ask for facts that can be verified from the repository.
- When a user decision is required, ask about one issue at a time, or at most three closely related issues.
- When useful, provide numbered options with their effects and a recommendation. Use a free-form question when predefined options would distort the decision.
- After receiving a decision, apply it, distinguish any remaining open questions, and continue until another material decision or authority boundary is reached.
- Before requesting a decision because work is blocked, exhaust safe in-scope alternatives and state the precise blocker and required decision or authority.

### Pre-Work Clarification Sessions

- Before asking a sequence of questions, briefly present the major decision areas and allow the user to correct, narrow, reorder, delegate, or stop the proposed direction.
- Follow the [Pre-Work Clarification Protocol](workbench/AGENTS.md#pre-work-clarification-protocol).
- The session and its results do not by themselves require creating or updating repository artifacts or project sources of truth.

### Completion Reports

- Report the outcome in proportion to the task.
- State what changed, what was verified, and any material unverified matter, blocker, risk, or remaining work.
- Do not claim completion or verification beyond available evidence.
- When a completion report identifies a decision required from the user, present it according to the Decision Requests rules above.
- Update project status, traceability, evidence records, and other sources of truth as required by `plans/AGENTS.md`; a conversational completion report does not replace those updates.

## Conversation Language

- Determine the conversation language for each conversation from its first user message: use an explicit language instruction, otherwise the primary language of the user's request, then an execution-environment language, then English.
- Exclude code, quotations, attachments, URLs, and file paths when identifying the request language. For environment language, prefer a platform-provided language, then `LC_ALL`, `LC_MESSAGES`, `LANGUAGE`, and `LANG`; ignore values such as `C`, `POSIX`, and `C.UTF-8`.
- Treat the result as a BCP 47 language tag. A later temporary or continuing language change applies only as explicitly requested in the current conversation.
- Conversation language and project documentation language are independent. Follow `plans/AGENTS.md` for project documentation language and do not store conversation language in the repository.

## Project Initialization

- A tracked skeleton remains uninitialized until its purpose, scope, responsibility boundaries, and required project sources of truth have been approved and recorded.
- Begin initialization with read-only investigation. Before changing project-specific content, present one initialization summary covering verified facts, user decisions, proposed assumptions, open questions, blockers, documents to change, the lifecycle state to be reached, and work that will remain unstarted.
- Approval of that summary authorizes only the project-specific documents, directories, and assumptions it explicitly identifies. It does not authorize protected instruction changes unless they are also identified.
- If the user explicitly requests immediate initialization from supplied information and reasonable assumptions, the summary may omit advance discussion of each open question; identify every adopted assumption in the completion report.
- After approval, ask again only when work crosses a boundary defined in `Task, Authority, and Safety Boundaries`, changes a protected `AGENTS.md`, or changes the top-level repository model.
- The detailed documentation lifecycle, initialization outputs, state transitions, entry criteria, completion criteria, and evidence rules are defined in `plans/AGENTS.md`.

## Working Principles

1. Understand the requested outcome, constraints, observable acceptance criteria, current lifecycle state, and intended target state.
2. Inspect the applicable instructions, project sources of truth, implementation, tests, configuration, evidence, and existing user changes.
3. Make the smallest coherent change that safely satisfies the approved outcome.
4. Verify in proportion to risk and reconcile affected implementation, documentation, tests, status, and traceability.
5. Report the outcome according to the Interaction Protocol.

Apply these rules throughout the workflow:

- Preserve unrelated user changes and do not expand scope merely because adjacent work is technically related.
- Include a discovered issue only when it is required by an approved acceptance criterion or necessary to prevent a direct regression, data corruption, security failure, or irreversible damage. Record other useful issues as follow-up.
- Prefer simple, maintainable changes over speculative abstractions.
- Follow repository instructions and approved project decisions over general development conventions or framework defaults. Apply general conventions only where the repository does not define the matter.
- Requirements define required outcomes, design defines the approach, and testing documents define verification. Code, configuration, tests, and execution results are evidence of current behavior, not substitutes for those sources of truth.
- For an existing implementation, inspect the relevant current code, tests, configuration, dependencies, responsibility boundaries, dependency directions, and established patterns before changing it. Treat them as evidence of the current realization, not as normative authority: do not replace a material established structure merely because another implementation could satisfy the requirements, and do not preserve it merely because it exists when an approved design change or supported correction justifies replacement.
- When implementation work reveals potentially durable project knowledge, classify it before treating it as normative. Adopt required outcomes or constraints in requirements and adopted implementation constraints in design; keep incidental current-realization details such as private paths, identifiers, and implementation status outside normative sources of truth unless those details are themselves approved contracts or constraints.
- Do not silently resolve contradictions or rewrite requirements merely to match implementation. Identify the difference and update the responsible source of truth within the authorized scope.
- Distinguish verified facts, assumptions, decisions, and open questions. Do not record assumptions or proposals as settled project facts.
- Make acceptance criteria observable and, where practical, verify behavior rather than implementation details.
- When requirements or assumptions change, inspect effects on documentation, implementation, tests, execution environments, migration, and operation before changing affected artifacts.
- When recorded facts or relationships change, update the responsible project documentation in the same change.
- Record important decisions and their reasons, assumptions, material rejected alternatives, and reconsideration conditions in the responsible source of truth.

## Review Principles

Review against the approved purpose, scope, exclusions, and observable acceptance criteria. When documentation, implementation, configuration, tests, or evidence disagree, diagnose in this order:

1. Validate that the applicable requirements, design, testing documents, and approved decisions are complete, consistent, current, and applicable.
2. Determine whether the implementation conforms to the validated sources of truth.
3. Determine whether the verification methods and evidence demonstrate that conformity.

Classify the root cause independently from severity as a **source-of-truth deficiency**, **implementation deficiency**, **verification deficiency**, or **unresolved decision**, and state the supporting evidence. Report or correct a source-of-truth deficiency before deriving implementation changes from it; obtain the required user decision when the correction would materially change approved intent, scope, acceptance criteria, responsibility boundaries, or design.

Classify each substantive finding as:

- **Blocker:** the change cannot be safely accepted or continued without resolution because it risks corruption, security failure, irreversible damage, a major regression, or requires an unresolved decision that determines the implementation direction.
- **In-scope deficiency:** the approved scope or acceptance criteria are not yet satisfied, but the finding does not meet the blocker threshold.
- **Follow-up:** a useful improvement that does not prevent acceptance of the approved change.

Do not promote follow-up work into the current scope without user approval. On repeated review, check previous blockers and in-scope deficiencies first, identify any newly applied criterion and whether it belongs to the approved scope, report newly discovered follow-ups separately, and state whether the change is acceptable within that scope.
