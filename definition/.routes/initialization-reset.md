# Definition Initialization and Reset

## Initialization

| State | Observed state of all listed initialization artifacts taken together |
|---|---|
| Uninitialized | `definition/system/system_index.md` and `definition/system/documentation_language.md` absent; `definition/system/.gitkeep` and `definition/apps/.gitkeep` present |
| Initialized | both fixed system docs present; `definition/system/.gitkeep` absent; `definition/apps/.gitkeep` present only while no app docs exist |
| Inconsistent | does not exactly match either row above |

- Reconcile an Inconsistent state before formal work.
- Initialized requires purpose, scope, RBs, and required project SoTs to be approved and recorded; fixed skeleton files/markers alone do not establish project facts or initialization, and uninitialized/inconsistent state must not be used to infer project facts.
- Initialization content comes from the root initialization-summary authorization; do not re-request authorized documents/directories/assumptions.
- Initialize atomically: create `documentation_language.md` and `system_index.md`, and remove `definition/system/.gitkeep`.
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

- Do not delete either fixed system document independently.
- Reset to uninitialized only through explicitly approved atomic lifecycle reset: remove project-specific system/app docs, delete both fixed system docs, restore both markers, and verify whole state.
