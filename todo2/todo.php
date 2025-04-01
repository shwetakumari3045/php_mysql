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

?>

<div class="container mt-5">
    <h2>TODO List</h2>

    <form action="add_todo.php" method="POST">
        <div class="form-group">
            <label for="title">Task Title:</label>
            <input type="text" class="form-control"  name="title" placeholder="Enter your name" required>
        </div>
        <div class="form-group mt-4">
            <label for="description">Task Description:</label>
            
            <textarea class="form-control" name="description"placeholder="Enter your description" required></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-4">Submit</button>
    </form>

    <hr>
    <hr>
  <!-- display table -->

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
