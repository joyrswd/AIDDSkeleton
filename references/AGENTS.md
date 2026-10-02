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
- A retained reference unit represents material at a specific supplied, observed, or recorded identity/state. It is not a staging form of `definition/`, `implementation/`, or `jobs/` material.
- Reference responsibility is terminal for that retained unit: later work may consume, copy, cite, compare, or derive from it, but the retained unit itself does not promote or transfer outward into another responsibility area.

### Structure and Placement

#### Reference Classes

- Keep supplied originals distinct from project-managed references; never silently mix them.
- Supplied unit: preserve supplier, applicable version/commit, receipt date, supplied structure/paths/names/content/README where practical.
- Project-managed unit: record origin, purpose, retention/observation date, represented scope/state, target/source identity, and material freshness/revalidation/supersession conditions.
- Materially different content, identity, version, observation, represented state, or conclusion is a distinct reference unit when retained; do not reuse one retained unit as a rolling `latest` artifact.
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
- Processing/modification/comparison/transformation/investigation/verification based on a reference uses a distinct working copy/material under `jobs/`; do not turn the retained reference unit itself into working material.
- A derived result is classified by its own responsibility. If it independently qualifies for durable non-normative retention, enter it as a distinct reference unit with provenance to its inputs rather than treating derivation as mutation of an existing reference.

## Area Operations

### Lifecycle

#### Entry

- Confirm purpose and relation to existing references/decisions.
- Satisfy Reference Classes, Provenance, and Storage requirements.
- Retain project-managed material only when it has continuing non-normative value.
- Do not retain every run/output/log/screenshot/report; prefer a concise durable summary/stable mapping when raw transient history adds no value.

#### Immutability, Supersession, and Replacement

- A retained reference unit is not materially updated in place. Its represented content/state is immutable after entry; lifecycle handling is retain, create a distinct replacement/successor, or delete when disposal is permitted.
- Never overwrite supplied content. A corrected/revised supplier version is a distinct reference unit when retained.
- Observation-bound evidence (screenshot/captured response/measurement/execution result) records exactly that observation. A later or corrected observation is a distinct reference unit; preserve or delete the earlier unit only under Retention and Disposal.
- A derived summary/mapping/compatibility/maintenance record that materially changes is a distinct reference unit when retained. Drafting, correction, comparison, or transformation before retention belongs in `jobs/`.
- When a successor supersedes an earlier retained unit, record enough provenance/relationship on the successor or responsible routing material to distinguish their scopes; do not rewrite the predecessor to represent the successor state.
- Keep materially different supplied or project-managed versions distinguishable; inspect effects on decisions, implementation, verification, references.

#### Retention and Disposal

- Never remove the only adequate VB for a current verified claim without replacement or claim downgrade per `definition/AGENTS.md`.
- Inspect SoTs, `jobs/`, implementation, active work, provenance, licensing, usage links, and continuing evidential/maintenance needs before move/delete.

### Use

- Preserve supplied originals in `references/`.
- Implementation, acceptance, or current verified-claim use requires the Validation rules below.

### Validation

- Verify relevant claim-bearing content, provenance, available integrity/version info, freshness, applicability conditions, links, usage references, and absence of prohibited sensitive content.
- When a reference is used as VB, verify its sufficiency for the asserted scope under `definition/AGENTS.md`.
