<?php
require_once __DIR__ . "/../../config/database.php";

class Task {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function getAllTasks() {
        $sql = "SELECT * FROM tasks";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTaskById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function addTask($title, $description) {
        $stmt = $this->conn->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $description);
        return $stmt->execute();
    }

    public function updateTask($id, $title, $description, $status) {
        $stmt = $this->conn->prepare("UPDATE tasks SET title = ?, description = ?, status = ? WHERE id = ?");
        $stmt->bind_param("sssi", $title, $description, $status, $id); 
        return $stmt->execute();
    }

    public function deleteTask($id) {
        $stmt = $this->conn->prepare("DELETE FROM tasks WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function markAsComplete($id) {
        $stmt = $this->conn->prepare("UPDATE tasks SET status = 'completed' WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
    
}
?>
