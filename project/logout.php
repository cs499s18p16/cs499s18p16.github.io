<?php
// this file is to kill the session after a user has logged in and return to the original login page
session_start();
session_destroy();
header("Location: index.php")
?>
