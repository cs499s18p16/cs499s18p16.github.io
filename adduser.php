<<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ADD NEW USER</title>
</head>
<body>
  <form action="signup.php"method="POST">
    <input type="text" name="userid" placeholder="ID (1-5)">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="role" placeholder="Role">
    <button type="submit">ADD</button>
  </form>
</html>
