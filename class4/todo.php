<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create To-Do</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a{
            display: block;
            text-align: center;
            margin: 20px 0;
            color: #007bff;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        th {
            text-align: left;
            padding: 10px;
            color: #555;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        textarea,
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
        p{
            text-align:center;
           
        }
    </style>
</head>
<body>
    <h1>Todo </h1>
    <?php
    if(isset($_SESSION['error'])){
        echo "<p style='color:red'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }elseif(isset($_SESSION['msg'])){
        echo "<p style='color:#4caf50'>".$_SESSION['msg']."</p>";
        unset($_SESSION['msg']);
    }
    ?>
    <a href="todos.php">View All Tasks</a>
    <form action="add-todo.php" method="post">
        <table>
            <tr>
                <th>Title</th>
                <td>
                    <input type="text" name="title" placeholder="Enter your task title" required>
                </td>
            </tr>
            
            <tr>
                <th>Description</th>
                <td>
                    <textarea name="description" placeholder="Enter task description" rows="4" required></textarea>
                </td>
            </tr>

            <tr>
                <th>Due Date</th>
                <td>
                    <input type="date" name="due_date" required>
                </td>
            </tr>
        
            <tr>
                <td></td>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
