# Jobs Blocking and Continuation

- A blocked/pending job remains `+` only when it had already validly entered active lifecycle and its authorized outcome remains active while waiting on a dependency/input/condition/blocker. Authorized future work not yet active remains `_`.
- Current-claim-dependent transitional VB remains under a `+` job while preservation/replacement/reconciliation/claim-downgrade is an active obligation, even when implementation work is complete.
- Hook `jobs.blocked` is reached when a discoverable active `+` job that remains incomplete newly becomes unable to make material progress in the current execution context after safe in-scope alternatives have been exhausted, with blocker, remaining obligation, and materially affected unverified scope reconciled as needed for resumable control.
- A command failure, transient first failure, unavailable optional path while another valid path remains, or unchanged observation of the same unresolved blocking episode does not by itself reach `jobs.blocked`.
- Reaching `jobs.blocked` does not complete, accept, verify, deactivate, or otherwise change the blocked job marker; does not by itself establish root Assessment `Blocker` severity; and grants no scope, priority, successor-selection, or activation authority.
- After `jobs.blocked`, a Consumer Hook may continue only by applying ordinary lifecycle discovery to another independently executable job within existing authority:
  - continue a discoverable already-active `+` job as current work when ordinary authority/dependency conditions permit; or
  - select/activate an inactive `_` job under ordinary activation rules.
- Blocking is not basis for new work and does not bypass approved basis, dependency, entry condition, inactive-parent discovery gating, or user-owned scope/priority/RB/material-design/acceptance decisions.
- If the blocking condition itself requires a user-owned decision, or continuation to another job requires a material priority choice or other such decision, do not automatically continue/select one; surface the applicable decision/blocker instead.
- Activating an inactive successor validly reaches `jobs.activated`; continuing an already-active `+` successor does not re-fire it.
