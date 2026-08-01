# AIDD Prototype Instructions

This document is the fixed entry point that defines the placement and change principles for `prototypes/`, regardless of the project.
It applies to this directory and all descendants.

## Purpose

Place temporary prototypes in `prototypes/` when they are needed to make decisions about requirements, design, usability, technical feasibility, or similar matters.
A prototype is evidence for investigating an open question; it is neither a formal implementation nor a source-of-truth document.

## Placement

- Each prototype directory must address one validation purpose and remain independently removable from other prototypes and the formal implementation.
- Keep the source, fixed inputs, and dependency definitions needed by a prototype self-contained in that prototype directory.
- Put a temporary technical spike, mock, or proof of concept here even if its generator normally creates a top-level `src/`, `app/`, `tests/`, or `packages/`; set the generator root to the prototype directory.
- When processing supplied materials from `references/` for validation, copy only what is needed into the prototype directory and do not modify the supplied materials directly.
- Do not use this directory as a permanent location for formal implementation, sources of truth for requirements or design, or shared libraries.
- As a rule, do not track generated data, caches, build artifacts, or installed dependencies in version control.
- Do not bring actual credentials, personal information, or confidential data into a prototype.

## Entry and Exit

- Before starting a prototype, identify the question or hypothesis it will answer, how it will be evaluated, its stopping condition, and the source-of-truth document where the adoption decision will be reflected.
- Reflect settled findings from the prototype in the corresponding requirements or design document. The prototype's existence alone does not record the decision.
- If the prototype is adopted, reflect it in `products/` as an implementation with formal structure, quality, and tests. Do not reference the prototype itself as the formal implementation.
- When the decision has been made, review whether to retain the prototype and why, or make it a deletion candidate after confirming that no documentation or work still refers to it.

## Change Principles

- Before making changes, read the [plans and sources-of-truth instructions](../plans/AGENTS.md) and determine the current lifecycle state. Read `../plans/CURRENT_STATUS.md`, but in the uninitialized state do not treat its empty skeleton file as project-specific information. Also read the available approved basis that records the matter the prototype will investigate, as applicable: a requirements document, design document, approved initialization summary, open question recorded in a source of truth, approved decision, constraint, or acceptance criterion, or the user's current explicit request and its observable completion criteria.
- A prototype explicitly intended to help settle requirements or design may begin before the corresponding requirements or design document exists, provided that another approved basis records the question. Do not begin from an unapproved assumption alone, and do not create a prototype before initialization or outside the approved scope without the authorization required by the repository-root instructions.
- When using supplied materials from `references/`, also read the [external reference material instructions](../references/AGENTS.md).
- Do not treat prototype results as evidence that formal implementation is complete or accepted.
- Limit verification methods to what the purpose requires. Do not prematurely demand the same maintainability from a prototype as from a formal implementation.
- Do not claim broader quality, security, performance, or maintainability than the evidence supports.
- Delete a prototype only after inspecting inbound references and evidence-retention needs and obtaining any authority required by the repository-root `AGENTS.md`.
