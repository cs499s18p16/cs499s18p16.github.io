<?php
    session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>ADD NEW TEAM</title>
    </head>

    <form action="addteam.php" method="POST">
        <input type="text" name="teamname" placeholder="Team Name">
        <button type="submit">ADD</button>
    </form> 
</html>
