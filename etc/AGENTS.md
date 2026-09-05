# AIDD Execution Environment Instructions

## General Provisions

### Scope

- Applies to `etc/` and descendants; inherits root + `definition/AGENTS.md`.

### Responsibility

- Owns project-managed configuration that controls execution environments from outside an application: container images/composition, external-service config, safe env examples, bootstrap, deployment, rollback, recovery, monitoring, CI environment wiring.
- Only adopted project-managed configuration belongs in `etc/`.

## Structure and Placement

- Group by environment responsibility/target service; one project-managed source for each config responsibility.
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

## Outbound Transfer

- App/formal test/lint/generator/migration/fixture programs → owning `products/` area; container invocation does not transfer ownership.
- Supplied originals → `references/`.

## Local Governance

### Change Authority

- Uninitialized/unapproved responsibility: do not invent services, commands, topology, publication boundaries, persistence, recovery methods, operational guarantees.
- Keep config consistent with applicable environment/development/testing/release/migration/operation SoTs.
- Service composition/networking/persistence/publication/deployment/rollback/recovery behavior changes must respect root authority: complete any required project-definition change/authorization first, then keep config and responsible project docs/status consistent in the same change.

### Safety

- Before destructive data delete/recreate/migration, confirm effect + recovery method under root authority rules.

### Configuration Verification

- Prefer automated reproducible checks; when impractical, define method + result location.
- Verify changed config proportional to impact: applicable syntax, expanded config, startup, migration, health, rollback, recovery.
- Record verification scope/limits/risk per `definition/AGENTS.md`; unavailable check ≠ success.
