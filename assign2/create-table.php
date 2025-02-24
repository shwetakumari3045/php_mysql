<?php
include('connection.php');
$sql = "CREATE TABLE orders(
    order_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    customer_id INT NOT NULL,
    order_date DATE NOT NULL,
    total_amount float NOT NULL,
    status VARCHAR(50) DEFAULT 'pending'
)";

// var_dump($sql);
$conn->query($sql);
?>