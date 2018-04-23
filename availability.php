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
<body>


  <select>
    <option value="week1">Week 1</option>
    <option value="week2">Week 2</option>
    <option value="week3">Week 3</option>
  </select>
  <title>Work Availability</title>

  <form action="insertAvailability.php" method="POST" id="avail"></form>
    <table style="width:100%">
    <tr>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
    </tr>
    <tr>
      <td>
          <input type="number"  name="m_hours" value="" form="avail"/>
       </td>
       <td>
          <input type="number"  name="t_hours" value="" form="avail"/>
       </td>
       <td>
          <input type="number"  name="whours" value="" form="avail"/>
       </td>
       <td>
          <input type="number"  name="tr_hours" value="" form="avail"/>
       </td>
       <td>
          <input type="number"  name="f_hours" value="" form="avail"/>
       </td>
    </tr>

  </table>
  <button type="submit" form="avail">SUBMIT</button>

</body>


</html>
