<?php
// this file is to allow for new users to register onto the scrum tool by providing a username, password, and role for the database
require 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "INSERT INTO users (email, hashed_password, role) VALUES ('$username', '$password', '$role')"; //MySQL query to insert all information provided into the database
$result = mysqli_query($connection, $sql);
header("Location: Admin.php"); // redirect back to the admin page once the code has ran
 ?>
