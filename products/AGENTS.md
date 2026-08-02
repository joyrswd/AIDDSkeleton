# AIDD Formal Product Instructions

## Scope

This file defines structure, placement, and change rules for formal implementations and tests under `products/` and all descendants.

Follow the repository-wide authority, interaction, review, safety, and instruction-protection rules in the root `AGENTS.md`, and the lifecycle, source-of-truth, status, traceability, and evidence rules in `plans/AGENTS.md`.

## Structure and Placement

The clone-ready skeleton is:

```text
products/
├── AGENTS.md
├── apps/
│   └── .gitkeep
└── system/
    └── .gitkeep
```

- Retention markers preserve empty classification directories; remove one when tracked content makes it unnecessary.
- Place code, resources, dependency definitions, migrations, fixtures, CLIs, support programs, unit tests, and application-local integration tests owned by one application under `apps/<app>/`.
- Place only genuinely cross-application code, integration processes, E2E or contract tests, fixtures, generators, and support programs under `system/`; do not move work there merely for reuse convenience.
- Use the same approved `<app>` name under `products/apps/<app>/` and `plans/apps/<app>/`. Never create a literal `<app>` directory or invent a temporary application name.
- Keep conventional `src/`, `tests/`, `scripts/`, `tools/`, and `packages/` below their owning application or `system/`; do not create them at the repository root.
- A local `README.md` may explain an implementation unit and its entry point, but must direct readers to the responsible project documentation rather than duplicate requirements, design, testing policy, status, or traceability.

Place environment and external-service configuration in `etc/`, project sources of truth and procedures in `plans/`, working materials and implementation handoffs in `workbench/`, and supplied originals in `references/`. The canonical product/environment boundary for E2E, generation, migrations, linting, seed data, and fixtures is in [Execution Environment Instructions](../etc/AGENTS.md#placement).

## Formalization and Completion

- Begin formal implementation only when the project-defined entry criteria are satisfied, including applicable requirements and acceptance criteria, responsibility boundaries and approach, verification methods, and no unresolved blocker.
- Resolve missing or contradictory requirements, assumptions, design, or testing policy in the responsible source of truth rather than filling the gap only in code.
- When adopting code or tools from `workbench/` or source material from `references/`, create a project-managed formal implementation with appropriate structure, quality, and tests; do not depend on the working or supplied copy as the production source.
- Code or configuration existing is not evidence of completion. Keep unimplemented, implemented, and verified states distinct and satisfy the project-defined completion criteria.
- Generated outputs, caches, test results, build artifacts, and installed dependencies belong under their execution unit and, as a rule, are not tracked.

## Change and Verification

- Keep changes within the approved responsibility boundary. Do not introduce direct application-to-application dependencies without an approved design change.
- When observable behavior, public contracts, data structures, dependencies, migrations, or responsibility boundaries change, update the responsible documentation, status, and traceability in the same change.
- Verify behavior with tests closest to the owning responsibility; verify cross-application guarantees with tests under `products/system/`.
- Run additional static analysis, generation-consistency, migration, compatibility, security, performance, and packaging checks required by project documentation and proportional to the change.
- Do not treat generated artifacts or an intermediate migration state as implementation evidence. Record unavailable checks, their impact, and remaining risk instead of reporting success.
- Before moving, promoting, or deleting formal artifacts, inspect dependents, public contracts, migrations, tests, documentation, status, traceability, and evidence-retention needs.
