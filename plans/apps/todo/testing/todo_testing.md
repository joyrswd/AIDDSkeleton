# Todo テスト計画

## 標準検証

1. `find . -name '*.php' -print0 | xargs -0 -n1 php -l` で PHP 構文を検査する。
2. `php tests/integration.php` で一時 SQLite を使い CRUD、検証、未存在処理を確認する。
3. `node --check public/app.js` で JavaScript 構文を検査する。
4. PHP サーバーを一時 DB で起動し、`curl` で画面、作成、一覧を確認する。

実データベースを使う統合結果を API の完了証拠とする。ブラウザの視覚確認はレイアウトの補助証拠であり、機能テストの代替にはしない。実行結果は現在値として `todo_traceability.md` と `CURRENT_STATUS.md` に記録する。
