<?php
    $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
    $statement = $pdo->prepare("INSERT INTO tasks (title, content) VALUES (:title, :content)");
    $statement->bindParam(":title", $_POST['title']);
    $statement->bindParam(":content", $_POST['content']);
    $statement->execute();

    header("Location: /"); exit;
?>