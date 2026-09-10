# AIDD Skeleton

AIDD Skeleton is a lightweight repository template for AI-driven development.

This starter README is template-facing and is not intended to remain as the project README after initialization.

It gives developers and AI coding agents a shared structure for planning work, producing deliverables, managing references and working materials, and verifying results without letting the repository drift into chaos.

## Start a New Project

1. Click **Use this template** above the repository file list.
2. Select **Create a new repository**.
3. Choose the repository owner, name, and visibility, then create the repository.
4. Open the new repository in a compatible AI coding environment.
5. Send your first message in your preferred language.

For example:

```text
Hello!
こんにちは！
¡Hola!
...
```

A compatible AI agent will inspect and follow the repository instructions, then guide you through initialization and the next steps.

### AI Agent Compatibility

AIDD Skeleton assumes an AI coding environment whose agent runtime can:

- discover the applicable repository instructions, including `AGENTS.md` and conditionally dispatched instructions;
- treat those instructions as authoritative working constraints rather than optional context or hints;
- follow repository-defined scope, lifecycle, routing, language, and artifact-placement rules even when they differ from the agent or tool defaults.

Support for discovering or reading `AGENTS.md` alone is not sufficient if the runtime does not reliably apply those instructions while working.

Tested combinations:

- GPT-5.6 on Codex
- Claude Opus 5 on Claude Code
- Gemini 3.6 Flash on Antigravity

Runtime compatibility is the primary requirement. Model capability still affects reliability within a compatible runtime: faster or less capable models may work, but more capable models are recommended for complex or governance-heavy tasks.

## What Is AIDD?

**AI-Driven Development (AIDD)** is a development approach in which developers and AI agents collaborate through shared project structure, conventions, and documentation.

Instead of asking an AI to generate code into an unstructured repository, AIDD gives it a predictable framework for understanding the project, discussing decisions, creating artifacts, and verifying results.

## Repository Structure

```text
definition/  Project definitions and sources of truth
products/    Formal implementations, tests, and deliverables
references/  Durable non-normative reference materials
jobs/        Working, exploratory, and verification materials
etc/         Execution-environment configuration
```

Repository-wide and directory-specific `AGENTS.md` files define the working agreements that developers and AI agents must follow. Conditional instruction bodies may live in sibling `agents.d/` directories and are read only when explicitly dispatched by their governing `AGENTS.md`.

## What You Get

- A shared working agreement for developers and AI agents
- Clear separation between definitions, formal products, durable references, job materials, and environment configuration
- A predictable workflow for requirements, design, implementation, and verification
- A structure designed to remain understandable as the project grows

## Documentation

- [Working Agreement](AGENTS.md)
- [Definitions and Sources of Truth](definition/AGENTS.md)
- [Execution Environment Conventions](etc/AGENTS.md)
- [Formal Products](products/AGENTS.md)
- [Reference Materials](references/AGENTS.md)
- [Jobs](jobs/AGENTS.md)
