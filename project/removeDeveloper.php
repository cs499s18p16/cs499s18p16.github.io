<?php
/*File: removeDeveloper.php
 * Purpose: Allows Scrum Master to remove team members from their team
 *
 * */
    require 'connect.php';
    session_start();
?>

<!DOCTYPE HTML>
<html>

    <head>
	<meta charset="utf-8">
    <title>ADD TEAM MEMBER</title>
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
            <table border=1 width=35% align=center bgcolor="#101721" style="color: #ffffff">
                <tr>
                    <th>Team Members</th><th>Remove</th> <!-- Creating the table seen by the admin that will display all the teams on the Scrum database and giving them the option to edit/remove teams if needed -->
                </tr>

                <?php
                    $teamname = $_SESSION['user']['TID'];
                    $sql = "SELECT * FROM users WHERE TID = '$teamname'"; //query to determine if user exists
                    $result = $connection->query($sql);

                    if(isset($result))
                    while($row = $result->fetch_assoc())
                    {
                        $email=$row['email'];
                        echo("<tr style=\"height: 50px\">");
                        echo("<td align=center class=open>$email</td>");
                        echo("<td align=center class=open>");
                        echo("<button type=\"submit\" name=\"username\" value=\"$email\">");
                        echo("Remove </button></td></tr>");
                    }
                ?>
            </table>
        </section>

    </body>

</html>