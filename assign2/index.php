<?php
include('connection.php');
$sql = "create database orders";
// var_dump($sql);
$result = $conn->query($sql);
var_dump($result);

?>