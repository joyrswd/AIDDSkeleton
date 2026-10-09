# Job Exit and Retention Instructions

## Scope

- Applies only when dispatched by `jobs/AGENTS.md` because a job or job-owned material is being evaluated or mutated for completion, active-to-inactive transition, inactive-item reassessment/disposition, retention, post-adoption reconciliation, completed-child return/reconciliation, transfer, deletion, or other exit handling.
- Inherits root governance and `jobs/AGENTS.md`. Follow applicable `definition/AGENTS.md` rules for project-definition responsibilities under root/area routing.
- This file owns detailed job exit, retention, transfer, and disposal semantics for its dispatched scope. It does not redefine marker meaning, discovery, entry, or active execution.

## Area Principles

### Outbound Transfer

| Continuing material | Destination / handling |
|---|---|
| Adopted requirements/design/testing/procedures/decisions/project facts | responsible `definition/` SoT |
| Formal code/tests/tools/support programs | `implementation/` |
| Managed environment config | `implementation/` |
| Supplied originals, or material whose only continuing value is durable non-normative knowledge independent of active/inactive work | `references/` under the entry, identity, retention, and lifecycle rules owned by `references/AGENTS.md` |
| Adopted current-state limits/blockers caused by unresolved work | responsible definition index when needed to describe accepted current state; the unresolved question, candidate resolutions, and non-adopted decision material remain in `jobs/` |

`jobs/` filenames/splits/directories/INDEX do not prescribe destination structure. Integrate adopted semantics into the responsible SoT instead of migrating the working file; authorized adopted facts must not remain only in `jobs/`. Do not transfer unresolved candidate semantics merely to satisfy a downstream authoritative dependency; resolve/adopt them first or leave dependent formalization/formal implementation blocked. Clearly non-authoritative investigation, comparison, and prototypes may still explore unresolved candidates within existing authority.

## Area Operations

### Lifecycle

#### Inactive Retention

- Keep `_` only for plausible continuing evaluation, decision, follow-up, diagnostic, restart, or reconsideration value. Root Defer is one basis, not `_` semantics; retention implies no adoption/requirement/priority/promise.
- File or directory is allowed; no `INDEX.md` required. Use a proportional local entry point (the file itself or, when needed for a directory, a directly identifiable file at that directory root); no filename is prescribed and `README.md` has no jobs-specific semantics. Preserve enough context, provenance/scope, retention/evaluation basis, and reevaluation/restart condition to explain retention.
- Evidence/context gathering being performed now is active work and belongs under `+`; do not use `_` as a quieter state for ongoing work.
- A matching Defer revisit condition surfaces the inactive parent for root reassessment at a useful decision point without descendant inspection/activation. Other `_` units likewise need current basis + applicable assessment/decision before activation.
- Root Defer: Accept now requires applicable authority/adoption before active retained work moves/restructures to `+`; Defer again keeps `_` and refreshes materially changed rationale/revisit condition; Reject deletes unless rationale/provenance has independent continuing value, which is then classified under its responsible area.
- Do not scan all inactive jobs on every task.

#### Retention

- Retain only material with continuing evidential/diagnostic/audit/maintenance/decision/reconsideration value; occurrence/presence of runs, caches, dependencies, logs, generated/disposable output, suggestions, or the fact that a job completed is insufficient.
- Historical execution narrative, completed migration/adoption chronology, or prior verification detail does not by itself justify retaining the completed job unit. When its continuing value is durable non-normative knowledge/evidence independent of active/inactive work, transfer only the needed material to `references/` if it satisfies reference entry/retention rules; otherwise delete it.
- Keep justified support inside its marked owner while it remains `jobs/` responsibility; if no plausible continuing value/evaluation/revisit basis remains, dispose rather than accumulate an indefinite backlog. Do not keep a completed job merely as generic restart context when a future restart would require a fresh approved basis and current-state revalidation anyway.
- `_` keeps evaluation/retention basis discoverable; root Defer also keeps disposition rationale/revisit condition current.
- Never delete `jobs/` material supporting a current verified claim unless remaining/replacement VB is sufficient or the claim is downgraded.
- `jobs/` VB is transitional only for active work, immediate handoff, unresolved reconciliation, or a bounded post-work transition with a specific exit event. Open-ended “keep for now”/“reverify later” is not bounded.
- If the exit event is missed/cancelled/becomes open-ended, or the claim must outlive transitional responsibility without adequate remaining basis: use durable native/external VB, Outbound Transfer only the needed durable material, or downgrade the claim.
- For bounded transition, make the exit event + intended disposition discoverable; no fixed date/ID/metadata/history archive is required. At the event, retire/replace/re-evaluate VB or downgrade.

#### Completion

A job is complete when all hold:
- acceptance basis and required job-local lifecycle work are satisfied;
- required verification is complete;
- no required child outcome remains unresolved; and
- no Blocker, active handoff/reconciliation, or required transitional verification remains.

Before asserting completion, determine which unresolved child outcomes are required from the current acceptance basis and required parent-local lifecycle obligations rather than child existence, marker, prior plan, ordering, or `INDEX.md` listing.

Completion is separate from retention, parent acceptance, broader requirement/AC completion, and external integration/publication.
- Completion closes that job unit's coherent outcome. Expected future recurrence is not remaining work: for periodic synchronization, release, migration, adoption, maintenance, or similar repeated subjects, evaluate completion against the currently selected occurrence/revision/outcome rather than keeping the job open because another future occurrence may arise.
- A later separately authorized update, migration, release, adoption, or other recurrence concerning the same subject is new work unless the original acceptance basis was not actually satisfied and the later work remains required to satisfy it. Do not keep or reactivate one job as a standing container for indefinite future occurrences merely because the subject recurs.

#### Exit Handling

- After adoption, keep only unresolved questions/alternatives/prototypes/feasibility, verification evidence, decision/handoff context, or other remaining `jobs/` responsibility; reference responsible SoTs instead of duplicating adopted specification.
- Candidate artifacts must not appear as active alternate SoTs: delete, mark superseded/historical, transfer durable non-normative value, or explicitly relate to resulting SoT. Reassessed or dispositioned inactive items likewise must reflect material handling and marker changes rather than stale TODOs.
- If active `INDEX.md` exists, reconcile children, remaining work, and links for parent acceptance/retention: reflect completed/adopted outcomes at responsible destinations; leave authorized remaining work represented; handle inactive inputs by their rules; deliberately retain/dispose temporary material. Parent exit does not require synchronizing descendant markers.
- A completed child returns/integrates its outcome through ordinary parent reconciliation within existing authority. Returned-outcome reconciliation is parent lifecycle work and does not keep/return the child to `+`; child completion alone proves no parent completion/acceptance and does not change the parent marker.
- A discoverable job remains `+` only while its own active lifecycle, handoff/reconciliation, or required transitional verification remains. Otherwise remove it, transfer durable material, or restructure justified inactive remainder under `_` after applicable assessment/disposition. A frozen `+` descendant is exempt until discoverable; after ancestor reactivation reconcile newly visible descendant state before relying on it.
- Retained superseded jobs are `_` and record superseded status. Findings awaiting only a user decision on separate follow-up are not active handoff/reconciliation; retain `_` only for continuing evaluation/reconsideration value.
- A completed/superseded `INDEX.md` must not present stale active control: delete it, reduce it to remaining active/handoff context, or retain only independent value clearly no longer presented as active control.
- Before delete/transfer inspect inbound references, unresolved work, child/ancestor relationships, responsible project state, current verified claims, and continuing evidence/maintenance/reconsideration need. This explicit subtree operation is outside ordinary lifecycle discovery and does not require descendant marker changes first.
