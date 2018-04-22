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

//if the user doesn't exist, report error
if(!isset($result))
{
	echo $connection->error;
}
else //else, update the user's row in the user table to reference the TID (team ID) of the team chosen to add to
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

