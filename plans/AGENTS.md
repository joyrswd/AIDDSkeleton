# AIDD Plans and Sources of Truth Instructions

## General Provisions

### Scope and Responsibility

- Applies to `plans/` and descendants; inherits root governance.
- `plans/` owns project-specific adopted definition, lifecycle/status/traceability, procedures, identifiers, commands, constraints, and VB rules.
- Other repository-area ownership is defined by root `AGENTS.md`.

## Lifecycle

### Initialization and Project Lifecycle

| State | `plans/CURRENT_STATUS.md`, `plans/GLOSSARY.md`, `plans/TRACEABILITY.md` | `plans/system/system_index.md`, `plans/system/documentation_language.md` | Markers |
|---|---|---|---|
| Uninitialized | present, zero bytes | absent | `plans/system/.gitkeep`, `plans/apps/.gitkeep` present |
| Initialized | present, approved-language content | both present | `plans/system/.gitkeep` absent; `plans/apps/.gitkeep` only while no app docs exist |
| Inconsistent | any other combination | any other combination | reconcile before formal work |

- Fixed skeleton files/markers alone ≠ project facts or initialization.
- Do not infer project facts from uninitialized/inconsistent state.
- Initialization content must come from the root initialization-summary authorization; do not re-request authorized documents/directories/assumptions.
- Initialize atomically:
  - create `plans/system/documentation_language.md` and `plans/system/system_index.md`;
  - populate the three cross-cutting files in approved language;
  - remove `plans/system/.gitkeep`.
- Define at least:
  - purpose, users, scope, exclusions;
  - system/app RBs;
  - requirements/design/testing SoTs;
  - observable AC + open questions;
  - lifecycle identifiers/states/transitions/end boundary;
  - implementation entry/completion criteria, standard verification, VB retention expectations;
  - applicability + reasons for security, privacy, accessibility, performance, availability, monitoring, retention, recovery, licensing.
- Open questions require a decision point + blocking effect.
- If release/operation/retirement is outside lifecycle: record end boundary + handoff. If inside: define transitions/completion + feedback route.
- Implementation entry criteria: applicable requirements/AC, RBs, adopted approach (or explicit no additional design constraint), verification method, no unresolved Blocker.
- Completion criteria: implementation/configuration, required verification, requirements/design/tests/implementation consistency, status + traceability updates.
- Do not delete either fixed system document independently.
- Reset to uninitialized only through explicitly approved atomic lifecycle reset: remove project-specific system/app docs, delete both fixed system docs, empty three cross-cutting files, restore both markers, verify whole state.
- Initialized read order: `plans/CURRENT_STATUS.md` → `plans/system/system_index.md` → `plans/system/documentation_language.md` → `plans/GLOSSARY.md` → `plans/TRACEABILITY.md` → target indexes.

## Structure and Placement

### Required Structure and Indexes

Clone-ready:
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

Per approved app:
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
| `plans/system/system_index.md` | System overview, RBs, documentation map, reading order |
| `plans/system/documentation_language.md` | Default documentation language + explicit app overrides |
| other `plans/system/` docs | System-owned purpose, requirements, structure, constraints, development/operational methods |
| `<app>_index.md` | App overview, RBs, reading order, category entries, traceability |
| `<app>_traceability.md` | Normative → implementation/VB relationships + concise coverage |
| category indexes | Category docs, questions answered, order, absence/inheritance |
| `requirements/` | Required outcomes/constraints |
| `design/` | Adopted implementation structure/approach/contracts/algorithms/invariants/constraints |
| `testing/` | Verification strategy/specifications: what must be shown and sufficient evidence |

#### General

- `plans/system/` and `plans/apps/` are required classifications. Remove `.gitkeep` when tracked content makes it unnecessary.
- No `plans/README.md`; use indexes for navigation, `AGENTS.md` for instructions.
- Create `plans/apps/<app>/` only after app name + responsibility approval; never literal `<app>` or invented temporary name.
- Same approved `<app>` under `plans/apps/` and `products/apps/`.
- One purpose per project doc; split boundaries by question, reader, update trigger, lifecycle.
- Keep fixed system entry docs directly under `plans/system/`.
- Other system docs:
  - flat while responsibility is small;
  - responsibility-based subdirectory only when one stable system responsibility owns multiple independently changing docs;
  - never group merely by count, tidiness, requirements/design/testing type, tool, or framework.
- Required app category dirs/indexes do not require detail docs. If none: index states explicit absence/inherited or cross-cutting source.
- Do not create detail docs just to fill a category. Design may explicitly state no additional normative implementation constraints.
- Verification responsibility always exists for formal implementation; if no app testing detail doc, testing index names inherited/cross-cutting policy.
- `requirements/`, `design/`, `testing/` are normative boundaries. Execution results/evidence do not belong there merely because verification produced them. Mixed docs: classify constraining statements first; keep normative verification intent in testing; active execution material follows VB lifecycle.
- Testing index may link current VB for coverage; never make execution history a normative testing spec/catalog.
- Indexes = navigation + concise absence/inheritance/coverage context, not duplicated detailed requirements/design/testing/procedures/results.
- System navigation:
  - `system_index.md` is primary;
  - directly link each Markdown doc directly under `plans/system/` except itself;
  - nested docs may route through a local index but must remain reachable from `system_index.md`;
  - protected `AGENTS.md` excluded;
  - local index only when responsibility needs navigation;
  - do not duplicate the same detailed list at multiple levels.
- App navigation: `<app>_index.md` → three category indexes + app traceability; category index → its docs.

#### Responsibility Placement

Determine ownership from **purpose + change authority + invocation/governing decision + success/failure (or sufficiency) judgment**, not target/caller/tool/file name/operational vocabulary.

- App-owned execution/diagnostic procedure → directly under `plans/apps/<app>/`, linked from `<app>_index.md`.
- System-owned procedure → `plans/system/`, including procedures spanning apps.
- Multiple targets do not prove system ownership; one app target does not prove app ownership.
- Shared tools/observability/deployment/system environments/`etc/` config do not transfer ownership.
- Never choose one participating app as representative owner or duplicate a system-owned procedure per app.
- For system-owned shared execution with app-specific prerequisites/commands/AC/constraints: keep shared responsibility in system procedure; record only app-owned delta with app + link.
- Normative testing uses the same ownership test: verification purpose, change authority, governing conditions, sufficiency judgment.
- Operational terminology ≠ `etc/` ownership: adopted procedures/policy/constraints → `plans/`; execution-environment config → `etc/`.
- Durable non-normative current-realization knowledge (e.g. source mappings, adapter notes, DOM/XPath mappings, observed operational facts) → `references/` when continuing value exists; link from plans only when needed. Preserve provenance/scope/freshness/revalidation per `references/AGENTS.md`.
- Application test code → `products/`. Formal doc generators/viewers/verifiers → `products/`; their environment config → `etc/`.

### Overview Diagrams

- Initialized project:
  - one overview diagram directly under `plans/system/`;
  - one directly under each approved `plans/apps/<app>/`;
  - if app has persistent entities, one ER diagram directly under that app.
- Link each from corresponding index.
- System overview: main users, RBs, app relationships. App overview: main processing/structural relationships.
- Choose the clearest minimal Mermaid/UML type; do not default to flowchart. Move detail to responsible docs.
- ER diagram: Mermaid `erDiagram`; entity names + PKs + FKs + relationships only.
- Keep each overview/ER diagram in one document; exempt from Document Splitting thresholds. If unreadable, simplify/change type/remove detail, not split.
- Show adopted definition. Clearly distinguish implementation state/approved future intent only when itself part of SoT. Candidate targets/unresolved alternatives → `workbench/`.

### Documentation Language

- Initialization summary proposes default; absent user choice, propose current conversation language.
- After approval: BCP 47 default in `plans/system/documentation_language.md`; only explicit app overrides.
- System/cross-app docs use default; app docs inherit unless explicit override.
- Never infer language/override from code, supplied material, later conversation language, or environment.
- On adoption/promotion into `plans/`, preserve semantics, not source wording/language: express prose, headings, table/diagram labels in the destination's effective documentation language; preserve identifiers, code/protocol literals, proper names, standard technical notation, and any content whose wording or language is intentionally fixed.
- Conversation language is independent after initialization.
- Change documentation language only on explicit user request; do not infer whether existing docs are translated vs future-only.
- Supplied originals under `references/` need not be translated.
- Do not duplicate language setting in another machine-readable file.
- Language-setting changes update relevant index guidance.

### Document Splitting

Applies only to initialized project-specific SoT docs; excludes protected `AGENTS.md`, overview, ER diagrams.

- Review split at ≥150 lines, ≥12 independently referenced identifiers, or ≥3 independently changing functional areas.
- As a rule split >250 lines or >20 independently referenced identifiers; if retained, index records reason + reconsideration condition.
- Split by coherent responsibility/question/reader/update trigger/lifecycle, not line count alone.
- Stable system responsibility split into multiple independently changing docs may justify responsibility subdirectory; split/count alone does not.
- Keep `system_index.md`, `<app>_index.md`, category indexes, root `TRACEABILITY.md` as single entry points.
- If app traceability exceeds thresholds, keep `<app>_traceability.md` entry point and move coherent detail into indexed app docs.

## Authority and Sources of Truth

### Normative Content and Semantic Reconstruction

- Requirements/design/testing are normative and must remain usable without current `products/`.
- Together they must support independent implementation with the same intended outcomes, adopted contracts/RBs, fixed algorithms/invariants, and equivalent acceptance intent.
- Goal = semantic reconstruction, not source reproduction/operational restoration.
- Incidental implementation details are not required unless independently adopted constraints/contracts: source tree, private file/class/function/state names, exact lock, migration history, fixtures/scripts/artifacts, etc.
- Before removing/abstracting/relocating/changing authority of normative content:
  - classify each materially constraining statement;
  - preserve its semantics in the responsible normative SoT or explicitly change/retire it.
- Treat loss of adopted timezone/unit/protocol-version/transaction-isolation/identity/cardinality/ordering/security/compatibility or similar invariant as normative change, not cleanup.
- Moving between normative/non-normative locations changes authority; verify future valid implementations are not unintentionally broadened/narrowed.
- Design may be concrete when intentionally constraining future valid implementations (schema/contracts/protocol paths/transaction rules/security/RBs/algorithms/runtime/stable IDs).
- Admit current implementation detail into design only when the project intends that future constraint. Indicators: changing it alters an adopted contract, RB, dependency direction, security/correctness/operational property, chosen algorithm, or permits a reimplementation the project would reject.
- Source path/private helper/class/function/state-field/DOM ID/current directory layout/implementation status ≠ design unless independently adopted.
- State design constraints normatively; do not delegate design authority to current source/config/test/generated artifact. Map current realization via traceability or non-normative workbench/reference material.
- Durable current-realization knowledge may remain non-normative in `references/`; record scope/freshness and do not let it constrain future implementations without adoption.
- Testing specs define required verification, method/observation, and sufficient evidence.
- Current test implementation details (private names/paths/migration filenames/fixture paths/test layout/current case/run counts/artifacts) are non-normative unless independently adopted.
- Semantic exhaustive domains/matrices/transitions/enumerations remain normative even if they imply cardinality.
- Verification may be automated, manual, visual, live-system, performance, security, operational, or other evidence appropriate to AC.

### SoT Management

#### Core

- One responsible document per project fact; do not duplicate details.
- Responsible `plans/` docs are adopted SoTs for their responsibility. No parallel `current`/`target` variants or equivalent views.
- Candidate replacements/target states/alternatives → `workbench/`; prefer delta against current SoT over copied current view.
- Approved future intent may live in `plans/` when it is itself the document's responsibility (e.g. lifecycle boundary/roadmap), not as a parallel candidate SoT.
- Distinguish assumed/decided/open. Proposal/unapproved assumption ≠ settled fact.
- AC/completion criteria observable; split requirements that cannot be implemented, verified, and completed together.

#### Requirements vs Design

- Classify by responsibility, not technicality:
  - requirements: required outcomes, external conditions, compatibility obligations, AC;
  - design: adopted choice among otherwise valid implementation approaches.
- Do not reclassify just to normalize taxonomy. Move only when current placement materially obscures responsibility, duplicates harmfully, or wrongly constrains/frees future implementations. If ambiguous intent, preserve placement pending decision.

#### Current-Realization Authority

- Discovery in implementation/tests ≠ normative adoption.
- First classify CR fact vs required outcome/constraint vs adopted implementation constraint.
- Promote only independently adopted required outcomes → requirements; adopted implementation constraints → design. Transient CR → `workbench/`; durable non-normative CR → `references/`.
- New realization-specific precision narrowing future valid implementations requires adoption evidence independent of mere implementation/test presence.
- Existing normative statement remains effective until explicitly changed/retired, but placement alone does not prove intentional adoption of implementation-derived detail.
- Concrete provenance/intent doubt → root Review Principles; preserve current authority while unresolved. Do not silently delete/generalize/reconfirm.
- Do not research history routinely; investigate when specific evidence creates material doubt (implementation-first sync, conflicting adoption record, unexplained realization-specific precision). Later explicit adoption can validly make CR detail normative.

#### Brownfield / Current Design

- Active normative design describes adopted end state, not stale transition steps. After completed migration/refactor/rename/rollout, remove obsolete stages/names/temp compatibility/superseded targets from active design; retain useful history non-normatively.
- Mixed normative + CR/maintenance content: prevent authority leakage. Separate when readers/update triggers/authority differ and usability survives; otherwise mark sections/authority explicitly. Do not duplicate facts just to separate.
- After separation validate both:
  - without `products/`, normative sources still support semantic reconstruction;
  - without current realization/external source, retained references preserve enough provenance/observation context to re-investigate mappings without becoming normative.
- Brownfield authority cleanup includes affected responsibility's entry points/summaries (indexes, scope/overview, active transition/migration design, traceability, testing indexes/catalogs, status, retained verification/reference links) for the same leakage/stale duplication; keep sweep scoped.

#### Governance Migration

- Covers changed semantics + all materially affected existing cases. Unresolved cases remain explicit debt/unverified; do not claim migration complete while any remain.
- Unrelated discovered issues do not expand migration scope and retain root severity/escalation.
- Changing/removing/consolidating verification material must keep claims ≤ remaining applicable VB.
- When classification/routing/retention rules change, inspect affected execution/evidence records in all current locations + inbound links/index/status/traceability.
- For each record decide: supports current claim and must remain, continuing non-normative reference value, active work, or retire.
- Do not migrate solely because legacy placement differs from new default; do not promote solely because historical; do not create repository-wide execution archive.
- Temporary legacy placement is allowed only to avoid losing current VB/breaking dependent links while reconciliation is unresolved; mark as deferred migration, keep remaining reconciliation discoverable, and do not claim full reconciliation.
- Resolve safely to current model: native/external VB, `workbench/` active material, `references/` durable non-normative material, retire no-need material, `plans/` only current SoT semantics.
- Execution/evidence mixed into requirements/design/testing: classify at statement/section level before relocation. Keep verification thresholds/observations/sufficiency in testing; active execution material → workbench; durable non-normative → references; reconcile inbound links.
- Existing implementation is current-realization evidence, not automatic SoT authority; documentation silence also does not authorize opportunistic re-architecture.
- Docs/implementation/tests disagreement → root Review Principles; update responsible SoT within authority.
- Adopted facts from `references/` and settled workbench decisions must be reflected in responsible SoT; neither is adoption record.

## Evidence and Verification

### Status and Traceability

Only these non-hidden files directly under `plans/`:

| Document | Role | Trigger |
|---|---|---|
| `AGENTS.md` | protected instructions | explicit governance change |
| `CURRENT_STATUS.md` | aggregate lifecycle/implementation/verification state, material limits/blockers, next work | state/limit/blocker/priority change |
| `GLOSSARY.md` | shared terms/abbreviations/state expressions | shared meaning change |
| `TRACEABILITY.md` | system/cross-app relationships, concise coverage, app traceability index | relationship/link/coverage change |

#### Status and Traceability Rules

- Before initialization, three project-specific files remain zero bytes; after, approved language.
- `CURRENT_STATUS.md`: distinguish unimplemented/implemented/verified; no speculation. Keep capability, material limits/blockers, next work, links to traceability/VB. Remove/relocate stale execution narratives, run/version IDs, counts, output/history.
- `GLOSSARY.md`: only project-wide shared meanings.
- Root `TRACEABILITY.md`: system/cross-app relationships, app links, concise coverage, unresolved/unverified summary.
- App detail → `<app>_traceability.md`, linked from root traceability + app index.
- Trace independently approved requirement/AC → responsible design/implementation/VB. Prefer responsibility/module/directory granularity; file/class/function/line only when needed.
- Aggregate trace entries only when design responsibility, implementation responsibility, VB, and coverage materially match and each item remains independently judgeable.
- Traceability may show concise unimplemented/implemented/partially verified/verified state; no detailed run history, exact counts/hashes/output/long narratives.
- Update status/traceability when lifecycle/verification state, material limitations, priority work, relationships, links, or summarized completion basis changes.
- No placeholder IDs or unsettled relationships presented as settled.
- Conversation report ≠ required status/traceability/SoT update.

### Verification Basis (VB)

- Execution-specific results/evidence are working material by default; verification does not require a dedicated repository evidence file.
- Project-managed active evidence → `workbench/`.
- Native/external execution records may remain in their execution system or external medium when sufficient and no project-managed retention need exists.
- A current verified claim requires an available, applicable VB sufficient to reassess its scope.
- VB may be native/external record, retained workbench material, promoted reference, or proportional summary; Markdown/repository storage is not required.
- Preserve proportionally: actual target/state, relevant conditions, method, result, directly verified scope, material unverified scope.
- Prefer stable identity when available (commit/release/version/digest/deployment/dataset/snapshot/etc.). Mutable branch/environment/host labels are context only. Without stable ID, record time/state/conditions/scope sufficiently to prevent unsafe inference. No Git/CI/tool requirement.
- External/expirable VB: make material retention/expiry/freshness/revalidation boundary discoverable. Recheck after boundary or when continued availability/applicability is uncertain before relying on the claim for completion/transition/status/acceptance.
- Deleted/expired/unavailable/inapplicable/superseded-without-justification VB → downgrade affected verified claim until sufficient verification exists.
- Evidence is scoped to directly exercised/observed behavior/conditions/boundaries. Presence/source inspection/syntax/static analysis/adjacent success ≠ unexercised runtime verification.
- Mark requirement/AC/completion/lifecycle state verified only when all required observable parts/conditions have sufficient evidence; otherwise record verified subset + unverified scope.
- Advance lifecycle only with documented transition conditions + required evidence.
- Record method/result/verified scope/evidence type/material unverified matters proportionally; fixture/mock/real DB/manual/live/historical evidence are not interchangeable.
- Carrying earlier evidence to later target/state requires evidence that relevant differences do not affect verified scope, environment/config/conditions, applicable requirements/AC, or testing sufficiency rules. Identity lineage or “unrelated change” assumption alone is insufficient; compare appropriate implementation/config/deployment/snapshot state or reverify.
- Status/traceability/index links to evidence/reference must point to material applicable to asserted state.

#### Retention

- Durable non-normative knowledge/artifact with continuing evidential/diagnostic/maintenance/interoperability/audit/re-investigation value → `references/`; do not promote every run/history.
- Any normative result → responsible requirements/design/testing SoT, not reference authority.
- Workbench VB is transitional while serving active work, immediate handoff, unresolved reconciliation, or a **bounded post-work transition** with a specific exit event (e.g. identified re-verification, lifecycle transition, basis replacement/reconciliation).
- “Keep for now” / “reverify later” without specific exit event is not bounded.
- If exit event is missed/cancelled/deferred into open-ended dependency, or claim must outlive transitional responsibility and remaining basis is inadequate: use suitable durable native/external VB, promote minimum needed material to `references/`, or downgrade claim.
- Multiple partial bases may jointly be sufficient; one proportional basis may support multiple related claims. No per-claim/per-run file requirement.
- For bounded transition, make effective exit event + intended disposition discoverable enough to determine pending/occurred/cancelled/deferred/replaced. No fixed date/ID/metadata file/history archive required.
- At exit event: retire/replace/re-evaluate VB or downgrade claim. Expired bounded-transition rationale cannot alone support verified state.
- Do not dispose of current effective VB until no current verified claim depends on it, or replacement/downgrade is complete.

## Structural Maintenance and Verification

### Verification and Structural Changes

- Run project-defined documentation verification for doc changes.
- Validate changed Markdown links, fixed files, index coverage, IDs, traceability with project checks when available.
- Governance change altering allowed doc location/hierarchy must update every affected validator/generator/template/example/check in same migration; old-structure validation is not evidence for new structure.
- Index checks must support direct-link + nested-reachability + protected-instruction exclusions; do not assume flat system docs.
- Requirement/design/testing/traceability discovery must follow supported indexed hierarchy, including nested system docs; do not assume fixed/flat source set.
- Verify lifecycle state matches exactly one Lifecycle row and project statements have approval/evidence.
- Derived/summary docs repeating normative IDs, PK/FK, cardinalities, RBs, contracts, relationships must match responsible SoT. Repetition does not create alternate authority. Prefer automated comparison for intentionally repeated structured facts when practical; otherwise keep manual responsibility explicit.
- Do not add a document category/directory when current model can represent the responsibility. Responsibility grouping under `plans/system/` is not a new classification when rules above are met.
- Before new `plans/` directory: explain responsibility + effect on classifications and obtain user approval; approved init/change summary suffices.
- Add/rename/move/delete indexed docs: inspect inbound links, indexes, status, traceability, workbench, reference-retention needs; reconcile same change.
- Preserve identifiers when splitting/moving; do not duplicate detail between overview/detail docs.
