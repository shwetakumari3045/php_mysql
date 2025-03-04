<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select State</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        select, button {
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            margin-bottom: 10px;
            cursor: pointer;
        }

        button {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        button:hover {
            background-color: #45a049;
        }

        option {
            font-size: 16px;
        }

        .back-btn {
            display: block;
            margin-top: 20px;
            text-align: center;
            background-color: #007bff;
            color: white;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Select a State</h2>
        
        <?php 
        include('connection.php');
        $country_id = $_GET['country_id'];
        $sql = "SELECT * FROM states WHERE country_id = $country_id";
        $result = $conn->query($sql);
        ?>

        <form method="get" action="city.php">
            <input type="hidden" name="country_id" value="<?php echo $country_id; ?>"/>
            <label for="state">Choose a State:</label>
            <select name="state_id" id="state">
                <option value="">Select State</option>
                <?php 
                while($row = mysqli_fetch_object($result)) {
                    echo "<option value='$row->state_id'>$row->name</option>";
                }
                ?>
            </select>
            <button type="submit">Submit</button>
        </form>

        <a href="index.php" class="back-btn">Back to Country</a>
    </div>

</body>
</html>
