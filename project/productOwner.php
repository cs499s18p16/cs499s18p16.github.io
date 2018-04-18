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
    <link rel="stylesheet" href="PO_style_sheet.css">
  </head>

  <body>

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
    <a href="#">Home</a>
  </div>

  <section class="content">
    <?php
            $sql = "SELECT * FROM projects WHERE PO=".$_SESSION['user']['UID'];
            $result = $connection->query($sql);

            if(isset($result)){
                echo("<table border=1 width=35% align=center bgcolor=\"#101721\">");
                echo("<tr><th>Projects</th></tr>");

                while($row = $result->fetch_assoc()){
                    echo("<tr><td align= \"center\">".$row['PID'] . "</td></th>");
                }
                echo("</table>");

            }
            else
            {
                echo($connection->error);
            }
        ?>
    </h2>

    

  </section>

  </body>
</html>
