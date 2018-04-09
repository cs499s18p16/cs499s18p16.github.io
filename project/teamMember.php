<?php
   if(!$_SESSION['login']){
     header("Location: index.php"); // conditional logic to confirm user has logged in and cannot access certain pages directly
     die;
   }
   else {
     session_start();
   }
?>

<!DOCTYPE html>
<!--This is the HTML code providing the layout for the team member landing page, which is also linked to a CSS style sheet -->
<html>

  <head>
    <meta charset="utf-8">
    <title>Welcome | Home Page</title>
    <link rel="stylesheet" href="TM_style_sheet.css">
  </head>

  <body>

  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="#">Profile</a>
        <a href="logout.php">Log Out</a>
      </div>
    </div>
     <a href="#">Availability</a>
     <a href="#">Home</a>
  </div>

  <section class="content">
    <h2 style="font-family: cursive;font-size:50px;text-align: center;color: #cfd8dc">Welcome to Scrumbledore's Army</h2>

    <table border=1 width=75% align=center bgcolor="#101721" >
      <tr>
      <th width=5%>Monday</th>
      <th width=5%>Tuesday</th>
      <th width=5%>Wednesday</th>
      <th width=5%>Thursday</th>
      <th width=5%>Friday</th>
      <th width=5%>Saturday</th>
      <th width=5%>Sunday</th>
      </tr>
      <tr>
      <td align=center class=open><br>95%<br> </td>
      <td align=center class=open><br>90%<br> </td>
      <td align=center class=open><br>97%<br> </td>
      <td align=center class=open><br>85%<br> </td>
      <td align=center class=open><br>80%<br> </td>
      <td align=center class=open><br>65%<br> </td>
      <td align=center class=open><br>50%<br> </td>
      </tr>
    </table>
  </section>

  </body>
</html>