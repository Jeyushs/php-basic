<?php
//set the data
session_start();
$_SESSION['username'] = "Dipesh";
$_SESSION['favcat'] = "Books";
echo "We have saved your session.";

?>