<?php

//HTML code for website
<html>
    <head>
        <meta charset="utf-8">
        <title>Toyota Scrum Tool</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="box">
            <h2>Login</h2>

            <form action="welcome.php" method="post"> <!- form result == open a new [blank] browser tab ->
                <div class="inputBox">
                    <input type="text" name="" required="">
                    <label>Email</label>
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
    
 ?>
