<?php
       session_start();
       if(!isset($_SESSION['user']['role']) || $_SESSION['user']['role'] != 'admin')
       {
	 header("Location: index.php"); // conditional logic to confirm user has logged in and cannot access certain pages directly
    	 die;
       }
?>



<!DOCTYPE html>
<!--Simple HTML page to allow admin to add a new user to the Scrum database. All info needed will be placed into the text boxes and submitted sent to the databse-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>ADD NEW USER</title>
    <link rel="stylesheet" href="navbar.css">
  </head>

  <body background="bridge.jpg">

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
      <a href="getTeamName.php">Add Team</a>
      <a href="Admin.php">Home</a>
      
    </div>

    <form action="signup.php" method="POST">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <select name="role">
            <option value="admin">Admin</option>
        <option value="scrum master">Scrum Master</option>
        <option value="product owner">Product Owner</option>
        <option value="developer">Developer</option>
      </select>
        
      <button type="submit">ADD</button>
    </form>

  </body>

</html>
