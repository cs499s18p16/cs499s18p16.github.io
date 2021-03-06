<!-- 
File: productOwner.php
Purpose: Fetch all the project names and dynamically populate the projects table 
        found on the PO's home page
-->

<?php
    require 'connect.php';
    session_start();
    if(!isset($_SESSION['user']['role'])||$_SESSION['user']['role'] != 'product owner')
    {
	    header("Location: index.php"); // conditional logic to confirm user has logged in and cannot access certain pages directly
        die;
    }
?>

<!DOCTYPE html>
<!--This is HTML code to layout the landing page for the Product Owner, which is linked to a CSS style sheet -->
<html>

  <head>
    <meta charset="utf-8">
    <title>Welcome | Home Page</title>
    <link rel="stylesheet" href="navbar.css">

  </head>

  <body background="twocars.jpg">

  <!--Navigation bar at top of page which gives the PO the menu options My Account, Profile, Logout, Assign Projec to Team, Add Project, and Home. --> 
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="#">Profile</a>
        <a href="logout.php">Log Out</a>
      </div>
    </div>
    <a href="assignProject.php">Assign Project to Team</a>
    <a href="getProjectName.php">Add Project</a>
    <a href="productOwner.php">Home</a>
  </div>

  
  <section class="content" style="margin-top: 70px; align; center">
        <?php
            //select all the projects from the database that the current user is product owner of
            $sql = "SELECT * FROM projects WHERE PO=".$_SESSION['user']['UID'];
            $result = $connection->query($sql);

            //as long as there are projects, display their names in a dynamically populated table on the user's landing page
            if(isset($result)){
                echo("<table border=1 width=35% align=center bgcolor=#101721 style='color:#ffffff'>");
                echo("<tr><th>Projects</th></tr>");

                while($row = $result->fetch_assoc()){
                    echo("<tr><td height=50px align= \"center\">".$row['PID'] . "</td></tr>");
                }
                echo("</table>");

            }
            else
            {
                echo($connection->error);
            }
        ?>
    
  </section>

  </body>
</html>
