<?php
    function deleteTask($id) {
        $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
        $statement = $pdo->prepare("DELETE FROM tasks WHERE id=:id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        
        header("Location: /"); exit;
    }
    $id = $_GET['id'];
    deleteTask($id);
?>