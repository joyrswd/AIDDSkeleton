# Reference Entry, Provenance, and Storage

## Reference Classes

- Keep supplied originals distinct from project-managed references; never silently mix them.
- Supplied unit: preserve supplier, applicable version/commit, receipt date, supplied structure/paths/names/content/README where practical.
- Project-managed unit: record origin, purpose, retention/observation date, represented scope, target/source identity, and material freshness/revalidation/supersession conditions.
- General supplied `docs/` collections/datasets → `references/`; never create new top-level `docs/`/`data/`.
- Project guidance around supplied material must remain distinguishable from the original.
- Import supplied source as traceable snapshot/archive/pinned version when practical; avoid embedding nested VCS metadata unintentionally.

## Provenance

- Identity rules are owned by definition Verification Basis (`definition/.routes/index.md`): prefer stable/immutable identity; mutable labels are context; without a stable ID, record enough time/state/conditions/scope to avoid unsafe inference.
- Record applicable terms of use, confidentiality, redistribution, licensing, privacy, and retention.

## Storage

- Never add disposable generated data/cache/build output/dependencies, credentials, personal/confidential content, or material without confirmed storage/redistribution rights.

## Entry

- Confirm purpose and relation to existing references/decisions.
- Satisfy Reference Classes, Provenance, and Storage requirements.
- Retain project-managed material only when it has continuing non-normative value.
- Do not retain every run/output/log/screenshot/report; prefer a concise durable summary/stable mapping when raw transient history adds no value.
