<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/TodoRepository.php';

$directory = sys_get_temp_dir() . '/todo-test-' . bin2hex(random_bytes(5));
$database = $directory . '/test.sqlite';

function assertSameValue(mixed $expected, mixed $actual, string $message): void
{
    if ($expected !== $actual) {
        throw new RuntimeException($message . "\nExpected: " . var_export($expected, true) . "\nActual: " . var_export($actual, true));
    }
}

try {
    $repository = new TodoRepository($database);
    assertSameValue([], $repository->all(), '初期一覧が空であること');
    $created = $repository->create('  最初の Todo  ');
    assertSameValue('最初の Todo', $created['title'], 'タイトルが整形されること');
    assertSameValue(false, $created['completed'], '未完了で作成されること');
    assertSameValue(1, count($repository->all()), '作成した Todo が一覧にあること');
    $updated = $repository->update($created['id'], ['title' => '更新済み', 'completed' => true]);
    assertSameValue('更新済み', $updated['title'], 'タイトルを更新できること');
    assertSameValue(true, $updated['completed'], '完了状態を更新できること');

    try { $repository->create('   '); throw new RuntimeException('空タイトルが拒否されませんでした'); }
    catch (InvalidArgumentException) { /* expected */ }
    try { $repository->update($created['id'], ['completed' => 1]); throw new RuntimeException('不正な完了状態が拒否されませんでした'); }
    catch (InvalidArgumentException) { /* expected */ }

    $repository->delete($created['id']);
    assertSameValue([], $repository->all(), '削除後の一覧が空であること');
    try { $repository->delete($created['id']); throw new RuntimeException('未存在 Todo が拒否されませんでした'); }
    catch (OutOfBoundsException) { /* expected */ }
    echo "OK: TodoRepository integration tests passed\n";
} finally {
    if (is_file($database)) unlink($database);
    if (is_dir($directory)) rmdir($directory);
}
