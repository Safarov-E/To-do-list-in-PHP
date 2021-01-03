<?php
    require './database/QueryBuilder.php';
    $db = new QueryBuilder;
    $id = $_GET['id'];
    $task = $db->getTask($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $task['title'];?></h1>
                <p><?= $task['content'];?></p>
                <a href="/">Go Back</a>
            </div>
        </div>
    </div>
</body>
</html>