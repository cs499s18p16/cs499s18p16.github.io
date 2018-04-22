<?php
    /*
     *File: assignProject.php
     Purpose: For a PO to assign a project to an existing team. This action consists of updating the 'PID' foreign key in the 'teams' table in the database
     to point to a specific project in the 'projects' table.
     * */

    require 'connect.php';
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
    <title>ADD PROJECT TO TEAM</title>
    <link rel="stylesheet" href="navbar.css">
    </head>

    <body background="bridge.jpg">

    <!--Menus of the Navigation bar at top of page -->    
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">My Account<i class="fa far-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="logout.php">Log Out</a>
            </div>
        </div>
    
        <a href="productOwner.php">Home</a>
    </div>
    
    <!--Form that collects the project name to assign, and the team to assign the project to.
        Sends the to assTeamToProject.php, which uses them to update the database. -->
    <form action="addTeamToProject.php" method="POST">
        <input type="text" name="teamname" placeholder="Team Name">
        <input type="text" name="projectname" placeholder="Project Name">
        <button type="submit">ADD</button>
    </form>

    
    </body>
</html>
