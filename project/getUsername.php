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
    <title>ADD USER TO TEAM</title>
    <body>
        <form action="addUserToTeam.php" method="POST">
            <input type="text" name="username" placeholder="Username">
	    <select name="teamname">
	      	  <?php
		     $sql="SELECT * FROM teams";
		     $result = $connection->query($sql);
		  while($row = $result->fetch_assoc())
		  {
		  $TID=$row['TID'];
		  echo("<option value=\"$TID\">$TID</option>");
		  }      
		  ?>
	    </select>
	    <button type="submit">ADD</button>
        </form>
	<p>

	</p>
    </body>
</html>
