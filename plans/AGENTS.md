# AIDD Plans and Sources of Truth Instructions

## Scope

This file defines the documentation structure, lifecycle, and source-of-truth management rules for `plans/` and all descendants.

Record project-specific purpose, scope, requirements, design, testing policy, procedures, identifiers, commands, constraints, current state, and traceability here. Place formal implementations in `products/`, execution-environment configuration in `etc/`, project-managed working materials in `workbench/`, and externally supplied originals in `references/`.

Follow the repository-wide authority, task-mode, review, and instruction-protection rules in the root `AGENTS.md`.

## Documentation Lifecycle State

Determine the documentation state before formal work:

| State | `CURRENT_STATUS.md`, `GLOSSARY.md`, `TRACEABILITY.md` | `system/system_index.md`, `system/documentation_language.md` | Retention markers |
|---|---|---|---|
| Uninitialized | Present and zero bytes | Absent | `system/.gitkeep` and `apps/.gitkeep` present |
| Initialized | Present with approved-language content | Both present | `system/.gitkeep` absent; `apps/.gitkeep` present only while no application documentation exists |
| Inconsistent | Any other combination | Any other combination | Reconcile before continuing formal work |

- Fixed skeleton files do not by themselves establish project facts or initialization.
- Do not infer project-specific facts from an inconsistent or uninitialized state.
- When initialized, read `CURRENT_STATUS.md`, `system/system_index.md`, `system/documentation_language.md`, `GLOSSARY.md`, and `TRACEABILITY.md` in that order, then follow the indexes applicable to the target.

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

- `plans/system/` and `plans/apps/` are required classification directories.
- Retention markers preserve empty directories in Git and do not assert that project content exists. Remove a marker when tracked content makes it unnecessary.
- Keep the three cross-cutting files empty and the two fixed system documents absent until initialization is approved and the documentation language is settled.
- Do not create a `README.md` under `plans/`; use the fixed indexes for navigation and `AGENTS.md` for agent instructions.
- Do not create `plans/apps/<app>/` until the application name and responsibility are approved. Never create a literal `<app>` directory or invent a temporary application name.

For each approved application, use:

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

Use the same approved `<app>` name under `plans/apps/<app>/` and `products/apps/<app>/`.

## Document Model and Indexes

| Location | Responsibility |
|---|---|
| `system/system_index.md` | System overview, responsibility boundaries, documentation map, and recommended reading order |
| `system/documentation_language.md` | Default documentation language and explicit application overrides |
| Other documents directly under `system/` | Purpose, requirements, structure, constraints, and development or operational methods spanning applications |
| `apps/<app>/<app>_index.md` | Application overview, responsibility boundaries, reading order, category entry points, and traceability link |
| `apps/<app>/<app>_traceability.md` | Current application relationships among requirements, design, implementation, verification, and completion evidence |
| Category indexes | Documents in that category, the questions they answer, and recommended reading order |
| `requirements/` | Outcomes and constraints the application must satisfy |
| `design/` | Structure and approach used to satisfy requirements |
| `testing/` | How correctness will be verified |

- Use one purpose per project-specific document and choose file boundaries by question answered, reader, update trigger, and lifecycle.
- Keep indexes as navigation entry points; do not place detailed requirements, design, test content, procedures, or evidence in them.
- `system_index.md` indexes individual system documents. `<app>_index.md` links the three category indexes and application traceability; each category index lists its individual documents. Do not maintain the same detailed list at multiple levels.
- Place application-specific execution and diagnostic procedures directly under `apps/<app>/` and reference them from `<app>_index.md`.
- Application test code belongs with implementation under `products/`. Project-managed documentation belongs here; supplied documentation belongs under `references/`.
- When adding, renaming, moving, or deleting an indexed document, update the responsible index in the same change.

## Documentation Language

- During initialization, propose the default documentation language in the approval summary; unless the user specifies another language, propose the current conversation language.
- After approval, record the default as a BCP 47 tag in `system/documentation_language.md` and record only explicit application-level overrides.
- Use the default language for system and cross-application documents. Application documents inherit it unless the user explicitly approves an override.
- Do not infer documentation language or an override from code, supplied material, or execution environment.
- Use the selected conversation language in conversation and the recorded documentation language in project documents.
- Change documentation language only on explicit user request. Do not implicitly choose whether existing documents are translated or only future changes use the new language.
- The language setting does not require translating or modifying supplied originals under `references/`.
- Do not create a second machine-readable file containing the same language setting.
- Create `documentation_language.md` and `system_index.md` together. Do not delete either independently. When changing the language setting, update relevant index guidance in the same change.
- Returning to the uninitialized state requires an explicitly approved lifecycle reset that deletes both fixed system documents, empties the three cross-cutting files, restores `system/.gitkeep`, and verifies the whole state atomically.

## Cross-Cutting Documents and Traceability

Manage only these four non-hidden files directly under `plans/`:

| Document | Role | Update trigger |
|---|---|---|
| `AGENTS.md` | Protected fixed instructions for this area | Explicitly authorized governance change only |
| `CURRENT_STATUS.md` | Current lifecycle and verification state, known limitations, and next work | State, verification, limitation, or priority change |
| `GLOSSARY.md` | Shared project terms, abbreviations, and state expressions | Shared meaning is added or changed |
| `TRACEABILITY.md` | System-wide and cross-application traceability summary and application traceability index | Cross-application relationship, linked location, or summarized state changes |

- Before initialization, keep the three project-specific cross-cutting files at zero bytes. After initialization, write them in the approved documentation language.
- In `CURRENT_STATUS.md`, distinguish unimplemented, implemented, and verified work and do not record speculation as current status.
- Keep `GLOSSARY.md` limited to terms whose meaning must be shared across project documents.
- Keep the root `TRACEABILITY.md` to system-wide and cross-application relationships, links to application traceability documents, and concise unresolved or unverified summaries.
- Keep application-level detail in `apps/<app>/<app>_traceability.md` and link it from both the root `TRACEABILITY.md` and `<app>_index.md`.
- Trace independently approved requirements or observable acceptance criteria to the implementation units and verification evidence needed to judge them. Do not trace every file, class, function, or line unless the project explicitly requires that granularity.
- Keep current effective relationships in traceability documents. Store historical runs and superseded evidence in the project-defined evidence location rather than appending them indefinitely.
- Do not invent placeholder identifiers or present unsettled relationships as settled.

## Initialization and Lifecycle

- Generate project-specific documentation only from content authorized by the initialization-summary flow in the root `AGENTS.md`. Do not request the same permission again for documents, directories, or assumptions explicitly included in the approved summary.
- Initialization must atomically create `system/documentation_language.md` and `system/system_index.md`, populate the three cross-cutting files in the approved language, and remove `system/.gitkeep`.
- During initialization, define at least:
  - purpose, users, scope, and exclusions;
  - system and application responsibility boundaries;
  - requirements, design, and testing sources of truth;
  - observable acceptance criteria and open questions;
  - lifecycle identifiers, states, transition conditions, and end boundary;
  - implementation entry criteria, completion criteria, standard verification, and evidence locations;
  - whether security, privacy, accessibility, performance, availability, monitoring, data retention, recovery, and licensing apply, with reasons.
- Open questions may remain only when their decision point and blocking effect are recorded.
- When release, operation, or retirement is outside the lifecycle, record the end boundary and required handoff deliverables. When included, define their transition and completion criteria and where feedback is incorporated.
- Implementation entry criteria must include applicable requirements and acceptance criteria, responsibility boundaries and implementation approach, verification methods, and no unresolved blocker.
- Completion criteria must include implementation and configuration, required verification, consistency among requirements, design, tests, and implementation, plus current-status and traceability updates.

## Status and Evidence Updates

- Update `CURRENT_STATUS.md` when lifecycle state, verification state, known limitations, or priority work changes.
- Update the responsible traceability documents when relationships among requirements, design, implementation, verification, or completion evidence change.
- Record the verification method, result, verified scope, evidence type, and material unverified matters in the project-defined locations. Do not treat fixture, mock, real-database, manual, live-system, or historical evidence as interchangeable.
- Advance lifecycle state only when its documented transition conditions and required evidence are present. Keep unimplemented, implemented, and verified states distinct.
- Record remaining risks or blockers when they affect current state, completion, or the next authorized work.
- A conversational completion report does not replace required updates to project status, traceability, evidence records, or other sources of truth.

## Source-of-Truth Management

- Requirements describe required outcomes, design describes how they will be realized, and testing documents describe how correctness will be verified.
- Distinguish current, target, assumed, decided, and open states. Do not record proposals or unapproved assumptions as sources of truth.
- Make completion criteria observable. Split requirements that cannot be implemented, verified, and judged complete together.
- Maintain each project fact in one responsible location rather than duplicating details across documents.
- When documentation, implementation, and tests disagree, identify the difference and update the appropriate source of truth. Do not rewrite requirements merely to match current implementation.
- Reflect adopted facts from `references/` and settled findings or decisions from `workbench/` in the responsible project document; neither source is itself the adoption record.
- Formal programs that generate, display, or verify documentation belong under `products/`; their execution-environment configuration belongs under `etc/`.
- Run the project-defined documentation verification when documentation changes.

## Document Splitting

These rules apply to project-specific source-of-truth documents after initialization, not to protected `AGENTS.md` files.

- Split by coherent responsibility, question, reader, update trigger, or lifecycle—not by line count alone.
- Review whether to split a document when it reaches 150 lines, contains 12 independently referenced identifiers, or covers three independently changing functional areas.
- As a rule, split a document above 250 lines or 20 independently referenced identifiers. When retaining it, record the reason and reconsideration condition in the responsible index.
- Keep `system_index.md`, `<app>_index.md`, category indexes, and the root `TRACEABILITY.md` as single entry points.
- When application traceability grows beyond the general thresholds, retain `<app>_traceability.md` as the entry point and move coherent detail into indexed documents below the application directory.
- Preserve identifiers and update indexes, links, and traceability in the same change. Do not duplicate details between overview and detail documents.
- Keep current state separate from historical evidence so status and traceability files do not grow as append-only logs.

## Verification and Structural Changes

- Validate changed Markdown links, required fixed files, index coverage, identifiers, and traceability with project-defined checks when available.
- Verify that the complete documentation state matches one lifecycle row above and that project-specific statements are supported by approval or evidence.
- Do not add a document category or directory when the existing model can represent the responsibility.
- Before creating a new directory under `plans/`, explain its responsibility and effect on existing classifications and obtain user approval. An approved initialization or change summary that explicitly includes it is sufficient.
- Before moving or deleting documents, inspect inbound links, indexes, current status, traceability, and evidence-retention needs. Update all affected references in the same change.
