# AIDD Jobs Instructions

## General Provisions

### Scope

- Applies to `jobs/` and descendants; inherits root + `definition/AGENTS.md`.

### Responsibility

- Owns non-authoritative active-work control and working material: investigations, comparisons, drafts, preparation, prototypes/spikes, transformation outputs, implementation plans, handoffs, inactive retained inputs, and project-managed verification material.
- Conversational clarification need not be retained; keep only when continuing work/handoff/reconsideration value exists.

## Structure and Placement

### Job Units

- A **job unit** is a purpose-oriented execution/review/acceptance boundary under `jobs/` for one coherent outcome. A job unit may be top-level under `jobs/` or nested inside another job unit; a nested job unit is that enclosing unit's child job.
- Independently completable/acceptable authorized work retained under a parent is represented as a child job, including authorized work that has not started yet. Do not keep such work only as an informal future-task list because it is not current. A child may contain its own child jobs recursively; decomposition does not grant authority, broaden scope/AC, or narrow still-required parent acceptance.
- Do not turn low-level execution steps into job units merely to enumerate work. Reads, searches, edits, commands, test invocations, and similar operations remain execution detail unless they independently constitute a coherent authorized outcome requiring repository-managed lifecycle.
- Nested content is not a job unit merely because it is inside a job. Only content intentionally represented as a marked job unit under Lifecycle Discovery has an independent jobs lifecycle; ordinary supporting files/directories such as notes, logs, images, screenshots, reports, evidence, fixtures, and generated comparison material remain supporting material.
- `jobs/.hooks/` is the standard reserved Consumer Hook namespace defined by root governance. It is not a job unit, working material, active/inactive lifecycle state, or source of job authority; its `.gitkeep` has no Hook semantics.
- Prefer one purpose/question/experiment/verification activity/handoff per job unit and keep units independently understandable/removable. A unit may be a single file or purpose directory; use file form only when the job does not need to own retained supporting descendants. When a job owns retained supporting material or child jobs, use directory form so owned descendants remain physically inside the marked job path. Use proportional structure/entry point and do not create a directory, control document, or heavyweight template solely for uniformity.
- Related lightweight inactive assessment inputs may share a unit or registry only when they do not yet represent independently authorized work and each remains independently judgeable/removable; do not create a repository-wide dumping ground.
- Organize by purpose/job unit, not fixed artifact-type directories. Co-locate needed inputs, dependencies, notes, evidence, reproduction instructions where practical; handoffs, logs, evidence, prototypes, drafts, and similar supporting material stay inside the owning unit unless they are themselves the complete small job unit. Material outside a child job's path may be referenced by that child but remains owned by its actual containing job or responsible area unless applicable governance moves/reclassifies it; do not claim child ownership merely through a link or INDEX note.
- A substantial unit must make discoverable: purpose, approved basis or retention/disposition basis, evaluation/consumption method when applicable, and acceptance/retention/supersession/transfer/deletion condition.
- Scope only far enough for a coherent decision, comparison, feasibility result, execution/handoff need, or verification purpose. Do not require SoT-equivalent completeness; elaborate unresolved detail only when material to the job purpose.
- Exploratory code stays inside its job unit even when tools generate `src/`, `app/`, `tests/`, `packages/`.

### Lifecycle Discovery

- Every retained job unit uses one marker at its own path, whether top-level or nested; top-level `jobs/AGENTS.md` and the reserved `jobs/.hooks/` Consumer Hook subtree are exempt:
  - `+<purpose>` = job-local active marker for authorized work that has validly entered the active `jobs/` lifecycle and has not locally transitioned out of it; while the containing parent chain is discoverable, this includes executing, pending/blocked after activation, handoff/reconciliation, or required transitional verification work;
  - `_<purpose>` = retained but inactive material for later evaluation/reconsideration, including a root-dispositioned Defer input, authorized future work that has not yet entered active lifecycle, completed retained context, or dormant handoff/restart context.
- A job unit's marker is local to that unit. Changing a parent marker does not change descendant markers, and changing a child marker does not change ancestor or sibling markers.
- An inactive `_` job is the discovery boundary for its subtree. During ordinary continuation, resumption, lifecycle discovery, or reassessment, do not descend into that job to inspect, interpret, or act on child-job markers; descendant markers are preserved but operationally ignored while the parent remains inactive. A descendant retaining `+` under an inactive ancestor is therefore frozen by the ancestor gate: it preserves its local lifecycle marker but is not discoverable or executable for ordinary work until the containing parent chain is reactivated. When the parent itself is validly reactivated, its descendants become discoverable again in their retained states; reactivating the parent does not alter descendant markers or re-fire descendant Hooks.
- Do not create unmarked retained job units. At `jobs/` top level, supporting material must stay inside its owning marked unit. Inside a job, unmarked descendants are supporting material rather than separate job units.
- Choose `<purpose>` clear enough for first-pass relevance screening; do not rely on an opaque generic name that requires opening the unit to know what it concerns.
- Markers describe jobs lifecycle only. `+` does not grant authority, set priority, prove completion/verification/acceptance, or make every contained artifact active work; `_` does not by itself mean Defer, rejection, adoption, priority, or future commitment. Lexical/display order is not priority.
- `_` → `+` requires a current approved basis, satisfied applicable entry conditions, any applicable assessment/decision/authority for active work, and actual selection of that job as current work to begin or resume under that authority. Authorization, retained remaining work, satisfied entry conditions, dependency readiness, parent activity, or ordering alone do not constitute activation. An already-authorized child may be selected and activated without a new user decision when existing authority permits current execution unless another governing rule requires one; an inactive parent must be reactivated before ordinary work may select or continue its descendants. `+` → `_` applies when current active lifecycle work has ended or been withdrawn from active continuation, but justified retention/evaluation/reconsideration value remains; this transition does not cascade to descendants.
- Hook `jobs.activated` is reached after any job unit validly enters active `+` state, whether by new active-job creation or `_` → `+` transition. Creating/activating a child job reaches the Hook for that child only when that creation/transition is a new entry into active lifecycle; structurally re-expressing a pre-existing active state or obligation as a newly represented `+` child does not reach `jobs.activated`. An ancestor remaining `+` across the change does not reach it again. Reactivating an ancestor does not re-fire `jobs.activated` for descendants whose markers did not change.
- A parent's active state does not itself activate an authorized child, even when that child's entry conditions are satisfied or it is next in an applicable order. Conversely, a descendant `+` marker does not require an ancestor marker change; it is simply undiscoverable for ordinary work while any containing parent is inactive.
- A blocked/pending job remains `+` only when it had already validly entered active lifecycle and its authorized outcome remains active while waiting on a dependency, input, condition, or blocker. Authorized future work that has not yet entered active lifecycle remains `_`. Current-claim-dependent transitional VB remains under a `+` job while preservation, replacement, reconciliation, or claim-downgrade is an active obligation, even when implementation work is complete.
- For continuation/resumption when the active job is unidentified, inspect top-level `jobs/+*`, then recurse only through currently discoverable active parents to their entry points/`INDEX.md` and marked child jobs as needed. Do not descend through a `_` parent merely because a descendant name or retained marker might appear relevant.
- `_` units are not active candidates merely by presence. Screen an inactive unit by its own `<purpose>` and retained evaluation/revisit basis; do not scan its descendants for possible active work. Defer follows root reassessment, and other inactive units need current basis plus applicable entry conditions and assessment/decision before activation.

### Existing Job Updates

- Updating a retained job reconciles working material/control state for its existing purpose and basis; permission to update it does not authorize a new purpose, material scope/AC/RB/design or priority change, or current-work commitment.
- Refine, correct, reorder, split into child jobs, or collapse unnecessary decomposition when the resulting work remains required by existing approved basis/scope/AC or root Permission / Scope otherwise permits it now. Do not absorb an independently completable improvement, future opportunity, or adjacent follow-up merely because it was discovered during the update.
- When pre-existing retained work is first decomposed into newly represented child jobs, that structural decomposition is not itself an activation occurrence. Give a new child `+` only when current repository control at decomposition time explicitly identifies that child outcome as current active continuation or a current job-local active obligation. Historical execution/evidence, retained remaining status, ordering, dependency readiness, or membership in an active parent does not by itself carry active state into the new child; otherwise retain still-required authorized child work under `_` until it is validly selected/activated.
- When that pre-existing control explicitly assigns retained supporting material, transitional-VB responsibility, or another job-owned responsibility to an outcome that is being re-expressed as a child job, preserve that semantic ownership/responsibility in the child during decomposition. Co-locate material under the child path when the Job Units rules require child ownership, and reconcile affected references whose paths change without changing their claim or authority semantics. A mere link, incidental proximity, or later INDEX note does not create ownership; this preservation rule applies only to an assignment/responsibility already established before decomposition.
- If the pre-existing approved basis can still be satisfied without a discovered item, treat that item as separate assessment input unless current authority independently makes it part of the job. Apply root Assessment and Feedback; retain separate follow-up only when continuing value justifies retention.
- Do not create/enlarge retained job content merely to record every suggestion, observation, or possible improvement; discovery or apparent validity alone neither joins it to the job nor requires repository retention.
- The actor updating a job re-evaluates and reconciles that job's lifecycle marker to its own resulting current state. Parent/child control content may be reconciled when applicable, but do not change ancestor or descendant markers merely to mirror the updated job's state.
- Content mutation, recency, metadata/evidence refresh, or newly retained context does not itself activate, deactivate, or reopen a job. Apply Lifecycle Discovery transition conditions; do not preserve `+` merely because a job was recently changed.

### Active Work Control

- Use `INDEX.md` inside an active job unit only when authorized repository-modification work needs repository-retained decomposition/progress for continuation, handoff, or cross-session coordination. A job completing without retained active control needs no index.
- If that need arises after work starts, create the index then and reconcile current child jobs, remaining work, state, and material links before relying on repository state for continuation.
- `INDEX.md` is the job's non-authoritative active control state. Keep proportionally discoverable: purpose/approved basis and acceptance basis; child-job links/state when applicable; order/dependencies; remaining/blocked work; material working/evidence links; and job-level exit/transfer/retention/disposal conditions.
- Account for coherent outcomes and child jobs, not reads, searches, edits, commands, test invocations, or other low-level operations. Exact child identifiers, status vocabulary, table/layout are local choices.
- Once `INDEX.md` exists, keep it current enough to identify the active execution path and resumable state while that parent is active. Before a newly accepted child job begins, reconcile decomposition; newly discovered work follows root Permission / Scope and Assessment and Feedback and must not become an unapproved backlog.
- A parent keeps enough control state to identify each child path, dependency/return condition, and current child state without duplicating the child's internal execution detail. Child markers remain local state; parent control may summarize them while the parent is active without making marker changes cascade.
- `INDEX.md` grants no implementation/adoption/priority authority and does not make retained material committed work. Its presence or need to list unresolved children does not by itself keep the parent `+`; parent-local control/handoff/reconciliation is active only while it is currently needed for continuation, handoff, or reconciliation. A separate handoff is optional when the index plus linked material is sufficient.

### Recursive Job Execution

- Parent/child relationship follows filesystem containment. Independently completable/acceptable authorized work retained under a parent uses a child job; ordinary implementation/verification steps and supporting material remain inside the current job without another governed unit.
- A child job derives its authorized scope and acceptance basis from the applicable parent/approved basis. Splitting work into descendants must preserve every still-required part of the parent outcome; no required scope disappears merely because decomposition changes.
- Parent and child lifecycle markers are independent. Activating, deactivating, completing, or retaining one job does not automatically change any related job marker.
- A parent may transition `+` → `_` from its own lifecycle state even while descendants retain `+`; active descendants do not block parent deactivation or require an ancestor marker change. Those descendants keep their markers and become frozen by the inactive-parent gate.
- An inactive parent gates its whole subtree from ordinary execution regardless of descendant markers. A child may resume only after the containing parent chain is discoverable again; existing descendant markers then resume their ordinary meaning without being rewritten merely because the parent was reactivated.
- Children may run sequentially or concurrently when authority/dependencies permit and their containing parent chain is discoverable. Child completion does not by itself complete or deactivate the parent; when the parent is active, it reconciles returned outcomes, dependencies, remaining children/work, verification, and its own acceptance basis.
- Branch, PR, external runner, or agent isolation used for a child is an execution mechanism rather than job identity. When a consumer uses such isolation, preserve enough return target/context for reconciliation; creation, publication, merge, or other external actions remain governed by root Permission / Scope, Safety / Compliance, and applicable Consumer Hook authority boundaries.

## Lifecycle

### Entry

- Job basis must be an explicit request, approved decision/init summary, recorded open question, applicable SoT, supplied material, authorized parent-job decomposition, or root-permitted retention/disposition basis; never unapproved assumption alone.
- A job's acceptance basis derives from applicable approved scope/AC and its parent outcome when nested. Independently completable/acceptable authorized work retained under a parent is represented as a child job; unaccepted assessment inputs and low-level execution detail are not.
- Requirements/design investigation may precede its formal doc when another approved basis exists. Supplied material also follows `references/AGENTS.md`.

### Investigation

- State the question/claim/hypothesis plus evaluation method/evidence; reference SoTs and distinguish approved decisions from suggestions/assumptions.
- For a proposed SoT change, use current SoT + proposed delta/decision context; create a full candidate view only when coherence requires it and mark it clearly non-authoritative.

### Prototype

- Prototype conclusions are limited to exercised scope; prototype ≠ formal quality/security/performance/maintainability/completion/acceptance.

### Verification

- Verification does not require an evidence file; use native/external output or proportional `jobs/` retention as the claim/VB lifecycle requires.
- Retained execution-specific material records proportionally: actual target/state, environment/conditions, material method/commands, result, directly verified scope, and material unverified scope.

### Handoff

- A handoff may package authorized scope/exclusions, completion conditions, blockers, decisions, assumptions, open questions, order, and working context; it grants no implementation authority and cannot override instructions/SoTs.
- Current continuation stays in the owning `+` job or a discoverable active descendant. Restart-only future context uses `_` without thereby becoming Defer. With an active `INDEX.md`, keep decomposition/progress there and use separate handoff only for context that does not fit cleanly.

### Inactive Retention

- Retain `_<purpose>` only for plausible continuing evaluation, decision, follow-up, diagnostic, restart, or reconsideration value. Root Defer is one possible basis, not the definition of `_`; retention does not make work adopted, required, prioritized, or promised.
- An inactive unit may be a file or directory and needs no `INDEX.md`; use a proportional local entry point such as the file itself or a local `README.md` when a directory needs one. Preserve enough retained input/context, material provenance/scope, retention/evaluation basis, and useful reevaluation/restart condition to understand why it remains.
- Authorized evidence/context gathering happening now is active work and belongs under `+`; do not use `_` as a quieter state for ongoing work.
- When current work materially matches a retained Defer revisit condition, surface the inactive parent unit for root reassessment at a useful decision point; do not inspect or silently activate descendants while that parent remains inactive. Other `_` units likewise require current basis and applicable assessment/decision before activation.
- Root Defer reassessment follows root governance: Accept now requires applicable authority/adoption before active retained work moves/restructures to `+`; Defer again keeps `_` and refreshes materially changed rationale/revisit condition; Reject deletes unless rationale/provenance has independent continuing value, which is then classified under its responsible area.
- Do not scan every inactive item on every task; Lifecycle Discovery relevance screening applies.

### Decision Readiness

A candidate/subset is **decision-ready** when:
- major intent + applicable RBs are coherent enough to judge as a unit;
- remaining questions are separable and not expected to invalidate/materially reshape it.

Decision-ready ≠ implementation-entry complete; details that can be decided consistently after adoption may remain open.

- When decision-ready and adoption/formalization is not already authorized, surface candidate + material basis + remaining open questions using root Decision Requests; do not keep elaborating solely to avoid the decision.
- A coherent decision-ready subset may be adopted independently; job-level exit does not delay that adoption.

### Retention

- Do not retain runs, caches, dependencies, logs, generated/disposable output, or suggestions merely because they occurred or are present; keep only material with continuing evidential/diagnostic/audit/maintenance/decision/reconsideration value.
- Keep justified supporting material inside its owning marked job while it remains `jobs/` responsibility. If no plausible continuing value/evaluation/revisit basis remains, dispose rather than build an indefinite backlog.
- For `_`, keep the evaluation/retention basis discoverable; root Defer additionally keeps its disposition rationale/revisit condition current.
- Never delete `jobs/` material while a current verified claim materially depends on it unless remaining/replacement VB is sufficient or the claim is downgraded.
- `jobs/` VB is transitional only while serving active work, immediate handoff, unresolved reconciliation, or a bounded post-work transition with a specific exit event. “Keep for now” / “reverify later” without one is not bounded.
- If that exit event is missed/cancelled/deferred into open-ended dependency, or the claim must outlive transitional responsibility and remaining basis is inadequate, use suitable durable native/external VB, apply Outbound Transfer to the minimum material needed for durable retention, or downgrade the claim.
- For bounded transition, make the effective exit event + intended disposition discoverable enough to judge its state; no fixed date/ID/metadata file/history archive is required. At the event, retire/replace/re-evaluate VB or downgrade the claim.

### Exit

- After adoption, reduce a job to unresolved questions/alternatives/prototypes/feasibility, verification evidence, decision/handoff context, or other remaining `jobs/` responsibility; residual work references responsible SoTs instead of duplicating adopted candidate specification.
- Candidate artifacts must not look like active alternate SoT: delete, mark superseded/historical, handle durable non-normative value through Outbound Transfer, or explicitly relate them to the resulting SoT. Reassessed/dispositioned inactive items must likewise reflect material handling/marker changes rather than stale TODO state.
- If active `INDEX.md` exists, exit requires reconciling child jobs, remaining work, and linked material as needed for the parent's own acceptance/retention decision: reflect completed/adopted outcomes in responsible destinations; leave remaining authorized work represented; handle inactive retained inputs by their rules; deliberately retain/dispose temporary material. Parent exit does not require synchronizing descendant markers.
- A job is complete when its acceptance basis and required job-local lifecycle work are satisfied, required verification is complete, no required child outcome remains unresolved, and no Blocker, active handoff/reconciliation, or required transitional verification work remains. Completion is distinct from retention, parent acceptance, broader requirement/AC completion, or external integration/publication.
- Hook `jobs.completed` is reached when an active job newly satisfies that completion condition, before final handling that removes it from active `+`. The Hook does not make the job complete or replace required exit/reconciliation; after Consumer Hook processing, re-evaluate the completed job and any affected parent control/acceptance state without cascading lifecycle marker changes to related jobs.
- For a child job, `jobs.completed` may be used by a Consumer Hook to return/integrate the child outcome and resume parent reconciliation within already-authorized scope. Once the child has independently satisfied its own completion condition, reconciliation of the returned outcome against the parent's dependencies and acceptance basis is parent lifecycle work and does not by itself keep or return the completed child to active `+`; Consumer Hook execution or child completion alone does not prove parent completion/acceptance or change the parent marker.
- Keep `+` while this job's own active lifecycle, handoff/reconciliation, or required transitional verification remains active. For a discoverable job, if none of those job-local active conditions remains, do not leave it `+` solely because retained context or descendant markers exist: remove it, transfer durable material under Outbound Transfer, or move/restructure justified inactive remainder under `_` after applicable assessment/disposition. A descendant frozen by an inactive ancestor is exempt from this stale-`+` check until it becomes discoverable again; ancestor gating alone does not change its marker. Descendant markers do not by themselves require this job to stay `+`; moving this job to `_` makes its descendants undiscoverable for ordinary work without modifying their markers. When the job is later reactivated, reconcile newly visible descendant state before relying on it for continuation.
- A retained superseded job is an inactive remainder: keep it `_` and record its superseded status rather than leaving it unmarked or `+`.
- Findings from completed current work that await only a user decision on whether to authorize separate follow-up do not by themselves constitute active handoff/reconciliation or justify keeping `+`; retain them under `_` only when continuing evaluation/reconsideration value justifies retention.
- Do not leave a completed/superseded `INDEX.md` presenting stale active work; delete it with the job, reduce it to remaining active/handoff context, or retain it only for independent continuing value clearly no longer presented as active control state.
- Before delete/transfer inspect inbound references, unresolved work, child/ancestor relationships, responsible project state, current verified claims, and continuing evidence/maintenance/reconsideration need. This explicit subtree operation is not ordinary lifecycle discovery and does not require changing descendant markers first.

## Outbound Transfer

- Adopted requirements/design/testing/procedures/decisions/project facts → responsible `definition/` SoT.
- Formal code/tests/tools/support programs → `products/`.
- Managed environment config → `etc/`.
- Supplied originals, and material whose only continuing value is durable non-normative knowledge independent of active/inactive work → `references/`.
- Formal open questions/decision points/blocking effects → `definition/` when required. Inactive non-adopted work does not transfer there merely for preservation; applicable assessment/adoption/authority comes first.
- `jobs/` filenames/splits/directories/INDEX structure do not prescribe destination structure. Integrate adopted semantics into the responsible SoT rather than migrating the working file, and do not leave authorized adopted facts only in `jobs/`.

## Local Governance

### Adoption Authority

- `jobs/` material, lifecycle markers, and `INDEX.md` gain no adoption/formalization authority from presence, retention, active/completed status, inactive retention, revisit-trigger match, or decision-readiness; adoption requires applicable root + `definition/` authority.
