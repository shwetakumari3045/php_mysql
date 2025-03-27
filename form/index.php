
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
   

            <!-- <form action="<?php $_PHP_SELF ?>" method="POST" class="col-sm-6 mx-auto py-5"> -->
            <form action="/form/code.php" method="POST" class="col-sm-6 mx-auto py-5">
                <div class="mb-3">
                    <h1>Contact Form</h1>
                </div>
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
                <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                <label for="">Subject</label>
                <input type="text" name="subject" class="form-control" required>
                </div>
                <div class="mb-3">
                <label for="">Message</label>
                <textarea rows="5" name="msg" class="form-control" id="" required></textarea>
                </div>
                <div class="mb-3">
                    <button  type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
