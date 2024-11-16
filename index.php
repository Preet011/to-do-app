<?php
require_once 'config/Database.php';
require_once 'controllers/TaskController.php';

$controller = new TaskController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'add':
        $controller->add();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->index();
        break;
}
