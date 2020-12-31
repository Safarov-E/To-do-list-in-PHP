<?php
    function addTask($data) {
        $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
        $statement = $pdo->prepare("INSERT INTO tasks (title, content) VALUES (:title, :content)");
        $statement->execute($data);

        header("Location: /"); exit;
    }
    addTask($_POST);
?>