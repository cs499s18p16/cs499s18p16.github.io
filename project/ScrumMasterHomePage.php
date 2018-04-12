<?php
   session_start();
   if(!isset($_SESSION['user']['role'])||$_SESSION['user']['role'] != 'scrum master')
   {
   header("Location: index.php"); // conditional logic to confirm user has logged in and cannot access certain pages directly
     die;
   }
?>
<!DOCTYPE html>
<!--This is the HTML code providing the layout for the Scrum Master landing page, which is also linked to a CSS style sheet -->
<html>

    <head>
        <meta charset="utf-8">
        <title>Welcome | Home Page</title>
        <link rel="stylesheet" href="navbar.css">
    </head>

    <body background="twocars.jpg">
        <div class="wrapper">

            <div class="navbar">

                <div class="dropdown">
                    <button class="dropbtn" onclick="myFunction()">My Account<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="#">Profile</a>
                        <a href="logout.php">Logout</a>
                    </div>

                </div>
               
                <a href="#">Project</a>
                <a href="#">Team</a>
                <a href="#">Home</a>
            </div>


        </div>

        <section class="content" style="margin-top: 70px">
            <h2 style="font-family: cursive; font-size: 50px; text-align:center; color: #cfd8dc">
                <?php
                        if(isset($_SESSION['user']['TID']))
                        {
                                echo($_SESSION['user']['TID']);
                        }
                        else
                        {
                                echo("You are not yet part of a team.");
                        }
                 ?>
            </h2> <!-- Team name -->
            

            <table border=1 width=75% align=center bgcolor="#101721" style="color: #ffffff">
                <tr>
                <th width=5%>Monday</th>
                <th width=5%>Tuesday</th>
                <th width=5%>Wednesday</th>
                <th width=5%>Thursday</th>
                <th width=5%>Friday</th>
                <th width=5%>Saturday</th>
                <th width=5%>Sunday</th>
                </tr>

                <!-- Team availability percentage -->
                <tr style="height: 50px">
                <td align=center><br>95%<br> </td>
                <td align=center><br>90%<br> </td>
                <td align=center><br>97%<br> </td>
                <td align=center><br>85%<br> </td>
                <td align=center><br>80%<br> </td>
                <td align=center><br>65%<br> </td>
                <td align=center><br>50%<br> </td>
                </tr>

            </table>

        </section>

    </body>


</html>

<!--



-->