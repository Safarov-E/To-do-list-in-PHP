<?php
    class QueryBuilder {
        function getAllTasks() {
            $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
            $statement = $pdo->prepare("SELECT * FROM  tasks");
            $statement->execute();
            return $statement->fetchAll(2);
        }
        function addTask($data) {
            $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
            $statement = $pdo->prepare("INSERT INTO tasks (title, content) VALUES (:title, :content)");
            $statement->execute($data);
        }
        function getTask($id) {
            $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
            $statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
            $statement->bindParam(":id", $id);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        function updateTask($data) {
            $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
            $statement = $pdo->prepare("UPDATE tasks SET title=:title, content=:content WHERE id=:id");
            $statement->execute($data);
        }
        function deleteTask($id) {
            $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
            $statement = $pdo->prepare("DELETE FROM tasks WHERE id=:id");
            $statement->bindParam(":id", $id);
            $statement->execute();
            
            header("Location: /"); exit;
        }
    }
?>