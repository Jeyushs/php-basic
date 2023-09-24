<?php

$servername = "localhost";
$username = "root";
$password = "newpassword";
$database = "dbjeyush";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}
else{
    echo "connection was successfull<br>";
}


?>