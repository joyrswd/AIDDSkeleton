# Contributing to AIDD Skeleton

AIDD Skeleton is provided as-is as a reusable repository template. Pull requests may be submitted for consideration, but maintenance, support, responses, review, and acceptance are not guaranteed.

## Project status and support

- GitHub Issues and Discussions are disabled for this repository.
- The project does not provide a support channel, response-time commitment, or public roadmap.
- Pull requests are reviewed only at the maintainer's discretion and may be left unanswered or closed without being merged.
- The MIT License allows you to use, modify, and maintain your own copy independently.

## Before you start

- Read the repository-wide [working agreement](AGENTS.md).
- Start from the latest `main` branch.
- Keep changes focused and avoid unrelated cleanup.
- Changes that alter authority, classification, routing, retention, lifecycle, or migration semantics are potentially breaking governance changes.
- Prepare a self-contained pull request; no advance discussion or approval channel is maintained.

## Repository rules

AIDD Skeleton uses five top-level responsibility areas: `definition/`, `etc/`, `jobs/`, `references/`, and `products/`.

Do not add another top-level non-hidden directory unless the repository model is intentionally being changed. Existing `AGENTS.md` files are protected governance documents; changing them requires an explicit request that identifies the intended governance change and affected scope.

## Contribution workflow

1. Create a branch from the latest `main`.
2. Make the smallest coherent change that satisfies the intended outcome.
3. Update affected links and related documentation in the same change.
4. Verify the changed Markdown, YAML, paths, and repository structure.
5. Open a pull request and complete the pull request template.

A claim that a potentially breaking governance change is generally adoptable requires black-box evidence from at least one representative initialized consumer. A guided diagnostic does not establish that claim; without representative black-box evidence, downstream behavior remains unverified.

## Pull request guidance

A good pull request explains:

- what changed;
- why the change is useful;
- how it was verified;
- what remains unverified or intentionally out of scope.
- for a potentially breaking governance change, the affected downstream semantics, evidence supporting any general-adoption claim, and remaining consumer uncertainty.

Prefer a small number of coherent commits over one commit per file. Do not include generated project-specific content in the reusable skeleton unless that content is part of the intended template.

Submitting a pull request does not create an obligation to review, respond, merge, maintain, or release the proposed change.
