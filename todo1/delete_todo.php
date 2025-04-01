<?php 
session_start();
include("connection.php");

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']); 
 
    $sql = "delete from users where id='$id'";


    
    // Execute the query
    $result = $conn->query($sql);
    
    if ($result == true) {
        $_SESSION['description'] = "Delete success";
        header('Location: todo.php');
    } else {
        $_SESSION['error'] = "Todo cannot be Deleted.";
        header('Location: todo.php');
    }
}
?>
