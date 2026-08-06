# Contributing to AIDD Skeleton

Thank you for helping improve AIDD Skeleton. Contributions that make the template clearer, safer, easier to adopt, or more reliable across AI development environments are welcome.

## Before you start

- Read the repository-wide [working agreement](AGENTS.md).
- Start from the latest `main` branch.
- Keep changes focused and avoid unrelated cleanup.
- For a substantial behavior, structure, or governance change, open an issue first so the intended outcome can be discussed.

## Repository rules

AIDD Skeleton uses five top-level responsibility areas: `plans/`, `etc/`, `workbench/`, `references/`, and `products/`.

Do not add another top-level non-hidden directory unless the repository model is intentionally being changed. Existing `AGENTS.md` files are protected governance documents; changing them requires an explicit request that identifies the intended governance change and affected scope.

## Contribution workflow

1. Create a branch from the latest `main`.
2. Make the smallest coherent change that satisfies the intended outcome.
3. Update affected links and related documentation in the same change.
4. Verify the changed Markdown, YAML, paths, and repository structure.
5. Open a pull request and complete the pull request template.

## Pull request guidance

A good pull request explains:

- what changed;
- why the change is useful;
- how it was verified;
- what remains unverified or intentionally out of scope.

Prefer a small number of coherent commits over one commit per file. Do not include generated project-specific content in the reusable skeleton unless that content is part of the intended template.

## Reporting problems

Use the bug report form for reproducible problems and the feature request form for proposed improvements. Include enough context for another person to understand the expected result, actual result, environment, and verification steps.
