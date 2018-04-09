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
        <link rel="stylesheet" href="style_pages.css">
    </head>

    <body>
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
                <a href="#">Home</a>
            </div>


        </div>

        <section class="content">
            <h2>Welcome To Scrumbledore's Army</h2> <!-- Team name -->
            

            <table border=1 width=75% align=center bgcolor="#607d8b" >
                <tr>
                <th width=5%>Mon</th>
                <th width=5%>Tue</th>
                <th width=5%>Wednesday</th>
                <th width=5%>Thursday</th>
                <th width=5%>Friday</th>
                <th width=5%>Sat</th>
                <th width=5%>Sun</th>
                </tr>

                <!-- Team availability percentage -->
                <tr>
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
