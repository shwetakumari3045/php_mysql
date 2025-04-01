<?php
session_start();
include('connection.php');

if(isset($_POST['title'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);


if(strlen($title) == 0) {
    $_SESSION['error'] = "The title cannot be empty.";
    header('Location: todo.php');
    die();
}

// print_r(  $title);
//     print_r(  $description);
//     die();


$sql = "insert into users(Title,`Descrpition`) values('$title','$description')";
  

    $result = $conn->query($sql);
    
    if ($result == true) {
        $_SESSION['description'] = "Submit success";
        header('Location: todo.php');
    } else {
        $_SESSION['error'] = "Todo cannot be created.";
        header('Location: todo.php');
    }
}
?>