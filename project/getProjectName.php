<!-- 
File: getProjectName.php
Purpose: Fetch project name from the product owner, which will be used to add a project
to the tool and a team.
-->

<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
    <title>ADD PROJECT</title>
    <link rel="stylesheet" href="navbar.css">
    </head>

    <body background="bridge.jpg">

    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="logout.php">Log Out</a>
            </div>
        </div>
        <a href="#">Home</a>
    </div>

    <form action="addproject.php" method="POST">
        <input type="text" name="projectname" placeholder="Project Name">
        <button type="submit">ADD</button>
    </form>
</html>
