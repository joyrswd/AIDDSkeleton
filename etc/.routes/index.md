# Execution Environment Governance Routes

`etc/` owns adopted project-managed configuration that controls execution environments from outside an application: container images/composition, external-service config, safe env examples, bootstrap, deployment, rollback, recovery, monitoring, and CI environment wiring.

Evaluate every route independently against the current action. Read every match before that action and re-evaluate when responsibility, behavior, safety impact, or verification phase changes.

| Route | Read when | Destination |
|---|---|---|
| Placement / Boundary | Work may create/move/rename/delete/reclassify environment configuration; modify configuration content by adding/changing embedded scripts, migrations, fixtures, generated/disposable output, persisted data/log/cache, secrets, or other material whose product-vs-environment/storage responsibility may change; determine product-vs-environment ownership; or transfer material into/out of `etc/`. | `placement-boundary.md` |
| Change / Safety | Work is about to modify environment configuration or may change service composition, networking, persistence, publication, deployment, rollback, recovery, topology, commands, operational guarantees, or perform destructive data operations. | `change-safety.md` |
| Verification | Work is about to choose/run configuration checks, assess environment verification scope, report verification, or handle an unavailable applicable check. | `verification.md` |

If a route reveals project-definition authority/state/VB questions, evaluate `definition/.routes/index.md`. If formal code/tests/tools become involved, evaluate `products/.routes/index.md`.
