<?php
$pageTitle = "Book Todo";
include('header.php');
?>
<?php
session_start();
?>
  
  <?php
                if(isset($_SESSION['description'])){
                ?>
                 <div class="mb-3 alert alert-success ">

                    <?= $_SESSION['description'] ?>
                </div>
                <?php
                unset($_SESSION['description']);
               }
               ?> 

  <form action="result.php" method="POST">
  <div class="form-group fw-bolder fs-5">

<div class="container  mt-5" style="height: 100vh;">
<h1>Enter The Text To Analyze Below</h1> 
        <div class="d-flex justify-content-center align-items-center h-400">
            <textarea class="form-control" rows="10" name="description" placeholder="Type here..."></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Add Todo</button>
    </div>

</form>
   
    
