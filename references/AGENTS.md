# AIDD Reference Material Instructions

## Scope

This file defines placement, provenance, use, and change rules for durable non-normative reference materials under `references/` and all descendants.

Follow the repository-wide authority, interaction, review, safety, and instruction-protection rules in the root `AGENTS.md`, and the lifecycle, source-of-truth, status, traceability, and verification rules in `plans/AGENTS.md`.

Use `references/` for material that should remain available for future consultation without becoming a project source of truth, formal implementation, or managed environment configuration. This includes externally supplied originals and project-managed non-normative material promoted from `workbench/` because it has continuing evidential, diagnostic, maintenance, interoperability, audit, or re-investigation value.

The presence of reference material does not make its content an accepted requirement, design decision, testing rule, implementation constraint, or verification conclusion beyond its recorded scope.

## Reference Classes and Provenance

- Keep externally supplied originals distinguishable from project-managed reference material. Do not silently transform, overwrite, or mix a supplied original with a derived project record.
- For supplied material, keep each unit distinguishable by supplier, version or commit when applicable, and receipt date; preserve supplied structure, relative paths, file names, content, and included README files where practical.
- For project-managed reference material promoted from `workbench/`, record its origin, purpose, promotion or observation date, represented scope, relevant target or source identity, and any freshness, revalidation, or supersession condition needed to use it safely.
- Use a stable or immutable identity when the source or environment provides one. A commit SHA, release or version identifier, artifact digest, deployment identifier, dataset version, snapshot identity, run identifier, or other stable identity may be useful; mutable labels such as branch, environment, or host names are context rather than substitutes. When no stable identity exists, record enough observation time, relevant state, conditions, and scope to avoid applying the reference to a materially different state by inference. No particular version-control or execution system is required.
- Record relevant terms of use, confidentiality, redistribution, licensing, privacy, and retention constraints for both supplied and project-managed material where they apply.
- Place general supplied `docs/` collections and datasets here rather than creating new top-level `docs/` or `data/` directories.
- If project-managed guidance is needed around a supplied unit, place it so it cannot be confused with or overwrite the supplied material.
- Import supplied source material as a traceable snapshot, archive, or pinned version when practical without unintentionally incorporating embedded version-control metadata into the parent repository.
- Do not add disposable generated data, caches, build artifacts, installed dependencies, credentials, personal information, confidential content, or material whose storage and redistribution rights have not been confirmed.

## Use and Promotion

- Process, modify, compare, transform, investigate, and verify material in `workbench/`; preserve supplied originals here and promote only the resulting non-normative material whose continuing reference value justifies retention.
- Do not promote every verification run, command output, log, screenshot, or generated report into `references/`. A run belongs here only when the retained record itself has continuing evidential or reference value beyond the work unit.
- A promoted reference should preserve the durable knowledge or artifact actually worth retaining. Prefer a concise derived summary or stable mapping over copying a large transient execution log when the raw history adds no continuing value.
- Reflect adopted requirements, design details, testing policy, procedures, and decisions in the responsible documents under `plans/`; reference material is an input or supporting record, not the adoption record.
- Reflect adopted source material in `products/` as a project-managed implementation with appropriate structure, quality, and tests.
- Reflect adopted supplied configuration in `etc/` as project-managed configuration.
- Verify relevant statements, provenance, freshness, and applicability before treating reference content as a basis for implementation, acceptance, or a current verification claim.

## Change and Verification

- Before adding supplied material, confirm its reference purpose, provenance, version when applicable, terms of use, confidentiality, storage and redistribution rights, and relationship to existing references and decisions.
- Before promoting project-managed material from `workbench/`, confirm that its continuing value justifies durable retention and that its provenance, scope, applicability, and reconsideration or revalidation conditions are understandable.
- Do not overwrite supplied content when a modification is needed; place the derived result in `workbench/`, `plans/`, `products/`, `etc/`, or a separate project-managed reference according to its responsibility.
- Treat a retained observation-bound evidential artifact—such as a screenshot, captured response, measurement result, or retained execution result—as a record of the represented observation. Do not revise it in a way that changes that observation; record a materially new observation separately or supersede the prior record while preserving it when an active claim, audit need, or other continuing reference still depends on it.
- Derived summaries, mappings, compatibility notes, and other project-managed maintenance knowledge may be revised or superseded when their responsibility requires it. Preserve provenance and distinguish the updated reference from the observations or evidence from which it was derived.
- Keep materially different supplied versions distinguishable and inspect their effect on existing decisions, implementations, verification, and retained reference material.
- Before moving or deleting material, inspect documentation, workbench units, implementations, active work, provenance records, licensing obligations, usage references, and any continuing evidential or maintenance need. Do not remove the only available basis for a current verified claim without first replacing that basis or downgrading the claim according to `plans/AGENTS.md`.
- Verify provenance, available integrity or version information, links, usage references, applicability conditions, and absence of prohibited sensitive content.
