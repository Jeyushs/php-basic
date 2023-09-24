<?php

// include 'dbconnect1.php';
require 'dbconnect.php';

$sql = "SELECT *FROM `trip`";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
echo $num;
echo "record were found in the database";

if($num>0){
    while($row = mysqli_fetch_array($result)){
        echo $row['sno']."Hello".$row['name']."Welcome to".$row['dest'];
        echo "<br>";
    }
}

?>