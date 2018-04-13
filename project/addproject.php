<?php
    /*
     *File: addproject.php
     Purpose: Fetches new project name from getProjectName.php and inserts it into 'projects' table in database as the attribute 'PID'.
     * */
    require 'connect.php';

    $projectName = $_POST['projectname']; //project name from getProjectName.php
    $username = $_SESSION['user']['email']; //username of PO
    $sql = "INSERT INTO projects (PID, PO) VALUES ('$projectName', '$username')"; //will insert project into project table in database

    $result = mysqli_query($connection, $sql);
    $header("Location: productOwner.php"); //redirects user back to the PO homepage after creating a new project

?>
