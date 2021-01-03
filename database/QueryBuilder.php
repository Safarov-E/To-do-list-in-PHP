<?php
    class QueryBuilder {
        function getAllTasks() {
            $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
            $statement = $pdo->prepare("SELECT * FROM  tasks");
            $statement->execute();
            return $statement->fetchAll(2);
        }
    }
?>