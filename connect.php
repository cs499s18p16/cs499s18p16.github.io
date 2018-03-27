<?php
$host = "localhost";
$username = "root";
$password = "";
$role = "";
$db = "scrum";
$table = "roles";

//create connection

$connection = mysqli_connect($host,$username,$password,$db);
if (!$connection){
  die("Database Connection Failed:" . mysqli_connect_error());
}
$select_db = mysqli_select_db($connection, $db);
if(!$select_db){
  die("Database Selection Failed" . mysqli_error($connection));
}
?>
