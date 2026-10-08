# Definition Maintenance Instructions

## Scope

- Applies only when dispatched by `definition/AGENTS.md`; the parent dispatch entry owns this file's applicability condition.
- Inherits root governance and `definition/AGENTS.md`. Loading this file does not itself authorize project modification, new structure, or definition adoption.

## Maintenance

- Create `definition/units/<unit>/` only after the unit name and responsibility boundary are approved; do not create a unit merely because a component has a separate implementation directory/service/process/CLI.
- Create nested unit/category subdirectories only under `definition/AGENTS.md` Placement and Navigation criteria; do not add them solely for tidiness or implementation path symmetry.
- Keep components within the responsible unit unless an independently bounded unit responsibility is approved.
- After separating normative from current-realization/maintenance content, validate both: normative sources still support semantic reconstruction without `implementation/`, and retained references preserve enough provenance/observation context to re-investigate without becoming normative.
- Do not add a third project-definition classification/directory when `common/` and `units/` can represent the responsibility. Before a new `definition/` project-content classification, explain responsibility + classification effects and obtain user approval; approved init/change summary suffices.
- Add/rename/move/delete indexed docs using Reconciliation and Migration; preserve identifiers when splitting/moving and do not duplicate detail between overview/detail docs.

## Document Splitting

Applies only to initialized project-specific SoT docs; excludes protected `AGENTS.md`.

- Review split at ≥150 lines, ≥12 independently referenced identifiers, or ≥3 independently changing functional areas.
- As a rule split >250 lines or >20 independently referenced identifiers; if retained, the index records reason + reconsideration condition.
- Apply the parent `Placement and Navigation` splitting principle; document count alone does not justify a subdirectory.
- Keep `common/INDEX.md`, `units/INDEX.md`, each unit `INDEX.md`, and category indexes as single entry points.
