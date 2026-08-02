# Todo 検証方針

## 標準検証

1. `find . -name '*.php' -print0 | xargs -0 -n1 php -l` で PHP 構文を確認する。
2. `node --check public/app.js` で JavaScript 構文を確認する。
3. `php tests/api_test.php` で一時 SQLite DB と実 HTTP サーバーを使い、一覧、作成、検証エラー、本文更新、完了切り替え、永続化、削除、未検出を確認する。
4. ブラウザで作成、表示、完了、編集、削除、エラー通知、キーボード操作、レスポンシブ表示を目視確認する。

API 結合テストの標準出力を実行証拠とする。ブラウザ確認は画面キャプチャと完了報告に記録する。実行時点のローカル PHP/SQLite 環境のみを検証範囲とする。
