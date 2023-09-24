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
    echo "connection was succesfull";
}

$sql = "DELETE FROM `trip` WHERE `dest` = 'america' LIMIT 3";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of rows affected: $aff<br>";

if($result){
    echo "Deleted succefully";
}
else{
    $err = mysqli_error($conn);
    echo "Not deleted due to the error --> $err";
}

?>