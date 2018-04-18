<?php 
/*File: addDeveloper.php
 * Purpose: Allows Scrum Master to add team members to their team
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
        <!-- Top Navigation Bar -->
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">My Account<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="#">Profile</a>
                    <a href="logout.php">Logout</a>
                </div>

            </div>

            <a href="#">Project</a>

            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Team<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="removeDeveloper.php">Remove Developer</a>
                    <a href="addDeveloper.php">Add Developer</a>
                </div>

            </div>
            
            <a href="ScrumMasterHomePage.php">Home</a>
        </div>

        <section class="content" style="margin-top: 70px">
            <center>
            <form action="addUserToTeam.php" method="POST">
                <input type="text" name="username" placeholder="Username">
                <?php
                    if(!isset($_POST['teamname']))
                    {
                            echo("<select name=\"teamname\">");
                            $teamname = $_SESSION['user']['TID'];
                            $sql = "SELECT * FROM teams WHERE TID = '$teamname'"; 
                            $result = $connection->query($sql);
                        
                            /* Print team (to add user) on screen [in the dropdown menu] */
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
            </form></center>

        </section>
        

    </body>
</html>