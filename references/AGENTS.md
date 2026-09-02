# AIDD Reference Material Instructions

## General Provisions

### Scope

- Applies to `references/` and descendants; inherits root + `definition/AGENTS.md`.

### Responsibility

- Owns durable **non-normative** material for future consultation:
  - externally supplied originals;
  - project-managed material promoted from `jobs/` for continuing evidential, diagnostic, maintenance, interoperability, audit, or re-investigation value.

## Structure and Placement

### Reference Classes

- Keep supplied originals distinct from project-managed references; never silently mix them.
- Supplied unit: preserve supplier, applicable version/commit, receipt date, supplied structure/paths/names/content/README where practical.
- Promoted project-managed unit: record origin, purpose, promotion/observation date, represented scope, target/source identity, and material freshness/revalidation/supersession conditions.
- General supplied `docs/` collections/datasets → `references/`; never new top-level `docs/`/`data/`.
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
- Satisfy Provenance and Storage requirements.

### Promotion

- Promote only material with continuing non-normative value that satisfies Reference Classes and Provenance requirements.
- Do not promote every run/output/log/screenshot/report. Prefer concise durable summary/stable mapping when raw transient history adds no value.

### Supersession

- Never overwrite supplied content; derived result goes to the area owning its responsibility.
- Observation-bound evidence (screenshot/captured response/measurement/execution result) records that observation; do not edit it into a different observation. Record new observation separately, or supersede while preserving prior record when a current claim/audit/continuing need depends on it.
- Derived summaries/mappings/compatibility/maintenance knowledge may be revised/superseded; preserve provenance and distinguish them from underlying observations.
- Keep materially different supplied versions distinguishable; inspect effects on decisions, implementation, verification, references.

### Retention

- Never remove the only adequate VB for a current verified claim without replacement or claim downgrade per `definition/AGENTS.md`.

### Disposal

- Inspect SoTs, `jobs/`, implementation, active work, provenance, licensing, usage links, and continuing evidential/maintenance needs before move/delete.

## Local Governance

### Authority Boundary

- Reference presence/linkage ≠ requirement/design/testing/implementation constraint/verification conclusion beyond recorded scope.
- Adopted requirements/design/testing/procedures/decisions → responsible `definition/` SoT; reference is supporting input, not adoption record.
- Adopted source/code → project-managed `products/`; adopted environment config → `etc/`.

### Use

- Preserve supplied originals in `references/`; process/modify/compare/transform/investigate/verify only needed copies in `jobs/`.
- Implementation, acceptance, or current verified-claim use requires Reference Validation.

### Reference Validation

- Verify relevant claim-bearing content, provenance, available integrity/version info, freshness, applicability conditions, links, usage references, and absence of prohibited sensitive content.
- When a reference is used as VB, verify its sufficiency for the asserted scope under `definition/AGENTS.md`.
