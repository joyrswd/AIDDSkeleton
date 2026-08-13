# AIDD Workbench Instructions

## Scope

This file defines placement and lifecycle rules for project-managed working materials under `workbench/` and all descendants.

It also defines the repository-wide pre-work clarification protocol referenced by the root [`AGENTS.md`](../AGENTS.md).

Follow the repository-wide authority, interaction, review, safety, and instruction-protection rules in the root `AGENTS.md`, and the lifecycle, source-of-truth, status, traceability, and evidence rules in `plans/AGENTS.md`.

Use `workbench/` for investigations, comparisons, drafts, preparation, prototypes, technical spikes, transformation outputs, implementation plans, and handoffs that support the project but are not themselves sources of truth, formal implementations, or managed environment configuration.

## Pre-Work Clarification Protocol

- Clarify breadth-first across the stated major decision areas before following any one answer into detail. Immediate follow-up is appropriate when only one material area exists or when it is needed to understand or question the remaining areas.
- After covering the major areas, check answers for contradictions, incompatible assumptions, and material dependencies before deepening. Do not silently choose between conflicting answers; when they appear reconcilable, state the proposed interpretation and ask the user to confirm it.
- Resolve material inconsistencies before deepening unless their effect is isolated, explicit, and does not prevent unaffected work from proceeding.
- Deepen only matters that materially affect the requested outcome and cannot be safely deferred through a reasonable, reversible default.
- When the user may delegate a decision, provide a recommendation and state the default that will be used.
- End the session once there is sufficient information to proceed coherently; do not attempt to eliminate every ambiguity.
- Conversational clarification does not require retention, but its result may be kept as a workbench unit when it has continuing working or handoff value.

## Workbench Units

- Keep each unit focused on one purpose, question, experiment, or handoff and independently understandable and removable where practical.
- Organize by purpose or work unit rather than imposing fixed subdirectories for prototypes, drafts, investigations, or handoffs.
- Keep the inputs, dependency definitions, notes, and reproduction instructions needed to understand the unit together when practical.
- A substantial unit must make its purpose, approved basis, evaluation or consumption method, and adoption, retention, supersession, or deletion condition discoverable from the unit or applicable project documentation.
- Use a short note, header, local README, or other proportional entry point; do not require a heavyweight template for small or obvious materials.
- Exploratory code belongs inside its workbench unit even when a tool normally generates `src/`, `app/`, `tests/`, or `packages/` at its root.
- Do not use the workbench as a permanent substitute for `plans/`, `products/`, `etc/`, or `references/`, and do not track disposable caches, dependencies, logs, or generated outputs without continuing working or evidential value.

## Investigations, Prototypes, and Handoffs

- Identify the question or hypothesis being examined and the method or evidence used to evaluate it.
- Limit conclusions to the verified scope; a prototype does not establish formal quality, security, performance, maintainability, completion, or acceptance.
- An implementation handoff may package authorized scope, relevant exclusions, completion conditions, blockers, decisions, assumptions, open questions, execution order, and working context for a later conversation, agent, developer, or environment.
- Reference responsible sources of truth rather than duplicating them unnecessarily, and clearly distinguish approved decisions from suggestions and assumptions.
- When a unit proposes changing an existing `plans/` source of truth, use that source as the basis and record the proposed delta and decision context instead of creating a duplicate current copy. Create a full candidate view only when coherent evaluation requires it, and keep it clearly identified as workbench material rather than a parallel source of truth.
- A handoff does not authorize implementation unless the user request or an approved decision grants that authority, and its guidance does not override repository instructions or project sources of truth.
- When investigation or handoff preparation settles a project fact, update the responsible source of truth instead of leaving the decision only in the workbench.

## Adoption and Exit

- Reflect adopted requirements, design, testing policy, procedures, decisions, and other project facts in `plans/`.
- Reflect adopted formal code, tests, tools, and support programs in `products/`, and adopted environment configuration in `etc/`; do not use the workbench copy as the managed source.
- Preserve supplied originals in `references/`. When processing them, copy only what is needed into the workbench and do not modify the supplied material directly.
- After adoption, do not retain a candidate workbench artifact in a form that can be mistaken for an active alternative source of truth. Delete it, mark it as superseded or historical, or make its relationship to the resulting source of truth explicit according to its continuing evidential or working value.
- After a unit has served its purpose, delete it, retain it as useful history or evidence, or mark it as superseded so obsolete material does not appear active.
- Before deleting a unit, inspect inbound references, unresolved work, traceability, and evidence-retention needs.

## Change Principles

- Base each unit on the user's explicit request, an approved decision or initialization summary, a recorded open question, an applicable source of truth, or supplied material; do not begin from an unapproved assumption alone.
- A unit intended to help settle requirements or design may precede the corresponding formal document when its question has another approved basis.
- When using supplied material, also follow [External Reference Material Instructions](../references/AGENTS.md).
- Preserve unrelated working materials and do not broaden a unit beyond its stated purpose without an authorized need.
- A workbench result is neither adoption nor evidence that formal implementation is complete; update project status and evidence only according to `plans/AGENTS.md`.
