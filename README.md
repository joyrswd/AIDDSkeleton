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

A greeting starts the conversation; it does not by itself authorize repository changes. If the project is still uninitialized, a compatible AI agent will briefly explain initialization and offer two ways to proceed:

- **Guided** — work through the important project decisions together before reviewing the initialization summary.
- **Fast** — let the agent prepare reasonable assumptions from the information you supplied and the repository, then review them together in one summary.

Choosing a mode starts the initialization workflow. The agent may create one temporary initialization job to preserve progress, but it will show you the proposed project changes and assumptions for approval before applying the rest of the initialization.

## Working with the Agent

You can speak naturally; you do not need to learn AIDD's internal abbreviations or lifecycle terminology to use the repository.

When substantial retained work is resumed, the agent should give you a concise orientation when useful: what outcome is being pursued, what is active, what is blocked or waiting for you, and what comes next. If several decisions need your input, they may be shown together as a temporary decision view rather than turned into a second source of truth.

Decision requests should be directly answerable, often with a short option or value. An initialized project may also adopt a project-specific decision-delegation policy to require extra confirmation for selected routine choices; that policy cannot bypass the repository's existing authority or safety boundaries.

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
implementation/  Formal implementations, tests, environment configuration, and deliverables
references/  Durable non-normative reference materials
jobs/        Working, exploratory, and verification materials
```

Repository-wide and directory-specific `AGENTS.md` files define the working agreements that developers and AI agents must follow. Conditional instruction bodies may live in sibling `agents.d/` directories and are read only when explicitly dispatched by their governing `AGENTS.md`.

## What You Get

- A shared working agreement for developers and AI agents
- Clear separation between definitions, formal implementation artifacts, durable references, and job materials
- A predictable workflow for requirements, design, implementation, and verification
- A structure designed to remain understandable as the project grows

## Documentation

- [Working Agreement](AGENTS.md)
- [Definitions and Sources of Truth](definition/AGENTS.md)
- [Formal Implementation and Environment Configuration](implementation/AGENTS.md)
- [Reference Materials](references/AGENTS.md)
- [Jobs](jobs/AGENTS.md)
