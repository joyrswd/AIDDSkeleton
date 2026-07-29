# AIDD Execution Environment Conventions

This document is the fixed entry point that defines the placement and change principles for `etc/`, regardless of the project.

## Scope

Place files in `etc/` that configure the execution environment from outside applications, including:

- container images and service composition
- configuration for external services such as databases, proxies, and monitoring
- non-secret environment-specific configuration and configuration examples
- initialization, migration, and operational support files executed while setting up environments

## Placement

- Group files by execution-environment responsibility or target service, and do not create multiple sources of truth for the same configuration.
- Even when application source code must be passed into a container, keep its source of truth in `products/`.
- Keep the originals of externally supplied configurations in `references/`, and reflect only configurations adopted and managed by the project in `etc/`.
- Do not use this directory as a permanent location for generated data, caches, logs, build artifacts, or installed dependencies.
- Do not place actual credentials, private keys, tokens, or personal information here. Represent required configuration items with safe defaults in configuration examples or with variable names.

## Verification and Lifecycle

- Each project must define reproducible standard procedures and prerequisites for environment setup, execution, static analysis, testing, and documentation checks in the project documentation.
- Automate practical verification so that documentation structure, links, identifiers, traceability, code, configuration, and tests can be checked continuously. For checks that are not automated, define how to run them and how to record their results.
- When release and operation are part of the lifecycle, define procedures and completion criteria for deployment, migration, rollback, health checks, monitoring, and incorporating feedback in the project documentation.
- When verification or operational checks cannot be performed, do not treat them as successful. Record the reason, impact, and remaining risk in current status.

## Change Principles

- Before making changes, read the [entry point for plans and sources of truth](../plans/README.md) and the sources of truth it references for execution environments, development, and operation.
- When recorded facts such as service composition, networking, persistence, publication boundaries, or recovery methods change, update the corresponding source-of-truth document within the same change.
- Before operations that delete, recreate, or migrate existing data, confirm their effects and recovery method.
- Verify changed configuration with methods appropriate to its impact, such as syntax checks, expanded-configuration checks, and startup checks for target services.
