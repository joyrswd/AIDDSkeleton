# Definition Initialization Instructions

## Scope

- Applies only when dispatched by `definition/AGENTS.md` because the observed project state is `Uninitialized` or `Inconsistent`, or because an explicitly authorized reset to `Uninitialized` is being performed.
- Inherits root governance and `definition/AGENTS.md`. Loading this file does not itself authorize initialization, reset, adoption, or project modification.
- The Initialization section applies only to `Uninitialized`/`Inconsistent` handling; the Reset section applies only to an explicitly authorized reset.

## Initialization

- Initialization content comes from the root initialization-summary authorization; do not re-request authorized documents/directories/assumptions.
- Initialize atomically: create `definition/system/documentation_language.md` and `definition/system/system_index.md`, and remove `definition/system/.gitkeep`.
- Define at least:
  - purpose, users, scope, exclusions;
  - system/app RBs;
  - requirements/design/testing SoTs;
  - observable AC + open questions;
  - lifecycle identifiers/states/transitions/end boundary;
  - implementation entry/completion criteria, standard verification, VB retention expectations;
  - applicability + reasons for security, privacy, accessibility, performance, availability, monitoring, retention, recovery, licensing.
- Open questions require a decision point + blocking effect. If release/operation/retirement is outside lifecycle, record end boundary + handoff; if inside, define transitions/completion + feedback route.

## Reset

- Reset to `Uninitialized` only through explicitly approved atomic lifecycle reset: remove project-specific system/app docs, delete both fixed system docs, restore both markers, and verify whole state.
