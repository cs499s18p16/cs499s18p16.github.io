<?php
	 session_start();
	 if(!isset($_SESSION['user']['role']) || $_SESSION['user']['role'] != 'admin')
	 {
		header("Location: index.php"); // conditional logic to confirm user has logged in and cannot access certain pages directly
     	 	die;
     	 }
?>

<!DOCTYPE html>

<html>
<!-- HTML coding for the landing page seen when the admin of Scrum logs in -->
  <head>
    <meta charset="utf-8">
    <title>Welcome | Home Page</title> <!--Creating and setting the title of the landing page, as well as linking the CSS style sheet along with the page -->
    <link rel="stylesheet" href="navbar.css">
  </head>

  <body background="twocars.jpg">

  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button> <!-- Creating a dropdown bar in the top right corner to allow the admin to manuever through their page -->
      <div class="dropdown-content">
        <a href="#">Profile</a>
        <a href="logout.php">Log Out</a>
      </div>
    </div>
    <a href="getUserName.php">Add User to Team</a>
    <a href="adduser.php">Add User</a>
    <a href="getTeamName.php">Teams</a>
    <a href="Admin.php">Home</a>
    
  </div>

  <section class="content" style="margin-top: 70px">
    <h2 style="font-family: cursive; font-size: 50px; text-align:center; color: #cfd8dc">Welcome, <?php echo($_SESSION['user']['email']) ?> </h2> <!-- Landing page will recognize who has logged in and give them a greeting at the top with their name -->

  
    <table border=1 width=35% align=center bgcolor="#101721" style="color: #ffffff">
      <tr>
        <th>Team Name</th> <!-- Creating the table seen by the admin that will display all the teams on the Scrum database and giving them the option to edit/remove teams if needed -->
      </tr>
      
      <tr style="height: 50px">
        <td align=center class=open><br><a href="getUsername.php">Scrumbledore's Army</a><br></td>
      </tr>

      <tr style="height: 50px">
        <td align=center class=open><br><a href="#">Scrum Lords</a><br></td>
      </tr>

      <tr style="height: 50px">
        <td align=center class=open><br><a href="#">Scrum of the Earth</a><br></td>
      </tr>
    </table>
  </section>

  </body>

</html> <!-- end of the HTML code for the admin page -->
