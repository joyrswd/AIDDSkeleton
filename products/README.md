# AIDD Formal Product Conventions

This document is the fixed entry point that defines the structure and change principles for formal implementations placed in `products/`, regardless of the project.

## Required Structure

```text
products/
├── README.md
├── apps/
│   └── <app>/
│       └── README.md (optional)
└── system/
```

- Place formal implementations owned by a single application in `apps/`.
- Place implementations, integration tests, fixtures, and development or verification support processes that span multiple applications in `system/`.
- Use the same `<app>` name under `products/apps/<app>/` and `plans/apps/<app>/`.
- A `README.md` may be placed under `products/` when it is necessary to explain the purpose, structure, or usage of an implementation unit, distribution unit, or tool.
- An optional `README.md` may be placed directly under each `products/apps/<app>/` to introduce that application's formal implementation.
- An application's `README.md` must describe the implementation entry point and direct readers to the corresponding project documentation. Do not duplicate details from requirements, design, tests, or current status.
- Before implementing a new application, confirm the locations of the corresponding requirements, design, and tests and satisfy the implementation entry criteria defined in the project documentation.

## Entry and Completion

- Begin formal implementation only when the corresponding requirements and acceptance criteria, responsibility boundaries and implementation approach, and verification methods are available, with no open questions that block the work.
- If missing or contradictory assumptions, requirements, or design details are discovered during implementation, return to and resolve the applicable source of truth instead of filling the gap only in the implementation.
- Do not treat the existence of code or configuration alone as evidence of completion. Confirm that required verification and updates to requirements, design, tests, current status, and traceability meet the completion criteria.

## Placement

- Keep application-specific code, resources, dependency definitions, unit tests, and integration tests for an application on its own under the same `apps/<app>/`.
- Place only code, tests, fixtures, and support processes that require connections between multiple applications in `system/`.
- Place execution environment and external service configuration in `etc/`, requirements, design, and procedures in `plans/`, temporary prototypes for making decisions in `prototypes/`, and externally supplied reference materials that should generally remain unchanged in `references/`.
- When adopting original source material from `references/`, reflect it in `products/` as an implementation with formal structure, quality, and tests. Do not use reference material directly as the formal implementation.
- Output caches, test results, build artifacts, and installed dependencies under the generated execution unit and, as a rule, do not track them in version control.

## Change Principles

- Before making changes, read the [entry point for plans and sources of truth](../plans/README.md), as well as the requirements, design, tests, and current status for the target responsibility.
- Keep implementation within the corresponding responsibility boundary. Do not introduce direct dependencies between applications or move code into `system/` solely for convenience.
- When externally observable behavior, data structures, responsibility boundaries, or dependencies change, update the corresponding sources of truth and traceability within the same change.
- Verify changed behavior with tests closest to the target responsibility. Verify guarantees that require connections between multiple applications with cross-application tests.
- Do not use generated artifacts or an intermediate migration state as evidence of implementation. Confirm consistency among code, configuration, tests, and documentation.
