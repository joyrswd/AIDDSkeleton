# AIDD Workbench Instructions

This document is the fixed entry point that defines the placement and change principles for `workbench/`, regardless of the project.
It applies to this directory and all descendants.

## Purpose

Place project-managed working materials in `workbench/` when they support investigation, comparison, drafting, preparation, validation, or handoff before content becomes a project source of truth, formal implementation, or managed execution-environment configuration.

Working materials may include prototypes, technical spikes, investigations, design drafts, implementation plans, transformation outputs, and implementation handoffs between conversations or execution environments.

A workbench artifact is neither a project source of truth nor evidence that formal implementation is complete. Its presence records active or retained working context, not adoption.

## Placement

- Keep each workbench unit focused on one purpose, question, or handoff and independently understandable and removable where practical.
- Organize workbench content by purpose or work unit. Do not require a fixed set of subdirectories merely because a material is a prototype, draft, investigation, or handoff.
- Keep the source, fixed inputs, dependency definitions, and notes needed to understand or reproduce a workbench unit together when practical.
- Put temporary technical spikes, mocks, proofs of concept, comparison implementations, and other exploratory code here even if a generator normally creates a top-level `src/`, `app/`, `tests/`, or `packages/`; set the generator root to the workbench unit.
- Put project-created drafts, analyses, and implementation handoffs here when they are useful working inputs but are not themselves approved requirements, design, testing policy, current status, or other sources of truth.
- When processing supplied materials from `references/`, copy only what is needed into the workbench unit and do not modify the supplied materials directly.
- Do not use this directory as a permanent substitute for formal implementation, project sources of truth, managed execution-environment configuration, or supplied originals.
- As a rule, do not track generated caches, build artifacts, installed dependencies, transient logs, or outputs that have no continuing working or evidential value.
- Do not bring actual credentials, personal information, or confidential data into workbench materials unless the project explicitly authorizes and protects that data.

## Workbench Units

Before creating a substantial workbench unit, make its role discoverable from the unit itself or from the applicable project documentation. Record, in a form proportional to the work:

- its purpose, question, or intended handoff;
- the approved request, source of truth, supplied material, or open question that provides its basis;
- how its result will be evaluated or consumed;
- the conditions under which it should be adopted, reflected elsewhere, retained, superseded, or deleted.

Do not require a heavyweight template for small or obvious working materials. The information may be expressed in a short note, a file header, a local README, or another clear entry point.

## Prototypes and Investigations

- A prototype or investigation must identify the question or hypothesis it addresses and the method or evidence used to evaluate it.
- A prototype is evidence for investigating an open question; it is not a formal implementation or a source-of-truth document.
- Reflect settled findings in the corresponding requirements, design, testing, or other project source-of-truth document. The workbench artifact's existence alone does not record adoption.
- If prototype code is adopted, reflect it in `products/` as an implementation with formal structure, quality, and tests. Do not use the workbench copy itself as the formal implementation.
- Limit verification to what the investigation requires. Do not claim broader quality, security, performance, or maintainability than the evidence supports.

## Implementation Handoffs

An implementation handoff may package decisions and working context for a later conversation, agent, developer, or execution environment.

- Reference the applicable requirements, design, testing documents, and other sources of truth rather than duplicating them without need.
- Clearly distinguish approved decisions from suggestions, assumptions, and open questions.
- State the intended outcome, authorized scope, relevant exclusions, observable completion conditions, and known blockers when those matters are not already unambiguous from the referenced sources.
- Execution order and implementation guidance may be included, but they do not override the referenced sources of truth or repository instructions.
- A handoff does not itself authorize implementation unless the user request or an approved decision grants that authority.
- When preparation of a handoff settles a requirement, design, testing, or responsibility decision, update the responsible source of truth rather than leaving the decision only in the handoff.

## Adoption, Retention, and Exit

- Reflect adopted requirements, design details, testing decisions, procedures, and other project facts in `plans/`.
- Reflect adopted formal code, tests, tools, and support programs in `products/`.
- Reflect adopted execution-environment configuration in `etc/`.
- Preserve supplied originals in `references/`; do not treat a modified workbench copy as the supplied original.
- After a workbench unit has served its purpose, decide whether to delete it, retain it as useful working history or evidence, or mark it as superseded. Do not let obsolete material continue to appear active.
- Before deleting a workbench unit, inspect inbound references, unresolved work, traceability, and evidence-retention needs.

## Change Principles

- Before making changes, read the [plans and sources-of-truth instructions](../plans/AGENTS.md) and determine the current lifecycle state.
- Read `../plans/CURRENT_STATUS.md`, but in the uninitialized state do not treat its empty skeleton file as project-specific information.
- Also read the approved basis applicable to the workbench unit, such as a requirements document, design document, approved initialization summary, open question recorded in a source of truth, approved decision, constraint, acceptance criterion, supplied material, or the user's current explicit request and observable completion criteria.
- A workbench unit explicitly intended to help settle requirements or design may begin before the corresponding formal document exists, provided that another approved basis records the question. Do not begin from an unapproved assumption alone.
- When using supplied materials, also read the [external reference material instructions](../references/AGENTS.md).
- Do not treat workbench results as evidence that formal implementation is complete or accepted.
- Preserve unrelated working materials and do not broaden a workbench unit beyond its stated purpose without a specific need.
