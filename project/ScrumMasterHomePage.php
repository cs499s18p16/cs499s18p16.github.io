<?php
   if(!$_SESSION['login']){
     header("Location: index.php");
     die;
   }
   else {
     session_start();
   }
?>
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <title>Welcome | Home Page</title>
        <link rel="stylesheet" href="style_pages.css">
    </head>

    <body>
        <div class="wrapper">


           <!-- <img src="toyota.png"> -->

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
            <h2>Welcome To Scrumbledore's Army</h2>
            <!--
            <p>

                <iframe src="https://calendar.google.com/calendar/embed?title=Availability&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=5il39f8usdd92j6392o40dgp80%40group.calendar.google.com&amp;color=%238C500B&amp;ctz=America%2FNew_York"
                style="border-width:0" width="1000" height="700" frameborder="0" scrolling="no">
                </iframe>

            </p>
        -->


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
                <tr>
                <td align=center rowspan=8 class=open><br>95%<br> </td>
                <td align=center rowspan=8 class=open><br>90%<br> </td>
                <td align=center rowspan=8 class=open><br>97%<br> </td>
                <td align=center rowspan=8 class=open><br>85%<br> </td>
                <td align=center rowspan=8 class=open><br>80%<br> </td>
                <td align=center rowspan=8 class=open><br>65%<br> </td>
                <td align=center rowspan=8 class=open><br>50%<br> </td>
                </tr>

            </table>

        </section>

    </body>


</html>
