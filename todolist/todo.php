<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
include('connection.php');
$sql = "select * from users";
$result = $conn->query($sql); 
// var_dump($result);
?>


<div class="bg-white text-dark text-center py-2 px-4 rounded shadow-lg">
    <h1>Todo List</h1> <!-- display-3 for large header -->
  </div>

<div class="container mt-5">



    <form action="add_todo.php" method="POST">
        <div class="form-group fw-bolder fs-5">
            <label for="title">Title:</label>
            <input type="text" class="form-control mt-2"  name="title" placeholder="Enter your name" required>
        </div>
        <div class="form-group fw-bolder fs-5 mt-4 py-2">
            <label for="description">Description:</label>
            
            <textarea class="form-control mt-2" name="description"placeholder="Enter your text" required></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-4">Add Todo</button>
    </form>

    <hr>
    <hr>
 

    <h3>All Todos</h3>
    <table border="1" cellpadding="10" cellspacing="0" class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Desciption</th>
        <th>Action</th>
        <th>Update</th>
    </tr>
    <?php 
    if ($result->num_rows > 0) {
    while($row=$result->fetch_object()){

        ?>
        <tr>
            <td> <?=$row->id?> </td>
            <td> <?=$row->Title?> </td>
            <td> <?=$row->Descrpition?> </td>
            <td> 
              <form action="delete_todo.php"  method="POST">
                <input type="hidden" name="id" value="<?=$row->id?>">
              <button  type="submit" class="btn btn-sm btn-danger">Delete </button>   
              </form>     
        </td>
        <td> 
              <button type="submit" class="btn btn-info btn-warning"data-bs-toggle="modal" data-bs-target="#exampleModal<?=$row->id?>">Update</button>
              <div class="modal fade" id="exampleModal<?=$row->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="update_todo.php" method="POST">
      <input type="hidden" class="form-control"  name="id" value="<?=$row->id?>" >

        <div class="form-group">
            <label for="title">Task Title:</label>
            <input type="text" class="form-control"  name="title" value="<?=$row->Title?>" placeholder="Enter your name" required>
        </div>
        <div class="form-group mt-4">
            <label for="description">Task Description:</label>
            
            <textarea class="form-control" name="description" value="<?=$row->Description?>" placeholder="Enter your text" required></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-4">Submit</button>
    </form>
      </div>
     
    </div>
  </div>
</div>
        </td>
        </tr>
        
        <?php
        // echo "<tr>";
        // // echo "dasdsa";
        //     echo "<td>".$row->id."</td>";
        //     echo "<td>".$row->Title."</td>";
        //     echo "<td>".$row->Describe."</td>";
        //     echo "<td>";
        // echo "</tr>"; 
    } 
    }else {
        echo "<tr><td colspan='4'>No tasks found</td></tr>";
    }
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
