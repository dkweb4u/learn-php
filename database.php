<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "blog";


$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

try{
    // create PDO to instance
    $pdo = new PDO($dsn,$user,$pass);

    // set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // set fetch funtion enable in pdo
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo 'Database Connected...';

}
catch(PDOException $e){
// If there is an error, catch it here
echo 'Connection Failed: '. $e->getMessage();
}

