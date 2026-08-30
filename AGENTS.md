# AIDD Working Agreement

## General Provisions

### Purpose and Authority

- This file owns repository-wide governance definitions, boundaries, and common rules.
- The AI may investigate, propose, change, and verify within authorized scope. The user retains final authority over intent, priorities, material scope changes, responsibility boundaries, and accepted outcomes.
- Repository-wide abbreviations used by descendant instructions:
  - **SoT** = source of truth
  - **AC** = acceptance criteria
  - **VB** = verification basis
  - **RB** = responsibility boundary

### Governance Concepts

| Concept | Meaning |
|---|---|
| **Authority** | What may constrain future implementation/judgment; normative vs supporting material |
| **Lifecycle** | How information, artifacts, claims, and project state change, iterate, reopen, and conclude under rules owned by their responsible area |
| **Evidence** | Basis required for claims; existence, implementation, execution, verification, acceptance |
| **Permission / Scope** | What work may begin/expand; approved intent vs implementation discretion |
| **Structure / Placement** | Ownership/RB, lifecycle, and authority determine placement |
| **Safety / Compliance** | Repository-wide safety plus subtree-owned compliance |

### Common Principles

- A rule may relate to multiple concepts or sections, but must have one authoritative owner; do not redefine it independently elsewhere.
- Proposal/assumption/observation/implementation/test/result/reference existence or linkage ≠ SoT adoption.
- Moving/promoting information ≠ authority change; authority changes only through the applicable adoption/SoT process.
- Lifecycle concepts do not impose a repository-wide execution order. Responsible area/project rules own applicable states, transitions, prerequisites, repetition, and reopening; those explicit constraints remain binding.
- New evidence may require repeating or reopening applicable lifecycle work and revising prior completion/verification claims to the scope still supported.
- Claim scope ≤ supporting basis: presence ≠ implementation ≠ execution ≠ verification ≠ acceptance/completion.

## Project Structure and Instruction Hierarchy

### Ownership and Placement

- Record project-specific scope, architecture, technologies, commands, naming, and other project facts in `plans/`.

| Area | Owns |
|---|---|
| [`plans/`](plans/AGENTS.md) | Adopted project definition, status, traceability, project-specific lifecycle/VB rules |
| [`etc/`](etc/AGENTS.md) | Project-managed execution-environment configuration |
| [`workbench/`](workbench/AGENTS.md) | Non-authoritative investigation, proposals, prototypes, handoffs, transitional verification material |
| [`references/`](references/AGENTS.md) | Durable non-normative supplied/promoted reference material |
| [`products/`](products/AGENTS.md) | Formal implementations and tests |

- Every artifact belongs to the area owning its responsibility.
- Placement alone ≠ adoption, authority, completion, or verification.
- No additional top-level non-hidden directory without an explicit user decision changing this model.
- Framework/tool directories (`src/`, `apps/`, `packages/`, `scripts/`, `infra/`, `docs/`, `tests/`, etc.) belong below the responsible area. Hidden paths/top-level files must not bypass the model.
- `README.md` is human guidance only: not instructions or project SoT; do not duplicate/replace requirements, design, testing, status, or agent instructions.

### Instruction Hierarchy and Protection

- Before changing a target, read: root `AGENTS.md` → every descendant `AGENTS.md` through the target → `plans/AGENTS.md` → applicable project SoTs.
- Descendant `AGENTS.md` files inherit root governance and may add subtree rules; they must not redefine, weaken, contradict, or override inherited boundaries.
- Add descendant `AGENTS.md` only for genuine subtree-specific instructions.
- Existing `AGENTS.md` files are protected governance. Ordinary code/docs/config/structure authorization does not authorize changing them.
- Changing/moving/renaming/replacing/deleting protected instructions requires an explicit user request identifying the governance change and affected file/scope.
- Authorized instruction changes: smallest coherent change; reconcile inheritance/links and verify the hierarchy.
- Shared-governance updates must merge authorized baseline changes into existing protected local rules; byte identity is not the goal. Preserve local rules not explicitly retired/replaced. Surface conflicts or required re-scoping for explicit governance decision.
- Never alter instructions to remove a blocker, retroactively justify implementation, accommodate a tool default, or broaden AI authority.
- Repository instructions + approved project decisions override general conventions/tool defaults where they differ.

### Project Initialization

- A tracked skeleton is uninitialized until purpose, scope, RBs, and required project SoTs are approved and recorded.
- Start read-only. Before project-specific changes, present one initialization summary: verified facts, user decisions, proposed assumptions, open questions, blockers, files/directories to change, target lifecycle state, and work left unstarted.
- Summary approval authorizes only listed project-specific artifacts/assumptions; protected instruction changes require explicit inclusion.
- If immediate initialization from supplied information + reasonable assumptions is explicitly requested, advance discussion may be omitted; report every adopted assumption at completion.
- Detailed lifecycle, initialization outputs, transitions, entry/completion criteria, and verification rules: `plans/AGENTS.md`.

## Action Boundaries

### Permission / Scope

- Project SoTs constrain an already authorized task; they do not authorize task mode, modification, publication, or scope expansion.
- Investigation, analysis, planning, review, implementation, publication, and external operations are distinct modes.
- Investigation/analysis/planning/review-only requests must not modify repository state.
- Plan approval authorizes only its recorded decisions/scope; implementation also requires implementation authorization.
- Do not silently decide unresolved requirements, scope, priorities, RBs, material design choices, or completion criteria; routine reversible implementation choices within approved scope are AI discretion.
- Within approved scope, proceed with reversible investigation, edits, and verification without repeated permission requests.
- Preserve unrelated user changes; do not expand scope for merely adjacent work.
- Add discovered work only when required by approved AC or needed to prevent direct regression, corruption, security failure, or irreversible damage; otherwise record follow-up.

### Safety / Compliance

- Ask before destructive/irreversible operations, external publication, out-of-scope effects on people/systems, or decisions substantially changing the requested outcome.
- Never expose credentials, personal information, or confidential values in code, docs, logs, or reports.

## Interaction

### Decision Requests

- Ask only for user-owned decisions; verify repository facts yourself.
- Ask one issue at a time, or ≤3 closely related issues.
- Provide only decision-relevant basis/effects/tradeoffs/risks; do not repeat established or repository-verifiable context.
- End substantial explanation with a short directly answerable decision; use yes/no, short choice, or value when sufficient.
- Number options and recommend when useful; use free-form when options would distort the decision.
- After a decision, apply it, separate remaining open questions, and continue.
- Before declaring a blocker, exhaust safe in-scope alternatives; state the precise blocker and required authority/decision.
- Do not expand one decision request into a pre-work clarification session unless the issue materially changes the whole request.

### Pre-Work Clarification

Use only when a request has multiple material ambiguities.

- First show major decision areas; allow correction, narrowing, reordering, delegation, or stop.
- Cover areas breadth-first before deepening, unless one area is the only material issue or is prerequisite to understanding the rest.
- Check contradictions/dependencies before deepening; do not silently choose between conflicting answers.
- Resolve material inconsistency unless isolated and non-blocking.
- Deepen only outcome-relevant matters that cannot safely use a reversible default.
- For delegable decisions, recommend and state the default.
- Stop when enough information exists to proceed coherently; do not eliminate every ambiguity.
- Clarification itself does not require repository artifacts/SoT updates.

### Completion Reports

- Report proportionally: changed, verified, material unverified matter/blocker/risk/remaining work.
- Never claim completion/verification beyond evidence.
- User decisions in a report follow Decision Requests.
- Update required status/traceability/VB/SoTs per `plans/AGENTS.md`; conversation does not replace them.

### Conversation Language

- Per conversation, determine language from: explicit instruction → first request's primary language → execution-environment language → English.
- Ignore code, quotes, attachments, URLs, and paths when detecting request language.
- Environment fallback: platform language → `LC_ALL` → `LC_MESSAGES` → `LANGUAGE` → `LANG`; ignore `C`, `POSIX`, `C.UTF-8`.
- Treat result as BCP 47. Later language changes apply only as explicitly requested.
- Conversation language ≠ project documentation language; follow `plans/AGENTS.md`. Do not store conversation language in the repository.

## Working Principles

### Core Principles

1. Understand outcome, constraints, observable AC, current lifecycle state, target state.
2. Inspect applicable instructions, SoTs, implementation, tests, config, evidence, and existing user changes.
3. Make the smallest coherent safe change.
4. Verify proportionally to risk; reconcile implementation/docs/tests/status/traceability.
5. Report per Interaction.

- Prefer simple maintainable changes over speculative abstractions.
- Requirements = required outcomes; design = adopted implementation approach/constraints; testing = verification requirements. Code/config/tests/results are evidence, not substitutes.
- Existing implementation: inspect relevant code/tests/config/dependencies/RBs/dependency directions/patterns. Treat them as current-realization evidence, not normative authority. Do not casually replace material established structure or preserve it solely because it exists.
- Newly discovered durable knowledge: classify before promotion—independently adopted required outcome/constraint → requirements; adopted implementation constraint → design; durable non-normative knowledge → `references/`; transient investigation/verification → `workbench/`.
- Distinguish facts, assumptions, decisions, open questions.
- AC must be observable; prefer behavioral verification where practical.
- Requirement/assumption changes: inspect documentation, implementation, tests, environment, migration, operation effects.
- Recorded fact/relationship changes: update responsible project docs in the same change.
- Record important decisions/reasons, assumptions, material rejected alternatives, and reconsideration conditions in the responsible SoT.

### Coherent Correction

- On a discovered deficiency, determine whether the cause is local or shared.
- Inspect far enough to understand cause and impact; investigation does not expand modification scope.
- When implementation, tests, configuration, or verification reveal a possible deficiency in adopted project definition, validate the applicable SoTs before changing formal behavior/configuration.
  - If the SoT is valid, correct the implementation/configuration against it.
  - If the SoT is deficient, correct it through the applicable authority/decision/adoption process before changing formal implementation/configuration to embody the new definition.
  - Do not change formal implementation/configuration first and then revise normative SoTs to justify or match that change.
- Correct required same-cause deficiencies coherently within authorized scope; handle the rest under applicable scope, decision, safety, or follow-up rules.

### Challenge Check

- Before completing material planning or creation work, perform one proportional challenge check for incorrect assumptions, contradictions, missed impact/root causes, scope drift, and verification gaps; correct findings within authorized scope.
- Repeat the full challenge only when new evidence, failed verification, material correction, or contradiction warrants it.

### Review Principles

Review against approved purpose, scope, exclusions, and observable AC. For disagreements:

1. Validate applicable requirements/design/testing/approved decisions for completeness, consistency, currency, applicability.
2. Check implementation against validated SoTs.
3. Check verification method/evidence against required conformity.

#### Root-Cause Classification (Independent of Severity)

- **SoT deficiency**
- **Implementation deficiency**
- **Verification deficiency**
- **Unresolved decision**

For SoT deficiency, apply Coherent Correction; get user decision when correction materially changes approved intent, scope, AC, RB, or design.

#### Severity and Scope

- **Blocker:** cannot safely accept/continue due to corruption, security failure, irreversible damage, major regression, or direction-determining unresolved decision.
- **In-scope deficiency:** approved scope/AC unsatisfied but not Blocker.
- **Follow-up:** useful improvement not required for current acceptance.

#### Re-review

- Previous Blockers/in-scope deficiencies first; identify new criteria and scope fit; separate new follow-ups; state acceptability within approved scope.

#### Consumer Regression

- Shared-governance consumer regression is black-box only when results follow from candidate governance + consumer's pre-existing protected local rules. Externally prescribed classifications/changes make it a guided diagnostic.
- Consumer regression evaluates candidate governance; it neither adopts it nor authorizes consumer changes.
