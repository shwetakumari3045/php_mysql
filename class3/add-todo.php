<?php
session_start();
include('connection.php');
$title =$_POST['title'];
if(strlen($title)==0){
    $_SESSION['error'] = "The title can not be empty";
    header('Location:todo.php');    
die();
}
$sql = "insert into todos(title) values('$title')";
$result = $conn->query($sql);
if($result==true){
    $_SESSION['msg'] = "Todo has been added";
    header('Location:todo.php');
}else{
    $_SESSION['error'] = "Todo can not be created";
    header('Location:todo.php');
}


?>