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
	<head>
	<meta charset="utf-8">
    <title>ADD USER TO TEAM</title>
	<link rel="stylesheet" href="navbar.css">
	</head>

    <body background="bridge.jpg">


	<div class="navbar">
		<div class="dropdown">
			<button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button> <!-- Creating a dropdown bar in the top right corner to allow the admin to manuever through their page -->
			<div class="dropdown-content">
				<a href="#">Profile</a>
				<a href="adduser.php">Add User</a>
				<a href="getTeamName.php">Add Team</a>
				<a href="logout.php">Log Out</a>
			</div>
		</div>
		<a href="Admin.php">Home</a>
	</div>

    <form action="addUserToTeam.php" method="POST">
        <input type="text" name="username" placeholder="Username">
	    <?php
                if(!isset($_POST['teamname']))
                {
                        echo("<select name=\"teamname\">");
                        $sql="SELECT * FROM teams"; /* Team table in the database */
                        $result = $connection->query($sql);
                     
                        /* Print all team names on screen [in the dropdown menu] */
                        while($row = $result->fetch_assoc())
                        {
                                $TID=$row['TID'];
                                echo("<option value=\"$TID\">$TID</option>");
                        }
                
                        echo("</select>");
                }
                else
                {
                        echo("<input type=\"hidden\" name=\"teamname\" value=\"".$_POST['teamname']."\">");
                }
        ?>
        <button type="submit">ADD</button>
    </form>

	<p>

	</p>
    </body>
</html>
