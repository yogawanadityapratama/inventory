<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM products WHERE id=$id";
mysqli_query($connection, $query);

header("Location: read.php");
exit;
?>