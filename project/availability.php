<?php
  /*   session_start();
     if(!isset($_SESSION['user']['role']) || $_SESSION['user']['role'] != 'developer')
     {
	header("Location: index.php"); // conditional logic to confirm user has logged in and cannot access certain pages directly
     	die;
    }*/
    require 'connect.php';
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <title>Work Availability</title>
  <link rel="stylesheet" href="navbar.css">

  <style>
    /*table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }*/
    th, td {
        padding: 5px;
    }
    th {
        text-align: left;
    }
  </style>

</head>


<body background="bridge.jpg">

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

  <section class="content" style="margin-top: 70px">
    <select>
      <option value="week1">Week 1</option>
      <option value="week2">Week 2</option>
      <option value="week3">Week 3</option>
    </select>
    <table border=1px width=75% align=center bgcolor="#101721" style="width:100%; color: #ffffff">
    <tr>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
    </tr>
    <tr>
      <td>
          <input type="text"  name="M_hours" value="" />
      </td>
      <td>
          <input type="text"  name="T_hours" value="" />
      </td>
      <td>
          <input type="text"  name="W_hours" value="" />
      </td>
      <td>
          <input type="text"  name="TR_hours" value="" />
      </td>
      <td>
          <input type="text"  name="F_hours" value="" />
      </td>
    </tr>

    </table>

  </section>

</body>


</html>
