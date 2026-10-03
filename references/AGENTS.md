# AIDD Reference Material Instructions

This file defines area-specific governance for `references/` and inherits repository and `definition/` governance.

## Area Foundations

### General Provisions

#### Scope

- Applies to `references/` and descendants; inherits root + `definition/AGENTS.md`.

#### Responsibility

- Owns durable **non-normative** material for future consultation:
  - externally supplied originals;
  - project-managed material with continuing evidential, diagnostic, maintenance, interoperability, audit, or re-investigation value.
- A **retained reference unit** is material that has validly entered this area's lifecycle under Entry and represents a specific supplied, observed, or recorded identity/state. It is not a staging form of `definition/`, `implementation/`, or `jobs/` material.
- Reference responsibility is terminal for a validly entered retained unit: later work may consume, copy, cite, compare, or derive from it, but that retained unit itself does not promote or transfer outward into another responsibility area.

### Structure and Placement

#### Reference Classes

- Keep supplied originals distinct from project-managed references; never silently mix them.
- Supplied unit: preserve supplier, applicable version/commit, receipt date, supplied structure/paths/names/content/README where practical.
- Project-managed unit: record origin, purpose, retention/observation date, represented scope/state, target/source identity, and material freshness/revalidation/supersession conditions.
- General supplied `docs/` collections/datasets → `references/`; never create new top-level `docs/`/`data/`.
- Project guidance around supplied material must remain distinguishable from the original.
- Import supplied source as traceable snapshot/archive/pinned version when practical; avoid embedding nested VCS metadata unintentionally.

#### Provenance

- Identity rules follow `definition/AGENTS.md`: prefer stable/immutable identity; mutable labels are context; without stable ID record enough time/state/conditions/scope to avoid unsafe inference.
- Record applicable terms of use, confidentiality, redistribution, licensing, privacy, retention.

#### Storage

- Never add disposable generated data/cache/build output/dependencies, credentials, personal/confidential content, or material without confirmed storage/redistribution rights.

## Area Principles

### Authority Boundary

- Reference presence/linkage ≠ requirement/design/testing/implementation constraint/verification conclusion beyond recorded scope.
- A reference remains supporting input, not an adoption record.

### Consumption and Derivation Boundary

- Using a reference as input/evidence does not transfer, promote, reactivate, or reclassify the retained reference unit.
- Requirements/design/testing/procedures/decisions derived from reference material become authoritative only when separately adopted into the responsible `definition/` SoT; the source reference remains independently retained or disposed under this area's lifecycle.
- Source/code or environment configuration derived from reference material becomes formal only as a distinct project-managed artifact under `implementation/` and applicable definition authority; never use a retained reference unit as the formal implementation source.
- Processing/modification/comparison/transformation/investigation/verification based on a reference uses distinct working material under `jobs/`; do not turn the retained reference unit itself into working material.
- A derived result is classified by its own responsibility. If it independently qualifies for durable non-normative retention, enter it as a distinct reference unit with provenance to its inputs rather than treating derivation as mutation of an existing reference.
- **Distinct artifact** is a responsibility/lifecycle distinction, not a requirement for different bytes, Git blob identity, or simultaneous duplicate retention. When Retention and Disposal permits disposal, one coherent change may consume a reference, establish byte-identical content as a separately authorized artifact in another area, and dispose of the source reference; this does not preserve reference identity or constitute reference promotion.
- A resulting artifact or its responsible authority must retain enough source identity/version/integrity provenance to remain interpretable if the source reference is later disposed; do not make formal or authoritative meaning depend on continued existence of a reference path.

## Area Operations

### Lifecycle

#### Entry

- Confirm purpose and relation to existing references/decisions.
- A unit validly enters the retained-reference lifecycle when it is deliberately classified and retained under `references/` for future consultation or evidence and satisfies Reference Classes, Provenance, and Storage. Physical placement under `references/` alone does not establish valid entry.
- Material still being authored, corrected, compared, transformed, or evaluated before retained-reference entry is working material under `jobs/`; supplied originals may enter directly when their retained purpose and required provenance are established.
- Material discovered under `references/` that never satisfied this area's responsibility/entry conditions is a placement/classification error: determine its responsible area under root Ownership and Placement, then correct or route it only through that area's applicable entry/authority process. If destination entry/adoption is not authorized, do not transfer it merely to normalize placement. Such correction is not promotion of a retained reference unit.
- Retain project-managed material only when it has continuing non-normative value.
- Do not retain every run/output/log/screenshot/report; prefer a concise durable summary/stable mapping when raw transient history adds no value.

#### Asserted Content, Errata, and Supersession

- **Asserted content** is what the reference records as supplied, observed, or otherwise represented: its payload plus claimed source/target identity, represented scope/state/conditions, observation/result values, and conclusions. After valid entry, do not silently replace or materially rewrite asserted content in place.
- Materially different content, identity, version, observation, represented state/scope/conditions, result, or conclusion is a distinct reference unit when retained; do not reuse one retained unit as a rolling `latest` artifact.
- Except for required Safety/compliance redaction below, never overwrite supplied asserted content. A corrected/revised supplier version is a distinct reference unit when retained.
- Observation-bound evidence (screenshot/captured response/measurement/execution result) records exactly that observation. A later observation is a distinct reference unit; preserve or delete the earlier unit only under Retention and Disposal.
- A derived summary/mapping/compatibility/maintenance record whose asserted meaning or represented state materially changes is a distinct reference unit when retained. Drafting, correction, comparison, or transformation before retained-reference entry belongs in `jobs/`.
- Curatorial/lifecycle metadata may be maintained in place when it does not change asserted meaning or identity: evidence-based provenance supplementation, current routing/accessibility links, supersession relationships, retention/licensing/confidentiality status, and meaning-preserving formatting or typo correction. For supplied originals, keep any correction or annotation distinguishable from the supplied payload rather than editing that payload merely to fix a typo or link. Do not rewrite a historical asserted path, version, identity, wording, or observation merely to match current governance, repository layout, terminology, or documentation language; add current routing/context separately when useful.
- If an error affects asserted identity, numeric/result value, scope, condition, observation, or conclusion, do not silently replace the recorded value. Record an erratum that preserves the original recorded value, states the correction and its basis, and reassess affected dependents/claims; when the corrected record itself needs durable consultation, retain it as a distinct successor unit.
- Safety/compliance redaction is allowed when necessary even if it affects stored payload. Do not preserve credentials, personal/confidential information, or prohibited content merely for immutability; leave a non-sensitive redaction/errata indication when safe and reassess dependent claims/provenance.
- When a successor supersedes an earlier retained unit, keep their represented scopes distinguishable and make the relation discoverable on the successor, predecessor metadata, or responsible routing material; such curatorial linkage must not rewrite the predecessor's asserted state.
- Do not reuse a retained unit's stable identifier or path for a materially different represented state while prior inbound references, VB claims, audit needs, or other dependencies may still resolve to the earlier unit.
- Keep materially different supplied or project-managed versions distinguishable; inspect effects on decisions, implementation, verification, references.

#### Retention and Disposal

- Retain a unit only while continuing non-normative value, a dependent claim, an inbound dependency, or an applicable retention/audit/legal obligation still justifies retention. Supersession alone neither requires nor forbids retaining the predecessor; licensing, confidentiality, privacy, or other storage constraints may independently require restricted handling or disposal.
- Never remove the only adequate VB for a current verified claim without replacement or claim downgrade per `definition/AGENTS.md`.
- Inspect SoTs, `jobs/`, implementation, active work, provenance, licensing, usage links, inbound dependencies, and continuing evidential/diagnostic/maintenance/interoperability/audit/re-investigation needs before move/delete.
- A retained unit may be disposed when no current verified claim depends on it, no continuing dependency or retention obligation requires its identity/content, and no continuing non-normative value justifies retention; reconcile affected routing, provenance, and supersession links so disposal does not create misleading or broken meaning.

### Use

- While a supplied original is retained, keep its asserted content under `references/`; downstream consumption does not move or convert that retained unit into another responsibility artifact. Retention/disposal remains governed by this area's lifecycle.
- Implementation, acceptance, or current verified-claim use requires the Validation rules below.

### Validation

- Verify relevant claim-bearing content, provenance, available integrity/version info, freshness, applicability conditions, links, usage references, and absence of prohibited sensitive content.
- When a reference is used as VB, verify its sufficiency for the asserted scope under `definition/AGENTS.md`.
