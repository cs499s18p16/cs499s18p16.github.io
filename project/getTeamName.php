<?php
/*File: getTeamName.php
 * Purpose: Fetch team name from admin that will be used to create a team.
 *
 * */
    session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>ADD NEW TEAM</title>
        <link rel="stylesheet" href="navbar.css">
    </head>

    <body background="bridge.jpg">

        <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button> <!-- Creating a dropdown bar in the top right corner to allow the admin to manuever through their page -->
            <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="logout.php">Log Out</a>
            </div>
        </div>
        <a href="getUserName.php">Add User to Team</a>
        <a href="adduser.php">Add User</a>
        <a href="getTeamName.php">Add Team</a>
        <a href="Admin.php">Home</a>
        
        </div>
        
        <!--Form which collects the name of the team the Admin wants to create.
            Send the team name to addteam.php, which adds the team to the database. -->
        <form action="addteam.php" method="POST">
            <input type="text" name="teamname" placeholder="Team Name">
            <button type="submit">ADD</button>
        </form> 

    </body>

</html>
