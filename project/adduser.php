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
</head>
<body>
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
</html>
