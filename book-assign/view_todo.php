<?php
$pageTitle = "Book Todo";
include('header.php');
?>

<?php 
session_start();
include("connection.php");

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']); 
    $sql = "DELETE FROM users WHERE id='$id'";

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

<?php
include('connection.php');
$sql = "SELECT * FROM users";
$result = $conn->query($sql); 
?>

<div class="container mt-5">
    <div class="border p-4 rounded shadow-lg">
        <h3>All Todos</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows > 0) {
                    while($row = $result->fetch_object()) {
                ?>
                    <tr>
                        <td> <?=$row->id?> </td>
                        <td> <?=$row->Title?> </td>
                        <td> <?=$row->Description?> </td>
                        <td>
                           <!-- delete the todo - -->
                            <form action="delete_todo.php" method="POST">
                                <input type="hidden" name="id" value="<?=$row->id?>">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <!-- Button, modal-->
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$row->id?>">
                                Update
                            </button>
                            
                            <!-- Modal updating-->
                            <div class="modal fade" id="exampleModal<?=$row->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Todo</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Update Form -->
                                            <form action="update_todo.php" method="POST">
                                                <input type="hidden" name="id" value="<?=$row->id?>">
                                                <div class="form-group">
                                                    <label for="title">Task Title:</label>
                                                    <input type="text" class="form-control" name="title" value="<?=$row->Title?>" required>
                                                </div>
                                                <div class="form-group mt-4">
                                                    <label for="description">Task Description:</label>
                                                    <textarea class="form-control" name="description" required><?=$row->Description?></textarea>
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
                    }
                } else {
                    echo "<tr><td colspan='5'>No tasks found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include('footer.php');
?>
