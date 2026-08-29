# AIDD Workbench Instructions

## General Provisions

### Scope

- Applies to `workbench/` and descendants; inherits root + `plans/AGENTS.md`.

### Responsibility

- Owns non-authoritative working material: investigations, comparisons, drafts, preparation, prototypes/spikes, transformation outputs, implementation plans, handoffs, and project-managed verification material.
- Not SoT, formal implementation, managed environment config, or durable reference storage.
- Conversational clarification need not be retained; keep only when continuing work/handoff value exists.

## Structure and Placement

### Workbench Units

- One purpose/question/experiment/verification activity/handoff per unit where practical; keep units independently understandable/removable.
- Organize by purpose/unit, not fixed artifact-type directories.
- Co-locate needed inputs, dependencies, notes, evidence, reproduction instructions where practical.
- Substantial unit must make discoverable: purpose, approved basis, evaluation/consumption method, and adoption/retention/supersession/promotion/deletion condition.
- Scope only far enough for a coherent decision, comparison, feasibility result, or handoff.
- Do not require SoT-equivalent completeness. Elaborate unresolved detail only when material to decision/coherence/feasibility/unit purpose.
- Use proportional entry point (short note/header/local README/etc.); no heavyweight template for small/obvious units.
- Exploratory code stays inside its unit even when tools generate `src/`, `app/`, `tests/`, `packages/`.
- Do not use workbench as permanent substitute for `plans/`, `products/`, `etc/`, `references/`.
- Do not track disposable cache/dependency/log/generated output without continuing working/evidential value.

## Lifecycle

### Entry

- Unit basis must be: explicit request, approved decision/init summary, recorded open question, applicable SoT, or supplied material; not unapproved assumption alone.
- Investigation for requirements/design may precede corresponding formal doc when another approved basis exists.
- Supplied material also follows `references/AGENTS.md`.

### Investigation

- State question/claim/hypothesis + evaluation method/evidence.
- Reference SoTs; distinguish approved decisions from suggestions/assumptions.
- Proposed SoT change: use current SoT as basis + proposed delta/decision context. Create full candidate view only when needed for coherent evaluation; mark clearly non-authoritative.

### Prototype

- Prototype conclusions are limited to exercised scope; prototype ≠ formal quality/security/performance/maintainability/completion/acceptance.

### Verification

- Verification ≠ mandatory evidence file. Use native/external output or proportional workbench retention as needed for the claim/VB lifecycle.
- Retained execution-specific verification material records proportionally: actual target/state, environment/conditions, method/commands when material, result, directly verified scope, material unverified scope.
- Stable target identity and evidence-scope rules are owned by `plans/AGENTS.md`; do not restate weaker alternatives here.

### Handoff

- Handoff may package authorized scope/exclusions, completion conditions, blockers, decisions, assumptions, open questions, order, working context.
- Handoff does not authorize implementation and cannot override instructions/SoTs.

### Decision Readiness

A candidate/subset is **decision-ready** when:
- major intent + applicable RBs are coherent enough to judge as a unit;
- remaining questions are separable and not expected to invalidate/materially reshape it.

Decision-ready ≠ implementation-entry complete; details that can be decided consistently after adoption may remain open.

- When decision-ready and adoption/formalization is not already authorized: surface candidate + material basis + remaining open questions using root Decision Requests.
- Do not keep elaborating solely to avoid the adoption decision.
- A coherent decision-ready subset may be adopted independently.
- Integrate only adopted semantics into responsible `plans/` SoTs.
- After integration, do not keep the same semantics as active candidate content merely because other questions remain.
- Unit-level exit condition does not delay independent adoption of a decision-ready subset.

### Promotion

Formal promotion = **classification + integration of semantics**, not file migration.

| Adopted/retained material | Destination |
|---|---|
| requirements/design/testing/procedures/decisions/project facts | responsible `plans/` SoT |
| formal code/tests/tools/support programs | `products/` |
| managed environment config | `etc/` |
| supplied original | `references/` |
| durable non-normative finding/mapping/summary/artifact | `references/` only when continuing value exists |

- Workbench filenames/splits/directories do not prescribe formal SoT structure.
- If an adopted fact is within authorized formalization scope, update responsible SoT; do not leave it only in workbench.
- After adoption, reduce active unit to unresolved questions/alternatives/prototypes/feasibility or verification evidence/decision or handoff context/other remaining workbench responsibility.
- Residual work depending on adopted semantics references SoT instead of retaining duplicate candidate spec.
- Formal open question/decision point/blocking effect goes in `plans/` when required, without copying surrounding investigation.
- Complete normative detail in `plans/` when authorized. Return to workbench only when investigation/comparison/prototyping/feasibility/verification/handoff work is still needed.
- Processing supplied material: preserve original in `references/`; copy only needed material into workbench.

### Retention

- Do not retain a run merely because it occurred. After claim/handoff needs: delete disposable output or leave in native system unless continuing evidential/diagnostic/audit/maintenance value justifies project retention.
- Never delete workbench material while a current verified claim materially depends on it unless remaining/replacement VB is sufficient or the claim is downgraded.
- Workbench VB is transitional only under the conditions defined in `plans/AGENTS.md` (active work, handoff/reconciliation, or bounded post-work transition).
- Do not redefine bounded-transition/durable-VB rules here; follow `plans/AGENTS.md`.
- After adoption, candidate artifacts must not look like active alternate SoT: delete, mark superseded/historical, promote durable non-normative value, or explicitly relate them to resulting SoT.

### Exit

- After unit purpose is served: delete; promote durable reference; retain only for unresolved work/handoff/reconciliation/valid transitional VB; or mark superseded.
- Before delete/promotion inspect inbound references, unresolved work, traceability, current verified claims, continuing evidence/maintenance need.

## Local Governance

### Authority

- If decision-ready but adoption/formalization authority is missing, request the decision/authority; do not treat result as adopted.
- Workbench presence ≠ adoption/completion. Verification claims follow `plans/AGENTS.md` for method/result/identity/conditions/scope + status/traceability updates.

### Change Scope

- Preserve unrelated work; no scope expansion without authorized need.
