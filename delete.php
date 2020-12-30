<?php
    $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
    $statement = $pdo->prepare("DELETE FROM tasks WHERE id=:id");
    $statement->bindParam(":id", $_GET['id']);
    $statement->execute();
    
    header("Location: /"); exit;
?>