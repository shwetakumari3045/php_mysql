<?php
include ("connection.php");

$sql = "CREATE TABLE products(
    product_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,      
    name VARCHAR(255) NOT NULL,      
    description TEXT,                 
    price Float (10) NOT NULL,    
    stock_quantity INT DEFAULT 0,     
    category VARCHAR(100),           
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    
)";
// var_dump($sql);

$conn->query($sql);
?>
