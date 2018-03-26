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
$table = "roles";

//create connection

$connection = mysql_connect($host,$username,$password);
mysql_select_db($db,$connection);
$query = "SELECT id FROM $table";
if($result){
while($row = mysql_fetch_array($result)){
  echo "You have successfully logged in!";
  }
}
?>
