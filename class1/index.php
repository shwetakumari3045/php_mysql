<?php
include('connection.php');

 $sql = "create database admin";
 var_dump($sql);
 
  $result = $conn->query($sql);
  // var_dump($result);


?>