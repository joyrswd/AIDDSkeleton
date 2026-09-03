# AIDD Jobs Instructions

## General Provisions

### Scope

- Applies to `jobs/` and descendants; inherits root + `definition/AGENTS.md`.

### Responsibility

- Owns non-authoritative active-work control and working material: investigations, comparisons, drafts, preparation, prototypes/spikes, transformation outputs, implementation plans, handoffs, inactive retained inputs, and project-managed verification material.
- Conversational clarification need not be retained; keep only when continuing work/handoff/reconsideration value exists.

## Structure and Placement

### Job Units

- A **job unit** is a purpose-oriented working-material container under `jobs/`; it is distinct from the root **Change Unit**, which is an execution/review/acceptance boundary. One job unit may contain one or several Change Units.
- One purpose/question/experiment/verification activity/handoff per job unit where practical; keep job units independently understandable/removable.
- A job unit may be a single file or a purpose directory. Do not create a directory or control document solely for uniformity.
- Related lightweight inactive retained items may share a job unit or registry when each item remains independently judgeable/removable; do not create a repository-wide dumping ground.
- Organize by purpose/job unit, not fixed artifact-type directories.
- Co-locate needed inputs, dependencies, notes, evidence, reproduction instructions where practical.
- Handoffs, future plans, logs, evidence, prototypes, drafts, and similar material are content of a job unit, not independent lifecycle categories. Keep such material inside the owning job unit unless the material itself is the complete small job unit.
- A substantial job unit must make discoverable: purpose, approved basis or retention/disposition basis, evaluation/consumption method when applicable, and adoption/retention/supersession/promotion/deletion condition.
- Scope only far enough for a coherent decision, comparison, feasibility result, execution/handoff need, or verification purpose.
- Do not require SoT-equivalent completeness. Elaborate unresolved detail only when material to decision/coherence/feasibility/job purpose.
- Use proportional entry point for small/obvious units; no heavyweight template solely for uniformity.
- Exploratory code stays inside its job unit even when tools generate `src/`, `app/`, `tests/`, `packages/`.

### Lifecycle Discovery

- Every retained top-level job unit uses one lifecycle marker:
  - `+<purpose>` = authorized work that remains active in the `jobs/` lifecycle, including currently executing, pending, blocked, handoff/reconciliation, or required transitional verification work;
  - `_<purpose>` = retained but inactive job material. It may include a root-dispositioned Defer input, a not-yet-activated future plan, dormant handoff/restart context, or other material retained for later evaluation or reconsideration.
- The marker applies whether the job unit is a single file or a directory. The top-level `jobs/AGENTS.md` governance file is not a job unit and is exempt.
- Choose `<purpose>` so the job's subject or responsibility is identifiable enough for first-pass relevance screening; do not rely on an opaque generic name that requires opening the unit to know what it concerns.
- Do not create unmarked retained top-level job units. Supporting handoffs, future plans, logs, evidence, prototypes, drafts, and similar material belong inside the owning `+` or `_` job unit.
- These markers describe current jobs lifecycle only. `+` does not grant authority, set priority, prove completion/verification, or describe a Change Unit's state. `_` does not by itself mean Defer, rejection, adoption, priority, or future commitment. Their lexical/display order must not be interpreted as priority.
- Lifecycle movement is bidirectional when justified by current state:
  - `_` → `+` only when the unit has a current approved basis and any required assessment, decision, or authority permits active work. A Defer revisit-condition match alone is insufficient; root reassessment and required authority come first.
  - `+` → `_` when current active lifecycle work has ended or been withdrawn from active continuation, but the unit still has justified retention/evaluation/reconsideration value. Record any required disposition or future evaluation basis before relying on it as inactive retained work.
- A blocked or pending Change Unit remains under `+` while its enclosing job remains active. If the job itself is no longer active and only later evaluation/reconsideration remains, move/restructure it under `_` after any required assessment/disposition.
- Current-claim-dependent transitional VB remains under `+` while preservation, replacement, reconciliation, or claim-downgrade is still an active lifecycle obligation, even when implementation work is otherwise complete. It is not `_` merely because no code change is executing.
- When an active job has `INDEX.md`, Change Unit state belongs there; do not encode `pending`/`active`/`blocked`/`done` by repeatedly renaming Change Unit files/directories. Work that needs no retained active control need not create an index solely to store transient unit state. Keep unit identifiers/material paths stable where practical.
- For a continuation/resumption request when the relevant active job is not already identified, inspect `jobs/+*` as the discovery entry point, then read the job entry point/`INDEX.md` and match its approved basis to the request. Do not treat unrelated `+` units as scope merely because they exist.
- `_` units are not active-task candidates merely by presence. Use the `<purpose>` portion of top-level `_<purpose>` names as the first discovery screen against the current request, evidence, or affected responsibility; only then inspect the retained evaluation/revisit basis of plausible matches. Root-dispositioned Defer items then follow their revisit conditions and reassessment rules; other inactive units require a current request/basis and any applicable assessment or decision before activation.

### Active Work Control

- Use `+<purpose>/INDEX.md` when authorized repository-modification work needs repository-retained decomposition/progress for continuation, handoff, or coordination across sessions. Multiple Change Units alone do not require an index when the work completes in one session without retained active control.
- Single-Change-Unit work follows the same rule: use `INDEX.md` only when its active control must persist for continuation or handoff. Do not create an index solely because work has been decomposed into one or several Change Units.
- If work starts without `INDEX.md` but later requires repository-retained continuation, handoff, or coordination, create `+<purpose>/INDEX.md` at that point and reconcile the current Change Units, state, and material links before relying on repository state for continuation.
- `INDEX.md` is the active control state for that job. Keep proportionally discoverable:
  - purpose and approved basis;
  - constituent Change Units and the approved scope/AC basis each serves;
  - required order/dependencies;
  - each Change Unit's current state, sufficient to distinguish what is active, complete, blocked, or remaining;
  - material working/evidence links needed to continue;
  - job-level exit, promotion, retention, or disposal conditions.
- Exact Change Unit identifiers, status vocabulary, and table/layout are local choices; the state must be clear enough to know what may begin, what has finished, and what remains.
- After an active-job `INDEX.md` exists, constituent Change Unit execution starts from that index. Before a newly accepted/re-split unit begins, update the decomposition so meaningful active work is not carried only in conversation or an unrelated file.
- Account for meaningful outcomes/Change Units, not low-level operations such as individual reads, searches, edits, commands, or test invocations inside a unit.
- Newly discovered work follows root Permission / Scope and Assessment and Feedback. If accepted into the active decomposition, add/re-split/reorder the index before that work begins; otherwise do not turn the index into an unapproved backlog.
- `INDEX.md` is non-authoritative working state. It does not grant implementation authority, adopt requirements/design/testing, set user-owned priority, or make a retained item committed work.
- Keep the index current enough to resume across sessions without relying on conversational memory. A separate handoff is optional when the index plus linked material already carries the necessary context.

## Lifecycle

### Entry

- Job unit basis must be: explicit request, approved decision/init summary, recorded open question, applicable SoT, supplied material, or a retention/disposition basis permitted by root governance; not unapproved assumption alone.
- Investigation for requirements/design may precede corresponding formal doc when another approved basis exists.
- Supplied material also follows `references/AGENTS.md`.

### Investigation

- State question/claim/hypothesis + evaluation method/evidence.
- Reference SoTs; distinguish approved decisions from suggestions/assumptions.
- Proposed SoT change: use current SoT as basis + proposed delta/decision context. Create full candidate view only when needed for coherent evaluation; mark clearly non-authoritative.

### Prototype

- Prototype conclusions are limited to exercised scope; prototype ≠ formal quality/security/performance/maintainability/completion/acceptance.

### Verification

- Verification ≠ mandatory evidence file. Use native/external output or proportional `jobs/` retention as needed for the claim/VB lifecycle.
- Retained execution-specific verification material records proportionally: actual target/state, environment/conditions, method/commands when material, result, directly verified scope, material unverified scope.

### Handoff

- Handoff may package authorized scope/exclusions, completion conditions, blockers, decisions, assumptions, open questions, order, working context.
- A handoff that carries current continuation remains inside the owning `+` job. If it is retained only as possible future restart context, the owning job uses `_`; this inactive marker does not by itself classify the handoff as Defer.
- For an active job with `INDEX.md`, prefer keeping decomposition/progress in the index; use a separate handoff only for context that does not fit the control state cleanly.
- Handoff does not authorize implementation and cannot override instructions/SoTs.

### Inactive Retention

- `jobs/` may retain inactive material under `_<purpose>` when it has plausible continuing evaluation, decision, follow-up, diagnostic, restart, or reconsideration value. A root-dispositioned Defer input is one such case, not the definition of `_` itself.
- An inactive unit may be a single file or a directory. `INDEX.md` is not required for inactive retention; use a proportional local entry point such as the file itself or a local `README.md` when a directory needs one.
- Retention does not make an item adopted work, a project requirement, a priority, a Change Unit, or a promise to implement it.
- Record proportionally enough to understand why the unit remains: the retained input/context, source/provenance when material, relevant scope, retention/evaluation basis, and the condition or request under which reevaluation/restart would be useful when applicable. A root Defer item additionally follows root Defer disposition and revisit-condition requirements.
- When current work materially matches a retained Defer revisit condition, surface the item for root reassessment at a useful decision point; do not silently expand current scope or add it to an active `INDEX.md`. Other `_` units likewise require a current request/basis and any applicable assessment/decision before activation.
- Evidence/context gathering that is authorized to happen now is active work and belongs under `+`; do not use `_` merely as a quieter state for ongoing investigation.
- `_` → `+` activation requires a current approved basis and applicable authority. For a Defer input, reassess under root governance before activation; for material not yet dispositioned, perform the applicable assessment/decision rather than treating retention as approval.
- `+` → `_` deactivation is allowed when current active lifecycle work no longer continues but retention remains justified. Preserve enough basis to know why it is inactive and what could make reevaluation useful; when the reason is root Defer, record/refresh that disposition and revisit condition.
- Reassessment of a root Defer input follows root governance:
  - Accept now → obtain any required authority/adoption; if repository work becomes active and retained, move/restructure it under `+` and create/update `INDEX.md` when Active Work Control requires it;
  - Defer again → retain `_` and refresh rationale/revisit condition when materially changed;
  - Reject → delete unless rationale/provenance has continuing value independent of the rejected change, in which case classify that continuing value under the responsible area rather than retaining the rejected input as an active candidate.
- Do not scan or surface every inactive retained item on every task. Use top-level `_<purpose>` names for first-pass relevance screening as defined in Lifecycle Discovery, then inspect recorded evaluation/revisit basis only for plausible matches; mere presence or age is not relevance.

### Decision Readiness

A candidate/subset is **decision-ready** when:
- major intent + applicable RBs are coherent enough to judge as a unit;
- remaining questions are separable and not expected to invalidate/materially reshape it.

Decision-ready ≠ implementation-entry complete; details that can be decided consistently after adoption may remain open.

- When decision-ready and adoption/formalization is not already authorized: surface candidate + material basis + remaining open questions using root Decision Requests.
- Do not keep elaborating solely to avoid the adoption decision.
- A coherent decision-ready subset may be adopted independently.
- Job-level exit condition does not delay independent adoption of a decision-ready subset.

### Promotion

Formal promotion = **classification + integration of semantics**, not file migration.

- Adopted requirements/design/testing/procedures/decisions/project facts → responsible `definition/` SoT.
- Formal code/tests/tools/support programs → `products/`.
- Managed environment config → `etc/`.
- Supplied original → `references/`.
- Durable non-normative finding/mapping/summary/artifact → `references/`; only when continuing value exists.

- `jobs/` filenames/splits/directories/INDEX structure do not prescribe formal SoT structure.
- Integrate only adopted semantics into the responsible destination; authorized adopted facts must not remain only in `jobs/`.
- Formal open question/decision point/blocking effect goes in `definition/` when required, without copying surrounding investigation.
- Inactive non-adopted work does not move to `definition/` merely to preserve it; applicable assessment/adoption/authority must occur first.

### Retention

- Do not retain runs, caches, dependencies, logs, generated/disposable output, or suggestions merely because they occurred or are present; keep only when continuing evidential/diagnostic/audit/maintenance/decision/reconsideration value justifies project retention.
- Supporting material whose only continuing value is durable non-normative knowledge independent of active/inactive work → `references/`; otherwise retain it inside the owning marked job unit.
- For `_` units, keep the retention/evaluation basis discoverable enough to know why the unit still exists and what could make it useful again. Root Defer items additionally keep their disposition rationale/revisit condition current.
- If no plausible continuing value or future evaluation/revisit basis remains, dispose rather than accumulating an indefinite backlog.
- Never delete `jobs/` material while a current verified claim materially depends on it unless remaining/replacement VB is sufficient or the claim is downgraded.
- `jobs/` VB is transitional only under the conditions defined in `definition/AGENTS.md` (active work, handoff/reconciliation, or bounded post-work transition).

### Exit

- After adoption, reduce active job unit to unresolved questions/alternatives/prototypes/feasibility, verification evidence, decision/handoff context, or other remaining `jobs/` responsibility.
- Residual work depending on adopted semantics references the responsible SoT instead of retaining duplicate candidate specification.
- Candidate artifacts must not look like active alternate SoT: delete, mark superseded/historical, promote durable non-normative value, or explicitly relate them to resulting SoT.
- Reassessed/dispositioned inactive items must reflect material handling changes in retained metadata and lifecycle marker; do not leave stale TODO-like state after activation, Reject, or a materially changed disposition.
- If an active-job `INDEX.md` exists, job exit requires reconciling the recorded Change Units and linked material: completed/adopted outcomes are reflected in responsible destinations, remaining authorized work stays explicitly active/handoff, inactive retained inputs follow their retention/disposition rules, and temporary material is retained/disposed deliberately.
- A job remains `+` while required handoff/reconciliation/transitional verification is still active even if its implementation Change Units are complete; those lifecycle obligations do not create a third top-level state.
- Do not leave `+` on a job with no active lifecycle work. When the active purpose and required transition work are served, remove the job, promote/retain any durable material under its responsible area, or move/restructure a justified inactive remainder under `_` after any required assessment/disposition.
- Do not leave a completed or superseded `INDEX.md` presenting stale work as active. After job purpose is served: delete it with the job, reduce it to still-active/handoff context, or retain only when it has independent continuing value and is clearly no longer active control state.
- After job purpose is served: delete; promote durable reference; retain only for unresolved active work/handoff/reconciliation/valid transitional VB or justified inactive evaluation/reconsideration value; or mark superseded.
- Before delete/promotion inspect inbound references, unresolved work, traceability, current verified claims, continuing evidence/maintenance/reconsideration need.

## Local Governance

### Adoption Authority

- `jobs/` material, including lifecycle markers and `INDEX.md`, has no adoption/formalization authority by presence, retention, active/completed status, inactive retention, revisit-trigger match, or decision-readiness; adoption requires applicable authority under root and `definition/` governance.
