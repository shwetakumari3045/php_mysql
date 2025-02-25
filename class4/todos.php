<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include('connection.php');
$sql = "select * from todos order by id asc";
$result = $conn->query($sql); 
?>
<a href="todo.php">Add Task</a>
<?php
    if(isset($_SESSION['error'])){
        echo "<p style='color:red'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }elseif(isset($_SESSION['msg'])){
        echo "<p style='color:#4caf50'>".$_SESSION['msg']."</p>";
        unset($_SESSION['msg']);
    }
    ?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Date_Time</th>
        <th>Action</th>
    </tr>
    <?php 
    while($row=$result->fetch_object()){
        echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->title."</td>";
            echo "<td>".$row->reg_date."</td>";
            echo "<td>
            <a href='edit-todo.php?id=".$row->id."'>Edit</a> | 
            <a href='delete-todo.php?id=".$row->id."' style='color:red'>Deleted</a>
            </td>
            ";
        echo "</tr>";   
    }
    ?>
</table>
</body>
</html>