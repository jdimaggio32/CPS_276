<?php
session_start();
/* DELETE THE SESSION VALUES*/
session_unset();


//this takes you back to the login page after you log out
header('Location: /home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment10/pages/login.php');

?>