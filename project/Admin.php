<?php
   if(!$_SESSION['login']){
     header("Location: index.php");
     die;
   }
   else {
     session_start();
   }
?>

<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <title>Welcome | Home Page</title>
    <link rel="stylesheet" href="admin_style_sheet.css">
  </head>

  <body>

  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="#">Profile</a>
        <a href="logout.php">Log Out</a>
        <a href="adduser.php">Add User</a>
        <a href="addteam.php">Add Team</a>
      </div>
    </div>
     <a href="#">Home</a>
  </div>

  <section class="content">
    <h2 style="font-family: cursive;font-size:50px;text-align: center;color: #cfd8dc">Welcome, <?php echo($_SESSION['user']['email']) ?> </h2>
    <br>
    <h3 style="font-size:25px;text-align: center;color: #cfd8dc">TEAMS</h3>

    <table border=1 width=75% align=center bgcolor="#101721" >
      <tr>
        <th>Team Name</th>
      </tr>
      <tr>
        <td align=center class=open><br>Scrumbledore's Army<br></td>
        <td align=center class=open><br>Edit<br></td>
        <td align=center class=open><br>Remove<br></td>
      </tr>
      <tr>
        <td align=center class=open><br>Scrum Lords<br></td>
        <td align=center class=open><br>Edit<br></td>
        <td align=center class=open><br>Remove<br></td>
      </tr>
      <tr>
        <td align=center class=open><br>Scrum of the Earth<br></td>
        <td align=center class=open><br>Edit<br></td>
        <td align=center class=open><br>Remove<br></td>
      </tr>
    </table>
  </section>

  </body>
</html>
