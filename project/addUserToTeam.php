<?php
/*File: addUserToTeam.php
 * Purpose: add a user to the team by updating the user table entry matching $username 
 *  to reference the team table entry matching $teamname.
 *
 *
 * */
require 'connect.php';

$teamname = $_POST['teamname']; //team name to add to
$username = $_POST['username']; //username to add to team

$sql = "SELECT * FROM users WHERE email=$username"; //query to determine if user exists

//if user does exist, update user's TID --> $teamname
if($sql != NULL){
    $sql = "INSERT INTO users (TID) VALUES ($teamname)";
}
//else, user cannot be added because they do not exist
else{
    echo "User does not exist!";
}
?>

