<!--
File: availability.php
Purpose: this page prompts the user/developer to enter in unavalaible hours in a certain 
        sprint. This data is used (among other pieces of data collected from fellow team members) to 
        calculate team availability
-->

<?php
  session_start();
     if(!isset($_SESSION['user']['role']) || $_SESSION['user']['role'] != 'developer')
     {
	header("Location: index.php"); // conditional logic to confirm user has logged in and cannot access certain pages directly
     	die;
    }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="navbar.css">
</head>
  <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
</style>
</head>

<body background="bridge.jpg">
  <!-- Navigation bar -->
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-content">
        <a href="#">Profile</a>
        <a href="logout.php">Log Out</a>
      </div>
    </div>
     <a href="availability.php">Availability</a>
     <a href="teamMember.php">Home</a>
  </div>

  <center>
  <select style="margin-top: 50px;"> <!-- chooose which week you want to enter in your unavailability (you can only look 3 wks ahead) -->
    <option value="week1">Week 1</option>
    <option value="week2">Week 2</option>
    <option value="week3">Week 3</option>
  </select>
  <title>Work Availability</title>

  <p></p>
  <form action="insertAvailability.php" method="POST" id="avail"></form>
    <table style="width:90%; color:#ffffff;">
    <tr>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
    </tr>
    <tr>
      <!-- collect all the hours of unavailability from Monday - Friday -->
      <td>
          <input type="text"  name="M_hours" value="" form="avail"/>
       </td>
       <td>
          <input type="text"  name="T_hours" value="" form="avail"/>
       </td>
       <td>
          <input type="text"  name="W_hours" value="" form="avail"/>
       </td>
       <td>
          <input type="text"  name="TR_hours" value="" form="avail"/>
       </td>
       <td>
          <input type="text"  name="F_hours" value="" form="avail"/>
       </td>
    </tr>

  </table>
  <p></p>
  <button type="submit" form="avail">SUBMIT</button>

  </center>

</body>


</html>
