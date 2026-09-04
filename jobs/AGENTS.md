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
- Prefer one purpose/question/experiment/verification activity/handoff per job unit and keep units independently understandable/removable. A unit may be a single file or purpose directory; use proportional structure/entry point and no control document solely for uniformity.
- Related lightweight inactive items may share a unit or registry only when each remains independently judgeable/removable; do not create a repository-wide dumping ground.
- Organize by purpose/job unit, not fixed artifact-type directories. Co-locate needed inputs, dependencies, notes, evidence, reproduction instructions where practical; handoffs, future plans, logs, evidence, prototypes, drafts, and similar material stay inside the owning unit unless they are themselves the complete small unit.
- A substantial unit must make discoverable: purpose, approved basis or retention/disposition basis, evaluation/consumption method when applicable, and adoption/retention/supersession/promotion/deletion condition.
- Scope only far enough for a coherent decision, comparison, feasibility result, execution/handoff need, or verification purpose. Do not require SoT-equivalent completeness; elaborate unresolved detail only when material to the job purpose.
- Exploratory code stays inside its job unit even when tools generate `src/`, `app/`, `tests/`, `packages/`.

### Lifecycle Discovery

- Every retained top-level job unit uses one marker, whether file or directory; top-level `jobs/AGENTS.md` is exempt:
  - `+<purpose>` = authorized work that remains active in the `jobs/` lifecycle, including executing, pending, blocked, handoff/reconciliation, or required transitional verification work;
  - `_<purpose>` = retained but inactive material for later evaluation/reconsideration, including a root-dispositioned Defer input, not-yet-activated future work, or dormant handoff/restart context.
- Do not create unmarked retained top-level job units. Choose `<purpose>` clear enough for first-pass relevance screening; supporting material stays inside the owning marked unit.
- Markers describe jobs lifecycle only. `+` does not grant authority, set priority, prove completion/verification, or encode Change Unit state; `_` does not by itself mean Defer, rejection, adoption, priority, or future commitment. Lexical/display order is not priority.
- `_` → `+` requires a current approved basis and any applicable assessment, decision, or authority for active work; a Defer revisit match alone is insufficient. `+` → `_` applies when current active lifecycle work ends but justified retention/evaluation/reconsideration value remains; preserve the required disposition/evaluation basis.
- A blocked/pending Change Unit remains under `+` while its job remains active. Current-claim-dependent transitional VB also remains `+` while preservation, replacement, reconciliation, or claim-downgrade is an active obligation, even when implementation work is complete.
- When an active job has `INDEX.md`, Change Unit state belongs there; do not repeatedly rename unit files/directories to encode state. Keep identifiers/material paths stable where practical, and do not create an index solely for transient state.
- For continuation/resumption when the active job is unidentified, inspect `jobs/+*`, then its entry point/`INDEX.md`, and match approved basis to the request; unrelated `+` units are not scope.
- `_` units are not active candidates merely by presence. Screen by `<purpose>` first, then inspect retained evaluation/revisit basis only for plausible matches; Defer follows root reassessment, and other inactive units need current basis plus applicable assessment/decision before activation.

### Existing Job Updates

- Updating a retained job reconciles working material/control state for its existing purpose and basis; permission to update it does not authorize a new purpose, material scope/AC/RB/design or priority change, or current-work commitment.
- Refine, correct, reorder, or re-split when the resulting work remains required by existing approved basis/scope/AC or root Permission / Scope otherwise permits it now. Do not absorb an independently completable improvement, future opportunity, or adjacent follow-up merely because it was discovered during the update.
- If the pre-existing approved basis can still be satisfied without a discovered item, treat that item as separate assessment input unless current authority independently makes it part of the job. Apply root Assessment and Feedback; retain separate follow-up only when continuing value justifies retention.
- Do not create/enlarge retained job content merely to record every suggestion, observation, or possible improvement; discovery or apparent validity alone neither joins it to the job nor requires repository retention.
- The actor updating a job re-evaluates and reconciles its top-level lifecycle marker to the resulting current state. This maintains represented state within existing authority; it does not authorize activation or continued activity.
- Content mutation, recency, metadata/evidence refresh, or newly retained context does not itself activate, deactivate, or reopen a job. Apply Lifecycle Discovery transition conditions; do not preserve `+` merely because a job was recently changed.

### Active Work Control

- Use `+<purpose>/INDEX.md` only when authorized repository-modification work needs repository-retained decomposition/progress for continuation, handoff, or cross-session coordination. This rule is independent of Change Unit count; single- or multi-unit work completing without retained active control needs no index.
- If that need arises after work starts, create the index then and reconcile current Change Units, state, and material links before relying on repository state for continuation.
- `INDEX.md` is the job's non-authoritative active control state. Keep proportionally discoverable: purpose/approved basis; constituent Change Units and their scope/AC basis; order/dependencies; state sufficient to distinguish active/complete/blocked/remaining; material working/evidence links; and job-level exit/promotion/retention/disposal conditions.
- Exact unit identifiers, status vocabulary, table/layout are local choices. Account for meaningful outcomes/Change Units, not reads, searches, edits, commands, test invocations, or other low-level operations.
- Once `INDEX.md` exists, constituent Change Unit execution starts from it. Before a newly accepted/re-split unit begins, update decomposition; newly discovered work follows root Permission / Scope and Assessment and Feedback and must not become an unapproved backlog.
- `INDEX.md` grants no implementation/adoption/priority authority and does not make retained material committed work. Keep it current enough for resumption without conversational memory; a separate handoff is optional when the index plus linked material is sufficient.

## Lifecycle

### Entry

- Job basis must be an explicit request, approved decision/init summary, recorded open question, applicable SoT, supplied material, or root-permitted retention/disposition basis; never unapproved assumption alone.
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
- Current continuation stays in the owning `+` job; restart-only future context uses `_` without thereby becoming Defer. With an active `INDEX.md`, keep decomposition/progress there and use separate handoff only for context that does not fit cleanly.

### Inactive Retention

- Retain `_<purpose>` only for plausible continuing evaluation, decision, follow-up, diagnostic, restart, or reconsideration value. Root Defer is one possible basis, not the definition of `_`; retention does not make work adopted, required, prioritized, a Change Unit, or promised.
- An inactive unit may be a file or directory and needs no `INDEX.md`; use a proportional entry point. Preserve enough retained input/context, material provenance/scope, retention/evaluation basis, and useful reevaluation/restart condition to understand why it remains.
- Authorized evidence/context gathering happening now is active work and belongs under `+`; do not use `_` as a quieter state for ongoing work.
- When current work materially matches a retained Defer revisit condition, surface it for root reassessment at a useful decision point; do not silently add it to current scope/`INDEX.md`. Other `_` units likewise require current basis and applicable assessment/decision before activation.
- Root Defer reassessment follows root governance: Accept now requires applicable authority/adoption before active retained work moves/restructures to `+`; Defer again keeps `_` and refreshes materially changed rationale/revisit condition; Reject deletes unless rationale/provenance has independent continuing value, which is then classified under its responsible area.
- Do not scan every inactive item on every task; Lifecycle Discovery relevance screening applies.

### Decision Readiness

A candidate/subset is **decision-ready** when:
- major intent + applicable RBs are coherent enough to judge as a unit;
- remaining questions are separable and not expected to invalidate/materially reshape it.

Decision-ready ≠ implementation-entry complete; details that can be decided consistently after adoption may remain open.

- When decision-ready and adoption/formalization is not already authorized, surface candidate + material basis + remaining open questions using root Decision Requests; do not keep elaborating solely to avoid the decision.
- A coherent decision-ready subset may be adopted independently; job-level exit does not delay that adoption.

### Promotion

Formal promotion = **classification + integration of semantics**, not file migration.

Destinations:
- adopted requirements/design/testing/procedures/decisions/project facts → responsible `definition/` SoT;
- formal code/tests/tools/support programs → `products/`;
- managed environment config → `etc/`;
- supplied original or durable non-normative finding/mapping/summary/artifact with continuing value → `references/`.

- `jobs/` filenames/splits/directories/INDEX structure do not prescribe formal destination structure. Integrate only adopted semantics; authorized adopted facts must not remain only in `jobs/`.
- Formal open question/decision point/blocking effect goes in `definition/` when required, without copying surrounding investigation. Inactive non-adopted work does not move there merely for preservation; applicable assessment/adoption/authority comes first.

### Retention

- Do not retain runs, caches, dependencies, logs, generated/disposable output, or suggestions merely because they occurred; keep only material with continuing evidential/diagnostic/audit/maintenance/decision/reconsideration value.
- Durable non-normative knowledge whose continuing value is independent of active/inactive work → `references/`; otherwise keep justified material inside its marked job. If no plausible continuing value/evaluation/revisit basis remains, dispose rather than build an indefinite backlog.
- For `_`, keep the evaluation/retention basis discoverable; root Defer additionally keeps its disposition rationale/revisit condition current.
- Never delete `jobs/` material while a current verified claim materially depends on it unless remaining/replacement VB is sufficient or the claim is downgraded. `jobs/` VB is transitional only during active work, handoff/reconciliation, or bounded post-work transition as defined in `definition/AGENTS.md`.

### Exit

- After adoption, reduce a job to unresolved questions/alternatives/prototypes/feasibility, verification evidence, decision/handoff context, or other remaining `jobs/` responsibility; residual work references responsible SoTs instead of duplicating adopted candidate specification.
- Candidate artifacts must not look like active alternate SoT: delete, mark superseded/historical, promote durable non-normative value, or explicitly relate them to the resulting SoT. Reassessed/dispositioned inactive items must likewise reflect material handling/marker changes rather than stale TODO state.
- If active `INDEX.md` exists, exit requires reconciling Change Units and linked material: reflect completed/adopted outcomes in responsible destinations; leave remaining authorized work explicitly active/handoff; handle inactive retained inputs by their rules; deliberately retain/dispose temporary material.
- Keep `+` while handoff/reconciliation/transitional verification remains active even after implementation units complete; otherwise do not leave `+` with no active lifecycle work. Remove the job, promote/retain durable material under its responsible area, or move/restructure justified inactive remainder under `_` after applicable assessment/disposition.
- Do not leave a completed/superseded `INDEX.md` presenting stale active work; delete it with the job, reduce it to remaining active/handoff context, or retain it only for independent continuing value clearly no longer presented as active control state.
- Before delete/promotion inspect inbound references, unresolved work, traceability, current verified claims, and continuing evidence/maintenance/reconsideration need.

## Local Governance

### Adoption Authority

- `jobs/` material, lifecycle markers, and `INDEX.md` gain no adoption/formalization authority from presence, retention, active/completed status, inactive retention, revisit-trigger match, or decision-readiness; adoption requires applicable root + `definition/` authority.
