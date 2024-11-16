<?php
// Task model class to interact with the database
class Task
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
// Get all tasks from the database
    public function getAllTasks()
    {
        $query = $this->pdo->query("SELECT * FROM tasks ORDER BY id DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
// Add a new task to the database
    public function addTask($title)
    {
        $result = $this->pdo->prepare("INSERT INTO tasks (title) VALUES (?)");
        $result->execute([$title]);
    }
// Delete a task from the database
    public function deleteTask($id)
    {
        $result = $this->pdo->prepare("DELETE FROM tasks WHERE id = ?");
        $result->execute([$id]);
    }
}
