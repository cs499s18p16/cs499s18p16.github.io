<<?php
include 'connect.php';

$ID = $_POST['userid'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "INSERT INTO roles (ID, username, password, role) VALUES ('$ID', 'Username', 'Password', 'Role')";
$result = mysqli_query($conn, $sql);
header("Location: admin.php");
 ?>
