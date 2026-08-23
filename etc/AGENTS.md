# AIDD Execution Environment Instructions

## Scope

This file defines placement and change rules for project-managed execution-environment configuration under `etc/` and all descendants.

All repository-wide governance in the root `AGENTS.md` applies here. Also follow the project-specific source-of-truth, lifecycle, status, traceability, and verification-basis rules in `plans/AGENTS.md`.

## Placement

Place configuration here when it controls an execution environment from outside an application, including container images and composition, external-service configuration, safe environment examples, environment bootstrap, deployment, rollback, recovery, monitoring, and CI environment wiring.

- Group files by environment responsibility or target service, and maintain one project-managed source of truth for each configuration.
- Classify by ownership and role, not by extension or whether a file is a script.
- Keep application source, formal tests, lint programs, generators, migrations, and fixtures in `products/`; passing them into a container does not transfer ownership to `etc/`.
- Preserve supplied originals in `references/`; place only adopted and project-managed configuration here.
- Do not use `etc/` as a permanent location for generated data, caches, logs, build artifacts, or installed dependencies.
- Represent required secrets with variable names or safe example values. Never store actual credentials, private keys, tokens, personal information, or confidential values.

The following table is the canonical boundary guide between formal products and execution-environment configuration. It distinguishes artifact roles; it does not assign application or system ownership within `products/`:

| Concern | Formal artifact | Environment-side artifact |
|---|---|---|
| E2E testing | Test and fixture in the product area that owns the verification responsibility | Compose and environment startup in `etc/` |
| Code generation | Generator in its owning product area | Generator container and wiring in `etc/` |
| Database change | Migration in its owning product area | Whole-environment bootstrap and invocation in `etc/` |
| Linting | Lint program in its owning product area | CI runner and job configuration in `etc/` |
| Seed data | Seed data in its owning product area | Startup injection mechanism in `etc/` |
| External-service fixture | Fixture in the product area that owns the verification responsibility | Emulator, endpoint, and consuming-service configuration in `etc/` |

Determine formal-artifact placement from responsibility ownership before applying the table: use `products/apps/<app>/` for application-owned programs and `products/system/` for system-owned programs. The table is not an exception to this rule. Artifact category, number of application targets, cross-application execution or observation, reuse, and use of shared infrastructure do not by themselves determine product ownership. See [Formal Product Instructions](../products/AGENTS.md).

## Change and Verification

- When the project is uninitialized or the relevant responsibility is not approved, do not invent services, commands, topology, publication boundaries, persistence, recovery methods, or operational guarantees.
- Keep configuration consistent with the applicable environment, development, testing, release, migration, and operation sources of truth.
- Ensure project documentation defines reproducible prerequisites and procedures for applicable environment setup, execution, analysis, testing, documentation checks, deployment, migration, rollback, and operation.
- Prefer automated, reproducible checks; when automation is impractical, define how the check is run and where its result is recorded.
- When service composition, networking, persistence, publication boundaries, deployment, rollback, or recovery behavior changes, update the responsible project documentation in the same change.
- Before deleting, recreating, or migrating existing data, confirm the effect and recovery method under the repository authority rules.
- Verify changed configuration in proportion to impact, including applicable syntax, expanded-configuration, startup, migration, health, rollback, and recovery checks.
- Record methods, results, verified scope, unverified matters, and remaining risk as required by `plans/AGENTS.md`; an unavailable check is not a successful check.
