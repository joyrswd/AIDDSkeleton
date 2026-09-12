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

When choosing an AI coding environment, prefer one whose agent runtime reliably follows repository instructions while working. The authoritative working agreement is defined by the repository `AGENTS.md` files and any instructions they dispatch; this README intentionally does not restate that contract.

Merely discovering or reading `AGENTS.md` does not by itself demonstrate reliable compatibility if those instructions are not consistently applied during work.

AIDD Skeleton has been exercised with GPT-5.6 on Codex and Claude Opus 5 on Claude Code. These are examples, not compatibility guarantees.

Runtime behavior and model capability both affect reliability. Faster or less capable models may work, but more capable models are recommended for complex or governance-heavy tasks.

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
