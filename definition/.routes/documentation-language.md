# Definition Documentation Content and Language

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
