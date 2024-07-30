<?php 

require 'database.php';

// prepare a select satement

$stmt = $pdo->prepare('SELECT * FROM posts');

//  Execute the satement
$stmt->execute();

$posts = $stmt->fetchAll();

$keys = array_keys($posts[0]);

// foreach ($posts as $post) {
  
// }

// print_r($posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PDO Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container " >            

  <a href="create.php" class="btn btn-primary"  style="margin-top: 30px;">Create Post</a>
  <table class="table table-bordered " style="margin-top: 20px;">
    <thead>
        
      <tr>
    
<?php foreach ($keys as $key): ?>
<th> <?= $key ?> </th>
<?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post) : ?>
      <tr>
        <td><a href="post.php?id=<?=$post['id'] ?>"><?= $post['id'] ?></a></td>
        <td><?= $post['title'] ?></td>
        <td><?= $post['body'] ?></td>
        <td><?= date("d-M-y",strtotime($post['created_at'])) ?></td>
      </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</div>

</body>
</html>
