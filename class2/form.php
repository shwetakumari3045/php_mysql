<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 100%;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }
        .gender-options {
            display: flex;
            gap: 10px; 
            margin-bottom: 15px; 
        }

        .gender-options label {
            font-size: 14px;
            color: #555;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        </style>
</head>
<body>

<form action="form_action.php" method="post">
    <input type="text" name="name" placeholder="Enter your name" required />
    <br>
    <input type="email" name="email" placeholder="Enter your email" required />
    <br>
    <input type="tel" name="phone" placeholder="Enter your phone no." required />
    <br>
    
    <label>Gender:</label>
    <div class="gender-options">
        <label><input type="radio" name="gender" value="male" /> Male</label>
        <label><input type="radio" name="gender" value="female" /> Female</label>
    </div>
    
    <input type="number" value="1" name="status" max="1" min="1" />
    <br>
    <input type="datetime-local" name="dob" />
    <br>

    <button>Submit</button>
</form>
</form>
</body>
</html>