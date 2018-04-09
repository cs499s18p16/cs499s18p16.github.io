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
<!-- HTML coding for the landing page seen when the admin of Scrum logs in -->
  <head>
    <meta charset="utf-8">
    <title>Welcome | Home Page</title> <!--Creating and setting the title of the landing page, as well as linking the CSS style sheet along with the page -->
    <link rel="stylesheet" href="admin_style_sheet.css">
  </head>

  <body>

  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button> <!-- Creating a dropdown bar in the top right corner to allow the admin to manuever through their page -->
      <div class="dropdown-content">
        <a href="#">Profile</a>
        <a href="logout.php">Log Out</a>
        <a href="adduser.php">Add User</a>
        <a href="getTeamName.php">Add Team</a>
      </div>
    </div>
     <a href="#">Home</a>
  </div>

  <section class="content">
    <h2 style="font-family: cursive;font-size:50px;text-align: center;color: #cfd8dc">Welcome, <?php echo($_SESSION['user']['email']) ?> </h2> <!-- Landing page will recognize who has logged in and give them a greeting at the top with their name -->
    <br>
    <h3 style="font-size:25px;text-align: center;color: #cfd8dc">TEAMS</h3>

    <table border=1 width=75% align=center bgcolor="#101721" >
      <tr>
        <th>Team Name</th> <!-- Creating the table seen by the admin that will display all the teams on the Scrum database and giving them the option to edit/remove teams if needed -->
      </tr>
      <tr>
        <td align=center class=open><br><a href="getUsername.php">Scrumbledore's Army</a><br></td>
      </tr>
      <tr>
        <td align=center class=open><br><a href="#">Scrum Lords</a><br></td>
      </tr>
      <tr>
        <td align=center class=open><br><a href="#">Scrum of the Earth</a><br></td>
      </tr>
    </table>

  </section>

  </body>

</html> <!-- end of the HTML code for the admin page -->
