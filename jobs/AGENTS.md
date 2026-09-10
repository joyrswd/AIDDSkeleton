# AIDD Jobs Instructions

## Scope
- Applies to `jobs/` and descendants; inherits root + `definition/AGENTS.md`.
- Owns non-authoritative active-work control and working material: investigation/comparison, drafts/preparation, prototypes/spikes, transformations, implementation plans, handoffs, inactive retained inputs, and project-managed verification material.
- Retain conversational clarification only for continuing work, handoff, or reconsideration value.

## Model
### Definitions
- **Job unit**: a marked, purpose-oriented execution/review/acceptance boundary for one coherent outcome under `jobs/`.
- **Child job**: a job unit physically contained by another job unit; nesting is recursive.
- **Supporting material**: unmarked descendants such as notes, logs, evidence, fixtures, generated material, and ordinary execution detail.
- `jobs/.hooks/` is the root-defined Consumer Hook namespace, not a job unit, working material, active/inactive lifecycle state, or source of job authority; `.gitkeep` has no Hook semantics.

### Invariants
1. Independently completable/acceptable authorized work retained under a parent is a child job, including authorized work not yet started; do not keep such work only as an informal future-task list. Low-level operations remain execution detail unless independently qualifying as a coherent authorized outcome requiring repository-managed lifecycle.
2. Decomposition never grants authority, broadens scope/AC, narrows still-required parent acceptance, or makes discovered adjacent work part of the job.
3. Job markers express lifecycle state only. `+` grants no authority/priority and proves no completion/verification/acceptance, nor does it make every contained artifact active work; `_` does not by itself mean Defer, rejection, adoption, priority, or future commitment. Lexical/display order is not priority.
4. Markers are local and independent. Parent/child/sibling activation, deactivation, completion, or retention never cascades marker changes; active descendants do not block a parent from transitioning by its own lifecycle state.
5. An inactive ancestor gates ordinary descendant discovery/execution. Descendant markers are preserved/frozen rather than forcing an ancestor marker change; after ancestor reactivation they become discoverable in retained states without rewriting them or re-firing unchanged descendant Hooks.
6. Filesystem containment determines parent/child relationship and job-owned descendants. A link, proximity, or INDEX entry does not transfer ownership.
7. Every retained job unit is marked at its own path; only top-level `jobs/AGENTS.md` and `jobs/.hooks/` are exempt. Top-level supporting material belongs inside a marked owner; unmarked descendants inside a job are supporting material.
8. Adoption/formalization authority remains external to `jobs/`: job content, markers, `INDEX.md`, completion, retention, revisit matches, and decision-readiness never grant it; adoption requires applicable root + `definition/` authority.

## Structure and Placement
- Prefer one purpose/question/experiment/verification activity/handoff per job and make `<purpose>` sufficient for first-pass relevance screening; do not use an opaque generic name that requires opening the unit.
- Keep jobs independently understandable/removable with proportional structure/entry points. Use file form only when no retained descendants are owned; otherwise use directory form. Do not create directories/control docs/templates solely for uniformity.
- Related lightweight inactive assessment inputs may share a unit/registry only while they are not independently authorized work and remain independently judgeable/removable; no repository-wide dumping ground.
- Organize by purpose/job rather than artifact type. Co-locate needed inputs, dependencies, notes, evidence, and reproduction instructions where practical; handoffs, logs, evidence, prototypes, drafts, and similar supporting material stay inside the owning unit unless they are themselves the complete small job unit. Material outside a child path may be referenced but remains owned by its actual containing job/responsible area unless governance moves/reclassifies it.
- A substantial job makes discoverable: purpose; approved or retention/disposition basis; applicable evaluation/consumption method; and acceptance/retention/supersession/transfer/deletion condition.
- Scope only far enough for a coherent decision, comparison, feasibility result, execution/handoff, or verification purpose; no SoT-equivalent completeness is required and unresolved detail is elaborated only when material. Exploratory code remains inside its job even if tools create conventional source/test/package directories.

## State and Discovery
### States
| Marker | State |
|---|---|
| `+<purpose>` | authorized work that validly entered active lifecycle and has not locally exited; while ancestor chain is discoverable, includes execution, activated pending/blocked state, handoff/reconciliation, and required transitional verification |
| `_<purpose>` | retained inactive: later evaluation/reconsideration, root Defer, authorized future work not yet activated, completed retained context, or dormant handoff/restart context |

### Transitions
`_` → `+` requires all of:
- current approved basis;
- applicable entry conditions satisfied;
- applicable assessment/decision/authority for active work; and
- actual selection as current work.

Authorization, remaining work, entry/dependency readiness, active ancestry, or ordering alone does not activate. An already-authorized child may be selected and activated without a new user decision when existing authority permits current execution unless another governing rule requires one. Reactivate any inactive ancestor before ordinary descendant selection/continuation.

`+` → `_` requires both:
- current job-local active lifecycle work ended or was withdrawn; and
- justified continuing retention/evaluation/reconsideration value remains.

### Discovery
- If current active work is unidentified, inspect top-level `jobs/+*`, then recurse only through discoverable active parents to entry points/`INDEX.md` and marked children as needed.
- Never descend through `_` during ordinary continuation/resumption/reassessment merely because descendant names/markers appear relevant.
- Screen an inactive unit only by its own purpose and retained evaluation/revisit basis. Defer follows root reassessment; other inactive jobs need current basis + applicable entry conditions/assessment/decision before activation.
- A parent's `+` state never activates a child.
- A blocked/pending job stays `+` only if it had already entered active lifecycle and its authorized outcome remains active while waiting. Future authorized work not yet activated is `_`.
- Current-claim-dependent transitional VB stays in `+` while preservation/replacement/reconciliation/claim-downgrade is an active obligation, even after implementation ends.

## Hooks
Common jobs-Hook rules: reaching a Hook grants no scope, priority, adoption, or acceptance authority and does not replace required lifecycle work. After Consumer Hook processing, re-evaluate affected state.

- `jobs.activated` is reached after a job newly and validly enters `+` by creation or `_` → `+`. Structural re-expression of pre-existing active state/obligation as a newly represented `+` child is not activation. An ancestor remaining `+` does not reach it again; reactivating an ancestor does not re-fire it for descendants whose markers did not change.
- `jobs.blocked` is reached when a discoverable incomplete `+` job newly cannot make material progress in the current execution context after safe in-scope alternatives are exhausted and its blocker, remaining obligation, and materially affected unverified scope are reconciled enough for resumable control. A command failure, transient first failure, unavailable optional path while another valid path remains, or unchanged observation of the same unresolved blocking episode does not suffice.
- Reaching `jobs.blocked` neither completes, accepts, verifies, deactivates, nor otherwise changes the blocked job marker; it does not by itself establish root Assessment `Blocker` severity and grants no scope, priority, successor-selection, or activation authority.
- `jobs.completed` is reached when an active job newly satisfies Completion, before final handling removes it from `+`. The Hook does not make the job complete or replace required exit/reconciliation; after Consumer Hook processing, re-evaluate the completed job and any affected parent control/acceptance state without cascading lifecycle marker changes.

### Blocked continuation
After `jobs.blocked`, a Consumer Hook may only apply ordinary lifecycle discovery to another independently executable job within existing authority: continue a discoverable active `+` job when ordinary authority/dependency conditions permit, or select/activate `_` under the normal transition rule. The blocking occurrence is not basis for new work and cannot bypass approved basis, dependencies, entry conditions, inactive-ancestor gating, or user-owned scope/priority/RB/material-design/acceptance decisions. If the blocking condition itself requires a user-owned decision, or continuation to another job requires a material priority choice or other such decision, do not automatically continue or select one; surface the applicable decision/blocker instead. Activating an inactive successor reaches `jobs.activated`; continuing an already-active successor does not re-fire it.

## Existing Job Updates
- An update reconciles the retained job's working material/control state for its existing purpose/basis; it grants no new purpose, material scope/AC/RB/design/priority change, or current-work commitment.
- Refinement/correction/reordering/decomposition/collapse is allowed only when resulting work remains required by existing approved basis/scope/AC or root Permission / Scope otherwise permits it now. Separate independently completable improvements/future opportunities/adjacent follow-up.
- First structural decomposition of pre-existing retained work is not activation. A newly represented child is `+` only when current repository control explicitly identifies its outcome as current active continuation/job-local active obligation; historical execution/evidence, retained status, ordering, dependency readiness, or active-parent membership does not carry active state. Otherwise still-required authorized child work begins `_` until selected.
- If pre-existing control already assigned supporting material, transitional-VB responsibility, or another job-owned responsibility to the re-expressed child outcome, preserve that semantic ownership. Move/co-locate material when required and reconcile moved references without changing claim/authority semantics.
- A discovered item unnecessary to satisfy the existing approved basis is separate assessment input unless current authority independently includes it; apply root Assessment and Feedback and retain follow-up only for continuing value.
- Do not create/enlarge retained job content merely to record every suggestion/observation/improvement; discovery or apparent validity alone neither joins it to the job nor requires repository retention.
- After mutation, the updater re-evaluates that job's marker against State/Transitions. Parent/child control content may be reconciled when applicable, but related markers do not change merely to mirror the updated job. Recency, metadata/evidence refresh, or newly retained context never independently activates/deactivates/reopens or preserves `+`.

## Active Work Control
- `INDEX.md` is optional non-authoritative active control inside an active job. Create it only when authorized repository-modification work needs retained decomposition/progress for continuation, handoff, or cross-session coordination. If the need appears later, create it then and reconcile current child jobs, remaining work, state, and links before relying on it.
- Keep proportionally discoverable: purpose/approved basis/acceptance basis; applicable child links/state; order/dependencies; remaining/blocked work; material work/evidence links; and job-level exit/transfer/retention/disposal conditions.
- Track coherent outcomes/children rather than low-level execution; identifiers/status vocabulary/layout are local choices.
- While its parent is active, keep the index current enough to identify active execution and resumable state. Before a newly accepted child begins, reconcile decomposition; newly discovered work follows root Permission / Scope and Assessment and Feedback and never becomes an unapproved backlog.
- Parent control records enough child path, dependency/return condition, and current child state without duplicating internal execution detail.
- `INDEX.md` grants no implementation/adoption/priority authority, does not make retained material committed work, and its presence or unresolved-child listing does not keep the parent `+`. Parent-local control/handoff/reconciliation stays active only while needed; separate handoff is optional when index + links suffice.

## Parent/Child Execution
- Child scope/acceptance derives from parent/approved basis; decomposition preserves every still-required parent outcome.
- Children may execute sequentially/concurrently when authority/dependencies permit and ancestry is discoverable. Child completion alone never completes/deactivates the parent; an active parent reconciles returned outcomes, dependencies, remaining children/work, verification, and its own acceptance basis.
- Branch/PR/external runner/agent isolation is execution mechanism, not job identity. Preserve return target/context for reconciliation; creation/publication/merge and other external actions remain governed by root Permission / Scope, Safety / Compliance, and Consumer Hook boundaries.

## Lifecycle Activities
### Entry
- Basis: explicit request, approved decision/init summary, recorded open question, applicable SoT, supplied material, authorized parent decomposition, or root-permitted retention/disposition; never unapproved assumption alone.
- Acceptance basis derives from approved scope/AC and, when nested, parent outcome; unaccepted assessment input is not a child job.
- Requirements/design investigation may precede its formal document if another approved basis exists. Supplied material also follows `references/AGENTS.md`.

### Investigation / Prototype / Verification
- Investigation states the question/claim/hypothesis + evaluation method/evidence, references SoTs, and separates approved decisions from suggestions/assumptions. Proposed SoT change uses current SoT + delta/decision context; full candidate view only when needed for coherence and clearly non-authoritative.
- Prototype conclusions are limited to exercised scope; prototype proves no formal quality/security/performance/maintainability/completion/acceptance.
- Verification needs no evidence file by default; use native/external output or proportional `jobs/` retention as the claim/VB lifecycle requires. Retained execution material proportionally records actual target/state, environment/conditions, material method/commands, result, directly verified scope, and material unverified scope.

### Handoff
- May package authorized scope/exclusions, completion conditions, blockers, decisions, assumptions, open questions, order, and context; grants no implementation authority and overrides no instructions/SoTs.
- Current continuation remains in the owning `+` job/discoverable active descendant. Restart-only future context is `_`, not automatically Defer. With active `INDEX.md`, decomposition/progress stays there; separate handoff only for context that does not fit.

### Inactive Retention
- Keep `_` only for plausible continuing evaluation, decision, follow-up, diagnostic, restart, or reconsideration value. Root Defer is one basis, not `_` semantics; retention implies no adoption/requirement/priority/promise.
- File or directory is allowed; no `INDEX.md` required. Use a proportional local entry point (the file itself or, when needed for a directory, a local `README.md`) and preserve enough context, provenance/scope, retention/evaluation basis, and reevaluation/restart condition to explain retention.
- Evidence/context gathering being performed now is active work and belongs under `+`; do not use `_` as a quieter state for ongoing work.
- A matching Defer revisit condition surfaces the inactive parent for root reassessment at a useful decision point without descendant inspection/activation. Other `_` units likewise need current basis + applicable assessment/decision before activation.
- Root Defer: Accept now requires applicable authority/adoption before active retained work moves/restructures to `+`; Defer again keeps `_` and refreshes materially changed rationale/revisit condition; Reject deletes unless rationale/provenance has independent continuing value, which is then classified under its responsible area.
- Do not scan all inactive jobs on every task.

### Decision Readiness
A candidate/subset is **decision-ready** when:
- major intent + applicable RBs are coherent enough to judge as one unit; and
- remaining questions are separable and not expected to invalidate/materially reshape it.

Decision-ready is not implementation-entry completeness; details consistently decidable after adoption may remain open. When decision-ready and adoption/formalization is not already authorized, surface candidate + material basis + remaining questions through root Decision Requests; do not elaborate only to avoid decision. A coherent decision-ready subset may be adopted independently without waiting for job exit.

## Retention and Exit
### Retention
- Retain only material with continuing evidential/diagnostic/audit/maintenance/decision/reconsideration value; occurrence/presence of runs, caches, dependencies, logs, generated/disposable output, or suggestions is insufficient.
- Keep justified support inside its marked owner while it remains `jobs/` responsibility; if no plausible continuing value/evaluation/revisit basis remains, dispose rather than accumulate an indefinite backlog.
- `_` keeps evaluation/retention basis discoverable; root Defer also keeps disposition rationale/revisit condition current.
- Never delete `jobs/` material supporting a current verified claim unless remaining/replacement VB is sufficient or the claim is downgraded.
- `jobs/` VB is transitional only for active work, immediate handoff, unresolved reconciliation, or a bounded post-work transition with a specific exit event. Open-ended “keep for now”/“reverify later” is not bounded.
- If the exit event is missed/cancelled/becomes open-ended, or the claim must outlive transitional responsibility without adequate remaining basis: use durable native/external VB, Outbound Transfer only the needed durable material, or downgrade the claim.
- For bounded transition, make the exit event + intended disposition discoverable; no fixed date/ID/metadata/history archive is required. At the event, retire/replace/re-evaluate VB or downgrade.

### Completion
A job is complete when all hold:
- acceptance basis and required job-local lifecycle work are satisfied;
- required verification is complete;
- no required child outcome remains unresolved; and
- no Blocker, active handoff/reconciliation, or required transitional verification remains.

Completion is separate from retention, parent acceptance, broader requirement/AC completion, and external integration/publication.

### Exit handling
- After adoption, keep only unresolved questions/alternatives/prototypes/feasibility, verification evidence, decision/handoff context, or other remaining `jobs/` responsibility; reference responsible SoTs instead of duplicating adopted specification.
- Candidate artifacts must not appear as active alternate SoTs: delete, mark superseded/historical, transfer durable non-normative value, or explicitly relate to resulting SoT. Reassessed or dispositioned inactive items likewise must reflect material handling and marker changes rather than stale TODOs.
- If active `INDEX.md` exists, reconcile children, remaining work, and links for parent acceptance/retention: reflect completed/adopted outcomes at responsible destinations; leave authorized remaining work represented; handle inactive inputs by their rules; deliberately retain/dispose temporary material. Parent exit does not require synchronizing descendant markers.
- A completed child's `jobs.completed` Hook may return/integrate its outcome and resume parent reconciliation within existing authority. Returned-outcome reconciliation is parent lifecycle work and does not keep/return the child to `+`. Consumer Hook execution or child completion alone proves no parent completion/acceptance and does not change the parent marker.
- A discoverable job remains `+` only while its own active lifecycle, handoff/reconciliation, or required transitional verification remains. Otherwise remove it, transfer durable material, or restructure justified inactive remainder under `_` after applicable assessment/disposition. A frozen `+` descendant is exempt until discoverable; after ancestor reactivation reconcile newly visible descendant state before relying on it.
- Retained superseded jobs are `_` and record superseded status. Findings awaiting only a user decision on separate follow-up are not active handoff/reconciliation; retain `_` only for continuing evaluation/reconsideration value.
- A completed/superseded `INDEX.md` must not present stale active control: delete it, reduce it to remaining active/handoff context, or retain only independent value clearly no longer presented as active control.
- Before delete/transfer inspect inbound references, unresolved work, child/ancestor relationships, responsible project state, current verified claims, and continuing evidence/maintenance/reconsideration need. This explicit subtree operation is outside ordinary lifecycle discovery and does not require descendant marker changes first.

## Outbound Transfer
| Continuing material | Destination / handling |
|---|---|
| Adopted requirements/design/testing/procedures/decisions/project facts | responsible `definition/` SoT |
| Formal code/tests/tools/support programs | `products/` |
| Managed environment config | `etc/` |
| Supplied originals, or material whose only continuing value is durable non-normative knowledge independent of active/inactive work | `references/` |
| Formal open questions/decision points/blocking effects | `definition/` when required; inactive non-adopted work does not transfer there merely for preservation, and applicable assessment/adoption/authority comes first |

`jobs/` filenames/splits/directories/INDEX do not prescribe destination structure. Integrate adopted semantics into the responsible SoT instead of migrating the working file; authorized adopted facts must not remain only in `jobs/`.
