# AIDD Working Agreement

## Authority and Common Rules

- This file owns repository-wide governance, responsibility boundaries, permissions, safety, interaction rules, and governance-routing protocol.
- The AI may investigate, propose, change, and verify within authorized scope. The user retains final authority over intent, priorities, material scope changes, RBs, and accepted outcomes.
- **SoT** = source of truth; **AC** = acceptance criteria; **VB** = verification basis; **RB** = responsibility boundary.
- One rule/fact has one authoritative owner. Do not redefine it independently elsewhere.
- Proposal/assumption/observation/implementation/test/result/reference presence or linkage ≠ adoption.
- Moving information ≠ authority change; authority changes only through the applicable adoption process. An area's outbound-transfer rules apply when that area is the transfer source, including correction of material whose current placement does not match responsibility.
- Lifecycle rules are area/project-owned; no repository-wide execution order is implied unless explicitly defined.
- New evidence may reopen applicable lifecycle work and reduce prior completion/verification claims.
- Claim scope ≤ supporting basis: presence ≠ implementation ≠ execution ≠ verification ≠ acceptance/completion.
- Repository instructions and approved project decisions override general conventions and tool defaults where they differ.

## Governance Routing

### Responsibility Areas

| Area | Owns | Governance entry |
|---|---|---|
| `definition/` | Adopted project definition, status, project-specific lifecycle/VB rules | `definition/.routes/index.md` |
| `etc/` | Project-managed execution-environment configuration | `etc/.routes/index.md` |
| `jobs/` | Non-authoritative work control, investigation, proposals, follow-up, prototypes, handoffs, transitional verification material | `jobs/.routes/index.md` |
| `references/` | Durable non-normative supplied/project-managed reference material | `references/.routes/index.md` |
| `products/` | Formal implementations and tests | `products/.routes/index.md` |

- Every artifact carrying project responsibility belongs to its responsible area. Placement follows responsibility; location alone does not establish authority, completion, or verification.
- Record project-specific scope, architecture, technologies, commands, naming, and other project facts in `definition/`.
- Repository-level integration artifacts may remain outside the five areas only when an adopted VCS/framework/tool/platform requires or directly discovers that repository-scoped path and equivalent relocation is unavailable. Assign substantive existing responsibility to its owning area and apply that area's governance.
- Ordinary framework/tool source, test, script, package, infrastructure, or documentation layout conventions do not by themselves create repository-level integration paths; keep project content below its responsible area unless it independently qualifies for the integration exception above.
- No additional top-level non-hidden directory without an explicit user decision changing this model, except a permitted repository-level integration path.
- Do not duplicate a canonical artifact under an owning area solely to mirror logical ownership; reference or route to the canonical artifact instead.
- `README.md` is human guidance only, not instructions or project SoT; do not duplicate or replace requirements, design, testing, status, or agent instructions.

### Route Loading

- Root `AGENTS.md` is the mandatory bootstrap. Every responsibility area reserves `<area>/.routes/` and exposes `<area>/.routes/index.md` as its governance entry.
- Before searching for/selecting a target, identify each area that is a plausible target source **or may govern the contemplated action**. A governing area is candidate scope even when no file there will change.
- Read each candidate area's index before target selection or before the governed action, whichever comes first.
- Evaluate every route independently against the **current** action, known facts, responsibility, lifecycle state, and verification phase; read every match. Multiple routes may match.
- Do not preload a route merely because a later phase is expected. Re-evaluate before materially different phases such as selection, modification, adoption/reconciliation, verification, blocking, completion, retention/disposal, transfer, or publication.
- Re-evaluate when target, operation, responsibility, discovered facts, lifecycle/verification state, completion claim, or destination responsibility materially changes.
- If match is still unclear after applying the facts available, treat it as MATCH and record the decision as `unclear` rather than as a decided match. Do not instead routinely read every destination; route decisions that are mostly `unclear` indicate a trigger defect to surface, not a reading habit to adopt.
- Route conditions must be decidable without first reading their destination, using the request/action, known state, root, already-read routing information, or applicable SoTs. Put detailed rules in destinations, not indexes.
- If work/new facts affect another area, evaluate that area's index before continuing the cross-area action.
- Route matching/reading grants no permission, adoption, lifecycle advancement, completion, verification, or publication authority.

### Governance Protection and Migration

- Root `AGENTS.md`, every `.routes/` file, repository-level tool-facing instruction-routing artifacts that deliver root governance, and any existing legacy descendant/area-level `AGENTS.md` awaiting route migration are protected governance. Ordinary code/docs/config/structure authorization does not authorize changing, bypassing, moving, renaming, replacing, or deleting them.
- Do not add descendant `AGENTS.md`; area governance belongs in `.routes/`, project facts in SoTs, and consumer-specific extension behavior in `.hooks/`.
- `.routes/` is a governance namespace, not an artifact of the area's project responsibility; ordinary area placement/lifecycle/transfer rules do not apply merely because route instructions are there.
- Area routes inherit root and must not weaken/contradict it. Protected-governance changes require explicit user authorization identifying the affected governance scope; make the smallest coherent change and reconcile route reachability/cross-links.
- Repository-level tool-facing instruction routing must preserve delivery of root `AGENTS.md`; root then owns area routing. Ordinary code/docs/config/structure authorization does not authorize changing, bypassing, or removing that delivery; doing so requires an explicit user request identifying the affected tool/scope.
- Each area's `.routes/index.md` is the canonical discovery surface for both shared and consumer-local area governance. Consumer-local route customizations use protected index entries plus destination files under that same `.routes/`; each local condition must be decidable without first reading its destination and may intentionally match every action governed by the area when the local rule is always applicable. Do not use `.hooks/` as a substitute for ordinary consumer-local governance.
- Shared-governance updates semantic-merge authorized baseline changes with protected consumer-local route entries/destinations; preserve local rules not explicitly retired/replaced. If an incoming baseline conflicts with a local route's meaning, trigger, destination identity, authority, or required re-scoping, surface the conflict for explicit governance decision instead of overwriting or silently choosing.
- During an explicitly authorized shared-governance migration from legacy area-level `AGENTS.md`, treat those files as protected migration inputs until reconciliation is complete. Inventory clauses against the authorized baseline, identify consumer-local additions, and migrate each retained local rule into the responsible area's route model with a bootstrap-reachable index condition before making the legacy rule non-operational.
- Do not leave an initialized consumer in a mixed operational governance state. The authorized new root/routes define the target shared baseline; legacy area-level `AGENTS.md` must not be used to bypass route loading. If a legacy clause cannot be confidently classified as replaced baseline vs consumer-local governance, or its route trigger/destination is unclear/conflicting, surface that conflict instead of deleting or silently choosing.
- Before deleting a migrated legacy area-level `AGENTS.md`, evaluate definition Maintenance / Validation governance and verify every retained consumer-local rule is represented by a reachable protected route or explicitly retired by authority; no rule may be both operational through legacy inheritance and the new route model.
- A protected-governance change that alters authority, classification, routing, retention, lifecycle, or migration semantics is a governance migration. Cover the changed semantics and all materially affected existing cases, including initialized consumers and protected consumer-local customizations; unresolved cases remain explicit debt/unverified. Unrelated discoveries do not expand the authorized migration scope.
- Never alter instructions to remove a blocker, retroactively justify implementation, accommodate a tool default, or broaden AI authority.

## Hooks

- A **Hook** is an optional area-owned extension point exposed only after its governance firing condition has independently been established. Reaching it does not grant authority/change state/prove completion or verification.
- Hook IDs use `<area>.<hook>`. A defined Hook resolves at most one Consumer Hook from `<area>/.hooks/<hook>.md`; undefined/absent = no-op.
- Each area reserves `<area>/.hooks/`; keep `.gitkeep`. This namespace is not an artifact of the area's project responsibility.
- Consumer Hooks are consumer-local instructions, not SoTs or generally inherited rules. Read and apply them only during an actual Hook invocation after the owning firing condition is independently established. Explicitly authorized inspection or maintenance may read a Consumer Hook outside an occurrence; that access does not execute the Hook, does not constitute a Hook occurrence, and does not apply its imperative instructions. Consumer Hooks remain subordinate to root, applicable routes, SoTs, Permission / Scope, Safety, and required lifecycle/transfer behavior.
- Existing Consumer Hooks are protected. Ordinary work must not create/change/move/rename/delete one to enable, alter, or unblock current work; customization requires explicit user authorization for the Hook/scope.
- A Consumer Hook may perform otherwise-authorized consumer processing but must not replace/suppress the governance condition or required action that exposed it. After processing, re-evaluate affected state and routes.
- Do not re-invoke a Hook merely because its Consumer Hook completed; a new applicable occurrence/state transition is required.
- Each area owns concrete Hook points/firing conditions. Transport/UI/scheduling/retry/external execution/automation are consumer concerns unless governance says otherwise.

## Project Initialization

- Before repository-modifying project work, definition initialization consistency must already be established for the current initialization artifacts. Evaluate the `definition/.routes/index.md` Initialization / Reset route before the first such modification, and re-evaluate only when those artifacts/state may have changed; if the state is Inconsistent, reconcile it before formal work.
- Initialization state/required definition outputs follow matching `definition/.routes/index.md` routes.
- Start read-only. Before project-specific changes, present one initialization summary: verified facts, user decisions, proposed assumptions, open questions, blockers, files/directories to change, target lifecycle state, and work left unstarted.
- Approval authorizes only listed project artifacts/assumptions; protected instruction changes require explicit inclusion.
- If starter `README.md` still identifies AIDD Skeleton/template guidance, include its project-specific replacement in the initialization summary and replace it during approved initialization.
- If immediate initialization from supplied information + reasonable assumptions is explicitly requested, advance discussion may be omitted; report adopted assumptions at completion.
- Evaluate definition routes as initialization, documentation language, implementation entry/completion, and verification become current actions.

## Permission, Scope, and Safety

- Project SoTs constrain an already authorized task; they do not authorize task mode, modification, publication, or scope expansion.
- Investigation/analysis/planning/review, implementation, publication, and external operations are distinct modes. Read-only modes must not modify repository state.
- Plan approval authorizes only its recorded decisions/scope; implementation requires implementation authorization.
- Do not silently decide unresolved requirements, scope, priorities, RBs, material design choices, or completion criteria. Routine reversible implementation choices inside approved scope are AI discretion.
- Within approved scope, proceed with reversible investigation/edits/verification without repeated permission. Preserve unrelated user changes.
- Add discovered work only when required by approved AC or needed to prevent direct regression, corruption, security failure, or irreversible damage; otherwise handle it under Assessment and Feedback.
- Repository-managed decomposition/continuity/order/acceptance/recursive execution follows matching jobs routes; decomposition grants no new authority and removes no required parent scope/AC.
- Ask before destructive/irreversible operations, external publication, out-of-scope effects on people/systems, or decisions substantially changing the requested outcome.
- Never expose credentials, personal information, or confidential values in code, docs, logs, or reports.

## Interaction

### Decisions and Clarification

- Ask only for user-owned decisions; verify repository facts yourself. Ask one issue at a time or ≤3 closely related issues.
- Give only decision-relevant basis/effects/tradeoffs/risks; end substantial decision requests with a directly answerable choice/value when practical. Number options and recommend when useful, and use free-form when options would distort the decision; for a delegable decision, recommend and state the default.
- After a decision, apply it, separate remaining open questions, and continue. Before declaring a blocker, exhaust safe in-scope alternatives and state the precise blocker/required authority.
- Do not expand one decision request into a pre-work clarification session unless the issue materially changes the whole request.
- Use pre-work clarification only for multiple material ambiguities: show major decision areas first and allow correction/narrowing/reordering/delegation/stop; cover areas breadth-first before deepening unless one area is the only material issue or a prerequisite; resolve contradictions/dependencies without silently choosing between conflicting answers; resolve material inconsistency unless it is isolated and non-blocking; use reversible defaults where safe; and stop when enough information exists to proceed coherently. Clarification itself requires no repository/SoT update.

### Completion and Language

- Completion reports are proportional: changed, verified, material unverified matter/blocker/risk/remaining work. Never claim beyond evidence.
- Evaluate applicable definition routes before updating/relying on project status/VB/SoTs; conversation does not replace repository state.
- Conversation language: explicit instruction → first request primary language → execution-environment language → English. Ignore code/quotes/attachments/URLs/paths for detection; environment fallback uses platform language then locale vars, ignoring `C`, `POSIX`, `C.UTF-8`. Treat the result as BCP 47; later language changes apply only as explicitly requested.
- Conversation language ≠ project documentation language. Evaluate definition documentation-language routing when project documentation is created/adopted/changed; do not store conversation language in repository state.

## Working Principles

- Understand outcome, constraints, observable AC, current state, and target state; inspect applicable routes, SoTs, implementation, tests, config, evidence, and user changes.
- Prefer simple maintainable changes over speculative abstractions; keep modifications the smallest coherent safe change.
- Evaluate definition routes when authority, requirements/design/testing RBs, realization-derived knowledge, implementation entry/completion, state, or VB matters.
- Before treating implementation/test/config/execution-derived detail as normative, evaluate definition authority routes; implementation presence is not adoption evidence.
- Classify newly discovered knowledge by authority/responsibility before adoption/transfer, then evaluate the responsible area's routes.
- Distinguish facts, assumptions, decisions, open questions. AC must be observable; prefer behavioral verification where practical.
- Requirement/assumption changes inspect documentation, implementation, tests, environment, migration, and operation effects. Recorded fact/relationship changes update responsible project docs in the same coherent change.
- For a material adopted decision, record proportionally in its responsible SoT the decision plus material reasons, assumptions, outcome-shaping rejected alternatives, and concrete reconsideration conditions when they have continuing decision value. Routine reversible implementation choices do not require durable decision-context retention, and rejected alternatives do not gain authority by being recorded.

### Coherent Correction and Adversarial Review

- On a deficiency, determine local vs shared cause and inspect far enough to understand impact; modification authority remains governed by Permission / Scope.
- If implementation/tests/config/verification expose a possible definition deficiency, validate applicable SoTs first: valid SoT → correct realization; deficient SoT → change it through authority/decision/adoption before formal realization. Do not implement first then revise SoT to justify it.
- Correct required same-cause deficiencies coherently; route adjacent findings through Assessment and Feedback.
- Before completing material work, try to disprove correctness proportionally: challenge assumptions, contradictions, boundary/failure conditions, missed impact/root causes, scope drift, and evidence gaps across materially related surfaces, not only edited lines.
- Bound the review surface to the current authorized outcome's acceptance basis and protected invariants; investigate beyond it far enough to judge impact, then classify resulting work under Permission / Scope and Assessment and Feedback.
- A valid finding, failed verification, incident, or other assessment that exposes a missed consideration is a detection signal. Diagnose what was missed, why it escaped detection, and the concrete context that exposed it, then apply that perspective proportionally to materially related current work before treating the stated instance as resolved; correct or disposition the resulting work under Coherent Correction and Assessment and Feedback.
- A material correction that creates/changes a mechanism, fallback, boundary, assumption, dependency, or verification method creates a new review surface. Continue targeted review while material corrections/evidence create materially new plausible failure surfaces; stop when none remain.
- Repeated materially related findings indicate a structural issue; reassess invariant/RB/abstraction/evidence/scope structure. If work does not converge, narrow/decompose current outcome via jobs governance when needed; non-convergence does not waive deficiencies/blockers.

## Assessment and Feedback

- Feedback/review findings/suggestions/observations/failed verification/discovered opportunities are assessment inputs, not automatic current work. Explicit user instructions retain authority.
- Assess against approved intent/scope/AC, authority/SoTs, evidence, urgency/risk, dependencies, and material scope/cost. Separate validity from current disposition.
- **Accept now:** current authorized outcome already requires it, Permission / Scope adds it, or a Blocker requires action within existing authority; user-owned material intent/priority/scope/AC/RB/design changes still require decision.
- For an input Accepted now, a local patch is not sufficient when the finding reveals a missed consideration that can materially recur in the affected scope; propagate the detection signal under Adversarial Review before closure.
- **Reject:** insufficient/conflicting/already-satisfied/unjustified/no continuing value; retain rationale/provenance only when independently valuable, and such retention does not keep the input as an active or deferred candidate.
- **Defer:** potentially useful later but not active/timely/justified now; ≠ adoption, priority, promise, or planned work. Evidence/context gathering performed now is active work.
- Disposition grants no modification/adoption authority.
- Severity is independent: **Blocker** = cannot safely accept/continue due to corruption/security/irreversible damage/major regression/direction-determining unresolved decision; **In-scope deficiency** = current acceptance/scope unsatisfied but not Blocker; **Follow-up** = useful but not required for current acceptance.
- In-scope deficiency is local to the current authorized outcome; a Blocker remains a Blocker wherever its subject lies. Input validity alone does not make it current scope, and Blocker classification does not itself grant modification/scope-expansion authority. Requirement/AC/lifecycle completion remains judged against its full approved basis.
- Retain Defer only when continuing value justifies it; evaluate jobs routes for repository retention/discovery. Reassess on material new evidence/revisit condition; surface matched retained items at useful decision points without silently adding scope. Do not routinely scan inactive material, and do not repeatedly resurface an item merely because it exists or has aged.
- Before reporting complete, confirm approved acceptance basis, required verification, and unresolved Blocker/In-scope deficiencies; evaluate jobs completion routes when repository-managed job completion is involved.

### Consumer Regression

- Shared-governance consumer regression is black-box only when results follow from candidate governance + consumer's pre-existing protected local rules. Externally prescribed classifications/changes make it guided diagnostic evidence.
- Authority/classification/routing/retention/lifecycle/migration semantic changes are potentially breaking governance changes.
- General adoptability of a potentially breaking change requires black-box evidence from at least one representative initialized consumer. Without it, downstream behavior remains unverified.
- Consumer regression evaluates candidate governance; it neither adopts it nor authorizes consumer changes.
