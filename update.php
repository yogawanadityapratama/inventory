<?php

include("connection.php");

$id = $_GET['id'];

$query = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $query = "UPDATE products SET name='$name', description='$description', price=$price, quantity=$quantity WHERE id=$id";
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
    <title>Update</title>
</head>
<body style="margin: 24px 512px 0 512px;">
    <h2>Update</h2>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value="<?= $row['name'] ?>" required><br>

        <label for="description">Description:</label>
        <input type="text" class="form-control" name="description" value="<?= $row['description'] ?>" required><br>

        <label for="price">Price:</label>
        <input type="text" class="form-control" name="price" value="<?= $row['price'] ?>" required><br>

        <label for="quantity">Quantity:</label>
        <input type="text" class="form-control" name="quantity" value="<?= $row['quantity'] ?>" required><br>

        <input type="submit" name="submit" value="Update">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
