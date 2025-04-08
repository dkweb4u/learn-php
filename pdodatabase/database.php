<?php

$dsn = "mysql:host=localhost;dbname=product_db;charset=utf8";
$pdo = new PDO($dsn, "root","", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$sql = "
CREATE TABLE IF NOT EXISTS product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
";
$pdo->exec($sql);


// GET DATA

$data = $pdo->query("SELECT * FROM product");

$products = $data->fetchAll(PDO::FETCH_ASSOC);

// PREPARE

$sql = "SELECT * FROM $this->table WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(":id", $id, PDO::PARAM_INT);

$stmt->execute();

return $stmt->fetch(PDO::FETCH_ASSOC);

// INSERT DATA
$sql = "INSERT INTO $this->table (propertytype,pname) VALUES (?,?)";
 
$stmt = $pdo->prepare($sql);

$stmt->bindValue(1,$data["propertytype"], PDO::PARAM_STR);

$stmt->bindValue(2,$data["pname"], PDO::PARAM_STR);    

return  $stmt->execute();

// UPDATE DATA

$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";

// Prepare the statement
$stmt = $pdo->prepare($sql);

// Bind parameters
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':id', $id);
$stmt->execute();

// DELETE DATA 
$sql = "DELETE FROM users WHERE id = :id";