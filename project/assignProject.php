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
    <title>ADD PROJECT TO TEAM,/title>
    <link rel="stylesheet" href="navbar.css">
    </head>

    <body background="bridge.jpg">
    
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

    
    </body>
</html>
