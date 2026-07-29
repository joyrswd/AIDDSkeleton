# AIDD Prototype Conventions

This document is the fixed entry point that defines the placement and change principles for `prototypes/`, regardless of the project.

## Purpose

Place temporary prototypes in `prototypes/` when they are needed to make decisions about requirements, design, usability, technical feasibility, or similar matters.
A prototype is evidence for investigating an open question; it is neither a formal implementation nor a source-of-truth document.

## Placement

- Each prototype directory must address one validation purpose and remain independently removable from other prototypes and the formal implementation.
- Keep the source, fixed inputs, and dependency definitions needed by a prototype self-contained in that prototype directory.
- When processing supplied materials from `references/` for validation, copy only what is needed into the prototype directory and do not modify the supplied materials directly.
- Do not use this directory as a permanent location for formal implementation, sources of truth for requirements or design, or shared libraries.
- As a rule, do not track generated data, caches, build artifacts, or installed dependencies in version control.
- Do not bring actual credentials, personal information, or confidential data into a prototype.

## Entry and Exit

- Before starting a prototype, identify the question it will answer, how it will be evaluated, and the source-of-truth document where the adoption decision will be reflected.
- Reflect settled findings from the prototype in the corresponding requirements or design document. The prototype's existence alone does not record the decision.
- If the prototype is adopted, reflect it in `products/` as an implementation with formal structure, quality, and tests. Do not reference the prototype itself as the formal implementation.
- When the decision has been made, review whether to retain the prototype and why, or make it a deletion candidate after confirming that no documentation or work still refers to it.

## Change Principles

- Before making changes, read the [entry point for plans and sources of truth](../plans/README.md) and the requirements or design document whose decision the prototype supports. When using supplied materials from `references/`, also read the [external reference material conventions](../references/README.md).
- Do not treat prototype results as evidence that formal implementation is complete or accepted.
- Limit verification methods to what the purpose requires. Do not prematurely demand the same maintainability from a prototype as from a formal implementation.
