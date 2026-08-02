<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function respond(int $status, mixed $data = null): never
{
    http_response_code($status);
    if ($status !== 204) {
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    exit;
}

function fail(int $status, string $message): never
{
    respond($status, ['error' => $message]);
}

function requestBody(): array
{
    $raw = file_get_contents('php://input');
    if ($raw === false || $raw === '') {
        return [];
    }

    try {
        $body = json_decode($raw, true, 16, JSON_THROW_ON_ERROR);
    } catch (JsonException) {
        fail(400, 'JSON 形式が正しくありません。');
    }

    if (!is_array($body)) {
        fail(400, 'JSON オブジェクトを送信してください。');
    }
    return $body;
}

function validTitle(mixed $value): string
{
    if (!is_string($value)) {
        fail(422, 'Todo の内容を文字列で入力してください。');
    }
    $title = trim($value);
    if ($title === '') {
        fail(422, 'Todo の内容を入力してください。');
    }
    if (mb_strlen($title) > 200) {
        fail(422, 'Todo は 200 文字以内で入力してください。');
    }
    return $title;
}

function todoFromRow(array $row): array
{
    return [
        'id' => (int) $row['id'],
        'title' => $row['title'],
        'completed' => (bool) $row['completed'],
        'createdAt' => $row['created_at'],
        'updatedAt' => $row['updated_at'],
    ];
}

function findTodo(PDO $db, int $id): array
{
    $statement = $db->prepare('SELECT * FROM todos WHERE id = :id');
    $statement->execute(['id' => $id]);
    $row = $statement->fetch();
    if ($row === false) {
        fail(404, 'Todo が見つかりません。');
    }
    return todoFromRow($row);
}

try {
    $dbPath = getenv('TODO_DB_PATH') ?: __DIR__ . '/data/todos.sqlite';
    $directory = dirname($dbPath);
    if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
        throw new RuntimeException('Database directory could not be created.');
    }
    $db = new PDO('sqlite:' . $dbPath, null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    $db->exec('PRAGMA foreign_keys = ON');
    $db->exec(
        'CREATE TABLE IF NOT EXISTS todos (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            title TEXT NOT NULL CHECK(length(title) BETWEEN 1 AND 200),
            completed INTEGER NOT NULL DEFAULT 0 CHECK(completed IN (0, 1)),
            created_at TEXT NOT NULL,
            updated_at TEXT NOT NULL
        )'
    );

    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
    if (!preg_match('#^/api/todos(?:/(\d+))?/?$#', $path, $matches)) {
        fail(404, 'API エンドポイントが見つかりません。');
    }
    $id = isset($matches[1]) ? (int) $matches[1] : null;

    if ($method === 'GET' && $id === null) {
        $rows = $db->query('SELECT * FROM todos ORDER BY created_at DESC, id DESC')->fetchAll();
        respond(200, ['todos' => array_map('todoFromRow', $rows)]);
    }

    if ($method === 'POST' && $id === null) {
        $title = validTitle(requestBody()['title'] ?? null);
        $now = gmdate('Y-m-d\TH:i:s\Z');
        $statement = $db->prepare(
            'INSERT INTO todos (title, completed, created_at, updated_at) VALUES (:title, 0, :created, :updated)'
        );
        $statement->execute(['title' => $title, 'created' => $now, 'updated' => $now]);
        respond(201, findTodo($db, (int) $db->lastInsertId()));
    }

    if ($method === 'PATCH' && $id !== null) {
        findTodo($db, $id);
        $body = requestBody();
        $updates = [];
        $values = ['id' => $id, 'updated' => gmdate('Y-m-d\TH:i:s\Z')];
        if (array_key_exists('title', $body)) {
            $updates[] = 'title = :title';
            $values['title'] = validTitle($body['title']);
        }
        if (array_key_exists('completed', $body)) {
            if (!is_bool($body['completed'])) {
                fail(422, '完了状態は true または false で指定してください。');
            }
            $updates[] = 'completed = :completed';
            $values['completed'] = $body['completed'] ? 1 : 0;
        }
        if ($updates === []) {
            fail(422, '更新する title または completed を指定してください。');
        }
        $updates[] = 'updated_at = :updated';
        $statement = $db->prepare('UPDATE todos SET ' . implode(', ', $updates) . ' WHERE id = :id');
        $statement->execute($values);
        respond(200, findTodo($db, $id));
    }

    if ($method === 'DELETE' && $id !== null) {
        findTodo($db, $id);
        $statement = $db->prepare('DELETE FROM todos WHERE id = :id');
        $statement->execute(['id' => $id]);
        respond(204);
    }

    header('Allow: GET, POST, PATCH, DELETE');
    fail(405, 'この HTTP メソッドは使用できません。');
} catch (Throwable $error) {
    error_log($error->getMessage());
    fail(500, 'サーバーでエラーが発生しました。');
}
