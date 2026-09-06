# Products Change Boundaries

- Keep change inside approved RB; no direct app→app dependency without approved design change.
- Do not replace established architecture/RB/dependency direction/state authority/compatibility pattern merely because an alternative also satisfies requirements.
- Documentation silence does not authorize redesign when change affects compatibility/responsibility/security/persistence/state authority/material boundary; evaluate applicable definition authority routes and SoTs.
- Observable behavior/public contracts/data structures/dependencies/migrations/RBs changes must respect root authority: complete any required project-definition change/authorization first, then keep implementation/tests/responsible project docs/status consistent in the same change.
- Before move/transfer/deletion inspect dependents, public contracts, migrations, tests, docs, status, current VB, and reference-retention needs; evaluate other responsibility-area routes when those concerns become applicable.
