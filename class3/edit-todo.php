<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <h1></h1>
    <?php
    include('connection.php');
    $id = $_GET['id'];
    $sql = "select * from todos where id=".$id;
    $result = $conn->query($sql);
    $todo = $result->fetch_object();
    
    if(isset($_SESSION['error'])){
        echo "<p style='color:red'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }elseif(isset($_SESSION['msg'])){
        echo "<p style='color:#4caf50'>".$_SESSION['msg']."</p>";
        unset($_SESSION['msg']);
    }
    ?>
    <a href="todos.php">All Task</a>
    <hr>
    <h2>Edit Task</h2>
    <form action="update-todo.php" method="post">
    <input type="hidden" name="id" value="<?php  echo $id; ?>">
    <table>
        <tr>
            <th>Title</th>
            <td>
                <input type="text" name="title" placeholder="Enter something" value="<?php echo $todo->title; ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Update todo</button>
            </td>
        </tr>
    </table> 
    </form>
</body>
</html>