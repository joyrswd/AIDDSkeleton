# AIDD Plans and Sources of Truth Instructions

## Scope

This file defines the documentation structure, lifecycle, and source-of-truth management rules for `plans/` and all descendants.

Record project-specific purpose, scope, requirements, design, testing policy, procedures, identifiers, commands, constraints, current state, and traceability here. Place formal implementations and tests in `products/`, execution-environment configuration in `etc/`, project-managed working materials in `workbench/`, and externally supplied originals in `references/`.

Follow the repository-wide authority, task-mode, interaction, review, safety, and instruction-protection rules in the root `AGENTS.md`.

## Lifecycle and Initialization

Determine the documentation state before formal work:

| State | `CURRENT_STATUS.md`, `GLOSSARY.md`, `TRACEABILITY.md` | `system/system_index.md`, `system/documentation_language.md` | Retention markers |
|---|---|---|
| Uninitialized | Present and zero bytes | Absent | `system/.gitkeep` and `apps/.gitkeep` present |
| Initialized | Present with approved-language content | Both present | `system/.gitkeep` absent; `apps/.gitkeep` present only while no application documentation exists |
| Inconsistent | Any other combination | Any other combination | Reconcile before continuing formal work |

- Fixed skeleton files and retention markers do not by themselves establish project facts or initialization.
- Do not infer project-specific facts from an uninitialized or inconsistent state.
- Generate project-specific documentation only from content authorized by the initialization-summary flow in the root `AGENTS.md`; do not request the same permission again for documents, directories, or assumptions explicitly included in the approved summary.
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
- Implementation entry criteria must include applicable requirements and acceptance criteria, responsibility boundaries and any adopted implementation approach, verification methods, and no unresolved blocker. When a scope intentionally adopts no additional implementation constraint beyond applicable requirements and inherited rules, record that explicitly rather than inventing design detail.
- Completion criteria must include implementation and configuration, required verification, consistency among requirements, design, tests, and implementation, plus current-status and traceability updates.
- Do not delete either fixed system document independently. Returning to the uninitialized state requires an explicitly approved lifecycle reset that removes project-specific system and application documents, deletes both fixed system documents, empties the three cross-cutting files, restores both retention markers, and verifies the whole state atomically.
- When initialized, read `CURRENT_STATUS.md`, `system/system_index.md`, `system/documentation_language.md`, `GLOSSARY.md`, and `TRACEABILITY.md` in that order, then follow the indexes applicable to the target.

## Structure and Indexes

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

| Location | Responsibility |
|---|---|
| `system/system_index.md` | System overview, responsibility boundaries, documentation map, and recommended reading order |
| `system/documentation_language.md` | Default documentation language and explicit application overrides |
| Other documents directly under `system/` | Purpose, requirements, structure, constraints, and development or operational methods spanning applications |
| `apps/<app>/<app>_index.md` | Application overview, responsibility boundaries, reading order, category entry points, and traceability link |
| `apps/<app>/<app>_traceability.md` | Current relationships among normative requirements and design, implementation responsibilities, verification evidence, and concise coverage state |
| Category indexes | Documents in that category, the questions they answer, recommended reading order, and any explicit absence or inherited responsibility for that category |
| `requirements/` | Outcomes and constraints the application must satisfy |
| `design/` | Adopted structure, approach, contracts, algorithms, invariants, and other implementation constraints intentionally imposed on future valid implementations |
| `testing/` | Verification strategy and specifications describing what evidence is sufficient to establish correctness |

- `plans/system/` and `plans/apps/` are required classification directories. Retention markers preserve empty directories in Git; remove a marker when tracked content makes it unnecessary.
- Do not create a `README.md` under `plans/`; use the fixed indexes for navigation and `AGENTS.md` for agent instructions.
- Do not create `plans/apps/<app>/` until the application name and responsibility are approved. Never create a literal `<app>` directory or invent a temporary application name.
- Use the same approved `<app>` name under `plans/apps/<app>/` and `products/apps/<app>/`.
- Use one purpose per project-specific document and choose file boundaries by question answered, reader, update trigger, and lifecycle.
- Keep system documents directly under `plans/system/`; use document boundaries rather than subdirectories to separate their responsibilities.
- The three application category directories and category indexes are required responsibility entry points, but they do not require standalone detail documents when the scope has no additional category-specific content. In that case, the category index must say so explicitly and identify any inherited or cross-cutting source that applies.
- Do not create detail documents merely to populate a category. For design, an explicit statement that the scope adopts no additional normative implementation constraints beyond applicable requirements and inherited rules is valid.
- Formal implementation still requires verification methods. If no application-specific testing detail document is needed, the testing index must identify the applicable inherited or cross-cutting verification policy; absence of a detail document never means absence of verification responsibility.
- Keep `requirements/`, `design/`, and `testing/` as normative category boundaries. Do not place execution-result or evidence records—such as CI run reports, command output, measured results, artifact identities, or completed verification logs—inside those category directories merely because they were produced while verifying the corresponding requirements. Place application-specific evidence directly under the responsible `apps/<app>/` area and system-wide or cross-application evidence directly under `system/`, unless the initialized project already defines another approved non-normative evidence location. Do not create a new evidence category or directory solely for this purpose.
- A testing index may link to current or historical execution evidence needed to judge coverage, but the evidence record itself is not a testing source of truth and must not be listed or described as a normative testing specification.
- Keep indexes as navigation entry points. They may contain concise category-absence or inheritance statements and links to current evidence, but must not duplicate detailed requirements, design, testing specifications, procedures, or execution results.
- `system_index.md` indexes individual system documents. `<app>_index.md` links the three category indexes and application traceability; each category index lists its individual documents. Do not maintain the same detailed list at multiple levels.
- Place application-specific execution and diagnostic procedures directly under `apps/<app>/` and reference them from `<app>_index.md`.
- Place durable project-managed current-realization support documents that do not define requirements, design, or testing—such as external-source mappings, adapter compatibility notes, or observed DOM/XPath mappings—directly under the responsible application or system area and link them from the applicable index. Label them as non-normative. When their value depends on current or external observations, record the observation scope, observation or snapshot date/identity, whether the live source was rechecked for the current change, and the conditions that require revalidation; distinguish the date represented by source data from the date the mapping itself was observed. When a retained artifact is not a raw snapshot, record its provenance fidelity—such as trimmed, reconstructed, synthetic, or derived—and distinguish source observation time from artifact construction or review time when those differ. Do not create a new category or directory solely for them.
- Application test code belongs with implementation under `products/`. Project-managed documentation belongs here; supplied documentation belongs under `references/`.
- Formal programs that generate, display, or verify documentation belong under `products/`; their execution-environment configuration belongs under `etc/`.

## Normative Content and Semantic Reconstruction

- Requirements, design, and testing are normative responsibilities. Their adopted content must remain understandable and usable without relying on the current contents of `products/`.
- Together, the applicable requirements, design, and testing sources of truth must provide a sufficient basis to implement an independent realization with the same intended outcomes, adopted contracts, responsibility boundaries, algorithms or invariants where fixed, and to verify that realization against the same acceptance intent.
- This is semantic reconstruction, not source reproduction or operational restoration. It does not require reproducing the current source tree, private file/class/function/state names, exact dependency lock, migration history, fixtures, scripts, artifacts, or other incidental implementation detail unless one of those is itself an adopted contract or constraint.
- Before removing, abstracting, relocating, or changing the authority of content from an existing normative source, classify each materially constraining statement and verify that its intended semantics either remain in the responsible normative source or are explicitly being changed or retired. Treat loss of specificity in an adopted timezone, unit, protocol or version, transaction or isolation rule, identity rule, cardinality, ordering, security boundary, compatibility rule, or similar invariant as a normative change rather than editorial cleanup.
- Moving a statement between normative and non-normative locations changes its authority. Verify that the set of future valid implementations is not unintentionally broadened or narrowed by the move.
- Design may be highly concrete when the project intentionally fixes that detail for future valid implementations. Concrete database roles, schema contracts, protocol paths, transaction rules, security boundaries, algorithms, runtime constraints, or stable identifiers may therefore belong in design.
- Before admitting a current-implementation detail into design, evaluate whether the project intentionally wants to constrain future valid implementations by that detail. Strong indicators include that changing it would alter an adopted contract, responsibility boundary, dependency direction, security property, correctness invariant, operational constraint, or chosen algorithm, or would permit a reasonably compliant reimplementation that the project would reject.
- A source path, private helper/class/function name, state-field name, DOM identifier, current directory layout, or implementation status is not design merely because it exists in `products/`. Keep such information in implementation, traceability, status, or evidence unless the identifier or layout is itself an adopted contract or constraint.
- State adopted design constraints in normative terms. Do not delegate design authority to a current source file, helper, generated artifact, configuration file, test, or implementation module by naming that artifact as the source of truth for the constraint. When useful, identify the current realization location through traceability, evidence, or an explicitly non-normative support mapping instead.
- Non-normative current-realization knowledge is not automatically disposable. Retain it when it materially supports maintenance, source-adapter updates, diagnostics, or re-investigation, but distinguish it from adopted requirements/design/testing, state its scope or freshness, and do not let it constrain future valid implementations without independent adoption.
- Testing specifications define what must be verified, the relevant verification method or observation, and what evidence is sufficient. Do not make private helper/class/function names, current source paths, migration filenames or sequence numbers, fixture paths, test-file layout, or other current test implementation structure normative merely because current tests use them; include such details only when they are independently adopted verification constraints. Apply the same boundary to testing indexes, catalogs, and coverage summaries: they may map requirements to semantic verification cases and concise coverage state, but must not make current test paths, helper names, fixture filenames, migration sequences, current test-case or execution counts, runs, or artifacts part of normative testing authority. Do not treat an adopted exhaustive input or state domain, boundary matrix, transition set, or required enumeration as such an incidental count: its semantic scope and cardinality constrain what evidence is sufficient even when the current organization or number of test cases and runs does not.
- Testing is not limited to automated test code. Depending on the requirement, sufficient verification may include automated tests, manual review, visual inspection, live-system checks, performance measurements, security checks, operational exercises, or other evidence appropriate to the acceptance condition.

## Overview Diagrams

- In an initialized project, place one overview diagram directly under `plans/system/` and one directly under each approved `plans/apps/<app>/`. When an application handles persistent entities, also place one entity-relationship diagram directly under that application directory. Link every diagram from the corresponding `system_index.md` or `<app>_index.md`.
- Use the system diagram to show the main users, responsibility boundaries, and relationships among applications. Use each application overview diagram to show its main processing or structural relationships.
- For overview diagrams, do not default to a flowchart. Choose the Mermaid or UML diagram type—such as a sequence, state, component, activity, or flow diagram—that expresses the subject clearly with the fewest elements. Avoid large node-heavy diagrams and move details to the responsible requirements, design, testing, or operational documents.
- Entity-relationship diagrams are not part of the overview-diagram type selection. Use Mermaid `erDiagram` syntax and do not substitute a flowchart or other generic graph notation.
- Entity-relationship diagrams must show only entity names, primary keys, foreign keys, and relationships. Do not include other columns, types, indexes, or constraints.
- Keep each overview or entity-relationship diagram in one document. These diagram documents are exempt from the line, identifier, and functional-area thresholds in `Document Splitting` and must not be split to satisfy those thresholds. When an overview diagram becomes difficult to read, simplify it, change the diagram type, or remove detail instead of splitting the document.
- Keep overview diagrams focused on the adopted project definition. When a diagram intentionally includes implementation state or approved future intent that is itself part of the responsible source of truth, distinguish those states clearly. Candidate target designs and unresolved alternatives belong in `workbench/`, not as parallel source-of-truth views.

## Documentation Language

- During initialization, propose the default documentation language in the approval summary; unless the user specifies another language, propose the current conversation language.
- After approval, record the default as a BCP 47 tag in `system/documentation_language.md` and record only explicit application-level overrides.
- Use the default language for system and cross-application documents. Application documents inherit it unless the user explicitly approves an override.
- Do not infer documentation language or an override from code, supplied material, conversation changes, or execution environment.
- Conversation language is governed by the root `AGENTS.md` and does not determine documentation language after initialization.
- Change documentation language only on explicit user request. Do not implicitly choose whether existing documents are translated or only future changes use the new language.
- The language setting does not require translating or modifying supplied originals under `references/`.
- Do not create a second machine-readable file containing the same language setting.
- When changing the language setting, update relevant index guidance in the same change.

## Cross-Cutting Status, Traceability, and Evidence

Manage only these four non-hidden files directly under `plans/`:

| Document | Role | Update trigger |
|---|---|---|
| `AGENTS.md` | Protected fixed instructions for this area | Explicitly authorized governance change only |
| `CURRENT_STATUS.md` | Aggregate lifecycle and implementation/verification state, material limitations or blockers, and next work | State, limitation, blocker, or priority change |
| `GLOSSARY.md` | Shared project terms, abbreviations, and state expressions | Shared meaning is added or changed |
| `TRACEABILITY.md` | System-wide and cross-application relationship summary, concise coverage state, and application traceability index | Relationship, linked location, or summarized coverage state changes |

- Before initialization, keep the three project-specific cross-cutting files at zero bytes. After initialization, write them in the approved documentation language.
- In `CURRENT_STATUS.md`, distinguish unimplemented, implemented, and verified work and do not record speculation as current status. Keep it concise: summarize current capability, material limitations or blockers, next work, and links to the responsible traceability or evidence rather than duplicating detailed run data. When reconciling an existing status document, remove or relocate superseded execution narratives, run identifiers, exact commit identities, test counts, command output, and other evidence-owned history even when those details remain factually accurate.
- Keep `GLOSSARY.md` limited to terms whose meaning must be shared across project documents.
- Keep the root `TRACEABILITY.md` to system-wide and cross-application relationships, links to application traceability documents, concise coverage state, and concise unresolved or unverified summaries.
- Keep application-level detail in `apps/<app>/<app>_traceability.md` and link it from both the root `TRACEABILITY.md` and `<app>_index.md`.
- Trace independently approved requirements or observable acceptance criteria to the implementation responsibilities and verification evidence needed to judge them. Prefer responsibility units, modules, or directories; do not trace every file, class, function, or line unless that granularity is required to identify the responsible realization.
- Aggregate multiple requirements or acceptance criteria into one traceability entry only when they share the materially same design responsibility, implementation responsibility, verification basis, and coverage state, and the grouping still allows each item to be judged independently. Do not compress mappings merely to shorten the table when doing so obscures which design decision or verification evidence establishes a particular requirement.
- Traceability may carry concise coverage state needed to see whether a requirement or design decision is unimplemented, implemented, partially verified, or verified. Do not duplicate detailed CI run history, exact test counts, artifact identifiers or hashes, command output, or long verification narratives there.
- Update the responsible status and traceability documents when lifecycle state, verification state, known limitations, priority work, relationships, linked locations, or summarized completion evidence change.
- Record execution-specific evidence outside the normative `requirements/`, `design/`, and `testing/` category directories in the project's approved non-normative evidence location. Unless an initialized project defines another approved location, place application-specific evidence directly under `apps/<app>/` and system-wide or cross-application evidence directly under `system/`. Evidence or result records own the immutable execution identity—the exact commit SHA or equivalent immutable version when available—plus environment, commands, run identifiers, artifacts, actual results, directly verified scope, and material unverified scope; status, traceability, and testing documents should link to those records rather than duplicate the details. A moving branch name such as `main` is context, not a substitute for immutable execution identity; if the exact executed identity cannot be established, record it as unknown rather than infer it.
- When an index, status document, or traceability document identifies a current evidence entry, that entry must lead to the latest applicable evidence needed to support the current asserted state and coverage. Do not leave a superseded run or head as the sole current entry after later applicable verification exists. If a later head changes only documentation or evidence and earlier execution evidence remains applicable, record that applicability explicitly rather than implying that the earlier run exercised the later head.
- Record the verification method, result, verified scope, evidence type, and material unverified matters in the project-defined locations. Do not treat fixture, mock, real-database, manual, live-system, or historical evidence as interchangeable.
- Treat verification as scoped: evidence establishes only the behavior, conditions, and boundaries it directly exercises or observes. Implementation presence, code inspection, syntax checks, static analysis, or successful adjacent tests do not verify unexercised runtime behavior.
- Mark a requirement, acceptance criterion, completion criterion, or aggregate lifecycle state as verified only when sufficient evidence covers every required observable part and applicable condition. Otherwise, record the verified subset and remaining unverified scope without advancing the broader state beyond the available evidence.
- Advance lifecycle state only when its documented transition conditions and required evidence are present. Record remaining risks or blockers when they affect current state, completion, or the next authorized work.
- Keep current effective relationships in status and traceability documents. Store historical runs and superseded evidence in the project-defined evidence location rather than appending them indefinitely.
- Do not invent placeholder identifiers or present unsettled relationships as settled.
- A conversational completion report does not replace required updates to project status, traceability, evidence records, or other sources of truth.

## Source-of-Truth Management

- Maintain each project fact in one responsible document rather than duplicating details across documents.
- Treat the responsible documents under `plans/` as the adopted project definition for their responsibility. Do not create parallel `current` and `target` source-of-truth documents, filename variants, or equivalent views for the same responsibility; the responsible source-of-truth document itself represents the adopted state.
- Develop candidate replacements, proposed target states, and change alternatives in `workbench/` while they are being evaluated. Prefer referencing the existing source of truth and recording the proposed delta rather than copying the current content.
- Future intent may be recorded in `plans/` when that future intent is itself the approved responsibility of the document, such as an approved lifecycle boundary or roadmap. Do not use that exception to maintain a candidate replacement alongside the adopted source of truth.
- Distinguish assumed, decided, and open states where they are relevant. Do not record proposals or unapproved assumptions as settled project facts.
- Make acceptance and completion criteria observable. Split requirements that cannot be implemented, verified, and judged complete together.
- Classify a constraint by the responsibility it serves, not merely by how technical or implementation-specific it appears. Put required outcomes, externally imposed conditions, compatibility obligations, and acceptance conditions in requirements; put adopted implementation choices among otherwise valid ways to satisfy those requirements in design.
- Do not reclassify an existing requirement or design statement merely to normalize taxonomy. Move it only when its current placement materially obscures responsibility, creates harmful duplication, or incorrectly constrains or frees future valid implementations. When a material constraint could reasonably belong to either category and its existing intent is unclear, preserve its current placement until that responsibility is resolved.
- When investigation or implementation reveals a potentially normative fact, do not copy it directly into design. First classify it as a current-realization fact, a required outcome or constraint, or an adopted implementation constraint. Promote only required outcomes/constraints to requirements and adopted implementation constraints to design; keep current locations, private identifiers, implementation status, and other incidental realization facts in implementation, traceability, status, or evidence unless they are independently adopted as contracts or constraints.
- Do not treat discovery of a more specific current-realization value as proof that the project has adopted that value normatively. Adding a new requirement or design constraint that narrows future valid implementations requires adoption evidence independent of its mere presence in implementation or tests, such as a pre-existing normative statement whose adoption is not itself in doubt, an approved decision, or another explicit project adoption record. If that intent is unresolved, keep the detail as current-realization evidence or an open decision rather than silently promoting it.
- A statement in the current responsible normative source remains effective until it is explicitly changed or retired, but its placement alone does not prove that an implementation-derived detail was intentionally adopted. When concrete evidence creates material doubt about that provenance or intent, classify the matter under the root `Review Principles` and preserve the current authority while the required correction or decision is unresolved; do not silently delete, generalize, or reconfirm the detail merely because of either its current placement or its implementation origin.
- Do not require routine history research for every normative statement. Investigate provenance when specific evidence creates material doubt, such as implementation-first synchronization, a conflicting adoption record, or unexplained realization-specific precision. A later explicit project decision or adoption record may validly make an implementation-derived detail normative.
- Current normative design must describe the adopted end state, not rely on stale transition instructions to explain it. After a migration, refactor, rename, or staged rollout is complete, reconcile active design and its indexes so obsolete stages, former names, temporary compatibility mechanisms, and superseded target structure no longer appear as current normative direction. Preserve maintenance-relevant history as evidence or explicitly non-normative support when needed rather than requiring readers to reinterpret stale active design.
- When a brownfield document mixes normative content with non-normative current-realization or maintenance knowledge, do not let either inherit the other's authority. Separate the content when their readers, update triggers, or authority differ and separation preserves usability; otherwise mark the sections explicitly and identify which statements are normative. Do not duplicate the same facts solely to create that separation.
- After separating mixed brownfield content, check both reconstruction directions: with `products/` absent, the normative sources must still support semantic reconstruction; with the current realization unavailable or an external source changed, retained non-normative support must preserve enough provenance and observation context to re-investigate maintenance-relevant mappings without becoming normative authority.
- When performing brownfield authority cleanup, do not stop at the edited document. Inspect the affected responsibility's entry points and summaries—including indexes, scope or overview documents, active transition or migration design, traceability, testing indexes or catalogs, status, and evidence routing—for the same class of authority leakage or stale duplication before declaring the cleanup complete. Keep this sweep scoped to the affected responsibility rather than turning it into unrelated repository-wide rewriting.
- When applying a governance update to an already initialized project, treat the changed governance rules themselves as the affected scope for migration. Identify which existing normative sources and entry points could be classified or constrained differently by the update, inspect those sources across the project, and reconcile each applicable case before declaring the governance migration complete. This is not a standing requirement to audit the whole repository for ordinary feature changes. If full reconciliation is intentionally deferred, record the remaining applicable scope as unverified or known documentation debt rather than implying completion.
- When that migration finds execution-result or evidence records inside `requirements/`, `design/`, or `testing/`, treat their relocation and inbound-link reconciliation as part of the governance migration scope. Preserve evidence content and history that still has evidential value; do not delete it merely to make the normative category structurally clean, and do not leave it in place with a non-normative label that makes the category boundary ambiguous.
- Existing implementation is evidence of current behavior and structure, not automatic authority to define or rewrite the source of truth. Conversely, absence of a normative statement does not by itself authorize opportunistic re-architecture of an existing implementation; follow the root working and review principles and resolve material design changes explicitly.
- When documentation, implementation, and tests disagree, follow the root `Review Principles` and update the responsible source of truth within the authorized scope; do not rewrite requirements merely to match implementation.
- Reflect adopted facts from `references/` and settled findings or decisions from `workbench/` in the responsible source-of-truth document; neither source is itself the adoption record.

## Document Splitting

These thresholds apply only to initialized project-specific source-of-truth documents, not protected `AGENTS.md` files, overview diagram documents, or entity-relationship diagram documents.

- Review whether to split a document when it reaches 150 lines, contains 12 independently referenced identifiers, or covers three independently changing functional areas.
- As a rule, split a document above 250 lines or 20 independently referenced identifiers. When retaining it, record the reason and reconsideration condition in the responsible index.
- Split by coherent responsibility, question, reader, update trigger, or lifecycle—not by line count alone.
- Keep `system_index.md`, `<app>_index.md`, category indexes, and the root `TRACEABILITY.md` as single entry points.
- When application traceability exceeds the general thresholds, retain `<app>_traceability.md` as the entry point and move coherent detail into indexed documents below the application directory.

## Verification and Structural Changes

- Run the project-defined documentation verification when documentation changes.
- Validate changed Markdown links, required fixed files, index coverage, identifiers, and traceability with project-defined checks when available.
- Verify that the complete documentation state matches one lifecycle row above and that project-specific statements are supported by approval or evidence.
- Where an index, overview, entity-relationship diagram, traceability table, or other derived/summary document restates normative identifiers, primary or foreign keys, cardinalities, responsibility boundaries, contracts, or relationships, verify it against the responsible source of truth. A disagreement is a consistency defect, not an alternate source of authority. When the same structured fact is intentionally repeated and can be compared mechanically, prefer a project-defined automated consistency check; otherwise keep the manual verification responsibility explicit.
- Do not add a document category or directory when the existing model can represent the responsibility.
- Before creating a new directory under `plans/`, explain its responsibility and effect on existing classifications and obtain user approval. An approved initialization or change summary that explicitly includes it is sufficient.
- When adding, renaming, moving, or deleting an indexed document, inspect inbound links, indexes, current status, traceability, and evidence-retention needs, then update all affected references in the same change.
- Preserve identifiers when splitting or moving documents, and do not duplicate the same details between overview and detail documents.
