# Execution Environment Change Authority and Safety

- For uninitialized/unapproved responsibility, do not invent services, commands, topology, publication boundaries, persistence, recovery methods, or operational guarantees.
- Keep config consistent with applicable environment/development/testing/release/migration/operation SoTs.
- Service composition/networking/persistence/publication/deployment/rollback/recovery behavior changes must respect root authority: complete any required project-definition change/authorization first, then keep config and responsible project docs/status consistent in the same change.
- Before destructive data delete/recreate/migration, confirm effect + recovery method under root authority rules.
- When a change may alter adopted project behavior/constraints, evaluate `definition/.routes/index.md` before implementation of that environment change.
