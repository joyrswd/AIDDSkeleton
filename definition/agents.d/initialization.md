# Definition Initialization Instructions

## Scope

- Applies only when dispatched by `definition/AGENTS.md` because the observed project state is `Uninitialized` or `Inconsistent`, or because an explicitly authorized reset to `Uninitialized` is being performed.
- Inherits root governance and `definition/AGENTS.md`. Loading this file does not itself authorize initialization, reset, adoption, or project modification.
- The Initialization section applies only to `Uninitialized`/`Inconsistent` handling; the Reset section applies only to an explicitly authorized reset.

## Initialization

- Initialization content comes from the root initialization-summary authorization; do not re-request authorized documents/directories/assumptions.
- If the observed state is `Inconsistent`, first reconcile existing definition content and authority under `definition/AGENTS.md` Reconciliation and Migration. As part of an authorized coherent reconciliation, missing fixed initialization entry documents may be created or restored from approved content while preserving existing adopted authority; do not create or replace them as an independent initialization action or invent missing approval. Re-evaluate the whole Initialization state after reconciliation; do not proceed with formal work while it remains `Inconsistent`.
- If the re-evaluated state is `Uninitialized`, initialize atomically: create `definition/common/INDEX.md`, `definition/common/documentation_language.md`, and `definition/units/INDEX.md`, then remove `definition/common/.gitkeep` and `definition/units/.gitkeep`.
- Define at least:
  - purpose, users, scope, exclusions;
  - common/unit RBs and the approved unit catalog;
  - requirements/design/testing SoTs;
  - observable AC + adopted current-state limits/blockers/routing needed to delimit the initialized scope;
  - lifecycle identifiers/states/transitions/end boundary;
  - implementation entry/completion criteria, standard verification, VB retention expectations;
  - applicability + reasons for security, privacy, accessibility, performance, availability, monitoring, retention, recovery, licensing.
- Unresolved questions, candidate resolutions, and non-adopted decision material remain non-authoritative under `jobs/`. When unresolved work materially limits the adopted current state, record the current-state limitation/blocker, its blocking effect, and the responsible decision routing needed for continuation in the responsible definition index; record any independently adopted normative boundary in its responsible requirements/design/testing SoT. Do not duplicate unresolved question/candidate semantics into `definition/` or adopt a provisional choice merely to complete initialization.
- Initialization does not require every future choice to be resolved. A coherent adopted subset may initialize while separable unresolved matters remain in `jobs/`; dependent formalization/formal implementation remains blocked wherever an unresolved matter must be chosen to interpret, validate, accept, or establish the verification basis for the entered scope. Intentionally open discretion may be normative only when that openness itself is adopted under Definition Authority.
- If release/operation/retirement is outside lifecycle, record end boundary + handoff; if inside, define transitions/completion + feedback route.

## Reset

- Reset to `Uninitialized` only through explicitly approved atomic lifecycle reset: remove or reclassify all project-specific content under `definition/common/` and `definition/units/`, delete the three fixed initialized entry docs, restore `definition/common/.gitkeep` and `definition/units/.gitkeep`, and verify whole state.
- If that reset leaves no tracked product content under `products/content/`, restore `products/content/.gitkeep` under `products/AGENTS.md` before reset completion and include that marker condition in whole-state verification.
- Before reset completion, reconcile any `products/` or `etc/` artifact whose formal/adopted status depends on definition authority being removed. Reclassify, transfer, retire, or otherwise update its status under the responsible area governance; do not leave an artifact represented as formal/adopted solely through authority deleted by the reset.
