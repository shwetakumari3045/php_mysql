<?php
include('connection.php');
$sql ="create database products";
// var_dump($sql); 
$result = $conn->query($sql);
var_dump($result);
// ?>