<?php
    require 'connect.php';

    $teamname = $_POST['teamname'];
    $sql = "INSERT INTO teams (TID) VALUES ('$teamname')";

    $result = mysqli_query($connection, $sql);
    header("Location: Admin.php");

?>

