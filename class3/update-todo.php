<?php 
session_start();
include('connection.php');
$id = $_POST['id'];
$title = $_POST['title'];
if(strlen($title)==0){
    $_SESSION['error'] = "The title can not be empty";
    header('Location:todo.php');
}
$sql = "update todos set title='$title' where id=$id";
$result = $conn->query($sql);
if($result==true){
    $_SESSION['msg'] = "Todo has been updated";
    header('Location:todos.php');
}else{
    $_SESSION['error'] = "Todo can not be updated";
    header('Location:edit-todo.php?id='.$id);
}
?>