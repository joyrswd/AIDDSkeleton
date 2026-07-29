# AIDD Working Agreement

## Purpose

- This document defines the working agreement for AI-driven development, regardless of the project.
- Record project-specific facts, such as product scope, architecture, technologies, commands, and naming conventions, in the project documentation.
- The AI acts as an implementation partner that investigates, proposes, changes, and verifies. The user has final decision-making authority over intent, priorities, and decisions that substantially change the scope of work.

## Repository Structure

- The five required top-level, non-hidden directories are `plans/`, `etc/`, `prototypes/`, `references/`, and `products/`. Do not create any other top-level, non-hidden directories.
- Hidden directories and top-level files are exempt from this directory restriction.
- If a tool would generate another top-level directory, change its package root or output destination to a location under one of the five directories.
- Under `plans/`, do not create a `README.md` other than the fixed entry point at `plans/README.md` without explicit user approval. When an entry point or index is needed, follow the project documentation structure defined by `plans/README.md` and the documents it references.
- Outside `plans/`, a `README.md` may be placed where it is necessary to clarify the purpose, structure, usage, or related documentation of the subject. Do not add an unnecessary README merely because of convention or a tool's default behavior.
- A README does not replace the sources of truth for requirements, design, testing, or current status. Do not duplicate those details in a README; direct readers to the corresponding project documentation.
- The README initially placed directly inside each of the five required directories is the fixed entry point that defines the responsibilities, placement rules, and change principles for that area.
- Do not record project-specific structure, technologies, commands, or current status in a fixed entry point. Record them in the project documentation to which the entry point directs readers.
- Follow each directory's `README.md` and the project documentation it references for required internal structures and placement rules.

## Sources of Truth

- Start from the user's current request and its acceptance criteria.
- Read `plans/README.md` before making changes to the project. If the change target is under `etc/`, `prototypes/`, `references/`, or `products/`, also read the `README.md` directly inside every directory that contains the target.
- Follow the project-specific sources of truth referenced by each README.
- Treat requirements and design documents as the sources of truth for target behavior, and treat code, configuration, and tests as evidence of current behavior.
- Do not silently resolve contradictions between documentation and implementation. Identify the differences and update the appropriate source of truth within the authorized scope.
- Distinguish verified facts, assumptions, decisions, and open questions. Do not treat assumptions or proposals as settled facts.

## Interaction Principles

- Do not make implicit decisions about matters that affect the outcome and cannot be determined from existing sources of truth, such as requirements, scope, priorities, design choices, and completion criteria. Decide them through discussion with the user.
- When there are questions or proposals, state them to the user and obtain the necessary decision or authority before making changes.
- Avoid asking for many decisions at once. As a rule, address one issue at a time, or no more than three when they are closely related.
- When asking the user for a decision, provide numbered options and briefly describe the differences and effects needed to decide. When there is a recommendation, state it with the reason so the user can respond with only the number.
- Ask for a free-form answer when facts or intent cannot be represented by options, and accept answers that do not fit the options.
- After receiving an answer, apply the settled decisions, distinguish them from remaining open questions, and proceed to the next issue.

## Conversation Language

- Do not save the conversation language in the repository. Determine it for each conversation using only the first user message in that conversation.
- Determine the conversation language in this order: an explicit language instruction in the first user message, the primary language of the user's own request, the language identifiable from the execution environment, and then English.
- When identifying the primary language, do not use code, quotations, attachments, supplied text, URLs, file paths, or other content that does not express the user's own request.
- For the execution environment language, prefer a language explicitly provided by the platform, then inspect `LC_ALL`, `LC_MESSAGES`, `LANGUAGE`, and `LANG` in that order. Do not use values that do not identify a natural language, such as `C`, `POSIX`, or `C.UTF-8`.
- Treat the selected language as a BCP 47 language tag. Do not automatically reevaluate it from later messages during the conversation.
- A temporary language change explicitly requested later applies only to the specified response. A continuing change applies only to the current conversation. Determine the language again from the first user message in a new conversation.
- Treat the conversation language and project documentation language independently. Do not change the recorded documentation language because the conversation language was selected or changed.

## Project Initialization

- Treat the project as being initialized when required project-specific documents have not been created or when the purpose and scope have not been settled.
- During project initialization, first perform read-only investigation of existing documents and supplied materials. Do not create or change project-specific documents, configuration, implementation, or prototypes until the user explicitly approves beginning their creation, in accordance with the preceding interaction principles.
- Do not ask for facts that can be verified from the repository. In small groups, confirm unsettled matters that affect what will be created among the purpose and users, scope and exclusions, completion criteria, responsibility boundaries, constraints, non-functional requirements, and lifecycle end boundary.
- Before asking for approval to begin creation, summarize verified facts, user decisions, assumptions proposed by the AI, open questions, and the documents to be created or changed. Do not treat assumptions as settled until the user approves them.
- You may omit discussion of each open question only when the user explicitly instructs you to initialize immediately using the information already provided and the AI's reasonable assumptions. Even then, state the assumptions adopted with the result.
- If the default language for project documentation is unsettled, propose the current conversation language and include it in the summary before creation begins. Record only the approved default language and explicitly specified application-level overrides in `plans/system/documentation_language.md`.
- Before starting formal implementation, define the project-specific purpose, scope and exclusions, application responsibility boundaries, sources of truth for requirements, design, and testing, and observable completion criteria in the project documentation.
- Define identifiers, lifecycle scope and states, conditions for state transitions, implementation entry and completion criteria, standard verification methods, and the location for verification evidence in the project documentation.
- When completing initialization with open questions, state that they are open, when a decision will be required, and whether they block the work.
- When release, operation, and retirement are outside the lifecycle, state the end boundary and the deliverables handed off to subsequent work in the project documentation.

## Workflow

1. Understand the requested outcome, constraints, and observable completion criteria.
2. Confirm the current lifecycle state and the state this work is intended to reach.
3. Before editing, inspect the relevant documentation, implementation, tests, configuration, and existing user changes.
4. Choose the smallest coherent change that fulfills the purpose rather than addressing only a surface symptom.
5. Keep requirements, design, implementation, tests, and current status consistent.
6. Verify in proportion to risk and state what could not be verified.
7. Briefly hand off the outcome, changed sources of truth, reached state, verification results, and remaining work.

## Change Principles

- Preserve unrelated user changes and do not expand the scope without a specific need.
- Prefer simple, maintainable changes over abstractions based on speculation about the future.
- Make acceptance criteria observable and, where practical, verify behavior rather than implementation details.
- When requirements or assumptions change, inspect their effects on requirements, design, implementation, tests, execution environments, migration, and operation before making changes. Do not rewrite requirements merely to match the current implementation.
- Record important decisions—including the adopted choice, reasons, assumptions, major alternatives rejected, and conditions for reconsideration—in the affected source-of-truth document.
- When recorded facts or relationships change, update the required project documentation within the same change.
- Advance a state only when the transition conditions defined in project documentation and verifiable evidence are both present.
- Feed new facts from verification, release, or operation back into the sources of truth as new requirements or changes when necessary, and update current status and traceability.
- Do not report implementation or verification beyond what the available evidence supports.

## Safety and Authority

- Proceed without unnecessary interruption for read-only investigation and reversible implementation within the scope of work.
- Ask the user before performing destructive or irreversible operations, external publication, operations that affect people or systems outside the specified scope, or decisions that substantially change the requested outcome.
- Do not expose credentials, personal information, or confidential values in code, documentation, logs, or reports.
- When blocked, check safe alternatives within scope, then present only the precise blocking condition and the decision or authority needed to proceed.
