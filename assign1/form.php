<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Create Product</h1>
        <form action="add_product.php" method="POST">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>

            <label for="stock_quantity">Stock Quantity:</label>
            <input type="number" id="stock_quantity" name="stock_quantity" value="0" required>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

