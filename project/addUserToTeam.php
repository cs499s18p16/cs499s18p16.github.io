<?php
/*File: addUserToTeam.php
 * Purpose: add a user to the team by updating the user table entry matching $username 
 *  to reference the team table entry matching $teamname.
 *
 *
 * */
require 'connect.php';
session_start();
   
$teamname = $_POST['teamname']; //team name to add to
$username = $_POST['username']; //username to add to team

$sql = "SELECT * FROM users WHERE email = '$username'"; //query to determine if user exists
$result = $connection->query($sql);

if(!isset($result))
{
	echo $connection->error;
}
else
{
    $row = $result->fetch_assoc();
    if(isset($row))
    {
        $sql = "UPDATE users SET TID = '$teamname' WHERE UID = ". $row['UID'];
        $connection->query($sql);

    }
    header("Location: Admin.php");
}
?>

