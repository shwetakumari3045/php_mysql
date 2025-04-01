<?php
$pageTitle = "Word Todo";
include('header.php');
?>
<?php
session_start();

if(isset($_POST['description'])){
    $desc = $_POST['description'];

    $upper = strtoupper($desc);
    $lower = strtolower($desc);
    $word = ucwords($desc);  
    $count = str_word_count($desc);
}
?>

<div class="container my-5">
    <div class="border p-4 rounded-3 shadow-sm">
        <h1 class="text-center">Your Data is: <?= $desc ?> </h1>
        <hr>

        <div class="card mb-3">
            <h5 class="card-header text-center">Upper Case</h5>
            <div class="card-body">
                <p class="card-text text-center"><?= $upper ?></p>
            </div>
        </div>

        <div class="card mb-3">
            <h5 class="card-header text-center">Lower Case</h5>
            <div class="card-body">
                <p class="card-text text-center"><?= $lower ?></p>
            </div>
        </div>

        <div class="card mb-3">
            <h5 class="card-header text-center">Word</h5>
            <div class="card-body">
                <p class="card-text text-center"><?= $word ?></p>
            </div>
        </div>

        <div class="card mb-3">
            <h5 class="card-header text-center">Word Count</h5>
            <div class="card-body">
                <p class="card-text text-center"><?= $count ?></p>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
