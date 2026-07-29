# AIDD External Reference Material Conventions

This document is the fixed entry point that defines the placement and change principles for `references/`, regardless of the project.

## Purpose

Place externally supplied documents, data, configuration, and original source material in `references/`, generally without modification, when they are inputs to decisions about requirements, design, production, migration, or similar matters.
Supplied materials are decision inputs; they are not project-managed source-of-truth documents, formal implementations, or temporary prototypes.

## Placement

- Keep each supplied unit in one directory. Do not silently mix materials from different suppliers, versions, or receipt dates.
- Preserve the supplied structure, file names, and content where practical.
- Record the supplier, receipt date, version or commit, terms of use, and reference purpose in the corresponding project documentation.
- Preserve the content and relative path of any `README.md` included in the supplied material. If a project-managed `README.md` is needed to explain the reference material's purpose, structure, or usage, create it in a distinguishable location rather than overwriting or repurposing the supplied README.
- When placing original source material here, do not unknowingly incorporate its embedded version-control metadata into the parent repository. Treat it as an external reference using a traceable snapshot, archive, or pinned commit.
- Do not add generated data, caches, build artifacts, or installed dependencies to supplied materials.
- Do not bring in actual credentials, personal information, confidential information, or content for which storage and redistribution rights have not been confirmed.

## Use and Adoption

- When processing supplied materials for validation, copy only what is needed into `prototypes/` and do not modify the supplied materials directly.
- Reflect requirements, design details, and decisions settled from supplied materials in the corresponding project documentation under `plans/`. The existence of supplied material alone does not record a decision.
- When adopting original source material, reflect it in `products/` as an implementation with formal structure, quality, and tests. Do not use reference material directly as the formal implementation.
- When adopting supplied configuration, reflect it in `etc/` as configuration managed by the project.
- Do not treat statements in supplied materials as accepted requirements, design decisions, or evidence of implementation without verification.

## Change Principles

- Before adding material, confirm its reference purpose, supplier, terms of use, confidentiality, and whether it may be stored and redistributed.
- When content must be modified, do not overwrite it within `references/`. Reflect the change in the appropriate area among `plans/`, `prototypes/`, `products/`, and `etc/`, according to its purpose.
- When receiving a new version, inspect its relationship to existing references and decisions, and keep versions distinguishable.
- Do not delete supplied materials referenced by documentation, prototypes, implementations, or active work. Even when the material appears unnecessary, inspect the related sources of truth and usage before deleting it.
