# Todo アプリ索引

## 概要と責任

Todo はブラウザ上で作業項目を管理し、PHP API を通じて SQLite に永続化するローカル単一ユーザー向けアプリケーションである。フロントエンドの対話処理は JavaScript が担当し、PHP は静的配信、JSON API、永続化を担当する。

## 読む順序

1. [要件索引](requirements/todo_requirements_index.md)
2. [設計索引](design/todo_design_index.md)
3. [テスト索引](testing/todo_testing_index.md)
4. [トレーサビリティ](todo_traceability.md)

## 実行

`products/apps/todo` で `php -S 127.0.0.1:8080 router.php` を実行し、`http://127.0.0.1:8080` を開く。データは既定で `data/todos.sqlite` に保存される。
