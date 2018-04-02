<?php
require 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "INSERT INTO users (email, hashed_password, role) VALUES ('$username', '$password', '$role')";
$result = mysqli_query($connection, $sql);
header("Location: Admin.php");
 ?>
