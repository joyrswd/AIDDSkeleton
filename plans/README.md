# AIDD Plans and Sources of Truth Conventions

This document defines the documentation structure and source-of-truth management conventions used regardless of the project.
Record project-specific facts—including purpose, structure, identifiers, commands, and technical constraints—in the project documentation referenced from this document.

## Start Here

1. [Current Implementation Status](CURRENT_STATUS.md)
2. [Glossary](GLOSSARY.md)
3. [Traceability](TRACEABILITY.md)

## Required Structure

```text
plans/
├── README.md
├── CURRENT_STATUS.md
├── GLOSSARY.md
├── TRACEABILITY.md
├── system/
│   ├── documentation_language.md
│   ├── system_index.md
│   └── <system_document>.md
├── apps/
│   └── <app>/
│       ├── requirements/
│       │   └── <app>_requirements_index.md
│       ├── design/
│       │   └── <app>_design_index.md
│       ├── testing/
│       │   └── <app>_testing_index.md
│       └── <app>_index.md
```

- `plans/system/` and `plans/apps/` are required.
- `plans/README.md` is the only README that may be created under `plans/` without explicit user approval. Before creating another `README.md` under `plans/`, show its purpose and location and obtain explicit user approval.
- `system_index.md` and `documentation_language.md` must exist directly under `plans/system/`.
- For each application handled by the project, create `plans/apps/<app>/` with `requirements/`, `design/`, `testing/`, and `<app>_index.md` directly beneath it.
- `requirements/`, `design/`, and `testing/` must respectively contain `<app>_requirements_index.md`, `<app>_design_index.md`, and `<app>_testing_index.md`.
- `<app>` is a placeholder. Use the application name defined by the project documentation for actual directories.
- `system_index.md` is the fixed entry point that records the system overview and responsibility boundaries, the documents below it and the questions they answer, and the recommended reading order. Do not record details of system-wide requirements, design, rules, or procedures in the index; record them in individual documents.
- `documentation_language.md` is the source of truth for the default project documentation language and explicitly specified application-level overrides.
- `<app>_index.md` is the fixed entry point that records an application overview, its responsibility boundaries, the recommended reading order, and links to the three category indexes. Do not duplicate lists of individual documents in it.
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
| `plans/apps/<app>/*/<app>_*_index.md` | Which documents are in the category, what do they answer, and in what order should they be read? |
| `plans/apps/<app>/requirements/` | What must the application satisfy? |
| `plans/apps/<app>/design/` | What structure and approach will the application use to satisfy its requirements? |
| `plans/apps/<app>/testing/` | How will the application's correctness be verified? |

Place application-specific execution and diagnostic procedures directly under `plans/apps/<app>/` and reference them from `<app>_index.md`.
Place indexes for documents that span multiple applications and project-specific conventions in `plans/system/`.

## Documentation Language

- `AGENTS.md` is the source of truth for determining the conversation language, which is independent of the project documentation language.
- Record the default project documentation language and application-level overrides as BCP 47 language tags in `plans/system/documentation_language.md`. Do not create a separate machine-readable file containing the same setting.
- Use the default language for system documents and documents spanning multiple applications. Use an explicitly specified override for an application's documents; otherwise, inherit the default language.
- Override an application's language only when the user explicitly specifies it. Do not infer a change from the language of a request, code, supplied material, or similar content.
- Even when the conversation language differs from the documentation language, use the language selected for the conversation in the conversation and the recorded documentation language when creating or updating documents.
- Change the documentation language only in response to an explicit user request. Do not implicitly decide between translating existing documents and applying the change only to documents created or updated afterward.
- Do not translate or modify externally supplied documents or originals under `references/` because of the documentation language setting.
- When creating, changing, or deleting `documentation_language.md`, update the guidance in `system_index.md` within the same change.

Place permanent files that support the display, verification, or generation of documentation under `etc/` at the project root.

Place externally supplied documents, data, and original source material that should generally remain unchanged under `references/` at the project root. Reflect requirements, design details, and decisions settled from those materials in the corresponding project documentation.

## Required Cross-Cutting Documents

Manage only the following four non-hidden files directly under `plans/`.

| Document | Role | Primary update trigger |
|---|---|---|
| `README.md` | Fixed entry point for these conventions and the project documentation | When changing AIDD documentation conventions |
| `CURRENT_STATUS.md` | Current lifecycle state, verification state, known limitations, and next work | When the state, verification results, limitations, or priority work changes |
| `GLOSSARY.md` | Terms, abbreviations, and state expressions shared across documents | When adding a shared term or changing its meaning |
| `TRACEABILITY.md` | Relationships among requirements, design, implementation, verification, and completion evidence | When any element, relationship, or state changes |

In `CURRENT_STATUS.md`, distinguish unimplemented, implemented, and verified work. Do not record speculation as current status.
Do not turn `GLOSSARY.md` into a dictionary of general terms; use it for terms whose meanings need to be shared across documents.
In `TRACEABILITY.md`, do not record unsettled relationships as settled. Keep documents, implementations, and verification results that support the current state traceable.

## Initialization and Lifecycle

- Generate project-specific documents only from content for which the user has approved beginning creation after the initialization discussion defined in `AGENTS.md`. Do not record proposals or unapproved assumptions from the discussion as sources of truth.
- During project initialization, define the purpose, scope and exclusions, application responsibility boundaries, default documentation language and explicit application-level overrides, sources of truth for requirements, design, and testing, and open questions.
- Each project must define the end boundary of the lifecycle it handles and the transition conditions for each state. When release, operation, and retirement are included, also define their completion criteria and where feedback is incorporated.
- Implementation entry criteria must include at least the corresponding requirements and observable acceptance criteria, responsibility boundaries and implementation approach, verification methods, and the absence of open questions that block the work.
- Completion criteria must include at least implementation and configuration, required verification, consistency with requirements, design, and tests, and updates to current status and traceability.
- Record whether security, privacy, accessibility, performance, availability, monitoring, data retention, recovery, and licensing apply to the project, along with the reason for each decision.
- Record the verification methods used to advance a state, their results, and unverified matters in the location defined by the project documentation.

## Source-of-Truth Management

- Follow the one-purpose-per-document principle and do not maintain the same details in multiple locations.
- Requirements describe outcomes that must be satisfied, design describes how to realize them, and tests describe how correctness will be verified.
- Distinguish current, target, and open states. Do not treat open matters as settled requirements.
- Make requirement completion criteria observable. Split requirements that cannot be implemented, verified, and judged complete together.
- Guide readers from `system_index.md` to individual system documents in the recommended order. Do not leave individual documents unindexed.
- Guide readers from `<app>_index.md` to category indexes and from category indexes to individual documents in the recommended order. Do not maintain the same list of individual documents in multiple indexes.
- When documents, implementation, and tests disagree, identify the difference and update the appropriate source of truth.
- When documentation changes, run the verification defined by project-specific conventions.

## Document Splitting

- Do not split documents mechanically by line count alone. Organize them into units with coherent functional areas, questions answered, readers, update triggers, and lifecycles.
- Split a document when it contains content from different document categories, content with independent readers or update triggers, or both currently effective content and historical decisions or evidence.
- Review whether to split a document during a change when any of the following applies:
  - It has 150 or more lines.
  - It contains 12 or more independently referenced identifiers for requirements, design, tests, decisions, or similar items.
  - It covers three or more functional areas that change independently.
- As a rule, split a document that exceeds 250 lines or 20 independently referenced identifiers. When it is not split, record the reason and reconsideration condition in the corresponding system or application index.
- Keep `system_index.md`, `<app>_index.md`, and the three category indexes as single fixed entry points; do not split the indexes themselves. If details have been added to an index, move only those details to an appropriate individual document and reference it from the index.
- When splitting, preserve existing identifiers and update indexes, document links, and traceability within the same change. Even when separating an overview from details, do not duplicate the same details in multiple documents.
- Distinguish documents that show current verification status from historical evidence such as test results. Do not continuously expand a current-status document merely to append history.

## Structural Changes

- Do not add a directory or document category when the existing classifications can represent the content.
- Before creating a new directory under `plans/`, explain why it is needed and its effect on existing classifications, and obtain explicit user approval before starting other documentation changes.
