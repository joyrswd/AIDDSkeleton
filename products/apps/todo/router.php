<?php

declare(strict_types=1);

require_once __DIR__ . '/src/TodoRepository.php';

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
if (!str_starts_with($path, '/api/')) {
    $file = __DIR__ . '/public' . ($path === '/' ? '/index.html' : $path);
    if (is_file($file) && str_starts_with(realpath($file) ?: '', realpath(__DIR__ . '/public') ?: '')) {
        $types = ['css' => 'text/css', 'js' => 'text/javascript', 'html' => 'text/html'];
        header('Content-Type: ' . ($types[pathinfo($file, PATHINFO_EXTENSION)] ?? 'application/octet-stream') . '; charset=utf-8');
        readfile($file);
        return;
    }
    http_response_code(404);
    echo 'Not found';
    return;
}

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

try {
    if (!preg_match('#^/api/todos(?:/(\d+))?$#', $path, $matches)) {
        throw new OutOfBoundsException('API が見つかりません。');
    }

    $databasePath = getenv('TODO_DB_PATH') ?: __DIR__ . '/data/todos.sqlite';
    $repository = new TodoRepository($databasePath);
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    $id = isset($matches[1]) ? (int) $matches[1] : null;
    $body = [];
    if (in_array($method, ['POST', 'PATCH'], true)) {
        $raw = file_get_contents('php://input');
        $body = json_decode($raw ?: '', true);
        if (!is_array($body) || json_last_error() !== JSON_ERROR_NONE) {
            http_response_code(400);
            echo json_encode(['error' => '正しい JSON を送信してください。'], JSON_UNESCAPED_UNICODE);
            return;
        }
    }

    if ($method === 'GET' && $id === null) {
        echo json_encode(['todos' => $repository->all()], JSON_UNESCAPED_UNICODE);
    } elseif ($method === 'POST' && $id === null) {
        $todo = $repository->create($body['title'] ?? null);
        http_response_code(201);
        echo json_encode(['todo' => $todo], JSON_UNESCAPED_UNICODE);
    } elseif ($method === 'PATCH' && $id !== null) {
        echo json_encode(['todo' => $repository->update($id, $body)], JSON_UNESCAPED_UNICODE);
    } elseif ($method === 'DELETE' && $id !== null) {
        $repository->delete($id);
        http_response_code(204);
    } else {
        http_response_code(405);
        header('Allow: GET, POST, PATCH, DELETE');
        echo json_encode(['error' => '許可されていない操作です。'], JSON_UNESCAPED_UNICODE);
    }
} catch (InvalidArgumentException $error) {
    http_response_code(422);
    echo json_encode(['error' => $error->getMessage()], JSON_UNESCAPED_UNICODE);
} catch (OutOfBoundsException $error) {
    http_response_code(404);
    echo json_encode(['error' => $error->getMessage()], JSON_UNESCAPED_UNICODE);
} catch (Throwable $error) {
    error_log($error->__toString());
    http_response_code(500);
    echo json_encode(['error' => 'サーバーで問題が発生しました。'], JSON_UNESCAPED_UNICODE);
}
