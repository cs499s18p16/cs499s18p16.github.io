<?php
    /*
     *File: addproject.php
     Purpose: Fetches new project name from getProjectName.php and inserts it into 'projects' table in database as the attribute 'PID'.
     * */
    require 'connect.php';
    session_start();

    $projectName = $_POST['projectname']; //project name from getProjectName.php
    $uid = $_SESSION['user']['UID']; //username of PO
    $sql = "INSERT INTO projects (PID, PO) VALUES ('$projectName', '$uid')"; //will insert project into project table in database

    if(!$result = $connection->query($sql)){
        echo "$connection->error";
    }
    else{
        header("Location: productOwner.php"); //redirects user back to the PO homepage after creating a new project
    }
?>
