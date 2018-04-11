<?php
//This file is to run the login process by making sure the credentials entered into the login page match credentials within the database
session_start();
require 'connect.php'; // including the connect.php which is the connection to the database itself
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$username' AND hashed_password = '$password'"; // credential verification process
$result = $connection->query($sql);
if (!$row = mysqli_fetch_assoc($result))
{
   header("Location: index.php");
   $_SESSION['wrong'] = TRUE;
}

else // if the correct credentials are entered, based on who logs in certain code will be ran
{
  unset($row['hashed_password']);
  $_SESSION['user'] = array();
  $_SESSION['user'] = $row;

  if (isset($_SESSION['user']['role'])){
    
    /* ADMIN */
    if ($_SESSION['user']['role'] == 'admin'){// if the admin credentials are entered, they will be directed to the admin landing page
      header("Location: Admin.php");
    }

    /* SCRUM MASTER */
    if ($_SESSION['user']['role'] == 'scrum master') // if the scrum master credentials are entered they user will be taken to the scrum master landing page
    {
      header("Location: ScrumMasterHomePage.php");
    }

    /* PRODUCT OWNER */
    if ($_SESSION['user']['role'] == 'product owner'){
      header("Location: productOwner.php");
    }

    /* DEVELOPER */
    if ($_SESSION['user']['role'] == 'developer'){
      $sql="SELECT * FROM teams"; /* Team table in the database */
      $result = $connection->query($sql);
      $TID=$row['TID'];

      if ($TID == NULL){/* If user hasn't been added to a team yet */
        header("Location: defaultPage.html"); /* redirect to the default page */
      }
      else{
      header("Location: teamMember.php"); /* redirect to team/developer landing page */
      }

    }

  }//end if --- redirection to landing pages 

}//end else

?>
