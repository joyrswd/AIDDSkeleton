# Execution Environment Placement and Product Boundary

- Only adopted project-managed configuration belongs in `etc/`.
- Group by environment responsibility/target service; keep one project-managed source for each config responsibility.
- Classify by ownership/role, not extension or script-ness.
- No permanent generated data/cache/log/build output/dependencies.
- Secrets: variable names/safe examples only; never actual credentials/private keys/tokens/personal/confidential values.

Canonical product/environment boundary:

| Concern | Formal artifact (`products/`) | Environment artifact (`etc/`) |
|---|---|---|
| E2E | test + fixture in verification-owning product area | compose/environment startup |
| generation | generator in owning product area | generator container/wiring |
| DB change | migration in owning product area | environment bootstrap/invocation |
| lint | lint program in owning product area | CI runner/job config |
| seed | seed data in owning product area | startup injection |
| external-service fixture | fixture implementation in verification-owning product area | emulator deployment/wiring/endpoint/consumer config |

Outbound responsibility changes use root cross-area routing:

- App/formal test/lint/generator/migration/fixture programs → owning `products/` area; container invocation does not transfer ownership.
- Supplied originals → `references/`.
