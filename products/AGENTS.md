# AIDD Formal Product Instructions

## Scope

- Applies to `products/` and descendants; inherits root + `plans/AGENTS.md`.
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
- `apps/<app>/`: app-owned code/resources/dependencies/migrations/fixtures/CLIs/support programs/unit tests/app-local integration tests.
- `system/`: system-owned code/processes/E2E or contract tests/fixtures/generators/support programs, including system responsibilities spanning apps.
- Ownership follows responsibility/RB, not artifact category, target count, cross-app execution/observation, reuse, or shared infrastructure.
- Same approved `<app>` name as `plans/apps/<app>/`; never literal `<app>` or invented temporary name.
- Conventional `src/`, `tests/`, `scripts/`, `tools/`, `packages/` stay below owning app/system area.
- Local `README.md` may explain implementation/entry point; link responsible project docs instead of duplicating requirements/design/testing/status/traceability.
- Product/environment boundary for E2E, generation, migrations, linting, seeds, fixtures: `etc/AGENTS.md#placement`.

## Formalization and Completion

- Begin formal implementation only when project entry criteria are satisfied: applicable requirements/AC, RBs/approach, verification methods, no unresolved Blocker.
- Missing/contradictory requirements/assumptions/design/testing policy → responsible SoT; do not fill only in code.
- Adopting workbench/reference code/tools → create project-managed formal implementation with appropriate structure/quality/tests; do not depend on working/reference copy as production source.
- Code/config presence ≠ completion. Keep unimplemented/implemented/verified states distinct and satisfy project completion criteria.
- Generated output/cache/disposable test results/build artifacts/installed dependencies stay with execution unit and normally untracked. Retained evidence follows `plans/AGENTS.md` VB lifecycle.

## Existing Implementation

Before changes inspect relevant:
- code/tests/config/dependencies/migrations;
- established RBs/dependency directions/patterns needed to understand current realization.

Rules:
- Existing structure = current-realization evidence, not normative design.
- Preserve material established boundaries compatible with SoTs and outside approved change; do not preserve debt/provisional structure/known deficiency merely because it exists.
- Do not replace established architecture/RB/dependency direction/state authority/compatibility pattern merely because an alternative also satisfies requirements. Material replacement requires adopted design or explicitly authorized design correction/change.
- If intent of material structure is unclear and change affects compatibility/responsibility/security/persistence/state authority/material boundary, documentation silence ≠ redesign permission; resolve through SoT process.
- Newly discovered knowledge classification follows root/`plans/`: required outcome → requirements; adopted future implementation constraint → design; transient realization/verification → `workbench/`; durable non-normative realization knowledge → `references/`.

## Change and Verification

- Keep change inside approved RB; no direct app→app dependency without approved design change.
- Observable behavior/public contracts/data structures/dependencies/migrations/RBs change → update responsible docs/status/traceability same change.
- Test placement follows verification ownership:
  - app-owned guarantee → owning app;
  - system-owned guarantee → `products/system/`;
  - cross-app invocation/observation alone does not alter ownership.
- Run project-required + risk-proportional static analysis, generation consistency, migration, compatibility, security, performance, packaging checks.
- Generated artifact/intermediate migration state ≠ implementation evidence.
- Unavailable check ≠ success; report impact + remaining risk.
- Before move/promotion/deletion inspect dependents, public contracts, migrations, tests, docs, status, traceability, current VB, reference-retention needs.
