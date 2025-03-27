<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Name and Text Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
               if(isset($_SESSION['msg'])){
                ?>
                 <div class="mb-3 alert alert-success">
                    <?= $_SESSION['msg'] ?>
                </div>
                <?php
                unset($_SESSION['msg']);
               }
               ?>
    <div class="container">
        <div class="border p-4 rounded mt-5" style="max-width: 400px;">
            <h2>Forms</h2>
            <form action="/todo/code.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Text:</label>
                    <textarea class="form-control" id="" name="msg" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
