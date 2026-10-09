# AIDD Jobs Instructions

This file defines area-specific governance for `jobs/` and inherits repository and `definition/` governance.

## Area Foundations

### General Provisions

#### Scope

- Applies to `jobs/` and descendants; inherits root + `definition/AGENTS.md`.

#### Responsibility

- Owns non-authoritative active-work control and working material: investigation/comparison, drafts/preparation, prototypes/spikes, transformations, implementation plans, handoffs, inactive retained inputs, and project-managed verification material.
- Retain conversational clarification only for continuing work, handoff, or reconsideration value.

### Structure and Placement

#### Job Units

- **Job unit**: a marked, purpose-oriented execution/review/acceptance boundary for one coherent outcome under `jobs/`.
- **Child job**: a job unit physically contained by another job unit; nesting is recursive.
- **Supporting material**: unmarked descendants such as notes, logs, evidence, fixtures, generated material, and ordinary execution detail.
- Prefer one purpose/question/experiment/verification activity/handoff per job and make `<purpose>` sufficient for first-pass relevance screening; do not use an opaque generic name that requires opening the unit.
- Keep jobs independently understandable/removable with proportional structure/entry points. Detailed file/directory formation rules follow [Job Entry Dispatch](#job-entry-dispatch) when creating or structurally forming a job unit.
- Related lightweight inactive assessment inputs may share a unit/registry only while they are not independently authorized work and remain independently judgeable/removable; no repository-wide dumping ground.
- Organize by purpose/job rather than artifact type. Co-locate needed inputs, dependencies, notes, evidence, and reproduction instructions where practical; handoffs, logs, evidence, prototypes, drafts, and similar supporting material stay inside the owning unit unless they are themselves the complete small job unit. Material outside a child path may be referenced but remains owned by its actual containing job/responsible area unless governance moves/reclassifies it.
- A substantial job makes discoverable: purpose; approved or retention/disposition basis; applicable evaluation/consumption method; and acceptance/retention/supersession/transfer/deletion condition.
- Scope only far enough for a coherent decision, comparison, feasibility result, execution/handoff, or verification purpose; no SoT-equivalent completeness is required and unresolved detail is elaborated only when material. Exploratory code remains inside its job even if tools create conventional source/test/package directories.

## Area Principles

### Job Invariants

1. Independently completable/acceptable authorized work retained under a parent is a child job, including authorized work not yet started; do not keep such work only as an informal future-task list. Low-level operations remain execution detail unless independently qualifying as a coherent authorized outcome requiring repository-managed lifecycle.
2. Decomposition never grants authority, broadens scope/AC, narrows still-required parent acceptance, or makes discovered adjacent work part of the job.
3. Job markers express lifecycle state only. `+` grants no authority/priority and proves no completion/verification/acceptance, nor does it make every contained artifact active work; `_` does not by itself mean Defer, rejection, adoption, priority, or future commitment. Lexical/display order is not priority.
4. Markers are local and independent. Parent/child/sibling activation, deactivation, completion, or retention never cascades marker changes; active descendants do not block a parent from transitioning by its own lifecycle state.
5. An inactive ancestor gates ordinary descendant discovery/execution. Descendant markers are preserved/frozen rather than forcing an ancestor marker change; after ancestor reactivation they become discoverable in retained states without rewriting them.
6. Filesystem containment determines parent/child relationship and job-owned descendants. A link, proximity, or INDEX entry does not transfer ownership.
7. Every retained job unit is marked at its own path; only top-level `jobs/AGENTS.md` is exempt. Top-level supporting material belongs inside a marked owner; unmarked descendants inside a job are supporting material.
8. Adoption/formalization authority remains external to `jobs/`: job content, markers, `INDEX.md`, completion, retention, revisit matches, and decision-readiness never grant it; adoption requires applicable root + `definition/` authority.

## Area Operations

### Lifecycle

Detailed completion, retention, transfer, deletion, and exit handling follow [Job Exit Dispatch](#job-exit-dispatch) when its conditions apply.

#### State and Discovery

**States**

| Marker | State |
|---|---|
| `+<purpose>` | authorized work that validly entered active lifecycle and has not locally exited; while ancestor chain is discoverable, includes execution, activated pending/blocked state, handoff/reconciliation, and required transitional verification |
| `_<purpose>` | retained inactive: later evaluation/reconsideration, root Defer, authorized future work not yet activated, completed retained context, or dormant handoff/restart context |

**Transitions**

`_` → `+` is an entry/activation mutation; before deciding or performing it, apply [Job Entry Dispatch](#job-entry-dispatch). Reactivate any inactive ancestor under those rules before ordinary descendant selection/continuation.

`+` → `_` requires both:
- current job-local active lifecycle work ended or was withdrawn; and
- justified continuing retention/evaluation/reconsideration value remains.

**Discovery**

- If current active work is unidentified, inspect top-level `jobs/+*`, then recurse only through discoverable active parents to entry points/`INDEX.md` and marked children as needed.
- Never descend through `_` during ordinary continuation/resumption/reassessment merely because descendant names/markers appear relevant.
- Screen an inactive unit only by its own purpose and retained evaluation/revisit basis. Defer follows root reassessment; other inactive jobs need current basis + applicable entry conditions/assessment/decision before activation.
- A parent's `+` state never activates a child.
- A blocked/pending job stays `+` only if it had already entered active lifecycle and its authorized outcome remains active while waiting. Future authorized work not yet activated is `_`.
- Current-claim-dependent transitional VB stays in `+` while preservation/replacement/reconciliation/claim-downgrade is an active obligation, even after implementation ends.

#### Investigation / Prototype / Verification

- Investigation states the question/claim/hypothesis + evaluation method/evidence, references SoTs, and separates approved decisions from suggestions/assumptions. Proposed SoT change uses current SoT + delta/decision context; full candidate view only when needed for coherence and clearly non-authoritative.
- Prototype conclusions are limited to exercised scope; prototype proves no formal quality/security/performance/maintainability/completion/acceptance.
- Verification needs no evidence file by default; use native/external output or proportional `jobs/` retention as the claim/VB lifecycle requires. Retained execution material proportionally records actual target/state, environment/conditions, material method/commands, result, directly verified scope, and material unverified scope.

#### Handoff

- May package authorized scope/exclusions, completion conditions, blockers, decisions, assumptions, open questions, order, and context; grants no implementation authority and overrides no instructions/SoTs.
- Current continuation remains in the owning `+` job/discoverable active descendant. Restart-only future context is `_`, not automatically Defer. With active `INDEX.md`, decomposition/progress stays there; separate handoff only for context that does not fit.

#### Decision Readiness

A candidate/subset is **decision-ready** when:
- major intent + applicable RBs are coherent enough to judge as one unit; and
- remaining questions are separable and are not expected to change the candidate's meaning, validity, scope, or acceptance as the unit being judged.

Decision-ready is not implementation-entry completeness. Details consistently decidable after adoption may remain open when they fall within discretion intentionally preserved by the adopted subset; their eventual effect on downstream implementation does not by itself block adoption. If an unresolved matter must be chosen to interpret, validate, or accept the candidate itself, keep that matter non-authoritative in `jobs/` and surface the decision before adopting the dependent definition. Non-authoritative investigation/prototypes may continue as authorized. When decision-ready and adoption/formalization is not already authorized, surface candidate + material basis + remaining questions through root Decision Requests; do not elaborate only to avoid decision. A coherent decision-ready subset may be adopted independently without waiting for job exit.

### Blocked Continuation

- A discoverable incomplete `+` job is blocked only when it cannot make material progress in the current execution context after safe in-scope alternatives are exhausted and its blocker, remaining obligation, and materially affected unverified scope are reconciled enough for resumable control. A command failure, transient first failure, unavailable optional path while another valid path remains, or unchanged observation of the same unresolved blocking episode does not suffice.
- Blocking neither completes, accepts, verifies, deactivates, nor otherwise changes the job marker; it does not by itself establish root Assessment `Blocker` severity or grant scope, priority, successor-selection, or activation authority.
- While a job is blocked, ordinary lifecycle discovery may continue another independently executable job within existing authority: continue a discoverable active `+` job when ordinary authority/dependency conditions permit, or select/activate `_` under the normal transition rule. The blocking condition is not basis for new work and cannot bypass approved basis, dependencies, entry conditions, inactive-ancestor gating, or user-owned scope/priority/RB/material-design/acceptance decisions. If the blocking condition itself requires a user-owned decision, or continuation to another job requires a material priority choice or other such decision, surface the applicable decision/blocker instead.

### Existing Job Updates

- An update reconciles the retained job's working material/control state for its existing purpose/basis; it grants no new purpose, material scope/AC/RB/design/priority change, or current-work commitment.
- Refinement/correction/reordering/decomposition/collapse is allowed only when resulting work remains required by existing approved basis/scope/AC or root Permission / Scope otherwise permits it now. Separate independently completable improvements/future opportunities/adjacent follow-up.
- Creating or first structurally representing a child job follows [Job Entry Dispatch](#job-entry-dispatch); decomposition does not itself activate the child or change authority.
- A discovered item unnecessary to satisfy the existing approved basis is separate assessment input unless current authority independently includes it; apply root Assessment Entry and Vocabulary and its Assessment and Correction Dispatch when triggered and retain follow-up only for continuing value.
- Do not create/enlarge retained job content merely to record every suggestion/observation/improvement; discovery or apparent validity alone neither joins it to the job nor requires repository retention.
- When execution, verification, or correction materially changes state represented by retained owning-job control—such as target revision/evidence binding, directly supported or materially unverified scope, remaining required verification/work, blocker/handoff/resumable state, or child dependency/necessity—reconcile the affected control before relying on it for dependent continuation, handoff, lifecycle transition, or completion/verification claim. Do not create/enlarge retained control merely to log the change when continuation needs no such control. This is control reconciliation, not execution logging: do not retain every transient failure, retry, command result, or implementation commit solely to satisfy it.
- A child outcome remains required for parent completion only while it is necessary to satisfy the current parent acceptance basis or another required parent-local lifecycle obligation. Creation, listing, prior activation, usefulness, ordering, or dependency readiness does not make a child outcome required. When that necessity materially changes, reconcile parent control and disposition the child under ordinary authority/state and the dispatched job-exit rules.
- After mutation, the updater re-evaluates that job's marker against the **States** and **Transitions** rules under State and Discovery. Parent/child control content may be reconciled when applicable, but related markers do not change merely to mirror the updated job. Recency, metadata/evidence refresh, or newly retained context never independently activates/deactivates/reopens or preserves `+`.

### Active Work Control

- `INDEX.md` is optional non-authoritative active control inside an active job. Its initial creation follows [Job Entry Dispatch](#job-entry-dispatch).
- Keep proportionally discoverable: purpose/approved basis/acceptance basis; applicable child links/state; order/dependencies; remaining/blocked work; material work/evidence links; and job-level exit/transfer/retention/disposal conditions.
- Track coherent outcomes/children rather than low-level execution; identifiers/status vocabulary/layout are local choices.
- While its parent is active, keep the index current enough to identify active execution and resumable state. Before a newly accepted child begins, reconcile decomposition; newly discovered work follows root Permission / Scope and Assessment Entry and Vocabulary, including its Assessment and Correction Dispatch when triggered and never becomes an unapproved backlog.
- Parent control records enough child path, dependency/return condition, and current child state without duplicating internal execution detail. When material to continuation or completion, distinguish required child outcomes from separate authorized follow-up.
- `INDEX.md` grants no implementation/adoption/priority authority, does not make retained material committed work, and its presence or unresolved-child listing neither makes a child outcome required for parent completion nor keeps the parent `+`. Parent-local control/handoff/reconciliation stays active only while needed; separate handoff is optional when index + links suffice.

### Parent / Child Execution

- Child scope/acceptance derives from parent/approved basis; decomposition preserves every still-required parent outcome without expanding parent acceptance. A child outcome is required for parent completion only while it remains necessary to satisfy the current parent acceptance basis or another required parent-local lifecycle obligation.
- Children may execute sequentially/concurrently when authority/dependencies permit and ancestry is discoverable. Child completion alone never completes/deactivates the parent; an active parent reconciles returned outcomes, dependencies, remaining children/work, verification, and its own acceptance basis. Before parent completion—and earlier when new evidence, adoption, or correction materially changes necessity—re-evaluate unresolved child outcomes against that current basis. A useful or future child whose outcome is not required for parent completion does not block parent completion; continue or activate it only under its own applicable authority/state, and retain or dispose it only under the dispatched job-exit rules.
- Branch/PR/external runner/agent isolation is execution mechanism, not job identity. Preserve return target/context for reconciliation; creation/publication/merge and other external actions remain governed by root Permission / Scope and Safety / Compliance.
## Area Conditional Governance

### Job Entry Dispatch

- When creating or structurally forming a job unit, first representing pre-existing work as a child job, selecting/performing an inactive-to-active transition, or creating an active job's first `INDEX.md`, read and apply [`agents.d/job-entry.md`](agents.d/job-entry.md) before that decision or mutation.
- Do not read the entry file merely for ordinary execution, discovery, investigation, handoff, verification, or updates to an already-formed active job when none of those entry conditions applies.

### Job Exit Dispatch

- When a job or job-owned material is being evaluated or mutated for completion, active-to-inactive transition, inactive-item reassessment/disposition, retention, post-adoption reconciliation, completed-child return/reconciliation, transfer, deletion, or other exit handling, read and apply [`agents.d/job-exit.md`](agents.d/job-exit.md) before that decision or mutation.
- Do not read the exit file merely for ordinary active execution, discovery, investigation, handoff, or decomposition when none of those conditions applies.

