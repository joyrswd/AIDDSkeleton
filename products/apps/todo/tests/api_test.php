<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$temp = sys_get_temp_dir() . '/todo-api-' . bin2hex(random_bytes(6));
mkdir($temp, 0700, true);
$dbPath = $temp . '/test.sqlite';
$port = random_int(18000, 28000);
$command = sprintf(
    'TODO_DB_PATH=%s %s -S 127.0.0.1:%d %s',
    escapeshellarg($dbPath),
    escapeshellarg(PHP_BINARY),
    $port,
    escapeshellarg($root . '/router.php')
);
$pipes = [];
$process = proc_open($command, [['pipe', 'r'], ['file', $temp . '/server.log', 'a'], ['file', $temp . '/server.log', 'a']], $pipes, $root);
if (!is_resource($process)) {
    throw new RuntimeException('Test server could not be started.');
}

function request(int $port, string $method, string $path, ?array $body = null): array
{
    $headers = ['Content-Type: application/json', 'Connection: close'];
    $context = stream_context_create(['http' => [
        'method' => $method,
        'header' => implode("\r\n", $headers),
        'content' => $body === null ? '' : json_encode($body),
        'ignore_errors' => true,
        'timeout' => 3,
    ]]);
    $result = @file_get_contents("http://127.0.0.1:$port$path", false, $context);
    $statusLine = $http_response_header[0] ?? '';
    preg_match('/\s(\d{3})\s/', $statusLine, $matches);
    return [(int) ($matches[1] ?? 0), $result === '' ? null : json_decode((string) $result, true)];
}

function expect(bool $condition, string $message): void
{
    if (!$condition) throw new RuntimeException("FAIL: $message");
    echo "PASS: $message\n";
}

try {
    for ($attempt = 0; $attempt < 30; $attempt++) {
        usleep(100000);
        [$status] = request($port, 'GET', '/api/todos');
        if ($status === 200) break;
    }
    [$status, $data] = request($port, 'GET', '/api/todos');
    expect($status === 200 && $data['todos'] === [], '初期一覧は空');

    [$status, $created] = request($port, 'POST', '/api/todos', ['title' => '  仕様を確認する  ']);
    expect($status === 201 && $created['title'] === '仕様を確認する' && $created['completed'] === false, 'Todo を作成できる');
    $id = $created['id'];

    [$status, $data] = request($port, 'POST', '/api/todos', ['title' => '   ']);
    expect($status === 422 && isset($data['error']), '空白入力を拒否する');

    [$status, $updated] = request($port, 'PATCH', "/api/todos/$id", ['title' => 'テストを実行する']);
    expect($status === 200 && $updated['title'] === 'テストを実行する', '本文を更新できる');

    [$status, $updated] = request($port, 'PATCH', "/api/todos/$id", ['completed' => true]);
    expect($status === 200 && $updated['completed'] === true, '完了状態を更新できる');

    [$status, $data] = request($port, 'GET', '/api/todos');
    expect($status === 200 && count($data['todos']) === 1 && $data['todos'][0]['completed'] === true, 'SQLite から更新状態を再取得できる');

    [$status] = request($port, 'DELETE', "/api/todos/$id");
    expect($status === 204, 'Todo を削除できる');
    [$status] = request($port, 'PATCH', "/api/todos/$id", ['completed' => false]);
    expect($status === 404, '未検出 Todo は 404 を返す');
    [$status, $data] = request($port, 'GET', '/api/todos');
    expect($status === 200 && $data['todos'] === [], '削除が永続化される');
} finally {
    proc_terminate($process);
    proc_close($process);
    foreach (glob($temp . '/*') ?: [] as $file) unlink($file);
    rmdir($temp);
}
