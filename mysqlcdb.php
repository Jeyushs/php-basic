<?php

$servername = "localhost";
$username = "root";
$password = "newpassword";

$conn = mysqli_connect($servername,$username,$password);

//create a db 
$sql = "CREATE DATABASE dbjeyush";
$result = mysqli_query($conn,$sql);
// echo "The result";
// echo var_dump($result);
// echo "<br>";

//check for the database creation success.
if($result){
    echo "The database was created succesfully";
}
else{
    echo "The database was not created succesfully".mysqli_error($conn);
}
?>