<?php
include('connection.php');
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock_quantity = $_POST['stock_quantity'];
$category = $_POST['category'];


$sql = "INSERT INTO products (name, description, price, stock_quantity, category) 
        VALUES ('$name', '$description', '$price', '$stock_quantity', '$category')";

$result = $conn->query($sql);

if($result == true){
    header('Location: form.php');
}else{
    echo "Error: " . $conn->error; 
}
?>

