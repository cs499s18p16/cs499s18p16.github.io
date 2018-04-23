<?php
    /*
     *File: addproject.php
     Purpose: Fetches new project name from getProjectName.php and inserts it into 'projects' table in database as the attribute 'PID'.
     * */
    //require 'connect.php';
    session_start();

    //$mhours = $_POST['m_hours'];
  //  $thours = $_POST['t_hours']
    /*$whours = $_POST['whours']
    $trhours = $_POST['tr_hours']
    $fhours = $_POST['f_hours']
    $tothours = $mhours + $thours + $whours + $trhours + $fhours;
    $tid = $_SESSION['user']['TID']; //username of team developer
    $sql = "INSERT INTO team (TID, availability) VALUES ('tid','$tothours')"; //will insert project into project table in database

    if(!$result = $connection->query($sql)){
        echo "$connection->error";
    }
    else{
    }
    */
    header("Location: teamMember.php"); //redirects user back to the PO homepage after creating a new project
?>
