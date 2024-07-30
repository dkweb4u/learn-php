<?php
require 'database.php';

if(isset($_POST['submit'])){
    $title = htmlspecialchars($_POST['title']);
    $body = htmlspecialchars($_POST['body']);

    $sql = 'INSERT INTO posts(title,body) VALUES (:title, :body)';

    $stmt = $pdo->prepare($sql);

    $params = [
        'title' => $title,
        'body'  => $body
    ];

    $stmt->execute($params);

    header("Location:index.php");

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
  <h2>Create Post</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <input type="text" class="form-control" id="body" placeholder="Enter body" name="body" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="index.php" class="btn btn-default"> Go back </a>
  </form>
</div>

</body>
</html>
