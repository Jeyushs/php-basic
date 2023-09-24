<?php
// Start the session and get data
if(isset($_SESSION['username'])){
session_start();
echo "Welcome <br>".$_SESSION['username'];
echo "to your category".$_SESSION['favcat'];
}
else{
    echo "please login to continue";
}
// echo "We have saved your session.";

?>