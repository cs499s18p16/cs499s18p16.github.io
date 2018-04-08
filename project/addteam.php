<?php
   if(!$_SESSION['login']){
     header("Location: index.php"); // conditional logic to confirm user has logged in and cannot access certain pages directly
     die;
   }
   else {
     session_start();
   }
?>
<!DOCTYPE html>

<html>
<!--Simple HTML page to allow admin to add a new team to the Scrum database. All info needed will be placed into the text boxes and submitted sent to the databse-->

    <head>
        <meta charset="utf-8">
        <title>ADD NEW TEAM</title>
    </head>

    <form action="add_to_team.php" method="POST">
        <input type="text" name="teamname" placeholder="Team Name">
        <button type="submit">ADD</button>
    </form>
</html>
