# Todo 設計

## 構成

`public/` の HTML/CSS/JavaScript を PHP 組み込みサーバーで配信する。`router.php` は `/api/todos` を `src/TodoRepository.php` に接続する。リポジトリは PDO SQLite を所有し、初回接続時にスキーマを作る。ブラウザは Fetch API で JSON を取得し、DOM API で安全に描画する。

## API

- `GET /api/todos`: 全 Todo を新しい順で返す。
- `POST /api/todos`: `{ "title": string }` を作成し 201 を返す。
- `PATCH /api/todos/{id}`: `title` または `completed` を更新する。
- `DELETE /api/todos/{id}`: 削除し 204 を返す。

応答エラーは `{ "error": string }` とする。不正 JSON・入力は 400/422、未存在は 404、未対応メソッドは 405 とする。

## データモデル

`todos` テーブルは整数主キー `id`、必須文字列 `title`、0/1 の `completed`、ISO 8601 UTC の `created_at` と `updated_at` を持つ。SQLite ファイルの場所は `TODO_DB_PATH` で上書きできる。
