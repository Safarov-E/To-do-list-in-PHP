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
                <h1>Edit Task</h1>
                    <form action="update.php?id=<?= $task['id'];?>" method="post">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" value="<?= $task['title'];?>">
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control"><?= $task['content'];?></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning" type="submit">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>