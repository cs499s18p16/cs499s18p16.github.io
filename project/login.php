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
  unset($row['hashed_password']);
  $_SESSION['user'] = array();
  $_SESSION['user'] = $row;
   if (isset($_SESSION['user']['role']))
   {
     //echo $_SESSION['user']['role'];
     if ($_SESSION['user']['role'] == 'admin')
     {
       header("Location: Admin.php");
     }
     if ($_SESSION['user']['role'] == 'scrum master')
     {
	 header("Location: ScrumMasterHomePage.php");
     }
   }

}



?>
