<?php
include("connection.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO products (name, description, price, quantity) VALUES ('$name', '$description', $price, $quantity)";
    mysqli_query($connection, $query);

    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Create</title>
</head>
<body style="margin: 24px 512px 0 512px;">
    <h2 style="text-align: center;">Create</h2>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Name" name="name" required><br>

        <label for="description">Description:</label>
        <input type="text" class="form-control" placeholder="Description" name="description" required><br>

        <label for="price">Price:</label>
        <input type="text" class="form-control" placeholder="Price" name="price" required><br>

        <label for="quantity">Quantity:</label>
        <input type="text" class="form-control" placeholder="Quantity" name="quantity" required><br>

        <input class="btn btn-primary" type="submit" name="submit" value="Create">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
