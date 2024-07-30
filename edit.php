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


// update request
// ==============
if(isset($_POST['update'])){
    $title = htmlspecialchars($_POST['title'] ?? '');
    $body = htmlspecialchars($_POST['body'] ?? '');
    $sql = 'UPDATE posts SET title = :title, body = :body WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $params = [
        'title' => $title,
        'body'  => $body,
        'id'   => $id
    ];

    $stmt->execute($params);

    header("Location: index.php");

    exit;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit Post</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="hidden" class="form-control"  value="<?=$post['id']?>" name="id">
      <input type="text" class="form-control" id="title" placeholder="Enter title" value="<?=$post['title']?>" name="title">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <input type="text" class="form-control" id="body" placeholder="Enter body" value="<?=$post['body']?>" name="body">
    </div>
    <button type="submit" name="update" class="btn btn-success">Update</button>
    <a href="index.php" class="btn btn-default"> Go back </a>
  </form>
</div>

</body>
</html>