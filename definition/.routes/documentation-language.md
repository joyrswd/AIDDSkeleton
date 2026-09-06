# Definition Documentation Language

- Initialization summary proposes a default; absent user choice, propose current conversation language.
- After approval, record one BCP 47 default in `definition/system/documentation_language.md`, with only explicit app overrides. System/cross-app docs use default; app docs inherit unless overridden.
- Never infer language/override from code, supplied material, later conversation language, or environment; conversation language is independent after initialization.
- On adoption into `definition/`, preserve semantics in the destination's effective documentation language while preserving identifiers, code/protocol literals, proper names, standard technical notation, and intentionally fixed wording/language.
- Change documentation language only on explicit user request; supplied originals under `references/` need not be translated.
- Do not duplicate the language setting in another machine-readable file; language-setting changes update relevant index guidance.
