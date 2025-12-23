<?php
require_once 'config/db_mysqli.php';




$name = trim($_POST['name']);
$description = trim($_POST['description']);
$price = $_POST['price'];
$quantity = $_POST['quantity'];


$sql ='INSERT INTO products (name , description ,price ,quantity) VALUES(? , ? , ? , ?)';

$stmt = mysqli_prepare($conn ,$sql);
mysqli_stmt_bind_param($stmt , "ssii" , $name , $description , $price , $quantity);
mysqli_execute($stmt);


echo "<script>location.href='products.php'</script>"


?>