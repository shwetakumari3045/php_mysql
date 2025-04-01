<?php
session_start();
include('connection.php');
$title =$_POST['title'];
$description =$_POST['description'];
if(strlen($title)==0){
    $_SESSION['error'] = "The title can not be empty";
    header('Location:todo.php');
die();
}

$sql ="insert into users(Title,Describe) values('$Title,$Describe')";
$result =$conn->query($sql);
if($result==true){
    $_SESSION['description'] = "Todo has been added";
    header('Location:todo.php');
}else{
    $_SESSION['error'] = "Todo can not be created";
    header('Location:todo.php');
}

?>
