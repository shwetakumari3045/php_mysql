<?php
$pageTitle = "Book Todo";
include('header.php');
?>

<?php
session_start();
?>

<div class="bg-white text-dark text-center py-2 px-4 rounded shadow-lg">
    <h1>Book Todo List</h1> 
</div>

<div class="container mt-5 d-flex justify-content-center align-items-center">
  

    <div class="col-md-4">    
    <?php
                if(isset($_SESSION['description'])){
                ?>
                 <div class="mb-3 alert alert-success">
                    <?= $_SESSION['description'] ?>
                </div>
                <?php
                unset($_SESSION['description']);
               }
               ?> 
        <div class="border p-4 rounded shadow-lg">

        <a href="all-todo.php" class="d-block text-center text-dark fw-bolder  fs-5">All Todo</a>

            <form action="add_todo.php" method="POST">
                <div class="form-group fw-bolder fs-5">
                    <label for="title">Book Title:</label>
                    <input type="text" class="form-control mt-2 " name="title" placeholder="Enter book title" required>
                </div>
                <div class="form-group fw-bolder fs-5 mt-4 py-2">
                    <label for="description">Book Description:</label>
                    <textarea class="form-control mt-2" name="description" placeholder="Enter book description" required></textarea>
                </div>
                <button type="submit" class="btn btn-success mt-4">Add Todo</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
  include('footer.php');
?>
