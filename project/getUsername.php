<?php 
    require 'connect.php';
    session_start();
?>

<!DOCTYPE html>

<html>
    <title>ADD USER TO TEAM</title>
    <body>
        <form action="addUserToTeam.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <button type="submit">ADD</button>
        </form>
    </body>
</html>
