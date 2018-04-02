<?php
session_start();
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$username' AND hashed_password = '$password'";
$result = $connection->query($sql);
if (!$row = mysqli_fetch_assoc($result)){
  echo "Incorrect Username and/or Password! Please try again.";
}
else
{
  $_SESSION['role'] = $row["role"];
   if (isset($_SESSION['role']))
   {
     //echo $_SESSION['role'];
     if ($_SESSION['role'] == 'admin')
     {
       header("Location: Admin.php");
     }
     if ($_SESSION['role'] == 'scrum master')
     {
	 header("Location: ScrumMasterHomePage.php");
     }
   }

}



?>
