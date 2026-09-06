# Jobs Control, Updates, and Recursion

## Existing Job Updates

- Updating a retained job reconciles working material/control state for its existing purpose and basis; permission to update it does not authorize a new purpose, material scope/AC/RB/design/priority change, or current-work commitment.
- Refine, correct, reorder, split into child jobs, or collapse unnecessary decomposition when resulting work remains required by existing approved basis/scope/AC or root Permission / Scope otherwise permits it now. Do not absorb an independently completable improvement/future opportunity/adjacent follow-up merely because it was discovered during the update.
- When pre-existing retained work is first decomposed into newly represented child jobs, structural decomposition is not itself activation. Give a new child `+` only when current repository control at decomposition time explicitly identifies that child outcome as current active continuation or a current job-local active obligation. Historical execution/evidence, retained remaining status, ordering, dependency readiness, or membership in an active parent does not by itself carry active state into the new child; otherwise use `_` until validly selected/activated.
- When pre-existing control explicitly assigns retained supporting material, transitional-VB responsibility, or another job-owned responsibility to an outcome being re-expressed as a child, preserve that semantic ownership/responsibility in the child. Co-locate material under the child path when required and reconcile affected references without changing claim/authority semantics.
- A mere link, incidental proximity, or later `INDEX.md` note does not create ownership; preservation applies only to assignment/responsibility established before decomposition.
- If pre-existing approved basis can still be satisfied without a discovered item, treat it as separate assessment input unless current authority independently makes it part of the job. Apply root Assessment and Feedback; retain separate follow-up only when continuing value justifies retention.
- Do not create/enlarge retained job content merely to record every suggestion/observation/possible improvement.
- The actor updating a job re-evaluates and reconciles that job's lifecycle marker to its own resulting current state. Parent/child control content may be reconciled when applicable, but do not change related markers merely to mirror the updated job's state.
- Content mutation, recency, metadata/evidence refresh, or newly retained context does not itself activate/deactivate/reopen a job.

## Active Work Control

- Use `INDEX.md` inside an active job only when authorized repository-modification work needs repository-retained decomposition/progress for continuation, handoff, or cross-session coordination. A job completing without retained active control needs no index.
- If that need arises after work starts, create the index then and reconcile current child jobs, remaining work, state, and material links before relying on repository state for continuation.
- `INDEX.md` is non-authoritative active control state. Keep proportionally discoverable: purpose/approved basis and acceptance basis; child-job links/state when applicable; order/dependencies; remaining/blocked work; material working/evidence links; and job-level exit/transfer/retention/disposal conditions.
- Account for coherent outcomes/child jobs, not reads/searches/edits/commands/test invocations/other low-level operations. Exact child identifiers/status vocabulary/table layout are local choices.
- Once `INDEX.md` exists, keep it current enough to identify active execution path and resumable state while that parent is active. Before a newly accepted child begins, reconcile decomposition; newly discovered work follows root Permission / Scope and Assessment and must not become an unapproved backlog.
- A parent keeps enough control state to identify each child path, dependency/return condition, and current child state without duplicating the child's internal execution detail. Child markers remain local state; parent control may summarize them without making marker changes cascade.
- `INDEX.md` grants no implementation/adoption/priority authority and does not make retained material committed work. Its presence/listed unresolved children do not by themselves keep the parent `+`; parent-local control/handoff/reconciliation is active only while currently needed.

## Recursive Job Execution

- Parent/child relationship follows filesystem containment. Independently completable/acceptable authorized work retained under a parent uses a child job; ordinary implementation/verification steps/supporting material remain inside current job without another governed unit.
- A child derives authorized scope and acceptance basis from applicable parent/approved basis. Splitting work into descendants preserves every still-required part of parent outcome; no required scope disappears because decomposition changes.
- Parent and child lifecycle markers are independent. Activating/deactivating/completing/retaining one job does not automatically change related job markers.
- A parent may transition `+` → `_` from its own lifecycle state even while descendants retain `+`; those descendants keep markers and become frozen by inactive-parent gating.
- An inactive parent gates its whole subtree from ordinary execution regardless of descendant markers. A child may resume only after the containing parent chain becomes discoverable again; retained descendant markers resume ordinary meaning without being rewritten merely because the parent reactivated.
- Children may run sequentially/concurrently when authority/dependencies permit and containing parent chain is discoverable. Child completion does not by itself complete/deactivate parent; active parent reconciles returned outcomes, dependencies, remaining children/work, verification, and its own acceptance basis.
- Branch/PR/external runner/agent isolation used for a child is an execution mechanism rather than job identity. Preserve enough return target/context for reconciliation; creation/publication/merge/other external actions remain governed by root Permission / Scope, Safety / Compliance, and applicable Consumer Hook boundaries.
