<?php
require 'connect.php';

$teamname = $_POST['teamname'];
$username = $_POST['username'];

$sql = "SELECT * FROM users WHERE email=$username";

if($sql != NULL){
    $sql = "INSERT INTO users (TID) VALUES ($teamname)";
}
else{
    echo "Team does not exist!";
}
?>

