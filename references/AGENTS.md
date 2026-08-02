# AIDD External Reference Material Instructions

## Scope

This file defines placement, provenance, use, and change rules for externally supplied materials under `references/` and all descendants.

Follow the repository-wide authority, interaction, review, safety, and instruction-protection rules in the root `AGENTS.md`, and the lifecycle, source-of-truth, status, traceability, and evidence rules in `plans/AGENTS.md`.

Use `references/` for supplied documents, data, configuration, datasets, and original source material that serve as decision or implementation inputs and should generally remain unchanged. Their presence does not make them accepted requirements, design decisions, project sources of truth, formal implementations, or verification evidence.

## Placement and Provenance

- Keep each supplied unit distinguishable by supplier, version or commit, and receipt date; do not silently mix different sources or versions.
- Preserve supplied structure, relative paths, file names, content, and included README files where practical.
- Record the supplier, receipt date, version or commit, terms of use, reference purpose, and relevant confidentiality or redistribution constraints in the responsible project documentation.
- Place general supplied `docs/` collections and datasets here rather than creating new top-level `docs/` or `data/` directories.
- If project-managed guidance is needed, place it so it cannot be confused with or overwrite a supplied README.
- Import source material as a traceable snapshot, archive, or pinned commit without unintentionally incorporating embedded version-control metadata into the parent repository.
- Do not add generated data, caches, build artifacts, installed dependencies, credentials, personal information, confidential content, or material whose storage and redistribution rights have not been confirmed.

## Use and Adoption

- Process, modify, compare, or transform supplied material in `workbench/`; copy only what is needed and preserve the original here.
- Reflect adopted requirements, design details, procedures, and decisions in the responsible documents under `plans/`; supplied material is an input, not the adoption record.
- Reflect adopted source material in `products/` as a project-managed implementation with appropriate structure, quality, and tests.
- Reflect adopted supplied configuration in `etc/` as project-managed configuration.
- Verify relevant statements and applicability before treating supplied content as a basis for implementation or acceptance.

## Change and Verification

- Before adding material, confirm its reference purpose, provenance, version, terms of use, confidentiality, storage and redistribution rights, and relationship to existing references and decisions.
- Do not overwrite supplied content when a modification is needed; place the derived or adopted result in `workbench/`, `plans/`, `products/`, or `etc/` according to its responsibility.
- Keep new versions distinguishable and inspect their effect on existing decisions, implementations, and evidence.
- Before moving or deleting material, inspect documentation, workbench units, implementations, active work, provenance records, licensing obligations, usage references, and evidence-retention needs.
- Verify provenance, available integrity or version information, links, usage references, and absence of prohibited sensitive content.
