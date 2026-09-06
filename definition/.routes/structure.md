# Definition Structure, Navigation, and Documentation

## Required Structure

- Clone-ready fixed entries include `definition/.routes/index.md`, `definition/.hooks/.gitkeep`, `definition/system/.gitkeep`, and `definition/apps/.gitkeep`.
- Per approved app, create:
  - `definition/apps/<app>/<app>_index.md`;
  - `definition/apps/<app>/requirements/<app>_requirements_index.md`;
  - `definition/apps/<app>/design/<app>_design_index.md`;
  - `definition/apps/<app>/testing/<app>_testing_index.md`.

| Location | Responsibility |
|---|---|
| `definition/system/system_index.md` | System overview, RBs, current system/cross-app state, material limits/blockers, documentation map, reading order, app entry routing, system/cross-app responsibility routing |
| `definition/system/documentation_language.md` | Default documentation language + explicit app overrides |
| other `definition/system/` docs | System-owned purpose, requirements, structure, constraints, development/operational methods |
| `<app>_index.md` | App overview, RBs, current app state, material limits/blockers, reading order, category entries, applicable cross-responsibility authority entries |
| category indexes | Category docs, questions answered, order, absence/inheritance |
| `requirements/` | Required outcomes/constraints |
| `design/` | Adopted implementation structure/approach/contracts/algorithms/invariants/constraints |
| `testing/` | Verification strategy/specifications: what must be shown and what evidence is sufficient |

- `definition/system/` and `definition/apps/` are required classifications; remove `.gitkeep` when tracked content makes it unnecessary.
- `.routes/` and `.hooks/` are reserved governance namespaces, not project-definition artifacts. Project-specific docs belong under `definition/system/` or an approved `definition/apps/<app>/` according to responsibility.
- No `definition/README.md`; use project indexes for project-definition navigation and `.routes/index.md` for governance routing.
- Create `definition/apps/<app>/` only after app name + responsibility approval; use the same approved `<app>` under `definition/` and `products/`, never a literal/invented placeholder.
- Keep fixed system entry docs directly under `definition/system/`.
- Required app category dirs/indexes do not require detail docs. If none, the index states explicit absence/inheritance/cross-cutting source; design may state no additional normative implementation constraints.

## Placement and Navigation

- One purpose per project doc; split by coherent responsibility/question/reader/update trigger/lifecycle, not tidiness or count alone.
- Other system docs stay flat while responsibility is small; use a responsibility-based subdirectory only when one stable system responsibility owns multiple independently changing docs.
- Indexes provide navigation plus concise owned current-state/absence/inheritance/coverage context; do not duplicate detailed requirements/design/testing/procedures/results or identifier-level cross-artifact correspondence matrices.
- `system_index.md` is the primary system navigation entry. Directly link each Markdown project doc directly under `definition/system/` except itself and directly link every approved app index. Nested docs routed through a local responsibility index must remain reachable from `system_index.md`. Protected `.routes/` and `.hooks/` instructions are excluded from project navigation.
- `system_index.md` routes system/cross-app relationships to the SoTs that own their normative meaning; it does not duplicate relationship detail.
- App navigation: `<app>_index.md` → three category indexes + applicable cross-responsibility authority. Each app index contains an explicit cross-responsibility authority entry: link responsible system/app SoTs when applicable, otherwise state that no additional cross-responsibility authority applies. Category index → its docs.
- Initialized project-definition read order: `definition/system/system_index.md` → `definition/system/documentation_language.md` → target indexes.
- Determine ownership from purpose + change authority + invocation/governing decision + success/failure (or sufficiency) judgment, not target/caller/tool/file name/operational vocabulary.
  - App-owned execution/diagnostic procedure → directly under the app, linked from `<app>_index.md`; system-owned or cross-app procedure → `definition/system/`.
  - Multiple targets do not prove system ownership; one app target does not prove app ownership; never choose a participating app as representative owner or duplicate system responsibility per app.
  - Shared tools/observability/deployment/system environments/`etc/` config do not transfer ownership. For shared system execution with app-specific prerequisites/commands/AC/constraints, keep shared responsibility in system procedure and only app-owned delta in the app.
  - Normative testing uses the same ownership test. Testing responsibility always exists for formal implementation; if no app testing detail doc, the testing index names inherited/cross-cutting policy. Testing indexes may link current VB for coverage but contain no execution history.
  - Adopted procedures/policy/constraints belong in `definition/`.

## Documentation Language

- Initialization summary proposes a default; absent user choice, propose current conversation language.
- After approval, record one BCP 47 default in `definition/system/documentation_language.md`, with only explicit app overrides. System/cross-app docs use default; app docs inherit unless overridden.
- Never infer language/override from code, supplied material, later conversation language, or environment; conversation language is independent after initialization.
- On adoption into `definition/`, preserve semantics in the destination's effective documentation language while preserving identifiers, code/protocol literals, proper names, standard technical notation, and intentionally fixed wording/language.
- Change documentation language only on explicit user request; supplied originals under `references/` need not be translated.
- Do not duplicate the language setting in another machine-readable file; language-setting changes update relevant index guidance.

## Document Splitting

Applies only to initialized project-specific SoT docs; protected governance routes are excluded.

- Review split at ≥150 lines, ≥12 independently referenced identifiers, or ≥3 independently changing functional areas.
- As a rule split >250 lines or >20 independently referenced identifiers; if retained, the index records reason + reconsideration condition.
- Split by coherent responsibility/question/reader/update trigger/lifecycle, not line count alone; document count alone does not justify a subdirectory.
- Keep `system_index.md`, `<app>_index.md`, and category indexes as single entry points.

## Procedures

- Applicable project procedures define reproducible prerequisites and steps for setup, execution, analysis, testing, documentation checks, deployment, migration, rollback, and operation.
