# Definition Realization Authority

- First classify a realization-derived fact as current realization, required outcome/constraint, or adopted implementation constraint.
- Independently adopted required outcomes → responsible requirements SoT; independently adopted implementation constraints → responsible design SoT; non-adopted realization material follows the Reconciliation / Transfer route.
- Source paths/private helpers/classes/functions/state fields/DOM IDs/current directory layout/implementation status remain current-realization detail unless independently adopted.
- Adoption of implementation-derived detail into design requires evidence independent of implementation/test presence that the project intends it as a future constraint, such as effect on an adopted contract, RB, dependency direction, security/correctness/operational property, chosen algorithm, or reimplementation acceptability.
- Existing normative statements remain effective until explicitly changed/retired.
- Do not reclassify merely to normalize taxonomy. Move only when current placement materially obscures responsibility, duplicates harmfully, or wrongly constrains/frees future implementations; if intent is ambiguous, preserve current authority/placement pending decision.
- When concrete provenance/intent evidence creates material doubt, preserve current authority while unresolved and use root correction/assessment rules. Investigate history only when such evidence makes it relevant; later explicit adoption may validly make realization detail normative.
- Mixed normative/execution content is classified at statement/section level: normative verification intent stays in testing; execution material follows Verification Basis lifecycle.
