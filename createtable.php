<?php
$servername = "localhost";
$username = "root";
$password = "newpassword";
$database = "dbjeyush";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Connection was not succesfull<br>");
} else{
    echo "Connection was successfull<br>";
}

//create a table in database
// $sql = "CREATE TABLE 'trip' ( 'sno' INT(6) NOT NULL AUTO_INCREMENT , 'name' VARCHAR(50) NOT NULL, 'dest' VARCHAR(50) NOT NULL, PRIMARY KEY ('sno'))";
$sql = "CREATE TABLE `trip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `dest` VARCHAR(50) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn,$sql);

//check for the table creation success
if($result){
        echo "The table was create successfully";
}
else{
    echo "The table was not create";
}
?>