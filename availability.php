<?php
  /*   session_start();
     if(!isset($_SESSION['user']['role']) || $_SESSION['user']['role'] != 'developer')
     {
	header("Location: index.php"); // conditional logic to confirm user has logged in and cannot access certain pages directly
     	die;
    }*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <select>
    <option value="week1">Week 1</option>
    <option value="week2">Week 2</option>
    <option value="week3">Week 3</option>
  </select>
  <title>Work Availability</title>
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

</body>


</html>
