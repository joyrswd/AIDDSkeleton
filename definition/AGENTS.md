# AIDD Definition and Sources of Truth Instructions

This file defines area-specific governance for `definition/` and inherits repository governance.

## Area Foundations

### General Provisions

#### Scope

- Applies to `definition/` and descendants; inherits root governance.

#### Responsibility

- `definition/` owns project-specific adopted definition, lifecycle/status, procedures, identifiers, commands, constraints, and VB rules.

### Structure and Placement

#### Required Structure

- Clone-ready fixed entries: `definition/AGENTS.md`, `definition/agents.d/initialization.md`, `definition/agents.d/governance-migration.md`, `definition/agents.d/realization-authority.md`, `definition/agents.d/documentation-language.md`, `definition/agents.d/definition-maintenance.md`, `definition/.hooks/.gitkeep`, `definition/common/.gitkeep`, and `definition/units/.gitkeep`.
- Initialization replaces the two definition markers with the fixed project entry docs `definition/common/INDEX.md`, `definition/common/documentation_language.md`, and `definition/units/INDEX.md`.
- Per approved unit, create:
  - `definition/units/<unit>/INDEX.md`;
  - `definition/units/<unit>/requirements/INDEX.md`;
  - `definition/units/<unit>/design/INDEX.md`;
  - `definition/units/<unit>/testing/INDEX.md`.

| Location | Responsibility |
|---|---|
| `definition/common/INDEX.md` | Primary definition entry: project purpose/scope, project-level lifecycle/current state, material project-wide limits/blockers, common authority routing, cross-unit relationship routing, and the `units/INDEX.md` entry |
| `definition/common/documentation_language.md` | Default documentation language + explicit unit overrides |
| other `definition/common/` docs | Project-wide/cross-unit authority, policy, relationships, coordination, constraints, shared verification policy, and other common project facts |
| `definition/units/INDEX.md` | Approved unit catalog and routing to each unit `INDEX.md`; no duplicated unit detail |
| `definition/units/<unit>/INDEX.md` | Unit purpose/RB, concise current state, material limits/blockers, category entries, and applicable common/cross-unit authority |
| category `INDEX.md` files | Category docs, questions answered, order, absence/inheritance |
| `requirements/` | Required outcomes/constraints |
| `design/` | Adopted implementation structure/approach/contracts/algorithms/invariants/constraints |
| `testing/` | Verification strategy/specifications: what must be shown and what evidence is sufficient |

- `definition/common/` and `definition/units/` are the required project-definition classifications; clone-ready markers are required for a complete `Uninitialized` state, but their presence alone does not establish that state, and partial reset states remain `Inconsistent`.
- `definition/agents.d/` contains conditional definition governance under the root `agents.d/` loading protocol; it is not project-definition content and is excluded from project document placement/navigation.
- `definition/AGENTS.md` is the only non-hidden file directly under `definition/`; project-specific docs belong under `definition/common/` or an approved `definition/units/<unit>/` according to responsibility.
- No `definition/README.md`; use indexes for navigation and `AGENTS.md` for instructions.
- Required unit category directories/indexes do not require detail docs. If none, the category index states explicit absence/inheritance/applicable common authority; design may state no additional normative implementation constraints.

#### Placement and Navigation

- One purpose per project doc; split by coherent responsibility/question/reader/update trigger/lifecycle, not tidiness or count alone.
- Common docs stay flat while responsibility is small; use a responsibility-based subdirectory only when one stable common responsibility owns multiple independently changing docs.
- Indexes provide navigation plus concise owned current-state/absence/inheritance/coverage context; do not duplicate detailed requirements/design/testing/procedures/results or identifier-level cross-artifact correspondence matrices.
- Common navigation: `common/INDEX.md` is primary; directly link each Markdown doc directly under `definition/common/` except itself and directly link `definition/units/INDEX.md`. A local common index is allowed only when one common responsibility needs navigation; nested docs routed through it must remain reachable from `common/INDEX.md`; protected `AGENTS.md` is excluded. `common/INDEX.md` routes project-wide/cross-unit relationships to their responsible SoTs but does not duplicate unit detail.
- Unit navigation: `units/INDEX.md` directly links every approved unit `INDEX.md`. Each unit `INDEX.md` links its three category indexes plus applicable common/cross-unit authority; when none applies, state that explicitly. Category index → its docs.
- Within an approved unit, keep project docs within the fixed unit/category hierarchy while responsibility is small. Add a responsibility/component-based subdirectory only when one stable subordinate responsibility has multiple independently changing docs or needs local navigation. A nested `INDEX.md`, when used, is a routing artifact for that subordinate responsibility and does not create independent authority; link it from the applicable unit/category index, and keep every nested project doc reachable through the unit's indexed hierarchy.
- Initialized read order: `definition/common/INDEX.md` → `definition/common/documentation_language.md` → `definition/units/INDEX.md` → target unit/common indexes and SoTs.
- Determine responsibility from purpose, RB, governing/change authority, owned outcome/acceptance boundary, and success/failure/sufficiency/completion judgment—not target/caller/tool/file/path name, target count, reuse, shared infrastructure, or operational vocabulary.
  - **Unit**: a bounded responsibility with an independently identifiable purpose/RB, governing/change authority, owned outcome, and acceptance/completion judgment. Project-wide or cross-unit scope does not make it Common: when these Unit criteria are satisfied, classify the responsibility as a Unit. Explicit dependency on common authority or another unit is allowed when the unit still owns its own boundary and completion judgment. Missing future realization/design/testing work does not by itself negate an already adopted unit boundary; if the boundary or material governing decision is still unresolved, keep that candidate material non-authoritative under `jobs/`.
  - **Common**: project-wide/cross-unit authority, policy, relationship, coordination, constraint, shared verification policy, or project-level state that does not own an independently completable project outcome. Common may own requirements, verification method/sufficiency, and implementation/verification completion judgments for its own policy/gate/coordination realization when those judgments only establish fulfillment of the common role rather than completion of an independently bounded project outcome.
  - A shared acceptance/verification gate whose terminal pass/fail judgment only determines whether other responsibilities satisfy their required acceptance or verification basis is Common; that gate judgment alone is not an independently completable responsibility outcome. Requirements/testing that establish the correctness of the gate itself do not by themselves create a distinct project outcome when they only validate that acceptance/verification role. If the responsibility also owns a distinct project outcome with its own acceptance/completion boundary apart from that gate role, evaluate that outcome under the Unit criteria instead.
  - **Component**: a subordinate responsibility inside a unit RB that borrows one or more of its purpose, RB, governing authority, owned outcome, or acceptance/completion boundary from the parent unit. A separate file/directory/service/process/CLI/credential/recovery path does not by itself create a unit.
  - Multiple targets do not prove common ownership; one target does not prove unit ownership; never select a participant as representative owner or duplicate one responsibility per participant.
  - Shared tools/observability/deployment/environments/`etc/` config do not transfer definition ownership. Keep shared responsibility with the SoT whose governing outcome/judgment it implements and only unit-owned deltas with that unit.
  - Paths/names/locations may support navigation, tool discovery, or change-impact routing, but do not establish normative ownership or authority.
  - Normative testing uses the same responsibility test. A common verification policy may apply to multiple units; unit testing owns unit-specific sufficiency/acceptance where applicable. Testing indexes may link current VB for coverage but contain no execution history.
  - Adopted procedures/policy/constraints belong in `definition/`.

#### Document Splitting

Applies only to initialized project-specific SoT docs; excludes protected `AGENTS.md`.

- Review split at ≥150 lines, ≥12 independently referenced identifiers, or ≥3 independently changing functional areas.
- As a rule split >250 lines or >20 independently referenced identifiers; if retained, the index records reason + reconsideration condition.
- Split by coherent responsibility/question/reader/update trigger/lifecycle, not line count alone; document count alone does not justify a subdirectory.
- Keep `common/INDEX.md`, `units/INDEX.md`, each unit `INDEX.md`, and category indexes as single entry points.

## Area Principles

### Definition Authority

#### Normative and SoT Authority

- Normative content constrains future valid implementations and must remain usable without current `products/`; applicable requirements/design/testing together must support independent implementation with the same intended outcomes, adopted contracts/RBs, fixed algorithms/invariants, and equivalent acceptance intent.
- Goal is semantic reconstruction, not source reproduction/operational restoration. Incidental implementation details are not required unless independently adopted constraints/contracts; design may remain concrete when intentionally constraining future valid implementations.
- One responsible adopted SoT per project fact; no duplicate detail or parallel `current`/`target` variants/equivalent views. Candidate replacements, target states, and alternatives are non-authoritative and preferably expressed as deltas against the current SoT.
- Approved future intent may live in `definition/` when it is itself the document's responsibility, not as a parallel candidate SoT. Distinguish assumed/decided/open; proposal/unapproved assumption ≠ settled fact.
- Keep an open matter and its candidate resolutions non-authoritative when resolving it differently could materially change the meaning, validity, scope, or acceptance of the definition being adopted, or when a downstream authoritative artifact would have to silently choose among unresolved candidates to interpret or apply that definition. A later decision within explicitly preserved requirements/design/testing discretion does not block adoption merely because it will change eventual implementation. Do not formalize a provisional choice merely to unblock downstream formalization. An intentionally open choice may be normative when that openness itself is adopted and valid downstream work can preserve the choice until the responsible later decision.
- Requirements own required outcomes, external conditions, compatibility obligations, and AC; design owns adopted choices among otherwise valid implementation approaches; testing owns required verification, method/observation, and sufficient evidence.
- Completion criteria must be observable; split requirements that cannot be implemented, verified, and completed together.
- Semantic exhaustive domains/matrices/transitions/enumerations remain normative even when they imply cardinality; verification may use any evidence form appropriate to AC.
- Existing normative statements remain effective until explicitly changed/retired.
- Do not reclassify merely to normalize taxonomy. Move only when current placement materially obscures responsibility, duplicates harmfully, or wrongly constrains/frees future implementations; if intent is ambiguous, preserve current authority/placement pending decision.
- Mixed normative/execution content is classified at statement/section level: normative verification intent stays in testing; execution material follows Verification Basis lifecycle.
- Before removing, abstracting, or relocating materially constraining content, preserve its adopted semantics in the responsible SoT unless the applicable authority process explicitly changes or retires it.
- For abstraction, relocation, or reclassification without an explicit authority change, verify future valid implementations are not unintentionally broadened or narrowed.
- Treat loss of adopted timezone/unit/protocol-version/transaction-isolation/identity/cardinality/ordering/security/compatibility or similar invariant as normative change, not cleanup.
- State design constraints normatively; do not delegate design authority to current source/config/test/generated artifacts. Current test implementation details and execution results remain non-normative unless independently adopted.

#### Realization Authority

- Source paths/private helpers/classes/functions/state fields/DOM IDs/current directory layout/implementation status remain current-realization detail unless independently adopted.

### Reconciliation and Migration

- Active normative design describes adopted end state, not stale transition stages. After completed migration/refactor/rename/rollout, remove obsolete stages/names/temp compatibility/superseded targets from active design and retain useful history non-normatively.
- Prevent authority leakage in mixed normative + current-realization/maintenance content. Separate when authority/readers/update triggers differ and usability survives; otherwise mark authority explicitly. Do not duplicate facts merely to separate.
- Reconciliation affecting authority, ownership, navigation, current state, or verification claims must inspect and reconcile the affected SoTs, indexes, VB, inbound links, and retained job/reference material in the same coherent change.
- Documentation silence does not authorize opportunistic re-architecture.
- Apply Outbound Transfer to active and durable non-normative material; keep current SoT semantics in `definition/`, use native/external VB when suitable for current claim support, and retire no-need material.
- Source location is not an adoption record; adopted facts/decisions enter responsible SoTs only through applicable adoption authority.
- Adoption from non-authoritative material must separate resolved adopted semantics from remaining open questions/alternatives. Carry with the adopted result any material rationale, constraints, rejected alternatives, and reconsideration conditions needed to interpret or re-evaluate it; unresolved candidate content remains with its non-authoritative owner unless and until separately adopted.

### Outbound Transfer

- Non-authoritative candidate replacements/target states/alternatives, transient current-realization or other active working material, active execution control, and project-managed active execution evidence → `jobs/`.
- Durable non-normative knowledge/artifacts with continuing evidential/diagnostic/maintenance/interoperability/audit/re-investigation value → `references/`.
- Environment configuration → `etc/`.
- Formal product-owned test/lint/generator/migration/fixture/viewer/verifier programs → owning `products/` area.

## Area Operations

### Lifecycle

#### Initialization

| State | Observed state of all listed initialization artifacts taken together |
|---|---|
| Uninitialized | all three fixed entry docs absent; both definition markers present; no other project-specific content exists under `definition/common/` or `definition/units/` |
| Initialized | all three fixed entry docs present; both definition markers absent; required approved initialization content is recorded; every approved unit has its required unit/category indexes |
| Inconsistent | all other states, including initialized-shaped placeholders/incomplete approved content and reset residue |

- For both `Uninitialized` and `Initialized`, project-specific content remaining in retired or otherwise disallowed `definition/` locations (including legacy `definition/system/` or `definition/apps/`) makes the whole state `Inconsistent` regardless of fixed entries or markers; reconcile such content under Reconciliation and Migration before re-evaluating the state.
- Reconcile an `Inconsistent` state before formal work.
- Structural shape alone does not establish `Initialized`; each state row must satisfy all of its structural and semantic conditions.
- Do not delete any fixed initialized entry document independently.
- Initialized requires purpose, scope, RBs, common/unit routing, and required project SoTs to be approved and recorded; fixed skeleton files/markers alone do not establish project facts or initialization, and uninitialized/inconsistent state must not be used to infer project facts.

#### Entry and Completion

- Implementation entry requires applicable requirements/AC, RBs, adopted approach (or explicit no additional design constraint), verification method, no unresolved Blocker, and no unresolved matter within the entered scope that must be resolved as a user-owned requirements/scope/RB/material-design/completion decision or to establish the adopted acceptance/verification basis. Routine reversible implementation choices within approved scope and adopted discretion do not block entry.
- Completion requires implementation/configuration, required verification, requirements/design/tests/implementation consistency, responsible index current-state updates, and no unresolved Blocker or In-scope deficiency.
- These entry/completion rules also apply to formal realization/configuration of Common responsibilities. For Common, they establish whether that policy/gate/coordination realization is ready or complete; such a judgment does not by itself create an independently completable project outcome or Unit classification.
- Disposition cannot waive approved scope, adopted AC, or another completion condition. Dispositioned Follow-ups do not block completion unless new evidence justifies reclassification or exposes another unmet condition.

#### Reset

- See [Reset Dispatch](#reset-dispatch) for the conditional procedure that applies before an explicitly authorized reset to `Uninitialized`.

### Documentation Language

- Initialization summary proposes a default; absent user choice, propose current conversation language.
- Do not duplicate the language setting in another machine-readable file.

### Procedures

- Applicable project procedures define reproducible prerequisites and steps for setup, execution, analysis, testing, documentation checks, deployment, migration, rollback, and operation.

### State and Routing

- For state ownership, `common/INDEX.md` owns only concise project-level lifecycle/current state and material project-wide limits/blockers; responsibility-local state for a common responsibility belongs in its responsible common SoT or local common index when one exists. Each unit `INDEX.md` owns concise current lifecycle/implementation/verification state and material limits/blockers for that unit. `units/INDEX.md` is a catalog/router, not an alternate current-state owner.
- Distinguish unimplemented/implemented/verified with no speculation; link applicable VB when needed. Index state is responsibility-level summary; do not duplicate run/version IDs, counts, output, execution history, detailed requirement/design/testing content, or identifier-level cross-artifact correspondence matrices.
- Keep active execution sequence, priority, next work, and transient job-specific blockers out of project-definition state. A limitation/blocker belongs in an index only when it materially describes current accepted state of that responsibility.
- Shared terminology follows the underlying project fact's authority and ownership: keep the canonical definition in the SoT that owns that fact. Dependent SoTs reference the canonical definition instead of redefining it; do not maintain a standalone project glossary.
- Cross-unit relationship meaning belongs to the SoT that owns the underlying project fact. `common/INDEX.md` owns project-level routing to those SoTs and to `units/INDEX.md`; unit indexes route to applicable common/cross-unit authority. Indexes must not become alternate owners of relationship detail.
- Development routing remains responsibility-based: resolve the responsible common/unit index from purpose/RB/governing conditions/outcome judgment, then follow its category/common-authority entries to applicable requirements/design/testing and other governing SoTs.
- A formal realization artifact may be governed by multiple SoTs for different project facts. Resolve each fact independently; the one-responsible-SoT-per-project-fact rule remains authoritative. Conflicting normative statements about the same fact are a definition inconsistency to reconcile, not a common-vs-unit or path-based precedence rule.
- Responsible definition authority for a formal realization must be discoverable from its role/behavior/governing conditions plus the indexed definition hierarchy. Path/name symmetry or physical co-location does not establish ownership. A dedicated implementation-to-SoT mapping/README is not required, but when ordinary responsibility resolution remains materially ambiguous, provide a project-defined routing entry without duplicating normative content.
- Index checks must support direct-link + nested reachability + protected-instruction exclusions; requirement/design/testing/common-authority discovery must follow the supported indexed hierarchy rather than assume a flat source set.

### Verification Basis

- Execution-specific results/evidence are working material by default; verification does not require a dedicated repository evidence file. Sufficient native/external execution records may remain external.
- A current verified claim requires an available, applicable VB sufficient to reassess its scope. VB may be native/external record, retained `jobs/` material, retained reference, or proportional summary; repository/Markdown storage is not required. When retained `jobs/` material is part of the VB, its lifecycle and retention follow `jobs/AGENTS.md`.
- Preserve proportionally: actual target/state, relevant conditions, method, result, directly verified scope, material unverified scope.
- Prefer stable identity when available; mutable branch/environment/host labels are context only. Without stable ID, record enough time/state/conditions/scope to prevent unsafe inference; no Git/CI/tool requirement.
- Make material retention/expiry/freshness/revalidation boundaries discoverable for external/expirable VB and recheck when required before relying on claims.
- Deleted/expired/unavailable/inapplicable/superseded-without-justification VB → downgrade affected verified claim until sufficient verification exists.
- Evidence supports only directly exercised/observed scope. Mark requirement/AC/completion/lifecycle state verified only when all required observable parts/conditions have sufficient evidence; otherwise record verified subset + unverified scope.
- Advance lifecycle only with documented transition conditions + required evidence. Record method/result/verified scope/evidence type/material unverified matters proportionally; materially different evidence conditions are not interchangeable.
- Carry earlier evidence to a later target/state only when evidence shows relevant differences do not affect verified scope, environment/config/conditions, applicable requirements/AC, or testing sufficiency; identity lineage or an “unrelated change” assumption alone is insufficient.
- Index links to evidence/reference must point to material applicable to the asserted state.
- Normative results → responsible requirements/design/testing SoT.
- Multiple partial bases may jointly suffice and one proportional basis may support multiple related claims; no per-claim/per-run file requirement.
- Do not dispose of current effective VB until no current verified claim depends on it, or replacement/downgrade is complete.

### Maintenance and Validation

- Run all project-defined documentation verification for documentation changes when available; at minimum cover changed Markdown links, fixed files, index reachability, IDs, and applicable cross-responsibility routing.
- Verify lifecycle state matches exactly one row in Initialization and project statements have approval/evidence.
- Derived/summary docs repeating normative IDs, PK/FK, cardinalities, RBs, contracts, or relationships must match the responsible SoT. Repetition does not create alternate authority; prefer automated comparison for intentionally repeated structured facts when practical, otherwise keep manual responsibility explicit.

## Area Conditional Governance

### Initialization Dispatch

- If the observed state is `Uninitialized` or `Inconsistent`, read and apply [`definition/agents.d/initialization.md`](agents.d/initialization.md) before definition-specific initialization/reconciliation work.

### Reset Dispatch

- Before an explicitly authorized reset to `Uninitialized`, read and apply [`definition/agents.d/initialization.md`](agents.d/initialization.md).

### Documentation Language Dispatch

- When work determines, selects, records, or changes the effective project documentation language, or before creating or changing project-definition documentation text, read and apply [`definition/agents.d/documentation-language.md`](agents.d/documentation-language.md).

### Realization Authority Dispatch

- When realization- or implementation-derived facts or details are used to determine project-definition authority, adoption, or transfer, or concrete provenance/intent evidence creates material doubt about their authority, read and apply [`definition/agents.d/realization-authority.md`](agents.d/realization-authority.md).

### Governance Migration Dispatch

- When a governance change alters definition authority, classification, routing, retention, migration semantics, or allowed document location/hierarchy, read and apply [`definition/agents.d/governance-migration.md`](agents.d/governance-migration.md) before its definition migration/reconciliation.

### Definition Maintenance Dispatch

- Before modifying project-specific definition documentation or its structure/navigation—including creating a unit/category/directory, adding/renaming/moving/deleting an indexed document, or separating mixed-authority content—read and apply [`definition/agents.d/definition-maintenance.md`](agents.d/definition-maintenance.md).
