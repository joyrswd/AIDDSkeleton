# Definition Verification Basis

- Execution-specific results/evidence are working material by default; verification does not require a dedicated repository evidence file. Sufficient native/external execution records may remain external.
- A current verified claim requires an available, applicable VB sufficient to reassess its scope. VB may be native/external record, retained `jobs/` material, retained reference, or proportional summary; repository/Markdown storage is not required. When retained `jobs/` material is part of VB, evaluate `jobs/.routes/index.md` for applicable lifecycle/retention rules.
- Preserve proportionally: actual target/state, relevant conditions, method, result, directly verified scope, material unverified scope.
- Prefer stable identity when available; mutable branch/environment/host labels are context only. Without stable ID, record enough time/state/conditions/scope to prevent unsafe inference; no Git/CI/tool requirement.
- Make material retention/expiry/freshness/revalidation boundaries discoverable for external/expirable VB and recheck when required before relying on claims.
- Deleted/expired/unavailable/inapplicable/superseded-without-justification VB → downgrade affected verified claim until sufficient verification exists.
- Evidence supports only directly exercised/observed scope. Mark requirement/AC/completion/lifecycle state verified only when all required observable parts/conditions have sufficient evidence; otherwise record verified subset + unverified scope.
- Advance lifecycle only with documented transition conditions + required evidence. Record method/result/verified scope/evidence type/material unverified matters proportionally; materially different evidence conditions are not interchangeable.
- Carry earlier evidence to a later target/state only when evidence shows relevant differences do not affect verified scope, environment/config/conditions, applicable requirements/AC, or testing sufficiency; identity lineage or an “unrelated change” assumption alone is insufficient.
- Index links to evidence/reference must point to material applicable to the asserted state.
- Normative results → responsible requirements/design/testing SoT.
- Multiple partial bases may jointly suffice and one proportional basis may support multiple related claims; no per-claim/per-run file requirement.
- Do not dispose of current effective VB until no current verified claim depends on it, or replacement/downgrade is complete.
