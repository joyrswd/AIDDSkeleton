# Todo アプリ索引

## 概要と責任

ローカルの単一利用者が Todo を管理できる Web アプリ。JavaScript が画面と API 通信、PHP が JSON API と入力検証、SQLite が永続化を担当する。

## 読み順

1. [要件索引](requirements/todo_requirements_index.md)
2. [設計索引](design/todo_design_index.md)
3. [テスト索引](testing/todo_testing_index.md)
4. [トレーサビリティ](todo_traceability.md)

## 実行手順

PHP 8.1 以上の PDO SQLite 拡張が必要。

```sh
cd products/apps/todo
php -S 127.0.0.1:8000 router.php
```

ブラウザで `http://127.0.0.1:8000` を開く。データは既定で `data/todos.sqlite` に保存される。
