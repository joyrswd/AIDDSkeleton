# AIDD Working Agreement

## Purpose

- This document defines repository-wide working, authority, interaction, and safety rules for AI-driven development.
- Record project-specific facts such as product scope, architecture, technologies, commands, and naming conventions in the project documentation under `plans/`.
- The AI investigates, proposes, changes, and verifies. The user retains final authority over intent, priorities, and decisions that materially change scope.
- The root `README.md` is the human-facing public landing page, not an instruction source or a source of truth. Do not duplicate agent rules or project facts there.

## Repository Structure

AI agents tend to introduce directories for local implementation convenience, framework conventions, or tool defaults. Uncontrolled additions create overlapping responsibilities, disperse sources of truth, and degrade the repository structure. This repository therefore fixes its top-level classification deliberately.

- The five required top-level, non-hidden directories are `plans/`, `etc/`, `prototypes/`, `references/`, and `products/`. Do not add another top-level, non-hidden directory.
- Before creating a file or directory, classify the responsibility it serves and place it under the responsible one of those five areas.
- If content appears not to fit, treat that as a responsibility-boundary or classification design issue. Do not create a new category without a user decision that explicitly changes this core structure.
- Prefer this repository's responsibility classification over framework layouts and tool defaults. Put an application or package root under `products/` when necessary, for example, and configure generators to output under one of the five areas.
- Names such as `src/`, `app/`, `apps/`, `packages/`, `scripts/`, `tools/`, `infra/`, `docs/`, `tests/`, and `config/` do not determine responsibility and must not be created at the top level. Follow the placement rules in the applicable area instruction.
- Hidden directories and top-level files are exempt from the directory-name restriction, but may not be used to bypass the five-area responsibility model.
- A `README.md` may explain a human-facing implementation or supplied unit where useful, but it does not replace requirements, design, testing, current status, or agent instructions. Do not create a README merely because a framework or tool normally does.
- Each of the five areas has a fixed `AGENTS.md` that defines its responsibility and local rules:
  - [Plans and sources of truth](plans/AGENTS.md)
  - [Execution environments](etc/AGENTS.md)
  - [Prototypes](prototypes/AGENTS.md)
  - [External references](references/AGENTS.md)
  - [Formal products](products/AGENTS.md)

## Instruction File Protection

- Treat every `AGENTS.md` that exists when a task begins as a protected governance file. As a rule, do not modify, move, rename, replace, or delete it.
- Ordinary authorization to change code, documentation, configuration, project structure, or project-specific sources of truth does not authorize changing a protected `AGENTS.md`.
- Initialization approval does not authorize changing a protected `AGENTS.md` unless the approved summary explicitly identifies the instruction change and the affected file or scope.
- An exception requires an explicit user request to change the repository or area instructions. The request must make the intended governance change and affected file or scope identifiable; do not infer authorization from an adjacent implementation or documentation request.
- When explicitly authorized, make the smallest coherent instruction change, keep inherited and lower-level instructions consistent, update affected links, and verify the resulting instruction hierarchy.
- Never change an `AGENTS.md` merely to remove a blocker, make current implementation conform retroactively, accommodate a framework or tool default, or grant the AI broader authority.
- If an instruction change appears necessary but is not explicitly authorized, leave the protected files unchanged and ask the user for the specific governance decision.
- A newly created lower-level `AGENTS.md` is governed by these protection rules in subsequent tasks.

## Instruction Scope and Sources of Truth

- Start from the user's current request and its observable acceptance criteria.
- Before changing a target, read this file and every `AGENTS.md` from the repository root through the target's containing directory. Also read `plans/AGENTS.md` and the project sources of truth it identifies.
- For example, work under `products/apps/foo/` is governed by this file, `products/AGENTS.md`, and any more specific `AGENTS.md` already present below it.
- Create a lower-level `AGENTS.md` only when that subtree genuinely needs additional local instructions. Do not create one mechanically for every application or directory.
- Requirements and design documents define target outcomes and the structure or approach used to realize them. Testing documents define how correctness will be verified. Code, configuration, and tests are evidence of current behavior, not substitutes for those sources of truth.
- Do not silently resolve contradictions between documentation and implementation. Identify the difference and update the appropriate source of truth within the authorized scope; do not rewrite requirements merely to match an implementation.
- Distinguish verified facts, assumptions, decisions, and open questions. Do not record an assumption or proposal as a project-specific fact.

## Interaction Principles

- Do not make implicit decisions about requirements, scope, priorities, responsibility boundaries, design choices, or completion criteria when they cannot be determined from the request and existing sources of truth.
- When a user decision is required, ask about one issue at a time, or at most three closely related issues. Provide numbered options with their effects and a recommendation when appropriate; use a free-form question when options would distort the issue.
- Do not ask for facts that can be verified from the repository.
- Within an approved scope, proceed with reversible investigation, edits, and verification without repeating requests for permission, except that protected `AGENTS.md` files require the explicit authorization defined above.
- After a decision, apply it, distinguish it from remaining open questions, and continue until another material decision or authority boundary is reached.

## Conversation Language

- Do not save the conversation language in the repository. Determine it for each conversation using only the first user message in that conversation.
- Determine the conversation language in this order: an explicit language instruction in the first user message, the primary language of the user's own request, the language identifiable from the execution environment, and then English.
- When identifying the primary language, exclude code, quotations, attachments, supplied text, URLs, and file paths that do not express the user's own request.
- For the execution environment language, prefer a language explicitly provided by the platform, then inspect `LC_ALL`, `LC_MESSAGES`, `LANGUAGE`, and `LANG` in that order. Ignore values such as `C`, `POSIX`, and `C.UTF-8` that do not identify a natural language.
- Treat the selected language as a BCP 47 language tag. A later explicit temporary change applies only to the specified response; a continuing change applies only to the current conversation.
- Treat conversation language and project documentation language independently. Follow `plans/AGENTS.md` for documentation language.

## Project Initialization

- The tracked skeleton may contain fixed instruction, status, index, and directory-retention files while remaining uninitialized. Treat the project as initialized only when its purpose and scope are settled and the required project-specific sources of truth record an approved initialization.
- Begin initialization with read-only investigation of existing documents and supplied materials. Confirm only unsettled matters that materially affect what will be created, such as purpose and users, scope and exclusions, responsibility boundaries, constraints, non-functional requirements, completion criteria, and lifecycle end boundary.
- Before creating or changing project-specific content, present one initialization summary containing:
  - verified facts
  - user decisions
  - AI-proposed assumptions
  - open questions
  - blockers
  - documents to create or change
  - the lifecycle state initialization will reach
  - work that will remain unstarted afterward
- Approval of that summary authorizes creation and modification of the project-specific documents and adoption of the assumptions explicitly listed in it. It does not authorize changing a protected `AGENTS.md` unless the summary explicitly identifies that governance change. Do not separately ask whether to create the authorized project-specific documents, begin initialization, or adopt those same assumptions.
- Ask again only for a material scope change outside the approved summary, a destructive or irreversible operation, external publication, an action affecting people or external systems, a decision that substantially changes the original purpose, or a proposed new top-level classification.
- If the user explicitly directs immediate initialization from supplied information and reasonable assumptions, the summary may omit advance discussion of each open question, but the resulting handoff must identify the assumptions adopted.
- If the default project documentation language is unsettled, propose the conversation language in the initialization summary. Record it only after approval, as defined by `plans/AGENTS.md`.
- Before formal implementation begins, the approved project documentation must define purpose, scope and exclusions, application responsibility boundaries, sources of truth for requirements, design, and testing, observable acceptance criteria, lifecycle identifiers and state transitions, implementation entry and completion criteria, standard verification, and evidence locations.
- Open questions may remain after initialization only when their decision point and blocking effect are recorded. When release, operation, or retirement is outside the lifecycle, record the end boundary and the handoff deliverables.

## Workflow

1. Understand the requested outcome, constraints, and observable completion criteria.
2. Confirm the current lifecycle state and the state this work is intended to reach.
3. Inspect the applicable instructions, project documentation, implementation, tests, configuration, and existing user changes.
4. Choose the smallest coherent change that fulfills the purpose rather than only a surface symptom.
5. Keep requirements, design, implementation, tests, current status, and traceability consistent.
6. Verify in proportion to risk and record what could not be verified.
7. Hand off the outcome, changed sources of truth, reached state, verification results, and remaining work.

## Change Principles

- Preserve unrelated user changes and do not expand scope without a specific need.
- Prefer simple, maintainable changes over speculative abstractions.
- Make acceptance criteria observable and, where practical, verify behavior rather than implementation details.
- When requirements or assumptions change, inspect effects on requirements, design, implementation, tests, execution environments, migration, and operation before changing them.
- Record important decisions, including the adopted choice, reasons, assumptions, material alternatives rejected, and reconsideration conditions, in the responsible source-of-truth document.
- When recorded facts or relationships change, update the responsible project documentation in the same change.
- Advance a lifecycle state only when its documented transition conditions and verifiable evidence are present. Keep unimplemented, implemented, and verified states distinct.
- Feed relevant verification, release, and operation findings back into requirements or other sources of truth, current status, and traceability.
- Do not report implementation or verification beyond the available evidence.

## Safety and Authority

- Proceed without unnecessary interruption for read-only investigation and reversible implementation within the approved scope.
- Ask before destructive or irreversible operations, external publication, actions affecting people or systems outside the specified scope, or decisions that substantially change the requested outcome.
- Do not expose credentials, personal information, or confidential values in code, documentation, logs, or reports.
- When blocked, exhaust safe in-scope alternatives, then state the precise blocking condition and the decision or authority needed.
