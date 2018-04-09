<?php
<<<<<<< HEAD
    /*File: addteam.php
     * Purpose: Fetches team name input by user in getTeamName.php
     * and inserts it into 'teams' table in database as the attribute 'TID'.
    */
    
    require 'connect.php';

    $teamname = $_POST['teamname']; //team name from getTeamName.php
    $sql = "INSERT INTO teams (TID) VALUES ('$teamname')"; //insert operation into database

    $result = mysqli_query($connection, $sql);
    header("Location: Admin.php"); //redirects the user back to the Admin homepage after successful insert

?>

=======
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
>>>>>>> eda82c041bf0c6bdaa9a8e14fd3b8e0192bca353
