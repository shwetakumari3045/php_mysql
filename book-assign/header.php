<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link {
            padding: 10px;
         font-size:20px;
            font-weight: bold;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
        
            <a class="navbar-brand" href="#">
                <img src="./image/books.png" alt="Logo" width="40px" >
            </a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="header.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="todo.php" class="nav-link">Create</a>
                </li>
              
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

