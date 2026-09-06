# Jobs Discovery and Activation

## Lifecycle Markers and Discovery

- Every retained job unit uses one marker at its own path; reserved `jobs/.routes/` and `jobs/.hooks/` governance subtrees are exempt:
  - `+<purpose>` = job-local active marker for authorized work that has validly entered active jobs lifecycle and has not locally transitioned out; while the containing parent chain is discoverable, this includes executing, pending after activation, handoff/reconciliation, or required transitional verification work;
  - `_<purpose>` = retained but inactive material for later evaluation/reconsideration, including a root-dispositioned Defer input, authorized future work not yet active, completed retained context, or dormant handoff/restart context.
- A job marker is local to that unit. Changing parent marker does not change descendants; changing child marker does not change ancestors/siblings.
- An inactive `_` job is the discovery boundary for its subtree. During ordinary continuation/resumption/lifecycle discovery/reassessment, do not descend into it to inspect/interpret/act on child markers. Descendant markers are preserved but operationally ignored while any containing parent is inactive.
- Reactivating a parent makes retained descendants discoverable again in their retained states; it does not alter descendant markers or re-fire descendant Hooks. Before selecting, continuing, or otherwise relying on newly visible descendant state, re-evaluate the jobs index for Control / Updates / Recursion and reconcile current parent control, dependencies, child completion/retention/VB state, acceptance basis, and known evidence; this reconciliation does not itself rewrite descendant markers.
- Do not create unmarked retained job units. Supporting material at `jobs/` top level belongs inside its owning marked unit; inside a job, unmarked descendants are supporting material rather than separate jobs.
- Choose `<purpose>` clear enough for first-pass relevance screening; do not rely on an opaque generic name requiring opening the unit to understand relevance.
- Markers describe jobs lifecycle only. `+` does not grant authority/priority or prove completion/verification/acceptance; `_` does not itself mean Defer/rejection/adoption/priority/future commitment. Lexical/display order is not priority.

## Activation and Ordinary Continuation

- `_` → `+` requires a current approved basis, satisfied applicable entry conditions, any applicable assessment/decision/authority for active work, and actual selection of that job as current work to begin/resume. Authorization, retained remaining work, dependency readiness, parent activity, or ordering alone do not constitute activation.
- An already-authorized child may be selected/activated without a new user decision when existing authority permits current execution unless another governing rule requires one; an inactive parent must be reactivated before ordinary work may select/continue descendants.
- `+` → `_` applies when current active lifecycle work has ended or been withdrawn from active continuation but justified retention/evaluation/reconsideration value remains; the transition does not cascade to descendants.
- Hook `jobs.activated` is reached after any job validly enters active `+` state, whether by new active-job creation or `_` → `+`. Creating/activating a child reaches the Hook for that child only when it is a new lifecycle entry; structurally re-expressing pre-existing active state/obligation as a `+` child does not reach it. Reactivating an ancestor does not re-fire it for unchanged descendants.
- A parent's active state does not itself activate a child, even when entry conditions are satisfied or it is next in an order. A descendant `+` marker does not require an ancestor marker change; it is simply undiscoverable while any containing parent is inactive.
- For continuation/resumption when the active job is unidentified, inspect top-level `jobs/+*`, then recurse only through discoverable active parents to entry points/`INDEX.md` and marked child jobs as needed. Do not descend through a `_` parent merely because a descendant name/marker may appear relevant.
- `_` units are not active candidates merely by presence. Screen an inactive unit by its own `<purpose>` and retained evaluation/revisit basis; do not scan descendants for possible active work. Defer follows root reassessment; other inactive units require current basis plus applicable entry conditions and assessment/decision before activation.
