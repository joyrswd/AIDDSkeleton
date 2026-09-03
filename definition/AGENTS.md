# AIDD Definition and Sources of Truth Instructions

## General Provisions

### Scope

- Applies to `definition/` and descendants; inherits root governance.

### Responsibility

- `definition/` owns project-specific adopted definition, lifecycle/status/traceability, procedures, identifiers, commands, constraints, and VB rules.

## Documentation Organization

### Required Structure

- Clone-ready fixed entries: `definition/AGENTS.md`, `definition/GLOSSARY.md`, `definition/TRACEABILITY.md`, `definition/system/.gitkeep`, and `definition/apps/.gitkeep`.
- Per approved app, create:
  - `definition/apps/<app>/<app>_index.md`;
  - `definition/apps/<app>/<app>_traceability.md`;
  - `definition/apps/<app>/requirements/<app>_requirements_index.md`;
  - `definition/apps/<app>/design/<app>_design_index.md`;
  - `definition/apps/<app>/testing/<app>_testing_index.md`.

| Location | Responsibility |
|---|---|
| `definition/system/system_index.md` | System overview, RBs, current system/cross-app state, material limits/blockers, documentation map, reading order |
| `definition/system/documentation_language.md` | Default documentation language + explicit app overrides |
| other `definition/system/` docs | System-owned purpose, requirements, structure, constraints, development/operational methods |
| `<app>_index.md` | App overview, RBs, current app state, material limits/blockers, reading order, category entries, traceability |
| `<app>_traceability.md` | Normative → implementation/VB relationships + concise coverage |
| category indexes | Category docs, questions answered, order, absence/inheritance |
| `requirements/` | Required outcomes/constraints |
| `design/` | Adopted implementation structure/approach/contracts/algorithms/invariants/constraints |
| `testing/` | Verification strategy/specifications: what must be shown and what evidence is sufficient |

- `definition/system/` and `definition/apps/` are required classifications; remove `.gitkeep` when tracked content makes it unnecessary.
- No `definition/README.md`; use indexes for navigation and `AGENTS.md` for instructions.
- Create `definition/apps/<app>/` only after app name + responsibility approval; use the same approved `<app>` under `definition/` and `products/`, never a literal/invented placeholder.
- Keep fixed system entry docs directly under `definition/system/`.
- Required app category dirs/indexes do not require detail docs. If none, the index states explicit absence/inheritance/cross-cutting source; design may state no additional normative implementation constraints.

### Placement and Navigation

- One purpose per project doc; split by coherent responsibility/question/reader/update trigger/lifecycle, not tidiness or count alone.
- Other system docs stay flat while responsibility is small; use a responsibility-based subdirectory only when one stable system responsibility owns multiple independently changing docs.
- Indexes provide navigation plus concise owned current-state/absence/inheritance/coverage context; do not duplicate detailed requirements/design/testing/procedures/results.
- System navigation: `system_index.md` is primary; directly link each Markdown doc directly under `definition/system/` except itself. Nested docs may route through a local index but must remain reachable; protected `AGENTS.md` is excluded.
- App navigation: `<app>_index.md` → three category indexes + app traceability; category index → its docs.
- Initialized read order: `definition/system/system_index.md` → `definition/system/documentation_language.md` → `definition/GLOSSARY.md` → `definition/TRACEABILITY.md` → target indexes.
- Determine ownership from purpose + change authority + invocation/governing decision + success/failure (or sufficiency) judgment, not target/caller/tool/file name/operational vocabulary.
  - App-owned execution/diagnostic procedure → directly under the app, linked from `<app>_index.md`; system-owned or cross-app procedure → `definition/system/`.
  - Multiple targets do not prove system ownership; one app target does not prove app ownership; never choose a participating app as representative owner or duplicate system responsibility per app.
  - Shared tools/observability/deployment/system environments/`etc/` config do not transfer ownership. For shared system execution with app-specific prerequisites/commands/AC/constraints, keep shared responsibility in system procedure and only app-owned delta in the app.
  - Normative testing uses the same ownership test. Testing responsibility always exists for formal implementation; if no app testing detail doc, the testing index names inherited/cross-cutting policy. Testing indexes may link current VB for coverage but contain no execution history.
  - Adopted procedures/policy/constraints → `definition/`; environment configuration → `etc/`; application tests and formal generators/viewers/verifiers → `products/`.
  - Durable non-normative current-realization knowledge → `references/`; retain only when continuing value exists and preserve provenance/scope/freshness/revalidation per `references/AGENTS.md`.

### Documentation Language

- Initialization summary proposes a default; absent user choice, propose current conversation language.
- After approval, record one BCP 47 default in `definition/system/documentation_language.md`, with only explicit app overrides. System/cross-app docs use default; app docs inherit unless overridden.
- Never infer language/override from code, supplied material, later conversation language, or environment; conversation language is independent after initialization.
- On adoption/promotion into `definition/`, preserve semantics in the destination's effective documentation language while preserving identifiers, code/protocol literals, proper names, standard technical notation, and intentionally fixed wording/language.
- Change documentation language only on explicit user request; supplied originals under `references/` need not be translated.
- Do not duplicate the language setting in another machine-readable file; language-setting changes update relevant index guidance.

### Document Splitting

Applies only to initialized project-specific SoT docs; excludes protected `AGENTS.md`.

- Review split at ≥150 lines, ≥12 independently referenced identifiers, or ≥3 independently changing functional areas.
- As a rule split >250 lines or >20 independently referenced identifiers; if retained, the index records reason + reconsideration condition.
- Split by coherent responsibility/question/reader/update trigger/lifecycle, not line count alone; document count alone does not justify a subdirectory.
- Keep `system_index.md`, `<app>_index.md`, category indexes, and root `TRACEABILITY.md` as single entry points.
- If app traceability exceeds thresholds, keep `<app>_traceability.md` as entry point and move coherent detail into indexed app docs.

## Lifecycle

### Initialization

| State | `definition/GLOSSARY.md`, `definition/TRACEABILITY.md` | `definition/system/system_index.md`, `definition/system/documentation_language.md` | Markers |
|---|---|---|---|
| Uninitialized | present, zero bytes | absent | `definition/system/.gitkeep`, `definition/apps/.gitkeep` present |
| Initialized | present, approved-language content | both present | `definition/system/.gitkeep` absent; `definition/apps/.gitkeep` only while no app docs exist |
| Inconsistent | any other combination | any other combination | reconcile before formal work |

- Initialized requires purpose, scope, RBs, and required project SoTs to be approved and recorded; fixed skeleton files/markers alone do not establish project facts or initialization, and uninitialized/inconsistent state must not be used to infer project facts.
- Initialization content comes from the root initialization-summary authorization; do not re-request authorized documents/directories/assumptions.
- Initialize atomically: create `documentation_language.md` and `system_index.md`, populate the two cross-cutting files in approved language, and remove `definition/system/.gitkeep`.
- Define at least:
  - purpose, users, scope, exclusions;
  - system/app RBs;
  - requirements/design/testing SoTs;
  - observable AC + open questions;
  - lifecycle identifiers/states/transitions/end boundary;
  - implementation entry/completion criteria, standard verification, VB retention expectations;
  - applicability + reasons for security, privacy, accessibility, performance, availability, monitoring, retention, recovery, licensing.
- Open questions require a decision point + blocking effect. If release/operation/retirement is outside lifecycle, record end boundary + handoff; if inside, define transitions/completion + feedback route.

### Entry and Completion

- Implementation entry requires applicable requirements/AC, RBs, adopted approach (or explicit no additional design constraint), verification method, and no unresolved Blocker.
- Completion requires implementation/configuration, required verification, requirements/design/tests/implementation consistency, responsible index current-state + traceability updates, and no unresolved Blocker or In-scope deficiency.
- Disposition cannot waive approved scope, adopted AC, or another completion condition. Dispositioned Follow-ups do not block completion unless new evidence justifies reclassification or exposes another unmet condition.

### Reset

- Do not delete either fixed system document independently.
- Reset to uninitialized only through explicitly approved atomic lifecycle reset: remove project-specific system/app docs, delete both fixed system docs, empty the two cross-cutting files, restore both markers, and verify whole state.

## Local Governance

### Definition Authority

#### Normative and SoT Authority

- Normative content constrains future valid implementations and must remain usable without current `products/`; applicable requirements/design/testing together must support independent implementation with the same intended outcomes, adopted contracts/RBs, fixed algorithms/invariants, and equivalent acceptance intent.
- Goal is semantic reconstruction, not source reproduction/operational restoration. Incidental implementation details are not required unless independently adopted constraints/contracts; design may remain concrete when intentionally constraining future valid implementations.
- One responsible adopted SoT per project fact; no duplicate detail or parallel `current`/`target` variants/equivalent views. Candidate replacements, target states, and alternatives → `jobs/`; keep them non-authoritative and preferably express them as deltas against the current SoT.
- Approved future intent may live in `definition/` when it is itself the document's responsibility, not as a parallel candidate SoT. Distinguish assumed/decided/open; proposal/unapproved assumption ≠ settled fact.
- Requirements own required outcomes, external conditions, compatibility obligations, and AC; design owns adopted choices among otherwise valid implementation approaches; testing owns required verification, method/observation, and sufficient evidence.
- Completion criteria must be observable; split requirements that cannot be implemented, verified, and completed together.
- Semantic exhaustive domains/matrices/transitions/enumerations remain normative even when they imply cardinality; verification may use any evidence form appropriate to AC.
- Before removing, abstracting, or relocating materially constraining content, preserve its adopted semantics in the responsible SoT unless the applicable authority process explicitly changes or retires it.
- Treat loss of adopted timezone/unit/protocol-version/transaction-isolation/identity/cardinality/ordering/security/compatibility or similar invariant as normative change, not cleanup.
- State design constraints normatively; do not delegate design authority to current source/config/test/generated artifacts. Current test implementation details and execution results remain non-normative unless independently adopted.

#### Realization Authority

- First classify a realization-derived fact as current realization, required outcome/constraint, or adopted implementation constraint.
- Independently adopted required outcomes → responsible requirements SoT; independently adopted implementation constraints → responsible design SoT; transient current realization → `jobs/`; durable non-normative current realization → `references/`.
- Source paths/private helpers/classes/functions/state fields/DOM IDs/current directory layout/implementation status remain current-realization detail unless independently adopted.
- Adoption of implementation-derived detail into design requires evidence independent of implementation/test presence that the project intends it as a future constraint, such as effect on an adopted contract, RB, dependency direction, security/correctness/operational property, chosen algorithm, or reimplementation acceptability.
- Existing normative statements remain effective until explicitly changed/retired.
- Do not reclassify merely to normalize taxonomy. Move only when current placement materially obscures responsibility, duplicates harmfully, or wrongly constrains/frees future implementations; if intent is ambiguous, preserve current authority/placement pending decision.
- When concrete provenance/intent evidence creates material doubt, preserve current authority while unresolved and use root correction/assessment rules. Investigate history only when such evidence makes it relevant; later explicit adoption may validly make realization detail normative.
- Mixed normative/execution content is classified at statement/section level: normative verification intent stays in testing; execution material follows Verification Basis lifecycle.

### Reconciliation and Migration

- Active normative design describes adopted end state, not stale transition stages. After completed migration/refactor/rename/rollout, remove obsolete stages/names/temp compatibility/superseded targets from active design and retain useful history non-normatively.
- Prevent authority leakage in mixed normative + current-realization/maintenance content. Separate when authority/readers/update triggers differ and usability survives; otherwise mark authority explicitly. Do not duplicate facts merely to separate.
- After separation validate both: normative sources still support semantic reconstruction without `products/`, and retained references preserve enough provenance/observation context to re-investigate without becoming normative.
- Reconciliation affecting authority, ownership, navigation, current state, traceability, or verification claims must inspect and reconcile the affected SoTs, indexes, traceability, VB, inbound links, and retained job/reference material in the same coherent change.
- Governance migration covers changed semantics and all materially affected existing cases; unresolved cases remain explicit debt/unverified. Unrelated discoveries do not expand migration scope.
- When classification/routing/retention rules change, classify affected execution/evidence records as current claim-supporting basis, durable non-normative reference, active work, or retire; do not migrate solely because legacy placement differs or content is historical.
- Temporary legacy placement is allowed only to avoid losing current VB or breaking dependent links while reconciliation is unresolved; mark remaining reconciliation discoverably and do not claim full reconciliation.
- Active material → `jobs/`; durable non-normative material → `references/`; current SoT semantics → `definition/`; use native/external VB when suitable for current claim support and retire no-need material.
- Adopted facts from `references/` and settled job decisions → responsible `definition/` SoT; neither location is an adoption record.

### Procedures

- Applicable project procedures define reproducible prerequisites and steps for setup, execution, analysis, testing, documentation checks, deployment, migration, rollback, and operation.

### State and Traceability

- Only `AGENTS.md`, `GLOSSARY.md`, and `TRACEABILITY.md` are non-hidden files directly under `definition/`. Before initialization, the latter two remain zero bytes; after initialization, use the approved language.
- `system_index.md` owns concise current lifecycle/implementation/verification state and material limits/blockers for system/cross-app responsibilities; each `<app>_index.md` owns the same for its app.
- Distinguish unimplemented/implemented/verified with no speculation; link traceability/VB when needed. Index state is responsibility-level summary, while relationship/coverage detail remains in traceability; do not duplicate run/version IDs, counts, output, or execution history.
- Active execution sequence, priority, next work, and transient job-specific blockers → `jobs/`; keep them out of project-definition state. A limitation/blocker belongs in a definition index only when it materially describes current accepted state of that responsibility.
- `GLOSSARY.md` owns only project-wide shared meanings.
- Root `TRACEABILITY.md` owns system/cross-app relationships, app links, concise coverage, and unresolved/unverified summary. App detail → `<app>_traceability.md`, linked from root traceability + app index.
- Trace independently approved requirement/AC → responsible design/implementation/VB. Prefer responsibility/module/directory granularity; use file/class/function/line only when needed.
- Aggregate trace entries only when design responsibility, implementation responsibility, VB, and coverage materially match and each item remains independently judgeable.
- Traceability may show concise unimplemented/implemented/partially verified/verified state but not detailed run history, exact counts/hashes/output/long narratives; no placeholder IDs or unsettled relationships presented as settled.

### Verification Basis

- Execution-specific results/evidence are working material by default; verification does not require a dedicated repository evidence file. Project-managed active evidence → `jobs/`; sufficient native/external execution records may remain external.
- A current verified claim requires an available, applicable VB sufficient to reassess its scope. VB may be native/external record, retained `jobs/` material, promoted reference, or proportional summary; repository/Markdown storage is not required.
- Preserve proportionally: actual target/state, relevant conditions, method, result, directly verified scope, material unverified scope.
- Prefer stable identity when available; mutable branch/environment/host labels are context only. Without stable ID, record enough time/state/conditions/scope to prevent unsafe inference; no Git/CI/tool requirement.
- Make material retention/expiry/freshness/revalidation boundaries discoverable for external/expirable VB and recheck when required before relying on claims.
- Deleted/expired/unavailable/inapplicable/superseded-without-justification VB → downgrade affected verified claim until sufficient verification exists.
- Evidence supports only directly exercised/observed scope. Mark requirement/AC/completion/lifecycle state verified only when all required observable parts/conditions have sufficient evidence; otherwise record verified subset + unverified scope.
- Advance lifecycle only with documented transition conditions + required evidence. Record method/result/verified scope/evidence type/material unverified matters proportionally; materially different evidence conditions are not interchangeable.
- Carry earlier evidence to a later target/state only when evidence shows relevant differences do not affect verified scope, environment/config/conditions, applicable requirements/AC, or testing sufficiency; identity lineage or an “unrelated change” assumption alone is insufficient.
- Index/traceability links to evidence/reference must point to material applicable to the asserted state.

#### Retention

- Durable non-normative knowledge/artifact with continuing evidential/diagnostic/maintenance/interoperability/audit/re-investigation value → `references/`; normative results → responsible requirements/design/testing SoT.
- `jobs/` VB is transitional only while serving active work, immediate handoff, unresolved reconciliation, or a bounded post-work transition with a specific exit event. “Keep for now” / “reverify later” without one is not bounded.
- If that exit event is missed/cancelled/deferred into open-ended dependency, or the claim must outlive transitional responsibility and remaining basis is inadequate, use suitable durable native/external VB, promote the minimum needed material to `references/`, or downgrade the claim.
- Multiple partial bases may jointly suffice and one proportional basis may support multiple related claims; no per-claim/per-run file requirement.
- For bounded transition, make the effective exit event + intended disposition discoverable enough to judge its state; no fixed date/ID/metadata file/history archive is required. At the event, retire/replace/re-evaluate VB or downgrade the claim.
- Do not dispose of current effective VB until no current verified claim depends on it, or replacement/downgrade is complete.

### Maintenance and Validation

- Governance changes altering allowed doc location/hierarchy must update every affected validator/generator/template/example/check in the same migration; old-structure validation is not evidence for the new structure.
- Index checks must support direct-link + nested reachability + protected-instruction exclusions; requirement/design/testing/traceability discovery must follow the supported indexed hierarchy rather than assume a flat source set.
- Do not add a document category/directory when the current model can represent the responsibility; responsibility grouping under `definition/system/` is not a new classification when the placement rules are met. Before a new `definition/` directory, explain responsibility + classification effects and obtain user approval; approved init/change summary suffices.
- Add/rename/move/delete indexed docs using Reconciliation and Migration; preserve identifiers when splitting/moving and do not duplicate detail between overview/detail docs.
- Run all project-defined documentation verification for documentation changes when available; at minimum cover changed Markdown links, fixed files, index coverage, IDs, and traceability.
- Verify lifecycle state matches exactly one Initialization row and project statements have approval/evidence.
- Derived/summary docs repeating normative IDs, PK/FK, cardinalities, RBs, contracts, or relationships must match the responsible SoT. Repetition does not create alternate authority; prefer automated comparison for intentionally repeated structured facts when practical, otherwise keep manual responsibility explicit.
