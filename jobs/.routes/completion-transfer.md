# Jobs Completion, Exit, and Transfer

## Exit and Completion

- After adoption, reduce a job to unresolved questions/alternatives/prototypes/feasibility, verification evidence, decision/handoff context, or other remaining jobs responsibility; residual work references responsible SoTs instead of duplicating adopted candidate specification.
- Candidate artifacts must not look like active alternate SoT: delete, mark superseded/historical, transfer durable non-normative value, or explicitly relate them to resulting SoT. Reassessed/dispositioned inactive items likewise reflect material handling/marker changes rather than stale TODO state.
- If active `INDEX.md` exists, exit requires reconciling child jobs, remaining work, and linked material as needed for parent's own acceptance/retention decision: reflect completed/adopted outcomes in responsible destinations; leave remaining authorized work represented; handle inactive retained inputs; deliberately retain/dispose temporary material. Parent exit does not require synchronizing descendant markers.
- A job is complete when its acceptance basis and required job-local lifecycle work are satisfied, required verification is complete, no required child outcome remains unresolved, and no Blocker, active handoff/reconciliation, or required transitional verification work remains. Completion is distinct from retention, parent acceptance, broader requirement/AC completion, or external integration/publication.
- Hook `jobs.completed` is reached when an active job newly satisfies that completion condition, before final handling removes it from active `+`. The Hook does not make job complete or replace required exit/reconciliation; after Consumer Hook processing, re-evaluate completed job and affected parent control/acceptance state without cascading marker changes.
- For a child job, `jobs.completed` may return/integrate child outcome and resume parent reconciliation within already-authorized scope. Once child independently satisfies completion, reconciliation against parent dependencies/acceptance is parent lifecycle work and does not keep/return completed child to `+`; Hook execution/child completion alone does not prove parent completion/acceptance or change parent marker.
- Keep `+` while this job's own active lifecycle, handoff/reconciliation, or required transitional verification remains active. For a discoverable job, if none remains, do not leave it `+` solely because retained context/descendant markers exist: remove it, transfer durable material, or move/restructure justified inactive remainder under `_` after applicable assessment/disposition.
- A descendant frozen by an inactive ancestor is exempt from stale-`+` check until discoverable again; ancestor gating alone does not change its marker. Descendant markers do not by themselves require this job to stay `+`.
- A retained superseded job is an inactive remainder: keep it `_` and record superseded status rather than leaving it unmarked/`+`.
- Findings from completed current work awaiting only user decision on separate follow-up do not by themselves constitute active handoff/reconciliation or justify keeping `+`; retain under `_` only when continuing evaluation/reconsideration value justifies retention.
- Do not leave a completed/superseded `INDEX.md` presenting stale active work; delete it with job, reduce it to remaining active/handoff context, or retain only for independent continuing value clearly no longer presented as active control state.
- Before delete/transfer inspect inbound references, unresolved work, child/ancestor relationships, responsible project state, current verified claims, and continuing evidence/maintenance/reconsideration need. This explicit subtree operation is not ordinary lifecycle discovery and does not require changing descendant markers first.

## Outbound Transfer

Before transferring, evaluate the destination area's route index:

- Adopted requirements/design/testing/procedures/decisions/project facts → responsible `definition/` SoT.
- Formal code/tests/tools/support programs → `products/`.
- Managed environment config → `etc/`.
- Supplied originals, and material whose only continuing value is durable non-normative knowledge independent of active/inactive work → `references/`.
- Formal open questions/decision points/blocking effects → `definition/` when required. Inactive non-adopted work does not transfer there merely for preservation; applicable assessment/adoption/authority comes first.
- Jobs filenames/splits/directories/`INDEX.md` structure do not prescribe destination structure. Integrate adopted semantics into responsible SoT rather than migrating working file, and do not leave authorized adopted facts only in `jobs/`.

## Adoption Authority

- Jobs material, lifecycle markers, and `INDEX.md` gain no adoption/formalization authority from presence, retention, active/completed status, inactive retention, revisit-trigger match, or decision-readiness; adoption requires applicable root + destination-area authority.
