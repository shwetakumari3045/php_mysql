<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select City</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        select, button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
        }

        button {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        label {
            font-size: 16px;
            font-weight: bold;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
    </style>
</head>
<body>

    <h2>Select City</h2>

    <?php 
    include('connection.php');
    $country_id = $_GET['country_id'];
    $state_id =  $_GET['state_id'];
    $sql = "SELECT * FROM cities WHERE country_id = $country_id AND state_id = $state_id";
    $result = $conn->query($sql);
    ?>

    <form method="get" action="submit.php">
        <input type="hidden" name="country_id" value="<?php echo $country_id; ?>"/>
        <input type="hidden" name="state_id" value="<?php echo $state_id; ?>"/>
        <label for="city">Choose a City:</label>
        <select name="city_id" id="city">
            <option value="">Select City</option>
            <?php
            while ($row = mysqli_fetch_object($result)) {
                echo "<option value='$row->city_id'>$row->name</option>";
            }
            ?>
        </select>
        <button type="submit">Submit</button>
        
    </form>

</body>
</html>
