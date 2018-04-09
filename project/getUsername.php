<?php 
/*File: getUsername.php
 * Purpose: Fetch username from admin to add to team.  Will later also be function of SM.
 *
 * */
    require 'connect.php';
    session_start();
?>

<!DOCTYPE html>

<!-- form to take in input from admin/SM-->
<html>
    <title>ADD USER TO TEAM</title>
    <body>
        <form action="addUserToTeam.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <button type="submit">ADD</button>
        </form>
    </body>
</html>
