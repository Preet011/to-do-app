<?php
require_once __DIR__ . '/../models/Task.php';
require_once __DIR__ . '/../config/Database.php';

class TaskController
{
    private $task;
// Constructor to initialize the Task model
    public function __construct()
    {
        $database = new Database();
        $db = $database->getConnection();
        $this->task = new Task($db);
    }
// Display the list of tasks
    public function index()
    {
        $tasks = $this->task->getAllTasks();
        include __DIR__ . '/../inc/header.php';
        include __DIR__ . '/../views/tasks.php';
        include __DIR__ . '/../inc/footer.php';
    }
// Add a new task
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = trim($_POST['title']);
            $this->task->addTask($title);
            header("Location: /my-todo-app/index.php");
            exit();
        }
        include __DIR__ . '/../inc/header.php';
        include __DIR__ . '/../views/add_task.php';
        include __DIR__ . '/../inc/footer.php';
    }
// Delete an existing task
    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $this->task->deleteTask($id);
            header("Location: /my-todo-app/index.php");
            exit();
        }
    }
}
