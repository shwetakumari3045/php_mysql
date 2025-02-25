<?php 
session_start();
include('connection.php');
$id = $_GET['id'];
$sql = "delete from todos where id=$id";
$result = $conn->query($sql);
if($result==true){
    $_SESSION['msg'] = "Todo has been deleted";
    header('Location:todos.php');
}else{
    $_SESSION['error'] = "Todo can not be deleted";
    header('Location:todos.php');
}
?>