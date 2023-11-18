<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "inventory";

$connection = mysqli_connect($host, $user, $pass, $dbname);

if (!$connection) {
    die("Connection erorr!: " . mysqli_connect_error());
}
?>