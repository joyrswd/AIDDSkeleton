# AIDD Formal Product Instructions

## General Provisions

### Scope

- Applies to `products/` and descendants; inherits root + `plans/AGENTS.md`.

### Responsibility

- Owns formal implementations and tests.

## Structure and Placement

```text
products/
├── AGENTS.md
├── apps/
│   └── .gitkeep
└── system/
    └── .gitkeep
```

- Remove retention marker when tracked content makes it unnecessary.
- `products/apps/<app>/`: app-owned code/resources/dependencies/migrations/fixtures/CLIs/support programs/unit tests/app-local integration tests.
- `products/system/`: system-owned code/processes/E2E or contract tests/fixtures/generators/support programs, including system responsibilities spanning apps.
- Ownership follows responsibility/RB, not artifact category, target count, cross-app execution/observation, reuse, or shared infrastructure.
- Same approved `<app>` name as `plans/apps/<app>/`; never literal `<app>` or invented temporary name.
- Conventional `src/`, `tests/`, `scripts/`, `tools/`, `packages/` stay below owning app/system area.
- Test placement follows verification ownership:
  - app-owned guarantee → owning app;
  - system-owned guarantee → `products/system/`;
  - cross-app invocation/observation alone does not alter ownership.
- Local `README.md` may explain implementation/entry point; link responsible project docs instead of duplicating requirements/design/testing/status/traceability.
- Product/environment boundary for E2E, generation, migrations, linting, seeds, fixtures: [etc placement rules](../etc/AGENTS.md#structure-and-placement).

## Lifecycle

### Formalization

- Adopting workbench/reference code/tools → create project-managed formal implementation with appropriate structure/quality/tests; do not depend on working/reference copy as production source.
- Generated output/cache/disposable test results/build artifacts/installed dependencies stay with execution unit and normally untracked. Retained evidence follows `plans/AGENTS.md` VB lifecycle.

## Local Governance

### Change Boundaries

- Keep change inside approved RB; no direct app→app dependency without approved design change.
- Do not replace established architecture/RB/dependency direction/state authority/compatibility pattern merely because an alternative also satisfies requirements.
- Documentation silence does not authorize redesign when change affects compatibility/responsibility/security/persistence/state authority/material boundary; resolve through the SoT process.
- Observable behavior/public contracts/data structures/dependencies/migrations/RBs changes must respect root authority: complete any required project-definition change/authorization first, then keep implementation/tests/docs/status/traceability consistent in the same change.
- Before move/promotion/deletion inspect dependents, public contracts, migrations, tests, docs, status, traceability, current VB, reference-retention needs.

### Implementation Verification

- Run project-required + risk-proportional static analysis, generation consistency, migration, compatibility, security, performance, packaging checks.
- Generated artifact/intermediate migration state ≠ implementation evidence.
- Unavailable check ≠ success; report impact + remaining risk.
