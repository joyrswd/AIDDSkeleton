# AIDD Plans and Sources of Truth Instructions

This document defines the documentation structure and source-of-truth management instructions used regardless of the project.
Record project-specific facts—including purpose, structure, identifiers, commands, and technical constraints—in the project documentation referenced from this document.

This file applies to `plans/` and all descendants. Do not place formal code, runtime configuration, project-managed drafts or experiments, or unchanged external source material here; use `products/`, `etc/`, `workbench/`, or `references/`, respectively.

## Start Here

First determine the documentation lifecycle state:

- In the uninitialized skeleton, `CURRENT_STATUS.md`, `GLOSSARY.md`, and `TRACEABILITY.md` exist as zero-byte files, while `system/system_index.md` and `system/documentation_language.md` do not exist.
- After initialization is completed, all five files exist and contain project-specific content written in the approved documentation language.
- Any mixture of those states is inconsistent. Do not infer project facts or continue formal work until the responsible files and current status are reconciled with approved evidence.

When initialized, read `CURRENT_STATUS.md`, `system/system_index.md`, `system/documentation_language.md`, `GLOSSARY.md`, and `TRACEABILITY.md` in that order, then follow the indexes applicable to the target.

## Required Structure

The clone-ready skeleton is:

```text
plans/
├── AGENTS.md
├── CURRENT_STATUS.md
├── GLOSSARY.md
├── TRACEABILITY.md
├── system/
│   └── .gitkeep
└── apps/
    └── .gitkeep
```

- `plans/system/` and `plans/apps/` are required.
- The three zero-byte cross-cutting files and the two `.gitkeep` files represent the uninitialized skeleton; their existence does not mean that project-specific facts have been approved.
- `plans/apps/.gitkeep` retains the empty application-documentation container in Git. Remove it when tracked application content makes it unnecessary.
- `plans/system/.gitkeep` retains the empty system-documentation container in Git. Remove it when tracked system documents makes it unnecessary.
- Keep `CURRENT_STATUS.md`, `GLOSSARY.md`, and `TRACEABILITY.md` empty until initialization is approved and the documentation language is settled.
- Do not create `system_index.md` or `documentation_language.md` before initialization approval. Their absence is intentional in the uninitialized skeleton.
- Project-specific system documents are created during initialization only within the scope of an approved initialization summary.
- `plans/apps/<app>/` does not exist until the application name and responsibility are approved. Do not create a literal `<app>` directory or invent a temporary application name.
- Do not create a `README.md` under `plans/`. Use fixed indexes for navigation and `AGENTS.md` for agent instructions.

For each application handled by an initialized project, create:

```text
plans/apps/<app>/
├── <app>_index.md
├── <app>_traceability.md
├── requirements/
│   └── <app>_requirements_index.md
├── design/
│   └── <app>_design_index.md
└── testing/
    └── <app>_testing_index.md
```

This is the required application structure after an application has been approved, not a claim that an application exists in the uninitialized skeleton.

- Use the application name defined by the approved project documentation for `<app>`.
- During approved initialization, create `system/documentation_language.md` and `system/system_index.md`, remove `system/.gitkeep`, and populate the three cross-cutting files in the approved documentation language within the same coherent change.
- `system_index.md` is the fixed entry point that records the system overview and responsibility boundaries, the documents below it and the questions they answer, and the recommended reading order. Do not record details of system-wide requirements, design, rules, or procedures in the index; record them in individual documents.
- `documentation_language.md` is the source of truth for the approved default project documentation language and explicitly specified application-level overrides.
- `<app>_index.md` is the fixed entry point that records an application overview, its responsibility boundaries, the recommended reading order, and links to the three category indexes and application traceability. Do not duplicate lists of individual documents in it.
- `<app>_traceability.md` records the current relationships among that application's approved requirements, design, implementation units, verification, and completion evidence.
- Each category index is the fixed entry point that records the documents below it, the questions they answer, and their recommended reading order. Do not record details of requirements, design, tests, or verification evidence in an index.
- Record purpose, requirements, structure, constraints, and development or operational methods that span multiple applications in `plans/system/`.
- Organize individual documents directly under `plans/system/` using the one-purpose-per-document principle and units and file names appropriate to the question they address and the event that requires their update. Consolidating all common rules into one fixed file is not required.
- When adding, renaming, moving, or deleting an individual document under `plans/system/`, update the guidance and recommended reading order in `system_index.md` within the same change.

## Document Classification

| Location | Question answered |
|---|---|
| `plans/system/system_index.md` | What are the system overview and responsibility boundaries, documentation structure, and recommended reading order? |
| `plans/system/documentation_language.md` | Which languages are used for project documentation and each application's documentation? |
| Individual documents under `plans/system/` | What are the purpose, requirements, structure, constraints, and development or operational methods that span multiple applications? |
| `plans/apps/<app>/<app>_index.md` | What are the application's overview, responsibility boundaries, recommended reading order, and category entry points? |
| `plans/apps/<app>/<app>_traceability.md` | How do the application's approved requirements, design, implementation units, verification, and completion evidence relate in the current state? |
| `plans/apps/<app>/*/<app>_*_index.md` | Which documents are in the category, what do they answer, and in what order should they be read? |
| `plans/apps/<app>/requirements/` | What must the application satisfy? |
| `plans/apps/<app>/design/` | What structure and approach will the application use to satisfy its requirements? |
| `plans/apps/<app>/testing/` | How will the application's correctness be verified? |

Place application-specific execution and diagnostic procedures directly under `plans/apps/<app>/` and reference them from `<app>_index.md`.
Place indexes for documents that span multiple applications and project-specific conventions in `plans/system/`.
Application test code belongs with its implementation under `products/`; a general `docs/` directory is classified here when it is project-managed documentation and under `references/` when it is supplied original material.

## Documentation Language

- The repository-root `AGENTS.md` is the source of truth for determining the conversation language, which is independent of the project documentation language.
- During initialization, propose the default project documentation language in the approval summary. After approval, create `plans/system/documentation_language.md` in the approved language and record the default and application-level overrides as BCP 47 language tags. Do not create a separate machine-readable file containing the same setting.
- Use the default language for system documents and documents spanning multiple applications. Use an explicitly specified override for an application's documents; otherwise, inherit the default language.
- Override an application's language only when the user explicitly specifies it. Do not infer a change from the language of a request, code, supplied material, or similar content.
- Even when the conversation language differs from the documentation language, use the language selected for the conversation in the conversation and the recorded documentation language when creating or updating documents.
- Change the documentation language only in response to an explicit user request. Do not implicitly decide between translating existing documents and applying the change only to documents created or updated afterward.
- Do not translate or modify externally supplied documents or originals under `references/` because of the documentation language setting.
- When no default is approved, leave `documentation_language.md` absent and the three cross-cutting files empty; do not infer a language for project-specific documentation.
- When creating `documentation_language.md`, create `system_index.md` in the same change. When changing it, update the guidance in `system_index.md` within the same change.
- Do not delete either fixed system document independently. Returning to the uninitialized skeleton requires an explicit user-approved lifecycle reset that deletes both fixed system documents, empties the three cross-cutting files, restores `system/.gitkeep`, and verifies the uninitialized state in the same coherent change.

Formal programs that display, verify, or generate documentation belong in their owning `products/apps/<app>/` or in `products/system/` when shared. Their execution-environment configuration belongs under `etc/`.

Place externally supplied documents, data, and original source material that should generally remain unchanged under `references/` at the project root. Reflect requirements, design details, and decisions settled from those materials in the corresponding project documentation.

Place project-managed drafts, investigations, prototypes, implementation plans, and implementation handoffs under `workbench/` while they remain working materials. Reflect any adopted requirements, design details, testing decisions, procedures, or project facts in the corresponding source-of-truth document under `plans/`; a workbench artifact does not become authoritative merely because it is detailed or used during implementation.

## Required Cross-Cutting Documents

Manage only the following four non-hidden files directly under `plans/`.

| Document | Role | Primary update trigger |
|---|---|---|
| `AGENTS.md` | Protected fixed local instructions for these conventions | Only when the user explicitly authorizes the governance change as defined in the repository-root `AGENTS.md` |
| `CURRENT_STATUS.md` | Current lifecycle state, verification state, known limitations, and next work | When the state, verification results, limitations, or priority work changes |
| `GLOSSARY.md` | Terms, abbreviations, and state expressions shared across documents | When adding a shared term or changing its meaning |
| `TRACEABILITY.md` | System-wide and cross-application traceability summary and index | When a cross-application relationship, application traceability location, or summarized state changes |

Before initialization approval, keep all three files at zero bytes so that no language or project-specific fact is implied.
After initialization, use the approved documentation language in all three files.
In `CURRENT_STATUS.md`, distinguish unimplemented, implemented, and verified work. Do not record speculation as current status.
Do not turn `GLOSSARY.md` into a dictionary of general terms; use it for terms whose meanings need to be shared across documents.
In `TRACEABILITY.md`, record only system-wide relationships, cross-application relationships, links to each application's traceability document, and a concise summary of unresolved or unverified relationships. Do not duplicate application-level relationship details there.
For each approved application, keep detailed current traceability in `plans/apps/<app>/<app>_traceability.md` and link it from both `TRACEABILITY.md` and `<app>_index.md`.
Trace at the level of independently approved requirements or observable acceptance criteria and the implementation units and verification evidence needed to judge them. Do not trace every source file, class, function, or code line unless the project documentation explicitly requires that finer granularity.
Do not append historical verification runs or superseded relationships indefinitely. Keep current effective relationships in traceability documents and retain historical evidence in the project-defined evidence location.
Do not record unsettled relationships as settled or invent placeholder identifiers. Keep documents, implementations, and verification results that support the current state traceable.

## Initialization and Lifecycle

- Generate project-specific documents only from content approved through the single initialization-summary flow defined in the repository-root `AGENTS.md`. Approval of that summary is sufficient for the documents, directories, and assumptions explicitly listed there; do not request the same permission again.
- Do not record proposals or unapproved assumptions from the discussion as sources of truth.
- During project initialization, define the purpose, scope and exclusions, application responsibility boundaries, default documentation language and explicit application-level overrides, sources of truth for requirements, design, and testing, and open questions.
- Initialization must create `documentation_language.md` and `system_index.md` and populate `CURRENT_STATUS.md`, `GLOSSARY.md`, and `TRACEABILITY.md` in the approved documentation language. Do not leave the repository in a partially transitioned mixture of initialized and uninitialized files.
- Each project must define the end boundary of the lifecycle it handles and the transition conditions for each state. When release, operation, and retirement are included, also define their completion criteria and where feedback is incorporated.
- Implementation entry criteria must include at least the corresponding requirements and observable acceptance criteria, responsibility boundaries and implementation approach, verification methods, and the absence of open questions that block the work.
- Completion criteria must include at least implementation and configuration, required verification, consistency with requirements, design, and tests, and updates to current status and traceability.
- Record whether security, privacy, accessibility, performance, availability, monitoring, data retention, recovery, and licensing apply to the project, along with the reason for each decision.
- Record the verification methods used to advance a state, their results, and unverified matters in the location defined by the project documentation.

## Source-of-Truth Management

- Follow the one-purpose-per-document principle and do not maintain the same details in multiple locations.
- Requirements describe outcomes that must be satisfied, design describes how to realize them, and tests describe how correctness will be verified.
- Distinguish current, target, assumed, decided, and open states. Do not treat open matters as settled requirements.
- Make requirement completion criteria observable. Split requirements that cannot be implemented, verified, and judged complete together.
- Guide readers from `system_index.md` to individual system documents in the recommended order. Do not leave individual documents unindexed.
- Guide readers from `<app>_index.md` to category indexes and from category indexes to individual documents in the recommended order. Do not maintain the same list of individual documents in multiple indexes.
- When documents, implementation, and tests disagree, identify the difference and update the appropriate source of truth. Do not rewrite requirements merely to match implementation.
- When documentation changes, run the verification defined by project-specific conventions.
- Reflect adopted facts from `references/` and settled findings or decisions from `workbench/` in the appropriate source-of-truth document; neither input is itself the adoption record.

## Document Splitting

- This section applies to project-specific source-of-truth documents and their indexes after initialization. It does not require an `AGENTS.md` to be split.
- The `AGENTS.md` hierarchy follows responsibility boundaries and the local-instruction rules in the repository-root `AGENTS.md`, not document length. Do not create a lower-level `AGENTS.md` merely to reduce the length of an inherited instruction file.
- Reorganizing a protected `AGENTS.md` requires the explicit user authorization defined by the repository-root instruction. Keep each retained `AGENTS.md` a coherent entry point for its scope.
- Do not split documents mechanically by line count alone. Organize them into units with coherent functional areas, questions answered, readers, update triggers, and lifecycles.
- Split a document when it contains content from different document categories, content with independent readers or update triggers, or both currently effective content and historical decisions or evidence.
- Review whether to split a document during a change when any of the following applies:
  - It has 150 or more lines.
  - It contains 12 or more independently referenced identifiers for requirements, design, tests, decisions, or similar items.
  - It covers three or more functional areas that change independently.
- As a rule, split a document that exceeds 250 lines or 20 independently referenced identifiers. When it is not split, record the reason and reconsideration condition in the corresponding system or application index.
- Keep `system_index.md`, `<app>_index.md`, the three category indexes, and the root `TRACEABILITY.md` as single fixed entry points; do not split these entry points themselves. Move application-level traceability details from the root `TRACEABILITY.md` to the corresponding `<app>_traceability.md` rather than growing the root file.
- When an application's traceability document reaches the general splitting thresholds, split its details by coherent functional area under `plans/apps/<app>/`, retain `<app>_traceability.md` as the application-level entry point, and index the detail documents from it.
- When splitting, preserve existing identifiers and update indexes, document links, and traceability within the same change. Even when separating an overview from details, do not duplicate the same details in multiple documents.
- Distinguish documents that show current verification status from historical evidence such as test results. Do not continuously expand a current-status or traceability document merely to append history.

## Verification and Structural Changes

- Validate changed Markdown links, required fixed files, index coverage, identifiers, and traceability using the project-defined checks when available.
- Validate the documentation lifecycle atomically:
  - uninitialized: the three cross-cutting files exist at zero bytes, both system documents are absent, and both retention markers exist
  - initialized: both system documents exist, the three cross-cutting files contain approved-language content, `system/.gitkeep` is absent, and `apps/.gitkeep` remains only while no tracked application documentation exists
  - any other combination: inconsistent and requiring reconciliation
- Verify that project-specific statements are supported by approval or evidence and that no open matter is presented as settled.
- Do not add a directory or document category when the existing classifications can represent the content.
- Before creating a new directory under `plans/`, explain why it is needed and its effect on existing classifications, and obtain user approval. An initialization or change summary that explicitly includes it provides that approval; do not ask again.
- Before moving or deleting documents, inspect inbound links, indexes, current status, traceability, and evidence-retention needs. Update all affected references in the same change.
