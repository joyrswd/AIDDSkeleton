# Products Placement

Clone-ready product structure includes:

```text
products/
├── .routes/
│   └── index.md
├── .hooks/
│   └── .gitkeep
├── apps/
│   └── .gitkeep
└── system/
    └── .gitkeep
```

- `.routes/` and `.hooks/` are reserved governance namespaces, not formal product artifacts.
- Remove `products/apps/.gitkeep` or `products/system/.gitkeep` when tracked content makes the corresponding marker unnecessary; preserve `products/.hooks/.gitkeep`.
- `products/apps/<app>/`: app-owned code/resources/dependencies/migrations/fixtures/CLIs/support programs/unit tests/app-local integration tests.
- `products/system/`: system-owned code/processes/E2E or contract tests/fixtures/generators/support programs, including system responsibilities spanning apps.
- Ownership follows responsibility/RB, not artifact category, target count, cross-app execution/observation, reuse, or shared infrastructure.
- Same approved `<app>` name as `definition/apps/<app>/`; never literal `<app>` or invented temporary name.
- When app-name symmetry or system ownership does not unambiguously identify a formal implementation unit's responsible definition, make an entry point to the responsible definition discoverable from that implementation unit through a project-defined routing mechanism; do not duplicate SoT content.
- Conventional `src/`, `tests/`, `scripts/`, `tools/`, `packages/` stay below owning app/system area.
- Test placement follows verification ownership:
  - app-owned guarantee → owning app;
  - system-owned guarantee → `products/system/`;
  - cross-app invocation/observation alone does not alter ownership.
- Local `README.md` may explain implementation/entry point; link responsible project docs instead of duplicating requirements/design/testing/status.
- For E2E, generation, migrations, linting, seeds, fixtures, or other product/environment boundary questions, evaluate `etc/.routes/index.md` before deciding placement.
