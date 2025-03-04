<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin: 10px 0;
        }

        .location-info {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .location-info h1 {
            font-size: 26px;
            color: #2C3E50;
        }

        .location-info .location-item {
            font-size: 18px;
            margin: 15px 0;
            color: #34495E;
            font-weight: 500;
        }

        .location-info .location-item span {
            font-weight: 700;
            color: #2C3E50;
        }

        .back-btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <?php
    include 'connection.php';
    $country_id = $_GET['country_id'];
    $state_id = $_GET['state_id'];
    $city_id = $_GET['city_id'];

    $country_sql = "SELECT * FROM countries WHERE country_id = $country_id";
    $state_sql = "SELECT * FROM states WHERE state_id = $state_id";
    $city_sql = "SELECT * FROM cities WHERE city_id = $city_id";

    $country_result = $conn->query($country_sql);
    $state_result = $conn->query($state_sql);
    $city_result = $conn->query($city_sql);

    $country = mysqli_fetch_object($country_result);
    $state = mysqli_fetch_object($state_result);
    $city = mysqli_fetch_object($city_result);
    ?>

    <div class="location-info">
        <h1>Location Details</h1>
        <div class="location-item">
            <strong>Country:</strong> <span><?php echo $country->name; ?></span>
        </div>
        <div class="location-item">
            <strong>State:</strong> <span><?php echo $state->name; ?></span>
        </div>
        <div class="location-item">
            <strong>City:</strong> <span><?php echo $city->name; ?></span>
        </div>

        <a href="country.php" class="back-btn">Go Back</a>
    </div>

</body>
</html>
