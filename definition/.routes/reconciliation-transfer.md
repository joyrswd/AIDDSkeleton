# Definition Reconciliation, Migration, and Transfer

## Reconciliation and Migration

- Active normative design describes adopted end state, not stale transition stages. After completed migration/refactor/rename/rollout, remove obsolete stages/names/temp compatibility/superseded targets from active design and retain useful history non-normatively.
- Prevent authority leakage in mixed normative + current-realization/maintenance content. Separate when authority/readers/update triggers differ and usability survives; otherwise mark authority explicitly. Do not duplicate facts merely to separate.
- After separation validate both: normative sources still support semantic reconstruction without `products/`, and retained references preserve enough provenance/observation context to re-investigate without becoming normative.
- Reconciliation affecting authority, ownership, navigation, current state, or verification claims must inspect and reconcile affected SoTs, indexes, VB, inbound links, and retained job/reference material in the same coherent change.
- Root Governance Protection and Migration owns repository-wide governance-migration existing-case coverage; this route adds project-definition artifact/classification reconciliation when definition responsibility is affected.
- When governance retires a project-definition artifact or classification, treat existing instances as migration cases: preserve only still-authoritative semantics in responsible SoTs, reconcile affected index routing/current state/VB and all inbound links, then remove retired artifact/stale references in the same coherent migration; do not preserve retired structure/non-required correspondence merely for legacy compatibility.
- Documentation silence does not authorize opportunistic re-architecture.
- When classification/routing/retention rules change, classify affected execution/evidence records as current claim-supporting basis, durable non-normative reference, active work, or retire; do not migrate solely because legacy placement differs or content is historical.
- Temporary legacy placement is allowed only to avoid losing current VB or breaking dependent links while reconciliation is unresolved; mark remaining reconciliation discoverably and do not claim full reconciliation.
- Source location is not an adoption record; adopted facts/decisions enter responsible SoTs only through applicable adoption authority.

## Outbound Transfer

When definition material no longer has definition responsibility, apply root cross-area routing before transfer:

- Non-authoritative candidate replacements/target states/alternatives, transient current-realization or other active working material, active execution control, and project-managed active execution evidence → `jobs/`.
- Durable non-normative knowledge/artifacts with continuing evidential/diagnostic/maintenance/interoperability/audit/re-investigation value → `references/`.
- Environment configuration → `etc/`.
- Application tests and formal generators/viewers/verifiers → `products/`.
- Keep current SoT semantics in `definition/`; use native/external VB when suitable for current claim support and retire no-need material.
