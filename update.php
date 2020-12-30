<?php
    $data = [
        "id" => $_GET['id'],
        "title" => $_POST['title'],
        "content" => $_POST['content']
    ];
    $pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
    $statement = $pdo->prepare("UPDATE tasks SET title=:title, content=:content WHERE id=:id");
    $statement->execute($data);

    header("Location: / "); exit;
?>