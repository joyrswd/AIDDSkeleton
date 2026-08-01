# AIDD Formal Product Instructions

This document is the fixed entry point that defines the structure and change principles for formal implementations placed in `products/`, regardless of the project.
It applies to this directory and all descendants.

## Required Structure

The clone-ready skeleton is:

```text
products/
├── AGENTS.md
├── apps/
│   └── .gitkeep
└── system/
    └── .gitkeep
```

- The retention markers preserve empty classification directories in Git; they do not assert that an application or system product exists. Remove a marker when tracked content makes it unnecessary.
- Place formal implementations owned by a single application in `apps/`.
- Place implementations, integration tests, fixtures, and development or verification support processes that span multiple applications in `system/`.
- This includes formal shared code, cross-application integration code, E2E and contract tests, managed code generators, and cross-application support programs.
- Use the same `<app>` name under `products/apps/<app>/` and `plans/apps/<app>/`.
- Never create a literal `<app>` directory or invent a temporary application name.
- A `README.md` may be placed under `products/` when it is necessary to explain the purpose, structure, or usage of an implementation unit, distribution unit, or tool.
- An optional `README.md` may be placed directly under each `products/apps/<app>/` to introduce that application's formal implementation.
- An application's `README.md` must describe the implementation entry point and direct readers to the corresponding project documentation. Do not duplicate details from requirements, design, tests, or current status.
- Before implementing a new application, confirm the locations of the corresponding requirements, design, and tests and satisfy the implementation entry criteria defined in the project documentation.

Do not mechanically impose a framework layout. An application or package root may be `products/apps/<app>/`, and any conventional subdirectories remain below the owning product:

| Common name or use | Placement by responsibility |
|---|---|
| Application `src/` | `products/apps/<app>/src/` |
| Application `tests/` | `products/apps/<app>/tests/` |
| Application-owned CLI or script | Within `products/apps/<app>/` |
| Formal code shared by applications | `products/system/` |
| Code connecting multiple applications | `products/system/` |
| Cross-application E2E or contract tests | `products/system/` |
| Cross-system fixtures | `products/system/` |
| General `packages/` | The owning application, or `products/system/` only when genuinely shared |
| Managed code generator | Its owning application, or `products/system/` when it serves multiple applications |

This is a responsibility guide, not a requirement to use these exact subordinate names. Do not create top-level `src/`, `tests/`, `scripts/`, `tools/`, or `packages/`.

## Entry and Completion

- Begin formal implementation only when the corresponding requirements and acceptance criteria, responsibility boundaries and implementation approach, and verification methods are available, with no open questions that block the work.
- If missing or contradictory assumptions, requirements, or design details are discovered during implementation, return to and resolve the applicable source of truth instead of filling the gap only in the implementation.
- Do not treat the existence of code or configuration alone as evidence of completion. Confirm that required verification and updates to requirements, design, tests, current status, and traceability meet the completion criteria.
- Keep unimplemented, implemented, and verified states distinct.

## Placement

- Keep application-specific code, resources, dependency definitions, unit tests, and integration tests for an application on its own under the same `apps/<app>/`.
- This includes its database migrations, fixtures, CLI programs, and support scripts.
- Place only code, tests, fixtures, and support processes that require connections between multiple applications in `system/`.
- Do not move code there solely for reuse convenience.
- Place execution environment and external service configuration in `etc/`, requirements, design, and procedures in `plans/`, project-managed drafts, investigations, prototypes, and implementation handoffs in `workbench/`, and externally supplied reference materials that should generally remain unchanged in `references/`.
- The canonical boundary between formal programs and environment configuration—including E2E, code generation, migrations, linting, seed data, and fixtures—is in [Execution Environment Instructions](../etc/AGENTS.md#placement).
- When adopting original source material from `references/`, reflect it in `products/` as an implementation with formal structure, quality, and tests. Do not use reference material directly as the formal implementation.
- When adopting code or tools from `workbench/`, reflect them in `products/` as formal implementations rather than depending on the workbench copy as the production source.
- Output caches, test results, build artifacts, and installed dependencies under the generated execution unit and, as a rule, do not track them in version control.

## Change Principles

- Before making changes, read the [plans and sources-of-truth instructions](../plans/AGENTS.md), current status, and the requirements, design, tests, and responsibility boundaries for the target.
- Read any more specific `AGENTS.md` along the target path; do not create one mechanically for each application.
- Keep implementation within the corresponding responsibility boundary. Do not introduce direct dependencies between applications or move code into `system/` solely for convenience.
- When externally observable behavior, data structures, responsibility boundaries, or dependencies change, update the corresponding sources of truth and traceability within the same change.
- Verify changed behavior with tests closest to the target responsibility. Verify guarantees that require connections between multiple applications with cross-application tests.
- Also run the static analysis, generation consistency, migration, compatibility, security, performance, and packaging checks required by project documentation and proportional to the change.
- Do not use generated artifacts or an intermediate migration state as evidence of implementation. Confirm consistency among code, configuration, tests, and documentation.
- When verification cannot run, record the reason, impact, and remaining risk; do not report it as successful.
- Before moving, promoting, or deleting formal artifacts, inspect dependents, public contracts, migrations, tests, documentation, current status, traceability, and retained evidence.
