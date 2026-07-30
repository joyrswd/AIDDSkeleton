# AIDD Execution Environment Instructions

This document is the fixed entry point that defines the placement and change principles for `etc/`, regardless of the project.
It applies to this directory and all descendants.

## Scope

Place files in `etc/` that configure the execution environment from outside applications, including:

- container images and service composition
- configuration for external services such as databases, proxies, and monitoring
- non-secret environment-specific configuration and configuration examples
- initialization, migration, and operational support files executed while setting up environments
- deployment, rollback, recovery, and CI execution-environment configuration

General `infra/`, Dockerfile, Compose, and environment `config/` responsibilities belong here, not at the repository root.

## Placement

- Group files by execution-environment responsibility or target service, and do not create multiple sources of truth for the same configuration.
- Classify by ownership and role, not by file extension or by whether something is a script.
- Even when application source code must be passed into a container, keep its source of truth in `products/`.
- Keep the originals of externally supplied configurations in `references/`, and reflect only configurations adopted and managed by the project in `etc/`.
- Do not use this directory as a permanent location for generated data, caches, logs, build artifacts, or installed dependencies.
- Formal application, test, lint, and generator programs belong in `products/`.
- Do not place actual credentials, private keys, tokens, or personal information here. Represent required configuration items with safe defaults in configuration examples or with variable names.

The following table is the canonical boundary guide between formal products and execution-environment configuration:

| Concern | Formal artifact | Environment-side artifact |
|---|---|---|
| E2E testing | Test and fixture in `products/system/` | Compose and environment startup in `etc/` |
| Code generation | Managed generator in its owning product area | Generator container and wiring in `etc/` |
| Database change | Application migration in `products/apps/<app>/` | Whole-environment bootstrap and invocation in `etc/` |
| Linting | Managed lint program in its owning product area | CI runner and job configuration in `etc/` |
| Seed data | Application data with its app; cross-app data in `products/system/` | Startup injection mechanism in `etc/` |
| External-service fixture | Fixture in `products/system/` | Emulator, endpoint, and consuming service configuration in `etc/` |

Use the narrowest owning product when a program belongs to one application; use `products/system/` only for a genuinely cross-application responsibility. See [Formal Product Instructions](../products/AGENTS.md) for product-side placement.

## Verification and Lifecycle

- Each project must define reproducible standard procedures and prerequisites for environment setup, execution, static analysis, testing, and documentation checks in the project documentation.
- Automate practical verification so that documentation structure, links, identifiers, traceability, code, configuration, and tests can be checked continuously. For checks that are not automated, define how to run them and how to record their results.
- When release and operation are part of the lifecycle, define procedures and completion criteria for deployment, migration, rollback, health checks, monitoring, and incorporating feedback in the project documentation.
- When verification or operational checks cannot be performed, do not treat them as successful. Record the reason, impact, and remaining risk in current status.

## Change Principles

- Before making changes, read the [plans and sources-of-truth instructions](../plans/AGENTS.md) and determine the documentation lifecycle state.
- When initialized, also read the current status, system index, and sources of truth for execution environments, development, testing, release, migration, or operation that apply to the target. Do not require absent indexes or project-specific documents in the uninitialized skeleton.
- If the project is uninitialized or the relevant responsibility is unapproved, do not invent services, commands, topology, or operational guarantees.
- When recorded facts such as service composition, networking, persistence, publication boundaries, or recovery methods change, update the corresponding source-of-truth document within the same change.
- Before operations that delete, recreate, or migrate existing data, confirm their effects and recovery method.
- Verify changed configuration with methods appropriate to its impact, such as syntax checks, expanded-configuration checks, and startup checks for target services.
