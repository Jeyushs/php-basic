<?php

echo "Welcome to the stage where we are ready to get connected to a database<br>";
/*
ways to connect to a mysql database
1.MySQli extension
2.PDO
*/
// connecting to the database
$servername = "localhost";
$username = "root";
$password = "newpassword";

//create a connection 
$conn = mysqli_connect($servername,$username,$password);
//  echo "connection was succesfull";

 //die if connection was not successfull
 if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
 }
 else{
    echo "conection was succesfull";
 }


?>