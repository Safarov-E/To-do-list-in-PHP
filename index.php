<?php
    require './database/QueryBuilder.php';
    $db = new QueryBuilder;
    $tasks = $db->all("tasks");
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
                <h1>All Tasks</h1>
                <a href="create.php" class="btn btn-success">Add Task</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($tasks as $task):?>
                        <tr>
                            <td><?=$task['id'];?></td>
                            <td><?=$task['title'];?></td>
                            <td>
                                <a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">
                                    Show
                                </a>
                                <a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">
                                    Edit
                                </a>
                                <a 
                                    onclick="return confirm('Вы действительно хотите удалить задачу?')"
                                    href="delete.php?id=<?= $task['id'];?>" 
                                    class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>