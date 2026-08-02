<?php

declare(strict_types=1);

final class TodoRepository
{
    private PDO $pdo;

    public function __construct(string $databasePath)
    {
        $directory = dirname($databasePath);
        if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
            throw new RuntimeException('データ保存先を作成できませんでした。');
        }

        $this->pdo = new PDO('sqlite:' . $databasePath, null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        $this->pdo->exec('PRAGMA foreign_keys = ON');
        $this->pdo->exec(
            'CREATE TABLE IF NOT EXISTS todos (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                title TEXT NOT NULL CHECK(length(trim(title)) > 0),
                completed INTEGER NOT NULL DEFAULT 0 CHECK(completed IN (0, 1)),
                created_at TEXT NOT NULL,
                updated_at TEXT NOT NULL
            )'
        );
    }

    /** @return list<array<string, mixed>> */
    public function all(): array
    {
        $rows = $this->pdo->query('SELECT * FROM todos ORDER BY id DESC')->fetchAll();
        return array_map([$this, 'normalize'], $rows);
    }

    /** @return array<string, mixed> */
    public function create(string $title): array
    {
        $title = $this->validateTitle($title);
        $now = gmdate('c');
        $statement = $this->pdo->prepare(
            'INSERT INTO todos (title, completed, created_at, updated_at) VALUES (:title, 0, :created, :updated)'
        );
        $statement->execute(['title' => $title, 'created' => $now, 'updated' => $now]);
        return $this->find((int) $this->pdo->lastInsertId());
    }

    /** @param array<string, mixed> $changes
     *  @return array<string, mixed>
     */
    public function update(int $id, array $changes): array
    {
        $current = $this->find($id);
        if (!array_key_exists('title', $changes) && !array_key_exists('completed', $changes)) {
            throw new InvalidArgumentException('更新する項目を指定してください。');
        }

        $title = array_key_exists('title', $changes)
            ? $this->validateTitle($changes['title'])
            : $current['title'];
        $completed = array_key_exists('completed', $changes)
            ? $this->validateCompleted($changes['completed'])
            : $current['completed'];
        $statement = $this->pdo->prepare(
            'UPDATE todos SET title = :title, completed = :completed, updated_at = :updated WHERE id = :id'
        );
        $statement->execute([
            'title' => $title,
            'completed' => $completed ? 1 : 0,
            'updated' => gmdate('c'),
            'id' => $id,
        ]);
        return $this->find($id);
    }

    public function delete(int $id): void
    {
        $statement = $this->pdo->prepare('DELETE FROM todos WHERE id = :id');
        $statement->execute(['id' => $id]);
        if ($statement->rowCount() === 0) {
            throw new OutOfBoundsException('Todo が見つかりません。');
        }
    }

    /** @return array<string, mixed> */
    private function find(int $id): array
    {
        $statement = $this->pdo->prepare('SELECT * FROM todos WHERE id = :id');
        $statement->execute(['id' => $id]);
        $todo = $statement->fetch();
        if ($todo === false) {
            throw new OutOfBoundsException('Todo が見つかりません。');
        }
        return $this->normalize($todo);
    }

    private function validateTitle(mixed $title): string
    {
        if (!is_string($title) || trim($title) === '') {
            throw new InvalidArgumentException('タイトルを入力してください。');
        }
        $title = trim($title);
        if (preg_match_all('/./us', $title) > 200) {
            throw new InvalidArgumentException('タイトルは200文字以内で入力してください。');
        }
        return $title;
    }

    private function validateCompleted(mixed $completed): bool
    {
        if (!is_bool($completed)) {
            throw new InvalidArgumentException('完了状態は真偽値で指定してください。');
        }
        return $completed;
    }

    /** @param array<string, mixed> $todo
     *  @return array<string, mixed>
     */
    private function normalize(array $todo): array
    {
        $todo['id'] = (int) $todo['id'];
        $todo['completed'] = (bool) $todo['completed'];
        return $todo;
    }
}
