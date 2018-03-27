<?php
session_start();
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM roles WHERE username = '$username' AND password = '$password'";
$result = $connection->query($sql);
if (!$row = mysqli_fetch_assoc($result)){
  echo "Incorrect Username and/or Password! Please try again.";
}
else{
  $_SESSION['ID'] = $row['ID'];
   if (isset($_SESSION['ID'])){
     //echo $_SESSION['ID'];
     if ($_SESSION['ID'] = '1'){
       header("Location: Admin.html");
     }
   }

}



?>
