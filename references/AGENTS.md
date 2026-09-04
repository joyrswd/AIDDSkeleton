# AIDD Reference Material Instructions

## General Provisions

### Scope

- Applies to `references/` and descendants; inherits root + `definition/AGENTS.md`.

### Responsibility

- Owns durable **non-normative** material for future consultation:
  - externally supplied originals;
  - project-managed material with continuing evidential, diagnostic, maintenance, interoperability, audit, or re-investigation value.

## Structure and Placement

### Reference Classes

- Keep supplied originals distinct from project-managed references; never silently mix them.
- Supplied unit: preserve supplier, applicable version/commit, receipt date, supplied structure/paths/names/content/README where practical.
- Project-managed unit: record origin, purpose, retention/observation date, represented scope, target/source identity, and material freshness/revalidation/supersession conditions.
- General supplied `docs/` collections/datasets → `references/`; never create new top-level `docs/`/`data/`.
- Project guidance around supplied material must remain distinguishable from the original.
- Import supplied source as traceable snapshot/archive/pinned version when practical; avoid embedding nested VCS metadata unintentionally.

### Provenance

- Identity rules follow `definition/AGENTS.md`: prefer stable/immutable identity; mutable labels are context; without stable ID record enough time/state/conditions/scope to avoid unsafe inference.
- Record applicable terms of use, confidentiality, redistribution, licensing, privacy, retention.

### Storage

- Never add disposable generated data/cache/build output/dependencies, credentials, personal/confidential content, or material without confirmed storage/redistribution rights.

## Lifecycle

### Entry

- Confirm purpose and relation to existing references/decisions.
- Satisfy Reference Classes, Provenance, and Storage requirements.
- Retain project-managed material only when it has continuing non-normative value.
- Do not retain every run/output/log/screenshot/report; prefer a concise durable summary/stable mapping when raw transient history adds no value.

### Supersession

- Never overwrite supplied content.
- Observation-bound evidence (screenshot/captured response/measurement/execution result) records that observation; do not edit it into a different observation. Record new observation separately, or supersede while preserving prior record when a current claim/audit/continuing need depends on it.
- Derived summaries/mappings/compatibility/maintenance knowledge may be revised/superseded; preserve provenance and distinguish them from underlying observations.
- Keep materially different supplied versions distinguishable; inspect effects on decisions, implementation, verification, references.

### Retention

- Never remove the only adequate VB for a current verified claim without replacement or claim downgrade per `definition/AGENTS.md`.

### Disposal

- Inspect SoTs, `jobs/`, implementation, active work, provenance, licensing, usage links, and continuing evidential/maintenance needs before move/delete.

## Outbound Transfer

- Adopted requirements/design/testing/procedures/decisions → responsible `definition/` SoT.
- Adopted source/code → project-managed `products/`.
- Adopted environment config → `etc/`.
- Working copies needed for processing/modification/comparison/transformation/investigation/verification → `jobs/`; preserve the supplied original in `references/`.
- Derived results whose responsibility no longer belongs to `references/` → the area owning that responsibility.

## Local Governance

### Authority Boundary

- Reference presence/linkage ≠ requirement/design/testing/implementation constraint/verification conclusion beyond recorded scope.
- A reference remains supporting input, not an adoption record.

### Use

- Preserve supplied originals in `references/`.
- Implementation, acceptance, or current verified-claim use requires Reference Validation.

### Reference Validation

- Verify relevant claim-bearing content, provenance, available integrity/version info, freshness, applicability conditions, links, usage references, and absence of prohibited sensitive content.
- When a reference is used as VB, verify its sufficiency for the asserted scope under `definition/AGENTS.md`.
