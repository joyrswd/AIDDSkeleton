# AIDD Definition and Sources of Truth Instructions

## General Provisions

### Scope

- Applies to `definition/` and descendants; inherits root governance.

### Responsibility

- `definition/` owns project-specific adopted definition, lifecycle/status, procedures, identifiers, commands, constraints, and VB rules.

## Structure and Placement

### Required Structure

- Clone-ready fixed entries: `definition/AGENTS.md`, `definition/agents.d/initialization.md`, `definition/agents.d/governance-migration.md`, `definition/agents.d/realization-authority.md`, `definition/agents.d/documentation-language.md`, `definition/agents.d/definition-maintenance.md`, `definition/.hooks/.gitkeep`, `definition/system/.gitkeep`, and `definition/apps/.gitkeep`.
- Per approved app, create:
  - `definition/apps/<app>/<app>_index.md`;
  - `definition/apps/<app>/requirements/<app>_requirements_index.md`;
  - `definition/apps/<app>/design/<app>_design_index.md`;
  - `definition/apps/<app>/testing/<app>_testing_index.md`.

| Location | Responsibility |
|---|---|
| `definition/system/system_index.md` | System overview, RBs, current system/cross-app state, material limits/blockers, documentation map, reading order, app entry routing, system/cross-app responsibility routing |
| `definition/system/documentation_language.md` | Default documentation language + explicit app overrides |
| other `definition/system/` docs | System-owned purpose, requirements, structure, constraints, development/operational methods |
| `<app>_index.md` | App overview, RBs, current app state, material limits/blockers, reading order, category entries, applicable cross-responsibility authority entries |
| category indexes | Category docs, questions answered, order, absence/inheritance |
| `requirements/` | Required outcomes/constraints |
| `design/` | Adopted implementation structure/approach/contracts/algorithms/invariants/constraints |
| `testing/` | Verification strategy/specifications: what must be shown and what evidence is sufficient |

- `definition/system/` and `definition/apps/` are required classifications; remove `.gitkeep` when tracked content makes it unnecessary.
- `definition/agents.d/` contains conditional definition governance under the root `agents.d/` loading protocol; it is not project-definition content and is excluded from project document placement/navigation.
- `definition/AGENTS.md` is the only non-hidden file directly under `definition/`; project-specific docs belong under `definition/system/` or an approved `definition/apps/<app>/` according to responsibility.
- No `definition/README.md`; use indexes for navigation and `AGENTS.md` for instructions.
- Keep fixed system entry docs directly under `definition/system/`.
- Required app category dirs/indexes do not require detail docs. If none, the index states explicit absence/inheritance/cross-cutting source; design may state no additional normative implementation constraints.

### Placement and Navigation

- One purpose per project doc; split by coherent responsibility/question/reader/update trigger/lifecycle, not tidiness or count alone.
- Other system docs stay flat while responsibility is small; use a responsibility-based subdirectory only when one stable system responsibility owns multiple independently changing docs.
- Indexes provide navigation plus concise owned current-state/absence/inheritance/coverage context; do not duplicate detailed requirements/design/testing/procedures/results or identifier-level cross-artifact correspondence matrices.
- System navigation: `system_index.md` is primary; directly link each Markdown doc directly under `definition/system/` except itself and directly link every approved app index. A local index is allowed only when the responsibility needs navigation; nested docs routed through it must remain reachable from `system_index.md`; protected `AGENTS.md` is excluded. `system_index.md` also routes system/cross-app relationships to the SoTs that own their normative meaning; it does not duplicate that relationship detail.
- App navigation: `<app>_index.md` → three category indexes + applicable cross-responsibility authority. Each app index must contain an explicit cross-responsibility authority entry: link the responsible system/app SoTs when applicable, otherwise state that no additional cross-responsibility authority applies. Category index → its docs.
- Initialized read order: `definition/system/system_index.md` → `definition/system/documentation_language.md` → target indexes.
- Determine ownership from purpose + change authority + invocation/governing decision + success/failure (or sufficiency) judgment, not target/caller/tool/file name/operational vocabulary.
  - App-owned execution/diagnostic procedure → directly under the app, linked from `<app>_index.md`; system-owned or cross-app procedure → `definition/system/`.
  - Multiple targets do not prove system ownership; one app target does not prove app ownership; never choose a participating app as representative owner or duplicate system responsibility per app.
  - Shared tools/observability/deployment/system environments/`etc/` config do not transfer ownership. For shared system execution with app-specific prerequisites/commands/AC/constraints, keep shared responsibility in system procedure and only app-owned delta in the app.
  - Normative testing uses the same ownership test. Testing responsibility always exists for formal implementation; if no app testing detail doc, the testing index names inherited/cross-cutting policy. Testing indexes may link current VB for coverage but contain no execution history.
  - Adopted procedures/policy/constraints belong in `definition/`.

### Documentation Language

- Initialization summary proposes a default; absent user choice, propose current conversation language.
- Do not duplicate the language setting in another machine-readable file.
- When work determines, selects, records, or changes the effective project documentation language, or before creating or changing project-definition documentation text, read and apply [`definition/agents.d/documentation-language.md`](agents.d/documentation-language.md).

### Document Splitting

Applies only to initialized project-specific SoT docs; excludes protected `AGENTS.md`.

- Review split at ≥150 lines, ≥12 independently referenced identifiers, or ≥3 independently changing functional areas.
- As a rule split >250 lines or >20 independently referenced identifiers; if retained, the index records reason + reconsideration condition.
- Split by coherent responsibility/question/reader/update trigger/lifecycle, not line count alone; document count alone does not justify a subdirectory.
- Keep `system_index.md`, `<app>_index.md`, and category indexes as single entry points.

## Lifecycle

### Initialization

| State | Observed state of all listed initialization artifacts taken together |
|---|---|
| Uninitialized | `definition/system/system_index.md` and `definition/system/documentation_language.md` absent; `definition/system/.gitkeep` and `definition/apps/.gitkeep` present |
| Initialized | both fixed system docs present; `definition/system/.gitkeep` absent; `definition/apps/.gitkeep` present only while no app docs exist |
| Inconsistent | does not exactly match either row above |

- Reconcile an `Inconsistent` state before formal work.
- Do not delete either fixed system document independently.
- Initialized requires purpose, scope, RBs, and required project SoTs to be approved and recorded; fixed skeleton files/markers alone do not establish project facts or initialization, and uninitialized/inconsistent state must not be used to infer project facts.
- If the observed state is `Uninitialized` or `Inconsistent`, read and apply [`definition/agents.d/initialization.md`](agents.d/initialization.md) before definition-specific initialization/reconciliation work.

### Entry and Completion

- Implementation entry requires applicable requirements/AC, RBs, adopted approach (or explicit no additional design constraint), verification method, and no unresolved Blocker.
- Completion requires implementation/configuration, required verification, requirements/design/tests/implementation consistency, responsible index current-state updates, and no unresolved Blocker or In-scope deficiency.
- Disposition cannot waive approved scope, adopted AC, or another completion condition. Dispositioned Follow-ups do not block completion unless new evidence justifies reclassification or exposes another unmet condition.

### Reset

- Before an explicitly authorized reset to `Uninitialized`, read and apply [`definition/agents.d/initialization.md`](agents.d/initialization.md).

## Outbound Transfer

- Non-authoritative candidate replacements/target states/alternatives, transient current-realization or other active working material, active execution control, and project-managed active execution evidence → `jobs/`.
- Durable non-normative knowledge/artifacts with continuing evidential/diagnostic/maintenance/interoperability/audit/re-investigation value → `references/`.
- Environment configuration → `etc/`.
- Application tests and formal generators/viewers/verifiers → `products/`.

## Local Governance

### Definition Authority

#### Normative and SoT Authority

- Normative content constrains future valid implementations and must remain usable without current `products/`; applicable requirements/design/testing together must support independent implementation with the same intended outcomes, adopted contracts/RBs, fixed algorithms/invariants, and equivalent acceptance intent.
- Goal is semantic reconstruction, not source reproduction/operational restoration. Incidental implementation details are not required unless independently adopted constraints/contracts; design may remain concrete when intentionally constraining future valid implementations.
- One responsible adopted SoT per project fact; no duplicate detail or parallel `current`/`target` variants/equivalent views. Candidate replacements, target states, and alternatives are non-authoritative and preferably expressed as deltas against the current SoT.
- Approved future intent may live in `definition/` when it is itself the document's responsibility, not as a parallel candidate SoT. Distinguish assumed/decided/open; proposal/unapproved assumption ≠ settled fact.
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
- When realization- or implementation-derived facts or details are used to determine project-definition authority, adoption, or transfer, or concrete provenance/intent evidence creates material doubt about their authority, read and apply [`definition/agents.d/realization-authority.md`](agents.d/realization-authority.md).

### Reconciliation and Migration

- Active normative design describes adopted end state, not stale transition stages. After completed migration/refactor/rename/rollout, remove obsolete stages/names/temp compatibility/superseded targets from active design and retain useful history non-normatively.
- Prevent authority leakage in mixed normative + current-realization/maintenance content. Separate when authority/readers/update triggers differ and usability survives; otherwise mark authority explicitly. Do not duplicate facts merely to separate.
- Reconciliation affecting authority, ownership, navigation, current state, or verification claims must inspect and reconcile the affected SoTs, indexes, VB, inbound links, and retained job/reference material in the same coherent change.
- When a governance change alters definition authority, classification, routing, retention, migration semantics, or allowed document location/hierarchy, read and apply [`definition/agents.d/governance-migration.md`](agents.d/governance-migration.md) before its definition migration/reconciliation.
- Documentation silence does not authorize opportunistic re-architecture.
- Apply Outbound Transfer to active and durable non-normative material; keep current SoT semantics in `definition/`, use native/external VB when suitable for current claim support, and retire no-need material.
- Source location is not an adoption record; adopted facts/decisions enter responsible SoTs only through applicable adoption authority.

### Procedures

- Applicable project procedures define reproducible prerequisites and steps for setup, execution, analysis, testing, documentation checks, deployment, migration, rollback, and operation.

### State and Routing

- `system_index.md` owns concise current lifecycle/implementation/verification state and material limits/blockers for system/cross-app responsibilities; each `<app>_index.md` owns the same for its app.
- Distinguish unimplemented/implemented/verified with no speculation; link applicable VB when needed. Index state is responsibility-level summary; do not duplicate run/version IDs, counts, output, execution history, detailed requirement/design/testing content, or identifier-level cross-artifact correspondence matrices.
- Keep active execution sequence, priority, next work, and transient job-specific blockers out of project-definition state. A limitation/blocker belongs in a definition index only when it materially describes current accepted state of that responsibility.
- Shared terminology follows the underlying project fact's authority and ownership: keep the canonical definition in the SoT that owns that fact under Definition Authority. When one meaning is referenced across multiple SoTs, the owning responsibility remains app-owned for a single-app fact and system-owned for a system/cross-app fact; dependent SoTs reference the canonical definition instead of redefining it. Do not maintain a standalone project glossary.
- System/cross-app relationship meaning belongs to the SoT that owns the underlying project fact. `system_index.md` owns routing to those responsible SoTs and to every approved app index; app indexes own routing to applicable cross-responsibility authority. Indexes must not become alternate owners of detailed relationship semantics.
- Development routing must remain responsibility-based: resolve the responsible definition index, then use its category and cross-responsibility authority entries to reach the applicable requirements/design/testing and other governing SoTs. A dedicated cross-artifact mapping is not required for implementation entry or completion.
- Index checks must support direct-link + nested reachability + protected-instruction exclusions; requirement/design/testing and cross-responsibility authority discovery must follow the supported indexed hierarchy rather than assume a flat source set.

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

- Before modifying project-specific definition documentation or its structure/navigation—including creating an app/category/directory, adding/renaming/moving/deleting an indexed document, or separating mixed-authority content—read and apply [`definition/agents.d/definition-maintenance.md`](agents.d/definition-maintenance.md).
- Run all project-defined documentation verification for documentation changes when available; at minimum cover changed Markdown links, fixed files, index reachability, IDs, and applicable cross-responsibility routing.
- Verify lifecycle state matches exactly one row in Initialization and project statements have approval/evidence.
- Derived/summary docs repeating normative IDs, PK/FK, cardinalities, RBs, contracts, or relationships must match the responsible SoT. Repetition does not create alternate authority; prefer automated comparison for intentionally repeated structured facts when practical, otherwise keep manual responsibility explicit.
