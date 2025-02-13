<?php
require_once __DIR__ . "/../models/Task.php";

class TaskController {
    public function index() {
        $taskModel = new Task();
        $tasks = $taskModel->getAllTasks();
        require_once __DIR__ . "/../views/home.php";
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST["title"];
            $description = $_POST["description"];
            $taskModel = new Task();
            $taskModel->addTask($title, $description);
            header("Location: home");
            exit();
        }
        require_once __DIR__ . "/../views/add.php";
    }

    public function edit() {
        $taskModel = new Task();
        $id = $_GET["id"];
        $task = $taskModel->getTaskById($id);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST["title"];
            $description = $_POST["description"];
            $status = $_POST["status"];
            $taskModel->updateTask($id, $title, $description, $status);
            header("Location: home");
            exit();
        }
        require_once __DIR__ . "/../views/edit.php";
    }

    public function delete() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
            $taskModel = new Task();
            $taskModel->deleteTask($_POST["id"]);
        }
        header("Location: home");
        exit();
    }

    public function complete() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
            $taskModel = new Task();
            $taskModel->markAsComplete($_POST["id"]);
        }
        header("Location: home");
        exit();
    }
    
    
}
?>
