# AIDD Implementation Instructions

This file defines area-specific governance for `implementation/` and inherits repository governance.

## Area Foundations

### General Provisions

#### Scope

- Applies to `implementation/` and descendants; inherits root governance. Follow applicable `definition/AGENTS.md` rules for project-definition responsibilities under root/area routing.

#### Responsibility

- Owns formal implementations, tests, and adopted project-managed execution-environment configuration.
- Execution-environment configuration includes project-managed artifacts whose responsibility is to instantiate or control an environment for project work or for a formal implementation, such as container images/composition, external-service configuration, safe environment examples, bootstrap, deployment, rollback, recovery, monitoring, and CI environment wiring.

### Structure and Placement

```text
implementation/
└── AGENTS.md
```

- `implementation/` is the repository physical root for formal artifacts owned by the implementation area.
- Generated/package/deployed/installed/runtime layouts are separate from repository placement and need not mirror the `implementation/` area name or its internal structure; follow the responsible toolchain and adopted packaging/deployment/operation SoTs for those layouts.
- Moving or restructuring repository implementation artifacts does not by itself authorize changing an adopted generated/package/deployed/installed/runtime layout or path contract; preserve that contract unless its responsible authority changes it, and reconcile the implementation needed to continue satisfying it.
- Formal implementations/tests/resources/dependencies/migrations/fixtures/CLIs/support programs/generators/manifests, execution-environment configuration, and similar implementation-owned artifacts belong under `implementation/` unless root governance requires a repository-level integration location.
- Group execution-environment configuration by environment responsibility/target service, keep one project-managed source for each configuration responsibility, and classify artifacts by ownership/role rather than extension, script-ness, or action vocabulary such as Ansible, container, bootstrap, deploy, or monitor.
- For execution-environment configuration, do not retain generated data/cache/log/build output/installed dependencies as managed configuration. Environment examples may contain variable names and safe example values only; never actual credentials/private keys/tokens/personal/confidential values.
- Structure within `implementation/` follows implementation/toolchain needs. Do not mirror `definition/common/` or `definition/units/`, and do not require name/path symmetry with definition.
- Physical path/name/location does not establish definition ownership. It may support navigation, framework/tool discovery, or change-impact routing when that use does not redefine authority.
- One realization artifact may be governed by multiple responsible SoTs for different facts; the one-responsible-SoT-per-project-fact rule remains unchanged.
- Responsible definition authority for a formal implementation artifact must remain discoverable from its role/behavior/governing conditions plus the indexed definition hierarchy. Dedicated mapping files or routing-only README files are not required; when ordinary responsibility resolution remains materially ambiguous, provide a project-defined routing entry without duplicating normative content.
- Repository-level integration artifacts permitted by root governance may remain outside `implementation/`; when they carry an implementation-owned responsibility, apply this area's governance as required by root instruction hierarchy.
- Test placement follows verification responsibility and implementation/toolchain structure; cross-unit invocation/observation alone does not create a separate ownership class or require a mirrored definition path.
- Local `README.md` may explain implementation, setup, operation, or entry points; link responsible project docs instead of duplicating requirements/design/testing/status. Do not require README solely to encode implementation-to-SoT correspondence.
- E2E tests/fixtures, generators, migrations, lint programs, seed data, external-service fixtures, and their environment startup/invocation/wiring all remain implementation-owned formal realization artifacts; responsibility and definition ownership follow the governed outcome rather than whether an artifact is executable code or environment configuration.

## Area Principles

### Change Boundaries

- Uninitialized/unapproved environment responsibility: do not invent services, commands, topology, publication boundaries, persistence, recovery methods, or operational guarantees.
- Keep environment configuration consistent with applicable environment/development/testing/release/migration/operation SoTs.
- Service composition/networking/persistence/publication/deployment/rollback/recovery behavior changes must respect root authority: complete any required project-definition change/authorization first, then keep configuration and responsible project docs/status consistent in the same change.
- Keep change inside approved RB; do not introduce a dependency across unit RBs without applicable adopted design authority.
- Do not replace established architecture/RB/dependency direction/state authority/compatibility pattern merely because an alternative also satisfies requirements.
- Documentation silence does not authorize redesign when change affects compatibility/responsibility/security/persistence/state authority/material boundary; resolve through the SoT process.
- Observable behavior/public contracts/data structures/dependencies/migrations/RBs changes must respect root authority: complete any required project-definition change/authorization first, then keep implementation/tests/responsible project docs/status consistent in the same change.
- Before move/transfer/deletion inspect dependents, public contracts, migrations, tests, docs, status, current VB, reference-retention needs.

## Area Operations

### Lifecycle

- When formalizing adopted code/tools/configuration, create the implementation-owned formal artifact under `implementation/` with appropriate structure/quality/tests or verification rather than depending on a working/reference copy as production source, unless root governance requires a repository-level integration location.
- When an artifact ceases to have formal implementation responsibility but has independent durable non-normative evidential/diagnostic/maintenance/interoperability/audit/re-investigation value, it may transfer to `references/` after affected definition authority, dependents, current claims, and implementation state are reconciled; reference entry, identity, retention, and any later use follow `references/AGENTS.md`.
- Generated output/cache/disposable test results/build artifacts/installed dependencies stay with execution unit and normally untracked. Retained evidence follows `definition/AGENTS.md` VB lifecycle.

### Formal Artifact Verification

- Prefer automated reproducible checks; when impractical, define the method and result location.
- Run project-required + risk-proportional static analysis, generation consistency, migration, compatibility, security, performance, packaging, and applicable configuration checks.
- For changed execution-environment configuration, verify proportional to impact: applicable syntax, expanded configuration, startup, migration, health, rollback, and recovery.
- Before destructive data delete/recreate/migration, confirm effect + recovery method under root authority rules.
- Generated artifact/intermediate migration state ≠ implementation evidence.
- Record verification scope/limits/risk per `definition/AGENTS.md`; unavailable check ≠ success.
