<?php
require 'database.php';

$id = $_GET['id'] ?? null;

if(!$id){
    header('Location: index.php');
    exit;
}

$sql = 'SELECT * FROM posts WHERE id = :id';

$stmt = $pdo->prepare($sql);

$params = ['id' => $id];

$stmt->execute($params);

$post = $stmt->fetch();

//  delete data

if(isset($_POST['delete'])){

    $id = $_POST['id'];

    $sql = 'DELETE FROM posts WHERE id = :id';

    $stmt = $pdo->prepare($sql);

    $params = ['id' => $id];

    $stmt->execute($params);

    header("Location:index.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>PDO Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container ">            

<div class="card" style="margin: 20px;">
  <div class="card-header"><?= $post['id'] . " " . $post['title'] ?></div>
  <div class="card-body"><?=  $post['body'],"<br>", date("d-M-y",strtotime($post['created_at']))?></div>
  <div class="card-footer"><a href="index.php">Go back</a></div>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
  <a href="edit.php?id=<?= $post['id'] ?>" class="btn btn-success m-4" >Edit</a>
  <button class="btn btn-danger" name="delete">Delete</button>
</form>

</div>

</div>

</body>
</html>
