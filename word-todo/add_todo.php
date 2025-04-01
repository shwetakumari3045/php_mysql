<?php 
session_start();
include("connection.php");

if (isset($_POST['description'])) {
    $description = mysqli_real_escape_string($conn, $_POST['description']);


    if (strlen($description) == 0) {
        $_SESSION['error'] = "Th$description cannot be empty.";
        header('Location: todo.php');
        die();
    }
 
    // print_r( $description);
    // die();

   
    $sql = "insert into users(`Description`) values('$description')";
  

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
