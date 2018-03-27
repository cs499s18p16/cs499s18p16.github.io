<?php
  session_start();
?>


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

            <form method="POST" action="login.php">
                <div class="inputBox">
                    <input type="text" name="username" required="">
                    <label>Username</label>
                </div>

                <div class="inputBox">
                        <input type="password" name="password" required="">
                        <label>Password</label>
                </div>

                <p style="padding: 0 0 2em 0">

               <input type="submit" name="" required="submit"> <!- button ->

            </form>
        </div>

    </body>
</br>
<form action="logout.php">
  <button>Log Out</button>
</form>


</html>
