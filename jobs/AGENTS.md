# AIDD Jobs Instructions

## General Provisions

### Scope

- Applies to `jobs/` and descendants; inherits root + `definition/AGENTS.md`.

### Responsibility

- Owns non-authoritative working material: investigations, comparisons, drafts, preparation, prototypes/spikes, transformation outputs, implementation plans, handoffs, deferred/observed assessment inputs, and project-managed verification material.
- Conversational clarification need not be retained; keep only when continuing work/handoff/reconsideration value exists.

## Structure and Placement

### Job Units

- One purpose/question/experiment/verification activity/handoff per unit where practical; keep units independently understandable/removable.
- Related lightweight deferred/observed items may share a unit or registry when each item remains independently judgeable/removable; do not create a repository-wide dumping ground.
- Organize by purpose/unit, not fixed artifact-type directories.
- Co-locate needed inputs, dependencies, notes, evidence, reproduction instructions where practical.
- Substantial unit must make discoverable: purpose, approved basis, evaluation/consumption method, and adoption/retention/supersession/promotion/deletion condition.
- Scope only far enough for a coherent decision, comparison, feasibility result, or handoff.
- Do not require SoT-equivalent completeness. Elaborate unresolved detail only when material to decision/coherence/feasibility/unit purpose.
- Use proportional entry point (short note/header/local README/etc.); no heavyweight template for small/obvious units.
- Exploratory code stays inside its unit even when tools generate `src/`, `app/`, `tests/`, `packages/`.

## Lifecycle

### Entry

- Unit basis must be: explicit request, approved decision/init summary, recorded open question, applicable SoT, supplied material, or a Defer/Observe disposition under root Assessment and Feedback; not unapproved assumption alone.
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
- Handoff does not authorize implementation and cannot override instructions/SoTs.

### Deferred / Observed Inputs

- `jobs/` may retain a root-dispositioned Defer/Observe input when it has plausible continuing decision, follow-up, diagnostic, or reconsideration value.
- Retention does not make an item adopted work, a project requirement, a priority, or a promise to implement it.
- Record proportionally enough to reassess later: the observation/proposal, source/provenance when material, current disposition, reason, relevant scope/context, and a revisit condition.
- A revisit condition should be concrete enough to recognize useful timing; it may be a related scope becoming active, prerequisite resolution, recurrence/new evidence, lifecycle event, or another context condition rather than a date.
- When current work materially matches a retained revisit condition, surface the item for root reassessment at a useful decision point; do not silently expand current scope.
- Reassessment outcomes follow root governance:
  - Accept now → obtain any required authority/adoption and route semantics/artifacts to the responsible destination;
  - Defer again → refresh rationale/revisit condition when materially changed;
  - Observe → update evidence/context/revisit condition as useful;
  - Reject → delete unless rationale/provenance has continuing value independent of the rejected change.
- Do not scan or surface every retained item on every task; relevance comes from the current context and revisit condition, not mere presence or age.

### Decision Readiness

A candidate/subset is **decision-ready** when:
- major intent + applicable RBs are coherent enough to judge as a unit;
- remaining questions are separable and not expected to invalidate/materially reshape it.

Decision-ready ≠ implementation-entry complete; details that can be decided consistently after adoption may remain open.

- When decision-ready and adoption/formalization is not already authorized: surface candidate + material basis + remaining open questions using root Decision Requests.
- Do not keep elaborating solely to avoid the adoption decision.
- A coherent decision-ready subset may be adopted independently.
- Unit-level exit condition does not delay independent adoption of a decision-ready subset.

### Promotion

Formal promotion = **classification + integration of semantics**, not file migration.

| Adopted/retained material | Destination |
|---|---|
| requirements/design/testing/procedures/decisions/project facts | responsible `definition/` SoT |
| formal code/tests/tools/support programs | `products/` |
| managed environment config | `etc/` |
| supplied original | `references/` |
| durable non-normative finding/mapping/summary/artifact | `references/` only when continuing value exists |

- `jobs/` filenames/splits/directories do not prescribe formal SoT structure.
- Integrate only adopted semantics into the responsible destination; authorized adopted facts must not remain only in `jobs/`.
- Formal open question/decision point/blocking effect goes in `definition/` when required, without copying surrounding investigation.
- Deferred/observed non-adopted work does not move to `definition/` merely to preserve it; reassessment and applicable adoption/authority must occur first.

### Retention

- Do not retain runs, caches, dependencies, logs, generated/disposable output, or suggestions merely because they occurred or are present; keep only when continuing evidential/diagnostic/audit/maintenance/decision/reconsideration value justifies project retention.
- For retained Defer/Observe items, keep disposition/rationale/revisit condition discoverable enough to know why the item still exists and when it is worth reassessing.
- If no plausible continuing value or revisit condition remains, dispose rather than accumulating an indefinite backlog.
- Never delete `jobs/` material while a current verified claim materially depends on it unless remaining/replacement VB is sufficient or the claim is downgraded.
- `jobs/` VB is transitional only under the conditions defined in `definition/AGENTS.md` (active work, handoff/reconciliation, or bounded post-work transition).

### Exit

- After adoption, reduce active unit to unresolved questions/alternatives/prototypes/feasibility, verification evidence, decision/handoff context, or other remaining `jobs/` responsibility.
- Residual work depending on adopted semantics references the responsible SoT instead of retaining duplicate candidate specification.
- Candidate artifacts must not look like active alternate SoT: delete, mark superseded/historical, promote durable non-normative value, or explicitly relate them to resulting SoT.
- Reassessed deferred/observed items must reflect the new disposition; do not leave stale TODO-like state after Accept/Reject or a materially changed revisit condition.
- After unit purpose is served: delete; promote durable reference; retain only for unresolved work/handoff/reconciliation/valid transitional VB/continuing deferred-observed value; or mark superseded.
- Before delete/promotion inspect inbound references, unresolved work, traceability, current verified claims, continuing evidence/maintenance/reconsideration need.

## Local Governance

### Adoption Authority

- `jobs/` material has no adoption/formalization authority by presence, retention, revisit-trigger match, or decision-readiness; adoption requires applicable authority under root and `definition/` governance.
