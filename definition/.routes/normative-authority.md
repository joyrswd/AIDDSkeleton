# Definition Normative and SoT Authority

- Normative content constrains future valid implementations and must remain usable without current `products/`; applicable requirements/design/testing together must support independent implementation with the same intended outcomes, adopted contracts/RBs, fixed algorithms/invariants, and equivalent acceptance intent.
- Goal is semantic reconstruction, not source reproduction/operational restoration. Incidental implementation details are not required unless independently adopted constraints/contracts; design may remain concrete when intentionally constraining future valid implementations.
- One responsible adopted SoT per project fact; no duplicate detail or parallel `current`/`target` variants/equivalent views. Candidate replacements, target states, and alternatives are non-authoritative and preferably expressed as deltas against the current SoT.
- Approved future intent may live in `definition/` when it is itself the document's responsibility, not as a parallel candidate SoT. Distinguish assumed/decided/open; proposal/unapproved assumption ≠ settled fact.
- Requirements own required outcomes, external conditions, compatibility obligations, and AC; design owns adopted choices among otherwise valid implementation approaches; testing owns required verification, method/observation, and sufficient evidence.
- Completion criteria must be observable; split requirements that cannot be implemented, verified, and completed together.
- Semantic exhaustive domains/matrices/transitions/enumerations remain normative even when they imply cardinality; verification may use any evidence form appropriate to AC.
- Before removing, abstracting, or relocating materially constraining content, preserve its adopted semantics in the responsible SoT unless the applicable authority process explicitly changes or retires it.
- For abstraction, relocation, or reclassification without an explicit authority change, verify future valid implementations are not unintentionally broadened or narrowed.
- Treat loss of adopted timezone/unit/protocol-version/transaction-isolation/identity/cardinality/ordering/security/compatibility or similar invariant as normative change, not cleanup.
- State design constraints normatively; do not delegate design authority to current source/config/test/generated artifacts. Current test implementation details and execution results remain non-normative unless independently adopted.
