# Products Governance Routes

`products/` owns formal implementations and tests.

Evaluate every route independently against the current action. Read every match before that action. Re-evaluate when target selection, modification, verification, formalization, or retention/disposal begins or when newly discovered facts change the affected surface.

| Route | Read when | Destination |
|---|---|---|
| Placement | Work may create, move, rename, delete, or reclassify a formal product artifact; determine app/system or test ownership; resolve an implementation unit's responsible definition; or cross the product/environment boundary. | `placement.md` |
| Lifecycle | Work intends to formalize working/reference/supplied/generated/provisional material; or is deciding whether generated output, cache, build artifacts, installed dependencies, disposable test results, or execution evidence should be retained, discarded, tracked, or transferred. Merely modifying an existing formal implementation does not match this route. | `lifecycle.md` |
| Change Boundaries | Work is about to modify, replace, move, transfer, or delete existing formal implementation/tests; or may affect observable behavior, public contracts, data structures, dependencies, migrations, RBs, architecture, dependency direction, state authority, compatibility, security, or persistence. | `change-boundaries.md` |
| Verification | Work is about to choose/run implementation checks, assess test coverage or verification scope, make/revise a completion or verification claim, or handle an unavailable applicable check. Do not match solely because verification will probably happen later. | `verification.md` |

If a route reveals a project-definition question, evaluate `definition/.routes/index.md` before continuing the affected action. If environment responsibility becomes relevant, evaluate `etc/.routes/index.md`.
