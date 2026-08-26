# AIDD Workbench Instructions

## Scope

This file defines placement and lifecycle rules for project-managed working materials under `workbench/` and all descendants.

All repository-wide governance in the root `AGENTS.md` applies here. Also follow the project-specific source-of-truth, lifecycle, status, traceability, and verification-basis rules in `plans/AGENTS.md`.

Use `workbench/` for investigations, comparisons, drafts, preparation, prototypes, technical spikes, transformation outputs, implementation plans, handoffs, and project-managed verification results or evidence that support the project but are not themselves sources of truth, formal implementations, managed environment configuration, or durable reference material.

Conversational clarification does not require retention, but its result may be kept as a workbench unit when it has continuing working or handoff value.

## Workbench Units

- Keep each unit focused on one purpose, question, experiment, verification activity, or handoff and independently understandable and removable where practical.
- Organize by purpose or work unit rather than imposing fixed subdirectories for prototypes, drafts, investigations, verification, or handoffs.
- Keep the inputs, dependency definitions, notes, evidence, and reproduction instructions needed to understand the unit together when practical.
- A substantial unit must make its purpose, approved basis, evaluation or consumption method, and adoption, retention, supersession, promotion, or deletion condition discoverable from the unit or applicable project documentation.
- Scope a workbench unit only far enough to produce a coherent basis for resolving its question, comparing alternatives, establishing feasibility, or preparing the decision or handoff it exists to support. Do not require source-of-truth-equivalent completeness merely to eliminate every remaining detail; continue elaboration only when the unresolved detail is material to the decision, coherence, feasibility, or other workbench purpose being evaluated.
- Use a short note, header, local README, or other proportional entry point; do not require a heavyweight template for small or obvious materials.
- Exploratory code belongs inside its workbench unit even when a tool normally generates `src/`, `app/`, `tests/`, or `packages/` at its root.
- Do not use the workbench as a permanent substitute for `plans/`, `products/`, `etc/`, or `references/`, and do not track disposable caches, dependencies, logs, or generated outputs without continuing working or evidential value.

## Investigations, Verification, Prototypes, and Handoffs

- Identify the question, claim, or hypothesis being examined and the method or evidence used to evaluate it.
- Verification produces evidence; it does not by itself require creation of a dedicated repository evidence file. Use the verification tool's own output, an external result, or a proportional workbench unit according to what is needed to support the current claim and any required retention.
- When retaining execution-specific verification material in the workbench, record enough context to judge the claim later: the target or state actually examined, relevant environment or conditions, verification method or commands when material, actual result, directly verified scope, and material unverified scope.
- Use a stable or immutable target identity when the environment provides one. A commit SHA, release or version identifier, artifact digest, deployment identifier, dataset version, snapshot identity, or other stable identity may be used; mutable labels such as branch, environment, or host names are context rather than substitutes. When no stable identity exists, record enough observation time, relevant state, conditions, and scope to avoid applying the result to a materially different state by inference. Do not require Git, CI, or any particular storage technology.
- Treat evidence as scoped to what was directly exercised or observed. A successful adjacent check, implementation presence, source inspection, or static analysis does not verify runtime behavior it did not exercise.
- Limit conclusions to the verified scope; a prototype does not establish formal quality, security, performance, maintainability, completion, or acceptance.
- An implementation handoff may package authorized scope, relevant exclusions, completion conditions, blockers, decisions, assumptions, open questions, execution order, and working context for a later conversation, agent, developer, or environment.
- Reference responsible sources of truth rather than duplicating them unnecessarily, and clearly distinguish approved decisions from suggestions and assumptions.
- When a unit proposes changing an existing `plans/` source of truth, use that source as the basis and record the proposed delta and decision context instead of creating a duplicate current copy. Create a full candidate view only when coherent evaluation requires it, and keep it clearly identified as workbench material rather than a parallel source of truth.
- A handoff does not authorize implementation unless the user request or an approved decision grants that authority, and its guidance does not override repository instructions or project sources of truth.
- When an adopted project fact is within the current task's authorized formalization scope, update the responsible source of truth instead of leaving the decision only in the workbench. If the work establishes a decision-ready candidate but the required adoption decision or repository modification is not already authorized, request the applicable user decision or authorization rather than treating the workbench result as adopted.

## Adoption and Exit

- A candidate is decision-ready when the semantics proposed for adoption are coherent enough to judge as a unit: their major intent and applicable responsibility boundaries are understood, and remaining open questions can be separated without being expected to invalidate or materially reshape that candidate. Decision-ready does not require implementation-entry completeness or resolution of details that can be decided consistently after adoption.
- When work becomes decision-ready and the current authorization does not already cover the required adoption decision or formalization, surface the candidate, its material basis, and the remaining open questions to the user according to the root Decision Requests rules instead of extending the workbench solely to avoid requesting that decision.
- A decision-ready coherent subset of a workbench unit may be adopted independently. Integrate only adopted semantics into the responsible `plans/` sources; once integrated, do not retain those same semantics as active workbench candidate content merely because separable questions remain unresolved.
- A workbench unit's overall exit condition governs when the unit can be retired; it does not delay adoption of an independently decision-ready subset when the remaining work can continue coherently in the unit.
- After adopted semantics are integrated, reduce active workbench material to unresolved questions, alternatives, prototypes, feasibility or verification evidence, decision or handoff context, and other material that still has a workbench responsibility. When residual work depends on adopted semantics, reference the responsible source of truth rather than retaining a duplicate candidate specification; record any formal open question, decision point, or blocking effect in `plans/` as required there without copying the surrounding investigation.
- Complete normative detail that elaborates an adopted direction in the responsible `plans/` sources when that formalization is within the authorized task. Use or return to the workbench for a remaining detail only when investigation, comparison, prototyping, feasibility work, verification, handoff preparation, or another workbench responsibility is still needed to resolve it.
- Treat formal promotion as classification and integration of adopted semantics, not file migration. Classify adopted content by authority and responsibility and integrate it into the responsible `plans/` sources; workbench file names, document splits, and directory structure do not prescribe the structure of the resulting source of truth.
- Reflect adopted requirements, design, testing policy, procedures, decisions, and other project facts in `plans/`.
- Reflect adopted formal code, tests, tools, and support programs in `products/`, and adopted environment configuration in `etc/`; do not use the workbench copy as the managed source.
- Preserve supplied originals in `references/`. When processing them, copy only what is needed into the workbench and do not modify the supplied material directly.
- Promote project-managed findings, observations, mappings, evidence-derived summaries, or other non-normative material to `references/` only when they have continuing reference value beyond the work unit. Promotion does not make them normative or an adoption record.
- Do not retain a verification run merely because it occurred. After the current claim and handoff needs are satisfied, delete disposable execution output or leave it in its native execution system unless continuing evidential, diagnostic, audit, or maintenance value justifies project-managed retention.
- Do not delete or discard workbench material while the adequate basis for a current verified claim materially depends on it. First establish that the remaining basis without that material is sufficient to reassess the claimed scope, preserve an adequate replacement basis elsewhere, or downgrade the affected verification state according to `plans/AGENTS.md`.
- Treat verification-basis retention in the workbench as transitional while the material still serves active work, an immediate handoff, unresolved reconciliation belonging to the work unit, or a bounded post-work transition with a specific exit event that will retire, replace, or re-evaluate the basis, such as the next identified re-verification, lifecycle transition, basis replacement, or reconciliation step. Closing a unit does not by itself require promotion. Open-ended intentions such as re-verifying later or keeping material for now are not bounded transitions. If the exit event is missed, cancelled, or deferred so that the dependency becomes open-ended, or if the current verified claim must remain supportable after the transitional responsibility ends and the remaining basis without the workbench material is not sufficient to reassess the claimed scope, follow the durable-basis lifecycle in `plans/AGENTS.md`. Other partial or inadequate bases do not remove this dependency, while multiple bases may jointly provide adequate support and one proportional basis may support multiple related claims.
- After adoption, do not retain a candidate workbench artifact in a form that can be mistaken for an active alternative source of truth. Delete it, mark it as superseded or historical, promote its durable non-normative reference value, or make its relationship to the resulting source of truth explicit.
- After a unit has served its purpose, delete it, promote durable reference material, retain it only while unresolved work, handoff, reconciliation, or the transitional verification-basis rule above still requires it, or mark it as superseded so obsolete material does not appear active.
- Before deleting or promoting a unit, inspect inbound references, unresolved work, traceability, current verification claims, and any continuing evidential or maintenance need.

## Change Principles

- Base each unit on the user's explicit request, an approved decision or initialization summary, a recorded open question, an applicable source of truth, or supplied material; do not begin from an unapproved assumption alone.
- A unit intended to help settle requirements or design may precede the corresponding formal document when its question has another approved basis.
- When using supplied material, also follow [External and Durable Reference Material Instructions](../references/AGENTS.md).
- Preserve unrelated working materials and do not broaden a unit beyond its stated purpose without an authorized need.
- The presence of a workbench result is neither adoption nor proof of formal completion by itself. Judge verification evidence by its method, result, identity, conditions, and scope, and update project status and traceability only according to `plans/AGENTS.md`.
