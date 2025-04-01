<?php
session_start();
include("connection.php");

if(isset($_POST['id'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

  
    // print_r($title);

    $sql = "update users set Title = '$title', `Descrpition` = '$description' WHERE id = $id";
     $result =$conn->query($sql);

$result =$conn->query($sql);
if ($result == true) {
    $_SESSION['description'] = "Submit success";
    header('Location: todo.php');
} else {
    $_SESSION['error'] = "Todo cannot be created.";
    header('Location: todo.php');
}

}




?>


    