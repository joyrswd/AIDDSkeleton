# Todo トレーサビリティ

| 要件 | 設計・実装 | 検証 | 状態 |
|---|---|---|---|
| TODO-REQ-01, TODO-REQ-02 | `public/app.js`, `api.php` | API 一覧・作成・入力テスト | API は検証済み、画面操作は未検証 |
| TODO-REQ-03, TODO-REQ-04 | `public/app.js`, `api.php` | API 更新・削除テスト | API は検証済み、画面操作は未検証 |
| TODO-REQ-05 | `api.php` の SQLite 層 | 同一 DB への再取得テスト | 検証済み |
| TODO-REQ-06 | `public/app.js`, API エラー契約 | 入力テスト | API は検証済み、画面通知は未検証 |
| TODO-AC-01～03 | 上記の統合 | 構文検査、API 結合テスト、静的アセット配信 | API 契約は検証済み、ブラウザ受入は未検証 |
