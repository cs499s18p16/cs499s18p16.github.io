<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Toyota Scrum Tool</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="box">
            <h2>Login</h2>

            <form method="POST" action="#">
                <div class="inputBox">
                    <input type="text" name="" required="">
                    <label>Username</label>
                </div>

                <div class="inputBox">
                        <input type="password" name="" required="">
                        <label>Password</label>
                </div>

                <p style="padding: 0 0 2em 0">

                <select name="Role">
                    <option value="Admin">Admin</option>
                    <option value="Scrum Master">Scrum Master</option>
                    <option value="Product Owner">Product Owner</option>
                    <option value="Team Member">Team Member</option>
                </select>

                </p>

                <input type="submit" name="" required="submit"> <!- button ->

            </form>
        </div>
    </body>


</html>


<?php
$host = "localhost";
$username = "root";
$password = "";
$role = "";
$db = "scrum";

//create connection

mysql_connect($host,$username,$password);
mysql_select_db($db);

if(isset(['username'])){
  $username=$_POST['username'];
  $password=$POST['password']

  $sql="select * from login form where user ='".$username."'AND password ='".$password"' limit 1";
  $result = mysql_query($sql);
  if(mysql_num_rows($result ==1)){
    echo "You have successfully logged in.";
    exit();
  }
  else{
    echo"Unauthorized credentials were entered, please try again.";
  }
}

 ?>
