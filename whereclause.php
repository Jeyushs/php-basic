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

$sql = "SELECT * FROM `trip` WHERE dest = 'USA'"; 
$result = mysqli_query($conn,$sql);

//Usage of where clause to fetch data from the database
$num = mysqli_num_rows($result);
echo $num;
echo "records was found in the databse<br>";
$no =1;
if($num>0){
    while($row = mysqli_fetch_array($result)){
        echo $no.".Hello".$row['name'].".Welcome to".$row['dest'];
        echo "<br>";
        $no++;
    }
}

//Usage of where Clause to Update Data
// $sql = "UPDATE 'trip' SET 'name' = 'Rohan45' WHERE 'sno' = 12";
// $sql = "UPDATE 'trip' SET 'name' = 'Rohan45' WHERE 'sno' = 12";
$sql = "UPDATE `trip` SET `dest` = 'AUS' WHERE `name` = 'jeyush'"; 
$result = mysqli_query($conn,$sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";
if($result){
    echo "We update record succesfully";
}
else{
    echo "We could not update the record successfully";
}
?>