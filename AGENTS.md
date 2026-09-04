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
| **Change Unit** | Execution/review/acceptance boundary for one coherent authorized outcome; not authority or SoT |
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

- Record project-specific scope, architecture, technologies, commands, naming, and other project facts in `definition/`.

| Area | Owns |
|---|---|
| [`definition/`](definition/AGENTS.md) | Adopted project definition, status, traceability, project-specific lifecycle/VB rules |
| [`etc/`](etc/AGENTS.md) | Project-managed execution-environment configuration |
| [`jobs/`](jobs/AGENTS.md) | Non-authoritative active-work control, investigation, proposals, deferred follow-up, prototypes, handoffs, transitional verification material |
| [`references/`](references/AGENTS.md) | Durable non-normative supplied/promoted reference material |
| [`products/`](products/AGENTS.md) | Formal implementations and tests |

- Every artifact belongs to the area owning its responsibility.
- Placement follows responsibility; location alone does not satisfy the applicable adoption, authority, completion, or verification process.
- No additional top-level non-hidden directory without an explicit user decision changing this model.
- Framework/tool directories (`src/`, `apps/`, `packages/`, `scripts/`, `infra/`, `docs/`, `tests/`, etc.) belong below the responsible area. Hidden paths/top-level files must not bypass the model.
- `README.md` is human guidance only: not instructions or project SoT; do not duplicate/replace requirements, design, testing, status, or agent instructions.

### Instruction Hierarchy and Protection

- Before changing a target, read: root `AGENTS.md` → every descendant `AGENTS.md` through the target → `definition/AGENTS.md` → applicable project SoTs.
- Descendant `AGENTS.md` files inherit root governance and may add subtree rules; they must not redefine, weaken, contradict, or override inherited boundaries.
- Add descendant `AGENTS.md` only for genuine subtree-specific instructions.
- Existing `AGENTS.md` files are protected governance. Ordinary code/docs/config/structure authorization does not authorize changing them.
- Changing/moving/renaming/replacing/deleting protected instructions requires an explicit user request identifying the governance change and affected file/scope.
- Authorized instruction changes: smallest coherent change; reconcile inheritance/links and verify the hierarchy.
- Shared-governance updates must merge authorized baseline changes into existing protected local rules; byte identity is not the goal. Preserve local rules not explicitly retired/replaced. Surface conflicts or required re-scoping for explicit governance decision.
- Never alter instructions to remove a blocker, retroactively justify implementation, accommodate a tool default, or broaden AI authority.
- Repository instructions + approved project decisions override general conventions/tool defaults where they differ.

### Project Initialization

- Project initialization state and required definition outputs are governed by `definition/AGENTS.md`.
- Start read-only. Before project-specific changes, present one initialization summary: verified facts, user decisions, proposed assumptions, open questions, blockers, files/directories to change, target lifecycle state, and work left unstarted.
- Summary approval authorizes only listed project-specific artifacts/assumptions; protected instruction changes require explicit inclusion.
- If immediate initialization from supplied information + reasonable assumptions is explicitly requested, advance discussion may be omitted; report every adopted assumption at completion.
- Detailed lifecycle transitions, entry/completion criteria, and verification rules: `definition/AGENTS.md`.

## Action Boundaries

### Permission / Scope

- Project SoTs constrain an already authorized task; they do not authorize task mode, modification, publication, or scope expansion.
- Investigation, analysis, planning, review, implementation, publication, and external operations are distinct modes.
- Investigation/analysis/planning/review-only requests must not modify repository state.
- Plan approval authorizes only its recorded decisions/scope; implementation also requires implementation authorization.
- Do not silently decide unresolved requirements, scope, priorities, RBs, material design choices, or completion criteria; routine reversible implementation choices within approved scope are AI discretion.
- Within approved scope, proceed with reversible investigation, edits, and verification without repeated permission requests.
- Preserve unrelated user changes; do not expand scope for merely adjacent work.
- Add discovered work only when required by approved AC or needed to prevent direct regression, corruption, security failure, or irreversible damage; otherwise disposition it under Assessment and Feedback and retain follow-up only when continuing value exists.

### Change Unit

- A **Change Unit** is the smallest coherent body of authorized work that can be executed, verified, reviewed, and accepted as one outcome. It is an execution/review boundary, not authority or SoT; this section owns Change Unit boundary and completion semantics.
- Authorization, requirement/AC, and Change Unit are distinct. Independently completable and acceptable outcomes should not be combined merely because one authorization or surrounding task covers them.
- Each Change Unit has an acceptance basis derived from applicable approved scope/AC. Its scope is fixed when work begins except for discovered work that Permission / Scope permits adding. A unit may be split or narrowed only to re-express a coherent execution/acceptance boundary; boundary changes do not remove approved scope/AC or reclassify still-required unsatisfied work. Any cut-out work still required by approved scope/AC remains unresolved and must remain covered by another Change Unit.
- Review, In-scope deficiency, Follow-up, and unit completion are judged against the current Change Unit. Completing a Change Unit does not complete a requirement, AC, authorization, or lifecycle state that spans additional work. Requirement/AC/lifecycle completion remains judged against its full approved scope/AC and applicable lifecycle conditions; Change Unit boundaries cannot narrow that completion basis.
- A Change Unit may complete only when its acceptance basis is satisfied, required verification is complete, and no unresolved Blocker or In-scope deficiency of that unit remains. Disposition alone does not make an unresolved Blocker/In-scope deficiency non-blocking; Follow-ups and other units' open work do not by themselves keep it open.
- Repository-managed Change Unit decomposition, continuity, ordering, and state follow `jobs/AGENTS.md`.

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
- Update required status/traceability/VB/SoTs per `definition/AGENTS.md`; conversation does not replace them.

### Conversation Language

- Per conversation, determine language from: explicit instruction → first request's primary language → execution-environment language → English.
- Ignore code, quotes, attachments, URLs, and paths when detecting request language.
- Environment fallback: platform language → `LC_ALL` → `LC_MESSAGES` → `LANGUAGE` → `LANG`; ignore `C`, `POSIX`, `C.UTF-8`.
- Treat result as BCP 47. Later language changes apply only as explicitly requested.
- Conversation language ≠ project documentation language; follow `definition/AGENTS.md`. Do not store conversation language in the repository.

## Working Principles

### Core Principles

1. Understand outcome, constraints, observable AC, current lifecycle state, target state.
2. Inspect applicable instructions, SoTs, implementation, tests, config, evidence, and existing user changes.
3. Follow the applicable project workflow for modification and verification, including required pre-change checks, iterations, or repetitions; keep changes the smallest coherent safe changes.
4. Reconcile implementation/docs/tests/status/traceability to the supported state.
5. Report per Interaction.

- Prefer simple maintainable changes over speculative abstractions.
- Project-definition authority and requirements/design/testing responsibility boundaries follow `definition/AGENTS.md`.
- Existing implementation: inspect relevant code/tests/config/dependencies/RBs/dependency directions/patterns. Apply `definition/AGENTS.md` authority rules before treating realization-derived detail as normative; do not casually replace material established structure or preserve it solely because it exists.
- Classify newly discovered knowledge by authority and responsibility before adoption or promotion; project-definition and realization-derived material follows `definition/AGENTS.md`, while other material follows the responsible area's governance.
- Distinguish facts, assumptions, decisions, open questions.
- AC must be observable; prefer behavioral verification where practical.
- Requirement/assumption changes: inspect documentation, implementation, tests, environment, migration, operation effects.
- Recorded fact/relationship changes: update responsible project docs in the same change.
- Record important decisions/reasons, assumptions, material rejected alternatives, and reconsideration conditions in the responsible SoT.

### Coherent Correction

- On a discovered deficiency, determine whether the cause is local or shared.
- Inspect far enough to understand cause and impact; resulting modification remains governed by Permission / Scope.
- When implementation, tests, configuration, or verification reveal a possible deficiency in adopted project definition, validate the applicable SoTs before changing formal behavior/configuration.
  - If the SoT is valid, correct the implementation/configuration against it.
  - If the SoT is deficient, correct it through the applicable authority/decision/adoption process before changing formal implementation/configuration to embody the new definition.
  - Do not change formal implementation/configuration first and then revise normative SoTs to justify or match that change.
- Correct required same-cause deficiencies coherently within authorized scope; route other findings through Permission / Scope and Assessment and Feedback, then applicable decision and safety rules.

### Adversarial Self-Review

- Before completing material work, perform adversarial self-review proportionate to the change and risk, aiming to disprove correctness rather than confirm it. Challenge assumptions, contradictions, boundary/failure conditions, missed impact/root causes, scope drift, and evidence/verification gaps. Do not limit the challenge to edited lines or the exact reported symptom; inspect materially relevant same-responsibility, same-invariant, dependency, sibling-path, boundary, and failure-family cases in proportion to the change and risk. Review breadth does not alter modification authority; resulting work follows Permission / Scope.
- Bound the review surface to the current Change Unit's acceptance basis and protected invariants. Investigate beyond it far enough to judge impact, then classify resulting work under Change Unit, Permission / Scope, and Assessment and Feedback.
- When a valid review finding, failed verification, incident, or other assessment exposes a missed consideration, treat it as a detection signal. Diagnose the missed consideration, why it escaped detection, and the material concrete context that exposed it; preserve that context while applying the resulting perspective proportionally to materially related current work before treating the stated instance as resolved. Correct or disposition resulting work under Coherent Correction and Assessment and Feedback.
- Treat a material correction that introduces or materially changes a mechanism, fallback, boundary, assumption, dependency, or verification method as a new adversarial surface. Challenge how that correction itself can fail, partially fail, race, degrade, or bypass the protected invariant/outcome; do not treat the correction itself as proof of resolution.
- Continue targeted adversarial review while a correction or new evidence creates a materially new plausible failure surface. Stop when the latest material corrections introduce no such unexamined surface; do not repeat unchanged checks merely to satisfy a review count. Repeat the full proportional self-review only when new evidence, failed verification, broad correction, or contradiction materially changes what must be examined.
- When materially related findings or corrections repeatedly expose the same or closely related cause or protected invariant across different surfaces, stop treating them as isolated instances and reassess the affected work structurally. Consider whether an implicit invariant, responsibility split, abstraction boundary, verification/evidence model, or scope structure should be made explicit; treat resulting material corrections or changed review basis under the same review rules, and stop when no materially new unexamined surface remains.
- Treat a Change Unit that keeps producing materially new In-scope deficiencies across successive review rounds as not converging. Reassess its boundary and protected invariants; split or narrow the unit when needed under Change Unit rules. Non-convergence does not alter the classification of still-required work, an unresolved In-scope deficiency, or a Blocker.

### Assessment and Feedback

Feedback, review findings, suggestions, observations, failed verification, external findings, and AI-discovered opportunities are assessment inputs. Their presence or apparent validity does not by itself require a current change. Explicit user instructions retain their authority under Purpose and Authority and Permission / Scope.

- Assess an input against approved intent, scope/exclusions, observable AC, applicable authority/SoTs, supporting evidence, urgency/risk, dependencies, and material scope/cost effects.
- Separate whether an input is valid/useful from what should happen now; a valid concern may still be non-blocking or intentionally deferred.
- A possible improvement remains assessment input unless Permission / Scope makes it current work.
- For a valid input Accepted now, a local patch is not sufficient when the finding reveals a missed consideration that can materially recur in the affected scope; apply Adversarial Self-Review to assimilate and propagate the detection signal before closure.

#### Disposition

Classify the current handling independently of severity:

- **Accept now:** treat the input as current work when the current Change Unit already requires it, Permission / Scope adds it, or a Blocker requires action within existing authority; if it materially changes user-owned intent, priority, scope, AC, RB, or design, request the applicable decision first.
- **Reject:** do not adopt the input as current or future work when the basis is insufficient, it conflicts with approved intent/authority, the concern is already satisfied, the change is otherwise not justified, or no continuing work value remains. Retain rationale/provenance only when it has independent continuing value under the responsible area; that retention does not keep the rejected input as an active or deferred candidate.
- **Defer:** retain a potentially useful input for later reassessment when it is not active/timely now or current evidence/future conditions do not justify action yet; deferral ≠ adoption, priority, promise, or planned work. Work already accepted into another Change Unit is not Defer merely because that unit is not current. Evidence/context gathering performed now is active work, not Defer.

Disposition does not itself grant modification or adoption authority.

#### Severity and Scope

- **Blocker:** cannot safely accept/continue due to corruption, security failure, irreversible damage, major regression, or direction-determining unresolved decision.
- **In-scope deficiency:** the current Change Unit's acceptance basis or approved unit scope is unsatisfied but not Blocker.
- **Follow-up:** useful work not required for the current Change Unit's acceptance; it may be another authorized Change Unit or an input dispositioned Defer/Reject.

Apply these labels under Change Unit semantics: In-scope deficiency is unit-local; a Blocker remains a Blocker wherever its subject lies; input validity alone does not alter unit membership. Requirement/AC/lifecycle completion remains judged against its full approved basis.

Severity and disposition are independent: a Follow-up may be scheduled in another authorized Change Unit or dispositioned Defer/Reject, while a Blocker or In-scope deficiency may still require a user-owned decision before it can be Accepted now.

#### Reassessment

- Retain Defer inputs only when continuing value justifies retention; repository-managed retention follows `jobs/AGENTS.md`.
- Reassess when new evidence or a recorded revisit condition materially changes relevance, urgency, feasibility, or scope fit.
- When current work materially matches a retained revisit condition, proactively surface the item at a useful decision point; do not silently add it to scope.
- Repository-managed inactive-item discovery follows `jobs/AGENTS.md`; do not routinely enumerate inactive material merely to search for possible relevance.
- Do not repeatedly resurface an item merely because it exists or has aged.
- Before completing a Change Unit, apply its completion semantics under Change Unit.

#### Consumer Regression

- Shared-governance consumer regression is black-box only when results follow from candidate governance + consumer's pre-existing protected local rules. Externally prescribed classifications/changes make it a guided diagnostic.
- Consumer regression evaluates candidate governance; it neither adopts it nor authorizes consumer changes.