<?php
$servername = "localhost";
$username = "root";
$password = "newpassword";
$database = "dbjeyush";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry we failed to connect". mysqli_connect_error());
} else{
    echo " connection was succesfull";
}
//variables to be inserted into the tables
$name = "bijay";
$destination = "america";

$sql = "INSERT INTO trip ( name, dest) VALUES ('$name', '$destination')";
$result = mysqli_query($conn,$sql);

if($result){
    echo "The record was insert succesfully!<br>";
}
else{
    echo "The record was not insert successfully beacuse of this error-->".mysqli_error($conn);
}
?>