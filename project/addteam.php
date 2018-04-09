<?php
    /*File: addteam.php
     * Purpose: Fetches team name input by user in getTeamName.php
     * and inserts it into 'teams' table in database as the attribute 'TID'.
    */
    
    require 'connect.php';

    $teamname = $_POST['teamname']; //team name from getTeamName.php
    $sql = "INSERT INTO teams (TID) VALUES ('$teamname')"; //insert operation into database

    $result = mysqli_query($connection, $sql);
    header("Location: Admin.php"); //redirects the user back to the Admin homepage after successful insert

?>

