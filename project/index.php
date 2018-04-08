<?php
  session_start();
?>


<!DOCTYPE html>
<!-- HTML code for the login page of the web app-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Toyota Scrum Tool</title>
        <link rel="stylesheet" href="style.css"> <!--Linking the CSS style page created for the login page-->
    </head>

    <body>
        <div class="box">
            <h2>Login</h2>

            <form method="POST" action="login.php"> <!-- running the login code to redirect to page(s) once credentials have been entered and verified to be correct or not-->
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



</html>
