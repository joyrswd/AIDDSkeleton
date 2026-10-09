# Assessment and Correction

## Scope

- Applies only when dispatched by root `AGENTS.md` because an assessment input, failed required verification, possible authoritative mismatch, unresolved finding, materially changed evidence, or materially matching retained revisit condition needs evaluation, classification, correction, disposition, or claim reassessment.
- Inherits root governance. Root `Assessment Entry and Vocabulary` owns the always-read authority guard and basic severity/disposition vocabulary; this file owns the detailed assessment, correction, disposition, and reassessment procedure.
- Loading this file does not itself authorize modification, adoption, scope expansion, claim changes, or retained work.

## Coherent Correction

- On a discovered deficiency, determine the responsible authority and whether the cause is repository-local or Upstream-governance. In a Consumer, **Consumer-local integration** means Consumer-specific implementation, configuration, SoTs, or Consumer-local governance needed to integrate Upstream governance; it does not include changing Upstream-governance semantics.
- An Upstream-governance defect remains Upstream-owned. Consumer regression, adoption, or migration does not authorize changing Upstream-governance semantics in the Consumer. A Consumer-specific semantic divergence requires an explicit governance decision that reclassifies the affected rule as Consumer-local and is not completion of Upstream-governance adoption.
- If required correction is Upstream-owned, do not claim the affected Consumer adoption or migration complete. Keep the Consumer's adopted Upstream-governance set coherent, surface the defect for Upstream correction with enough reproducible evidence/context, then select and reapply a corrected Upstream revision before completion. Authorized Consumer-local integration corrections may proceed independently.
- Inspect far enough to understand cause and impact; resulting modification remains governed by root Permission / Scope.
- When implementation, tests, configuration, or verification reveal a possible deficiency in adopted project definition, validate the applicable SoTs before changing formal behavior/configuration.
  - If the SoT is valid, correct the implementation/configuration against it.
  - If the SoT is deficient, correct it through the applicable authority/decision/adoption process before changing formal implementation/configuration to embody the new definition.
  - Do not change formal implementation/configuration first and then revise normative SoTs to justify or match that change.
- Correct required same-cause deficiencies coherently within authorized scope; route other findings through root Permission / Scope, this assessment procedure, then applicable decision and safety rules.

## Assessment Evaluation

- Assess an input against approved intent, scope/exclusions, observable AC, applicable authority/SoTs, supporting evidence, urgency/risk, dependencies, and material scope/cost effects.
- Separate whether an input is valid/useful from what should happen now; a valid concern may still be non-blocking or intentionally deferred.
- A possible improvement remains assessment input unless Permission / Scope makes it current work; do not expand scope merely to make feedback disappear.
- For a valid input Accepted now, a local patch is not sufficient when the finding reveals a missed consideration that can materially recur in the affected scope; apply root Adversarial Self-Review to assimilate and propagate the detection signal before closure.

## Finding and Remedy Authority

- Before treating a finding as a current deficiency, assigning severity, or reopening completion/verification, identify the existing authoritative basis that the finding is alleged to violate. That basis must come from applicable governance, explicit approved user intent/scope, the responsible adopted SoT/AC/invariant, or an independently applicable Safety / Compliance rule.
- Confirm that the cited basis actually carries that authority. Non-authoritative material such as `jobs/` working/control material, review text, proposals, evidence records, implementation/configuration, or realization-derived tests/results may establish facts or show that an authoritative basis is unsatisfied, but does not by itself create, broaden, or strengthen project requirements, acceptance criteria, invariants, boundaries, or guarantees. Do not promote wording from such material into authority without the applicable decision/adoption process.
- If a valid concern cannot be tied to an existing authoritative basis, do not classify it as a current Blocker or In-scope deficiency or downgrade/reopen a prior acceptance, completion, or verification claim on that concern alone. Disposition it as assessment input; if it proposes a new or stronger project requirement, guarantee, invariant, boundary, or other decision, route that proposal through the responsible decision/adoption process.
- Once a current deficiency is established, assess its severity/scope against that authoritative basis. Before applying a remedy, determine whether the changed behavior, configuration, definition, or verification follows from existing approved authority and, for routine implementation details, delegated implementation discretion. If so, correct it under Coherent Correction.
- If a remedy would require selecting or changing an unresolved requirement, AC, RB, material design choice, completion criterion, normative policy, or other decision owned outside the current remediation, stop local correction at that boundary. Preserve the finding and relevant evidence/context, route the unresolved matter through its responsible decision/adoption process, and do not encode a candidate resolution downstream merely to satisfy review. Reviewer origin does not disqualify a remedy already required by existing approved authority or delegated discretion; otherwise, treat a reviewer-proposed solution as a non-authoritative alternative unless independently adopted by the responsible authority.

## Disposition Handling

Classify the current handling independently of severity:

- **Accept now:** treat the input as current work when the current authorized outcome already requires it, Permission / Scope adds it, or a Blocker requires action within existing authority; if it materially changes user-owned intent, priority, scope, AC, RB, or design, request the applicable decision first.
- **Reject:** do not adopt the input as current or future work when the basis is insufficient, it conflicts with approved intent/authority, the concern is already satisfied, the change is otherwise not justified, or no continuing work value remains. Retain rationale/provenance only when it has independent continuing value under the responsible area; that retention does not keep the rejected input as an active or deferred candidate.
- **Defer:** retain a potentially useful input for later reassessment when it is not active/timely now or current evidence/future conditions do not justify action yet; deferral ≠ adoption, priority, promise, or planned work. Work already accepted as separate authorized work is not Defer merely because it is not current. Evidence/context gathering performed now is active work, not Defer.

Disposition does not itself grant modification or adoption authority.

## Severity and Scope Handling

- Assign Blocker or In-scope deficiency only after Finding and Remedy Authority establishes a current deficiency; severity characterizes the impact of an unmet authoritative basis and does not create or expand that basis.
- In-scope deficiency is local to the current authorized outcome; a Blocker remains a Blocker wherever its subject lies; input validity alone does not make it current scope. Requirement/AC/lifecycle completion remains judged against its full approved basis.
- Severity and disposition are independent: a Follow-up may become separate authorized work or be dispositioned Defer/Reject, while a Blocker or In-scope deficiency may still require a user-owned decision before it can be Accepted now.

## Reassessment Handling

- Retain Defer inputs only when continuing value justifies retention; repository-managed retention follows `jobs/AGENTS.md`.
- When a retained item reaches a material revisit match, evaluate its current relevance and disposition under the parent Reassessment trigger and this file; do not infer activation, priority, or scope merely from the match.
