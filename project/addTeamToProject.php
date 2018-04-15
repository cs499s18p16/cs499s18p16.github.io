<?php
    /*
     *File: addProjectToTeam.php
     Purpose: to associate an existing team with a project by updating the team's row in the 
     teams table of the database to reference the project's PID in the projects table.
     * */

    require 'connect.php';
    session_start();
    
    $teamname = $_POST['teamname'];
    $projectName = $_POST['projectname'];

    //TODO: must make sure that both the team and project names given exist in the database before performing the update operation

    $sql = "UPDATE teams SET PID='$projectName' WHERE teams.TID='$teamname'";

    $result = mysqli_query($connection, $sql);
    header("Location: productOwner.php");
?>

