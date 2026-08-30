# AIDD Reference Material Instructions

## General Provisions

### Scope

- Applies to `references/` and descendants; inherits root + `plans/AGENTS.md`.

### Responsibility

- Owns durable **non-normative** material for future consultation:
  - externally supplied originals;
  - project-managed material promoted from `workbench/` for continuing evidential, diagnostic, maintenance, interoperability, audit, or re-investigation value;
  - reusable project knowledge under `references/knowledge-base/` learned from review, verification, incidents, investigation, implementation, operation, or other experience.

## Structure and Placement

### Reference Classes

- Keep supplied originals distinct from project-managed references; never silently mix them.
- Supplied unit: preserve supplier, applicable version/commit, receipt date, supplied structure/paths/names/content/README where practical.
- Promoted project-managed unit: record origin, purpose, promotion/observation date, represented scope, target/source identity, and material freshness/revalidation/supersession conditions.
- `references/knowledge-base/` is the reserved class for reusable project memory derived from experience; it is not an evidence archive, backlog, alternate SoT, or raw review-comment store.
- General supplied `docs/` collections/datasets → `references/`; never new top-level `docs/`/`data/`.
- Project guidance around supplied material must remain distinguishable from the original.
- Import supplied source as traceable snapshot/archive/pinned version when practical; avoid embedding nested VCS metadata unintentionally.

### Knowledge Base

- Keep entries concise enough to scan/search while preserving the concrete context, conditions, limitations, and examples that make the lesson useful. Generalize only when doing so preserves or improves detection/judgment value.
- Prefer one coherent learned point per entry where practical. Do not create one entry per finding/event by default; extend or merge an existing entry when it expresses the same learned point, while keeping materially distinct concrete patterns separate when their conditions matter.
- Use multiple discovery facets rather than a single physical taxonomy. Useful metadata/tags may include kind, domain, concern, technology, invariant, failure mode, source type, actor, and related terms; prefer existing vocabulary over needless synonyms, but do not require a rigid taxonomy before usage demonstrates one.
- Record a learning date (for example `learned_at`) and source provenance proportionally. For review-derived knowledge, a tool/service reviewer such as `codex` may be recorded as the actor; for human sources, use a non-identifying role such as `maintainer` or `external-reviewer` unless an identity is independently required outside the knowledge base.
- Do not store human names, usernames, email addresses, account identifiers, or other personal information in knowledge-base metadata or prose. Do not copy credentials, confidential values, or sensitive source content into an entry.
- Preserve a safe source locator/reference when useful for re-investigation, but the reusable lesson must remain understandable without reproducing the original review text or event narrative.
- Reusable questions/checks may be included when they make the learned point function as a stronger future sensor.

### Provenance

- Identity rules follow `plans/AGENTS.md`: prefer stable/immutable identity; mutable labels are context; without stable ID record enough time/state/conditions/scope to avoid unsafe inference.
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
- Knowledge-base retention does not require proof that a future task will reuse the lesson. A distinct context-rich learned point may be retained when it plausibly improves later detection, diagnosis, verification, or judgment; event-only duplication is not a learned point.

### Supersession

- Never overwrite supplied content; derived result goes to the area owning its responsibility.
- Observation-bound evidence (screenshot/captured response/measurement/execution result) records that observation; do not edit it into a different observation. Record new observation separately, or supersede while preserving prior record when a current claim/audit/continuing need depends on it.
- Derived summaries/mappings/compatibility/maintenance knowledge may be revised/superseded; preserve provenance and distinguish them from underlying observations.
- Knowledge-base entries may be refined, merged, split, or superseded as later experience changes applicability or reveals a better formulation. Do not erase useful concrete context merely to make an entry more general.
- Keep materially different supplied versions distinguishable; inspect effects on decisions, implementation, verification, references.

### Retention

- Never remove the only adequate VB for a current verified claim without replacement or claim downgrade per `plans/AGENTS.md`.
- Do not delete knowledge-base entries solely because they are old or have not yet been reused. Merge/remove when clearly duplicate, superseded, contradicted/obsolete, or no longer carrying distinct diagnostic/decision value.

### Disposal

- Inspect SoTs, workbench, implementation, active work, provenance, licensing, usage links, and continuing evidential/maintenance needs before move/delete.

## Local Governance

### Authority Boundary

- Reference presence/linkage ≠ requirement/design/testing/implementation constraint/verification conclusion beyond recorded scope.
- Adopted requirements/design/testing/procedures/decisions → responsible `plans/` SoT; reference is supporting input, not adoption record.
- Adopted source/code → project-managed `products/`; adopted environment config → `etc/`.

### Use

- Preserve supplied originals in `references/`; process/modify/compare/transform/investigate/verify only needed copies in `workbench/`.
- Retrieve knowledge-base entries contextually from the current responsibility, technology, invariant, failure mode, or verification concern; do not scan every entry on every task.
- Knowledge-base material may inform planning, implementation, investigation, or adversarial self-review, but it does not override applicable SoTs/authority or silently expand scope.
- Implementation, acceptance, or current verified-claim use requires Reference Validation.

### Reference Validation

- Verify relevant claim-bearing content, provenance, available integrity/version info, freshness, applicability conditions, links, usage references, and absence of prohibited sensitive content.
- When a reference is used as VB, verify its sufficiency for the asserted scope under `plans/AGENTS.md`.
