<?php
    class QueryBuilder {
        public $pdo;
        function __construct() {
            $this->pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
        }
        function getAllTasks() {
            $statement = $this->pdo->prepare("SELECT * FROM  tasks");
            $statement->execute();
            return $statement->fetchAll(2);
        }
        function addTask($data) {
            $statement = $this->pdo->prepare("INSERT INTO tasks (title, content) VALUES (:title, :content)");
            $statement->execute($data);
        }
        function getTask($id) {
            $statement = $this->pdo->prepare("SELECT * FROM tasks WHERE id=:id");
            $statement->bindParam(":id", $id);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        function updateTask($data) {
            $statement = $this->pdo->prepare("UPDATE tasks SET title=:title, content=:content WHERE id=:id");
            $statement->execute($data);
        }
        function deleteTask($id) {
            $statement = $this->pdo->prepare("DELETE FROM tasks WHERE id=:id");
            $statement->bindParam(":id", $id);
            $statement->execute();
        }
    }
?>