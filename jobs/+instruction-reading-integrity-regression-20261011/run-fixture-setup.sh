#!/usr/bin/env bash
set -euo pipefail

# Create isolated pinned A/B fixture copies. Only clones/checkout and local file
# operations: no commit, push, PR or source-repository mutation.
# Requires network access to the source GitHub repositories.
if [[ "$#" -ne 1 ]]; then
  echo "Usage: bash run-fixture-setup.sh /absolute/output/workdir" >&2
  exit 2
fi
destination="$1"
if [[ "$destination" != /* ]]; then
  echo "Require an absolute output path" >&2
  exit 2
fi
if [[ -e "$destination" ]]; then
  echo "Output exists; refusing to overwrite: $destination" >&2
  exit 2
fi
mkdir -p "$destination"
UPSTREAM_SHA="c892dc29bf7f805333514c338d99550dff6ed140"
CONSUMER_SHA="942e13ab033b1936b1a88159bd0b7590bef464ef"
CANDIDATE_SHA="cdf03798b60684f06bf29ed78fae2863fdb19392"

git clone -q https://github.com/joyrswd/AIDDSkeleton.git "$destination/upstream"
git -C "$destination/upstream" checkout --detach -q "$UPSTREAM_SHA"
git clone -q https://github.com/joyrswd/1minute-wiki.git "$destination/consumer"
git -C "$destination/consumer" checkout --detach -q "$CONSUMER_SHA"
git clone -q https://github.com/joyrswd/AIDDSkeleton.git "$destination/candidate"
git -C "$destination/candidate" checkout --detach -q "$CANDIDATE_SHA"

git -C "$destination/candidate" show "HEAD:AGENTS.md" > "$destination/candidate-root.md"
python3 "$destination/candidate/jobs/+instruction-reading-integrity-regression-20261011/build-fixtures.py" \
  --consumer "$destination/consumer" \
  --upstream "$destination/upstream" \
  --candidate-root "$destination/candidate-root.md" \
  --output "$destination/fixtures"

echo "Verify A/B identical except Root:"
python3 - "$destination/fixtures/manifest.json" <<'PY'
import json, sys
manifest = json.load(open(sys.argv[1], encoding="utf-8"))
if manifest.get("nonroot_equal") is not True:
    raise SystemExit("A/B nonroot mismatch")
if manifest["a_root_sha256"] == manifest["b_root_sha256"]:
    raise SystemExit("A/B root unexpectedly equal")
print("A/B fixture comparison: OK")
PY

echo "Preflight baseline quiz tests in each arm (without writing .pyc):"
for arm in A B; do
  PYTHONDONTWRITEBYTECODE=1 python3 -m unittest discover \
    -s "$destination/fixtures/$arm/implementation" -p 'test_*.py'
done

echo "Operator: give a fresh copy of ONE fixtures arm to each independent agent."
echo "Keep manifest.json, the operator prompt file, and the evaluation key outside agent context."
echo "Fixed candidate tested: $CANDIDATE_SHA"
