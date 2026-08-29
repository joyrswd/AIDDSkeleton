# AIDD Execution Environment Instructions

## General Provisions

### Scope

- Applies to `etc/` and descendants; inherits root + `plans/AGENTS.md`.

### Responsibility

- Owns project-managed configuration that controls execution environments from outside an application: container images/composition, external-service config, safe env examples, bootstrap, deployment, rollback, recovery, monitoring, CI environment wiring.

## Structure and Placement

- Group by environment responsibility/target service; one project-managed source for each config responsibility.
- Classify by ownership/role, not extension or script-ness.
- App/formal test/lint/generator/migration/fixture programs → owning `products/` area; container invocation does not transfer ownership.
- Supplied originals → `references/`; only adopted project-managed config belongs in `etc/`.
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

- Within `products/`, ownership still follows RB: app-owned → `products/apps/<app>/`; system-owned → `products/system/`.
- Artifact type, target count, cross-app execution/observation, reuse, or shared infrastructure do not determine product ownership.

## Local Governance

### Change Authority

- Uninitialized/unapproved responsibility: do not invent services, commands, topology, publication boundaries, persistence, recovery methods, operational guarantees.
- Keep config consistent with applicable environment/development/testing/release/migration/operation SoTs.
- Service composition/networking/persistence/publication/deployment/rollback/recovery behavior change → update responsible project docs same change.

### Procedures

- Project docs define reproducible prerequisites/procedures for applicable setup, execution, analysis, testing, doc checks, deployment, migration, rollback, operation.

### Safety

- Before destructive data delete/recreate/migration, confirm effect + recovery method under root authority rules.

### Verification

- Prefer automated reproducible checks; when impractical, define method + result location.
- Verify changed config proportional to impact: applicable syntax, expanded config, startup, migration, health, rollback, recovery.
- Record method/result/verified scope/material unverified matters/risk per `plans/AGENTS.md`; unavailable check ≠ success.
