# AIDD Skeleton

AIDD Skeleton is a lightweight repository template for AI-driven development.

This starter README is template-facing and is not intended to remain as the project README after initialization.

It gives developers and AI coding agents a shared structure for planning work, producing deliverables, managing references and working materials, and verifying results without letting the repository drift into chaos.

## Start a New Project

1. Click **Use this template** above the repository file list.
2. Select **Create a new repository**.
3. Choose the repository owner, name, and visibility, then create the repository.
4. Open the new repository in your preferred AI development environment.
5. Send your first message in your preferred language.

For example:

```text
Hello!
こんにちは！
¡Hola!
...
```

The AI agent will inspect the repository instructions and guide you through initialization and the next steps.

> Tested with GPT-5.6 on Codex and Gemini 3.6 Flash on Antigravity.
> Fast models can be used, but results may be less reliable.
> For best results, use a more capable model.

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

Root `AGENTS.md` defines repository-wide governance and the routing protocol. Each responsibility area's `.routes/index.md` selectively loads the area governance needed for the current action; `.hooks/` remains the optional consumer-extension namespace.

## What You Get

- A shared working agreement for developers and AI agents
- Selective governance loading that keeps unrelated area rules out of the immediate work context
- Clear separation between definitions, formal products, durable references, job materials, and environment configuration
- A predictable workflow for requirements, design, implementation, and verification
- A structure designed to remain understandable as the project grows

## Governance Entries

- [Working Agreement](AGENTS.md)
- [Definitions and Sources of Truth](definition/.routes/index.md)
- [Execution Environment](etc/.routes/index.md)
- [Formal Products](products/.routes/index.md)
- [Reference Materials](references/.routes/index.md)
- [Jobs](jobs/.routes/index.md)
