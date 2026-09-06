# Jobs Governance Routes

`jobs/` owns non-authoritative active-work control and working material: investigations, comparisons, drafts, preparation, prototypes/spikes, transformation outputs, implementation plans, handoffs, inactive retained inputs, and project-managed verification material.

Evaluate every route independently against the current action. Read every match before that action. Re-evaluate before materially different phases such as job discovery/selection, activation, retained-job update, dependency/control use, decomposition, verification/evidence retention, blocking, completion, retention/disposal, transfer, or adoption.

| Route | Read when | Destination |
|---|---|---|
| Units / Placement | Work may create, classify, place, restructure, or interpret a job unit or its supporting material; determine file vs directory form; or decide whether material belongs inside a job. | `units-placement.md` |
| Discovery / Activation | Work creates/retains a job unit and must choose its lifecycle marker/initial active-vs-inactive state; must discover current/next job state; interpret `+`/`_`; activate/reactivate/deactivate a job; continue/resume a discoverable job; or evaluate inactive-parent gating and `jobs.activated`. | `discovery-activation.md` |
| Entry | Work may create a job unit intended to be active, activate/reactivate `_` → `+`, determine whether a job may enter/resume active lifecycle, or structurally represent a pre-existing active obligation as a retained job unit. | `entry.md` |
| Blocking / Continuation | A discoverable active job may be pending/blocked or has newly become unable to make material progress; work must evaluate/reach `jobs.blocked`, reconcile blocking state, or decide whether/how another job may continue after blocking. | `blocking-continuation.md` |
| Control / Updates / Recursion | Work reads or relies on an existing `INDEX.md`, parent/child relationship, child state, dependency/order, or job control state to select/continue work; a reactivated parent has made descendant control/dependency state newly visible and it must be reconciled before reliance; updates an existing job; decomposes/collapses child jobs; creates/reconciles `INDEX.md`; or coordinates recursive execution. | `control-recursion.md` |
| Working Lifecycle | Work enters or conducts a job investigation/prototype/verification/handoff, or records project-managed execution-specific verification material. | `working-lifecycle.md` |
| Retention / Decision Readiness | Work may retain inactive `_` material; reassess Defer/revisit state; judge a candidate decision-ready; retain/dispose logs/evidence/context; or manage transitional jobs-owned VB. | `retention-decision.md` |
| Completion / Exit / Transfer | Work may judge a job complete; reach `jobs.completed`; remove/retain a completed or superseded job; delete/transfer job material; or adopt/formalize jobs material into another responsibility area. | `completion-transfer.md` |

If a route reveals a project-definition authority/state/VB question, evaluate `definition/.routes/index.md` before continuing. If another responsibility area becomes a source/destination of material, apply root cross-area routing.
