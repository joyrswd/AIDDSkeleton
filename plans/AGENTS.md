# AIDD Plans and Sources of Truth Instructions

## General Provisions

### Scope

- Applies to `plans/` and descendants; inherits root governance.

### Responsibility

- `plans/` owns project-specific adopted definition, lifecycle/status/traceability, procedures, identifiers, commands, constraints, and VB rules.

## Structure and Placement

### Required Structure

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
| `testing/` | Verification strategy/specifications: what must be shown and what evidence is sufficient |

- `plans/system/` and `plans/apps/` are required classifications. Remove `.gitkeep` when tracked content makes it unnecessary.
- No `plans/README.md`; use indexes for navigation, `AGENTS.md` for instructions.
- Create `plans/apps/<app>/` only after app name + responsibility approval; never literal `<app>` or invented temporary name.
- Same approved `<app>` under `plans/apps/` and `products/apps/`.
- Keep fixed system entry docs directly under `plans/system/`.
- Required app category dirs/indexes do not require detail docs. If none: index states explicit absence/inherited or cross-cutting source.
- Do not create detail docs just to fill a category. Design may explicitly state no additional normative implementation constraints.

### Placement

- One purpose per project doc; split boundaries by question, reader, update trigger, lifecycle.
- Other system docs:
  - flat while responsibility is small;
  - responsibility-based subdirectory only when one stable system responsibility owns multiple independently changing docs;
  - never group merely by count, tidiness, requirements/design/testing type, tool, or framework.
- Verification responsibility always exists for formal implementation; if no app testing detail doc, testing index names inherited/cross-cutting policy.
- Testing indexes may link current VB for coverage but must not contain execution history.

### Navigation

- Indexes = navigation + concise absence/inheritance/coverage context, not duplicated detailed requirements/design/testing/procedures/results.
- System navigation:
  - `system_index.md` is primary;
  - directly link each Markdown doc directly under `plans/system/` except itself;
  - nested docs may route through a local index but must remain reachable from `system_index.md`;
  - protected `AGENTS.md` excluded;
  - local index only when responsibility needs navigation;
  - do not duplicate the same detailed list at multiple levels.
- App navigation: `<app>_index.md` → three category indexes + app traceability; category index → its docs.
- Initialized read order: `plans/CURRENT_STATUS.md` → `plans/system/system_index.md` → `plans/system/documentation_language.md` → `plans/GLOSSARY.md` → `plans/TRACEABILITY.md` → target indexes.

### Responsibility Placement

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
- Splitting or document count alone does not justify a subdirectory.
- Keep `system_index.md`, `<app>_index.md`, category indexes, root `TRACEABILITY.md` as single entry points.
- If app traceability exceeds thresholds, keep `<app>_traceability.md` entry point and move coherent detail into indexed app docs.

## Lifecycle

### Initialization

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

### Lifecycle Boundary

- Open questions require a decision point + blocking effect.
- If release/operation/retirement is outside lifecycle: record end boundary + handoff. If inside: define transitions/completion + feedback route.

### Implementation Entry

- Requires applicable requirements/AC, RBs, adopted approach (or explicit no additional design constraint), verification method, and no unresolved Blocker.

### Completion

- Requires implementation/configuration, required verification, requirements/design/tests/implementation consistency, and status + traceability updates.
- Dispositioned Follow-up/Defer/Observe/Reject inputs do not block completion unless they expose an unresolved Blocker, unsatisfied adopted AC, or unmet lifecycle transition condition.

### Reset

- Do not delete either fixed system document independently.
- Reset to uninitialized only through explicitly approved atomic lifecycle reset: remove project-specific system/app docs, delete both fixed system docs, empty three cross-cutting files, restore both markers, verify whole state.

## Local Governance

### Review

Formal review evaluates adopted project definition and its realization/verification against approved purpose, scope, exclusions, observable AC, and applicable decisions. Review findings remain assessment inputs under root Assessment and Feedback; they are not commands, adoption records, or modification authority by themselves.

#### Review Map

- For a substantial initial review, establish a proportional review map before detailed findings: target/scope, governing SoTs/approved decisions, major review areas, known exclusions, and materially unreviewed/uncertain areas.
- Present the review map before detailed findings when the output contract permits it. If the transport accepts findings only or otherwise forbids additional review-map prose, keep the map internal and preserve relevant scope/exclusion/uncertainty information through available output fields when practical.
- Review breadth-first enough to expose material concerns reasonably discoverable from the current state before entering iterative remediation; do not intentionally serialize discoverable findings into avoidable review rounds.
- Update the map when new evidence or a material change legitimately expands or alters what must be checked.

#### Review Order and Root Cause

For disagreement among project definition, realization, and evidence:

1. Validate applicable requirements/design/testing/approved decisions for completeness, consistency, currency, and applicability.
2. Check implementation/configuration against validated SoTs.
3. Check verification method/evidence against required conformity.

Classify root cause independently of root severity/disposition:

- **SoT deficiency**
- **Implementation deficiency**
- **Verification deficiency**
- **Unresolved decision**

For SoT deficiency, apply root Coherent Correction; get user decision when correction materially changes approved intent, scope, AC, RB, or design.

#### Findings and Disposition

- Classify severity/scope and current handling under root Assessment and Feedback.
- A valid improvement can remain Follow-up/Defer/Observe and need not become current acceptance work.
- If a finding requires a material user-owned decision, surface that decision instead of changing SoT/implementation to satisfy the reviewer.
- Closing a review means judging acceptability within the approved scope, not implementing every suggestion.

#### Re-review and Closure

- Re-review previous Blockers/In-scope deficiencies first, then the changed areas and materially affected criteria; separate new Follow-ups and state current acceptability within approved scope.
- A new Blocker/In-scope deficiency in a later round is legitimate when introduced/exposed by the change, new evidence, previously unavailable state, or a concern not reasonably discoverable in the earlier review.
- If a material issue was reasonably discoverable earlier but appears only later, identify it as late-discovered and explain its impact; do not hide it, but do not treat serial discovery as a required review workflow.
- Dispositioned Follow-ups do not keep review open unless new evidence justifies reclassification.

### Normative Authority

- Normative content constrains future valid implementations and must remain usable without current `products/`.
- Applicable normative requirements/design/testing together must support independent implementation with the same intended outcomes, adopted contracts/RBs, fixed algorithms/invariants, and equivalent acceptance intent.
- Goal = semantic reconstruction, not source reproduction/operational restoration.
- Incidental implementation details are not required unless independently adopted constraints/contracts: source tree, private file/class/function/state names, exact lock, migration history, fixtures/scripts/artifacts, etc.
- Before removing/abstracting/relocating/changing authority of normative content:
  - classify each materially constraining statement;
  - preserve its semantics in the responsible normative SoT or explicitly change/retire it.
- Treat loss of adopted timezone/unit/protocol-version/transaction-isolation/identity/cardinality/ordering/security/compatibility or similar invariant as normative change, not cleanup.
- Moving between normative/non-normative locations changes authority; verify future valid implementations are not unintentionally broadened/narrowed.
- Design may be concrete when intentionally constraining future valid implementations (schema/contracts/protocol paths/transaction rules/security/RBs/algorithms/runtime/stable IDs).
- State design constraints normatively; do not delegate design authority to current source/config/test/generated artifact. Map current realization via traceability or non-normative workbench/reference material.
- Testing specs define required verification, method/observation, and sufficient evidence.
- Current test implementation details (private names/paths/migration filenames/fixture paths/test layout/current case/run counts/artifacts) are non-normative unless independently adopted.
- Semantic exhaustive domains/matrices/transitions/enumerations remain normative even if they imply cardinality.
- Verification may be automated, manual, visual, live-system, performance, security, operational, or other evidence appropriate to AC.

### Sources of Truth

#### Ownership

- One responsible adopted SoT per project fact; no duplicate detail or parallel `current`/`target` variants/equivalent views.
- Candidate replacements/target states/alternatives → `workbench/`; prefer delta against current SoT over copied current view.
- Approved future intent may live in `plans/` when it is itself the document's responsibility (e.g. lifecycle boundary/roadmap), not as a parallel candidate SoT.
- Distinguish assumed/decided/open. Proposal/unapproved assumption ≠ settled fact.
- AC/completion criteria observable; split requirements that cannot be implemented, verified, and completed together.

#### Classification

- Classify by responsibility, not technicality:
  - requirements: required outcomes, external conditions, compatibility obligations, AC;
  - design: adopted choice among otherwise valid implementation approaches.
- Execution results/evidence do not become normative by being produced by or stored near verification specifications.
- Mixed normative/execution content must be classified at statement/section level: keep normative verification intent in testing; active execution material follows Verification Basis lifecycle.
- Do not reclassify just to normalize taxonomy. Move only when current placement materially obscures responsibility, duplicates harmfully, or wrongly constrains/frees future implementations. If ambiguous intent, preserve placement pending decision.

#### Realization Authority

- First classify CR fact vs required outcome/constraint vs adopted implementation constraint.
- Promote only independently adopted required outcomes → requirements; adopted implementation constraints → design. Transient CR → `workbench/`; durable non-normative CR → `references/`.
- Source paths/private helpers/classes/functions/state fields/DOM IDs/current directory layout/implementation status remain current-realization detail unless independently adopted.
- Adopting implementation-derived detail into design requires evidence independent of mere implementation/test presence that the project intends the detail as a future constraint. Indicators include effect on an adopted contract, RB, dependency direction, security/correctness/operational property, chosen algorithm, or whether a reimplementation would otherwise be rejected.
- Existing normative statement remains effective until explicitly changed/retired, but placement alone does not prove intentional adoption of implementation-derived detail.
- Concrete provenance/intent doubt → Review above; preserve current authority while unresolved. Do not silently delete/generalize/reconfirm.
- Do not research history routinely; investigate when specific evidence creates material doubt (implementation-first sync, conflicting adoption record, unexplained realization-specific precision). Later explicit adoption can validly make CR detail normative.

#### Brownfield Reconciliation

- Active normative design describes adopted end state, not stale transition steps. After completed migration/refactor/rename/rollout, remove obsolete stages/names/temp compatibility/superseded targets from active design; retain useful history non-normatively.
- Mixed normative + CR/maintenance content: prevent authority leakage. Separate when readers/update triggers/authority differ and usability survives; otherwise mark sections/authority explicitly. Do not duplicate facts just to separate.
- After separation validate both:
  - without `products/`, normative sources still support semantic reconstruction;
  - without current realization/external source, retained references preserve enough provenance/observation context to re-investigate mappings without becoming normative.
- Brownfield authority cleanup includes affected responsibility's entry points/summaries (indexes, scope/overview, active transition/migration design, traceability, testing indexes/catalogs, status, retained verification/reference links) for the same leakage/stale duplication; keep sweep scoped.

### Governance Migration

- Covers changed semantics + all materially affected existing cases. Unresolved cases remain explicit debt/unverified; do not claim migration complete while any remain.
- Unrelated discovered issues do not expand migration scope and retain root severity/escalation.
- Verification-material migration follows Verification Basis rules.
- When classification/routing/retention rules change, inspect affected execution/evidence records in all current locations + inbound links/index/status/traceability.
- For each record decide: supports current claim and must remain, continuing non-normative reference value, active work, or retire.
- Do not migrate solely because legacy placement differs from new default; do not promote solely because historical; do not create repository-wide execution archive.
- Temporary legacy placement is allowed only to avoid losing current VB/breaking dependent links while reconciliation is unresolved; mark as deferred migration, keep remaining reconciliation discoverable, and do not claim full reconciliation.
- Resolve safely to current model: native/external VB, `workbench/` active material, `references/` durable non-normative material, retire no-need material, `plans/` only current SoT semantics.
- Legacy mixed normative/execution material must be reconciled using Classification and Verification Basis rules, including inbound links.
- Documentation silence does not authorize opportunistic re-architecture.
- Docs/implementation/tests disagreement → Review above; change the responsible SoT only when root-cause classification and authority require it.
- Adopted facts from `references/` and settled workbench decisions must be reflected in responsible SoT; neither is adoption record.

### Procedures

- Applicable project procedures define reproducible prerequisites and steps for setup, execution, analysis, testing, documentation checks, deployment, migration, rollback, and operation.

### State Documents

Only these non-hidden files directly under `plans/`:

| Document | Role | Trigger |
|---|---|---|
| `AGENTS.md` | protected instructions | explicit governance change |
| `CURRENT_STATUS.md` | aggregate lifecycle/implementation/verification state, material limits/blockers, next work | state/limit/blocker/priority change |
| `GLOSSARY.md` | shared terms/abbreviations/state expressions | shared meaning change |
| `TRACEABILITY.md` | system/cross-app relationships, concise coverage, app traceability index | relationship/link/coverage change |

- Before initialization, three project-specific files remain zero bytes; after, approved language.
- Conversation report ≠ required status/traceability/SoT update.

#### Status

- `CURRENT_STATUS.md`: distinguish unimplemented/implemented/verified; no speculation. Keep capability, material limits/blockers, next work, links to traceability/VB. Remove/relocate stale execution narratives, run/version IDs, counts, output/history.
- Do not convert retained workbench Defer/Observe items into `next work` merely because they exist; include them only when adopted/currently prioritized or when they materially constrain current state.

#### Glossary

- `GLOSSARY.md`: only project-wide shared meanings.

#### Traceability

- Root `TRACEABILITY.md`: system/cross-app relationships, app links, concise coverage, unresolved/unverified summary.
- App detail → `<app>_traceability.md`, linked from root traceability + app index.
- Trace independently approved requirement/AC → responsible design/implementation/VB. Prefer responsibility/module/directory granularity; file/class/function/line only when needed.
- Aggregate trace entries only when design responsibility, implementation responsibility, VB, and coverage materially match and each item remains independently judgeable.
- Traceability may show concise unimplemented/implemented/partially verified/verified state; no detailed run history, exact counts/hashes/output/long narratives.
- No placeholder IDs or unsettled relationships presented as settled.

### Verification Basis

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

### Structural Maintenance

- Governance change altering allowed doc location/hierarchy must update every affected validator/generator/template/example/check in same migration; old-structure validation is not evidence for new structure.
- Index checks must support direct-link + nested-reachability + protected-instruction exclusions; do not assume flat system docs.
- Requirement/design/testing/traceability discovery must follow supported indexed hierarchy, including nested system docs; do not assume fixed/flat source set.
- Do not add a document category/directory when current model can represent the responsibility. Responsibility grouping under `plans/system/` is not a new classification when rules above are met.
- Before new `plans/` directory: explain responsibility + effect on classifications and obtain user approval; approved init/change summary suffices.
- Add/rename/move/delete indexed docs: inspect inbound links, indexes, status, traceability, workbench, reference-retention needs; reconcile same change.
- Preserve identifiers when splitting/moving; do not duplicate detail between overview/detail docs.

### Governance Validation

- Run all project-defined documentation verification for documentation changes when available; at minimum cover changed Markdown links, fixed files, index coverage, IDs, and traceability.
- Verify lifecycle state matches exactly one Lifecycle row and project statements have approval/evidence.
- Derived/summary docs repeating normative IDs, PK/FK, cardinalities, RBs, contracts, relationships must match responsible SoT. Repetition does not create alternate authority. Prefer automated comparison for intentionally repeated structured facts when practical; otherwise keep manual responsibility explicit.