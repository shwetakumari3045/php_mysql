<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Selector</title>
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
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h2>Select a Country</h2>

    <?php
    include('connection.php');
    $sql = "SELECT * FROM countries";
    $result = $conn->query($sql);
    ?>
  
    <form action="state.php" method="get">
        <label for="country">Choose a country:</label>
        <select name="country_id">
            <option value="">Select Country</option>
            <?php
            while($row = mysqli_fetch_object($result)) {
                echo "<option value='$row->country_id'>$row->name</option>";
            }
            ?>
        </select>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
