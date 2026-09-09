# Definition Governance Migration Instructions

## Scope

- Applies only when dispatched by `definition/AGENTS.md` because a governance change alters definition authority, classification, routing, retention, migration semantics, or allowed document location/hierarchy.
- Inherits root governance and `definition/AGENTS.md`.
- This file governs definition consequences of applicable governance changes; an ordinary project migration does not trigger it merely because the work is described as a migration.

## Migration

- Governance migration covers changed semantics and all materially affected existing cases; unresolved cases remain explicit debt/unverified. Unrelated discoveries do not expand migration scope.
- When governance retires a project-definition artifact or classification, treat existing instances as migration cases: preserve only still-authoritative semantics in their responsible SoTs, reconcile affected index routing/current state/VB and all inbound links, then remove the retired artifact and stale references in the same coherent migration; do not preserve the retired structure or non-required correspondence merely for legacy compatibility.
- When classification/routing/retention rules change, classify affected execution/evidence records as current claim-supporting basis, durable non-normative reference, active work, or retire; do not migrate solely because legacy placement differs or content is historical.
- Temporary legacy placement is allowed only to avoid losing current VB or breaking dependent links while reconciliation is unresolved; mark remaining reconciliation discoverably and do not claim full reconciliation.

## Validation

- Governance changes altering allowed doc location/hierarchy must update every affected validator/generator/template/example/check in the same migration; old-structure validation is not evidence for the new structure.
