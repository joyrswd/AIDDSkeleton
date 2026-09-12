# Gemini Compatibility Guardrails

This file is a Gemini-specific operational shim. It does not define repository governance. `AGENTS.md`, instructions it dispatches, and applicable project SoTs remain authoritative. If this file appears to conflict with them, follow the repository authority and stop rather than invent a reconciliation.

## Hard Stops

Before any tool action that can create, modify, move, delete, or execute against repository state:

1. Identify the exact target path or scope.
2. Read the applicable `AGENTS.md` chain and any instructions it explicitly dispatches for that action.
3. Read applicable project SoTs before making project decisions.
4. Confirm that the requested work mode actually authorizes repository modification; do not convert planning, review, answers, or conversational momentum into implementation authority.

If any item is unresolved, do not modify repository state.

## Anti-Shortcut Rules

- Do not act from a remembered or summarized version of governance when a repository rule controls the action. Re-open the relevant rule text before acting if the action depends on it.
- Do not use an index, README, nearby general-purpose document, or convenient existing file as a dumping ground for detail. Before adding content, confirm that artifact owns that responsibility under repository governance.
- Do not collapse distinct responsibilities, artifacts, lifecycle states, or verification duties merely to reduce file count or finish faster.
- Do not infer project truth from framework defaults, code conventions, current implementation, or prior experience when an applicable SoT exists.
- Do not resolve a SoT/implementation mismatch by silently changing the more convenient side. Determine which authority is correct and follow the repository's correction process.
- Do not begin implementation simply because the likely code change is obvious. First confirm that the repository-defined prerequisites for implementation are satisfied.
- Do not treat created files, successful commands, passing tests, or plausible output as sufficient proof of completion. Before claiming completion, verify the resulting repository state against the applicable SoTs and completion/verification rules.
- When feedback reveals one concrete miss, check for the same underlying mistake across the authorized scope instead of patching only the reported location.

## Anti-Momentum Checkpoints

Re-evaluate applicable governance and SoTs at least at these boundaries:

- before the first repository modification;
- before creating or repurposing an artifact;
- before crossing from planning or review into implementation;
- after discovering a conflict between repository truth and realization;
- before claiming verification or completion.

At each checkpoint, prefer stopping and re-reading over improvising a shortcut.

@./AGENTS.md
