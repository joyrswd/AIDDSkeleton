# Todo アーキテクチャ

## 構成

- `public/`: 静的 HTML/CSS とバニラ JavaScript。JavaScript が Fetch API で状態を取得し、DOM を構築する。
- `api.php`: JSON API、入力検証、PDO による SQLite アクセス。
- `router.php`: PHP 組み込みサーバーで静的ファイルと API を振り分けるローカルルーター。

## API

| メソッド | パス | 結果 |
|---|---|---|
| GET | `/api/todos` | Todo 一覧 |
| POST | `/api/todos` | Todo 作成 |
| PATCH | `/api/todos/{id}` | 本文または完了状態の更新 |
| DELETE | `/api/todos/{id}` | Todo 削除 |

成功は JSON（削除は 204）、検証失敗は 422、未検出 ID は 404、予期しない失敗は詳細を露出せず 500 とする。

## データ

`todos` テーブルに整数 ID、本文、完了値、UTC の作成・更新時刻を保存する。初回接続時にテーブルを作成する。`TODO_DB_PATH` でテスト用 DB を分離できる。

## 判断

フレームワークと外部依存は動作確認の複雑性を増やすため採用しない。認証や CSRF 対策を含む公開用設計は、ローカルの単一利用者という境界が変わる場合に再検討する。
