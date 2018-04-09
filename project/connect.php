<?php
/*
This file is used to connect the web application to the mysql server.
The first four variables: "host", "username", "password", and "db" are
changed to reflect whatever host, username, password and database name
are used with the implementation.
*/

$host = "mysql.cs.uky.edu";
$username = "jtpo224"; // variable to use for logging into the multilab server where the database is located
$password = "u0895474";
$db = "jtpo224";

//create connection between the database and the web app

$connection = mysqli_connect($host,$username,$password,$db);
if (!$connection){
  die("Database Connection Failed:" . mysqli_connect_error()); // conditional statement to ensure successful connection between web app and database hosted on multilab servers
}
$select_db = mysqli_select_db($connection, $db);
if(!$select_db){
  die("Database Selection Failed" . mysqli_error($connection));
}
?>
