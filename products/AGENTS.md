# AIDD Formal Product Instructions

This file defines area-specific governance for `products/` and inherits repository and `definition/` governance.

## Area Foundations

### General Provisions

#### Scope

- Applies to `products/` and descendants; inherits root + `definition/AGENTS.md`.

#### Responsibility

- Owns formal implementations and tests.

### Structure and Placement

```text
products/
├── AGENTS.md
├── .hooks/
│   └── .gitkeep
└── content/
    └── .gitkeep
```

- `products/content/` is the standard physical root for formal product artifacts owned by the `products/` area. Remove `products/content/.gitkeep` when tracked product content makes the marker unnecessary, and restore it when no tracked product content remains under `products/content/`; preserve the root-required `products/.hooks/.gitkeep`.
- Formal implementations/tests/resources/dependencies/migrations/fixtures/CLIs/support programs/generators/manifests and similar product-owned realization artifacts belong under `products/content/` unless root governance requires a repository-level integration location.
- Structure below `products/content/` follows implementation/toolchain needs. Do not mirror `definition/common/` or `definition/units/`, and do not require name/path symmetry with definition.
- Physical path/name/location does not establish definition ownership. It may support navigation, framework/tool discovery, or change-impact routing when that use does not redefine authority.
- One realization artifact may be governed by multiple responsible SoTs for different facts; the one-responsible-SoT-per-project-fact rule remains unchanged.
- Responsible definition authority for a formal product artifact must remain discoverable from its role/behavior/governing conditions plus the indexed definition hierarchy. Dedicated mapping files or routing-only README files are not required; when ordinary responsibility resolution remains materially ambiguous, provide a project-defined routing entry without duplicating normative content.
- Repository-level integration artifacts permitted by root governance may remain outside `products/content/`; when they carry a products-owned responsibility, apply this area's governance as required by root instruction hierarchy.
- Test placement follows verification responsibility and implementation/toolchain structure; cross-unit invocation/observation alone does not create a separate ownership class or require a mirrored definition path.
- Local `README.md` may explain implementation, setup, operation, or entry points; link responsible project docs instead of duplicating requirements/design/testing/status. Do not require README solely to encode implementation-to-SoT correspondence.
- Product/environment boundary for E2E, generation, migrations, linting, seeds, fixtures: [etc placement rules](../etc/AGENTS.md#structure-and-placement).

## Area Principles

### Change Boundaries

- Keep change inside approved RB; do not introduce a dependency across unit RBs without applicable adopted design authority.
- Do not replace established architecture/RB/dependency direction/state authority/compatibility pattern merely because an alternative also satisfies requirements.
- Documentation silence does not authorize redesign when change affects compatibility/responsibility/security/persistence/state authority/material boundary; resolve through the SoT process.
- Observable behavior/public contracts/data structures/dependencies/migrations/RBs changes must respect root authority: complete any required project-definition change/authorization first, then keep implementation/tests/responsible project docs/status consistent in the same change.
- Before move/transfer/deletion inspect dependents, public contracts, migrations, tests, docs, status, current VB, reference-retention needs.

## Area Operations

### Lifecycle

- When formalizing adopted code/tools, create the product-owned formal implementation under `products/content/` with appropriate structure/quality/tests rather than depending on a working/reference copy as production source, unless root governance requires a repository-level integration location.
- Generated output/cache/disposable test results/build artifacts/installed dependencies stay with execution unit and normally untracked. Retained evidence follows `definition/AGENTS.md` VB lifecycle.

### Implementation Verification

- Run project-required + risk-proportional static analysis, generation consistency, migration, compatibility, security, performance, packaging checks.
- Generated artifact/intermediate migration state ≠ implementation evidence.
- Unavailable check ≠ success; report impact + remaining risk.
