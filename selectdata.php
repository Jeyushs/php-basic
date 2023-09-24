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

$sql = "SELECT * FROM trip" ;
$result = mysqli_query($conn,$sql);

//find the numbers of record returned
$num =  mysqli_num_rows($result); 
echo $num; 
echo "<br>";
echo "record found in the database <br>";
//Display the rows returned by sql query
// if($num>0){
//     $row = msqli_fetch_array($result, MYSQLI_ASSOC);
//     echo var_dump($row);
// }
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if ($num > 0) {
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // echo var_dump($row);
    // for ($i=1; $i <=$row ; $i++) { 
    //     # code...
    //     echo var_dump($row);
    while ($row=mysqli_fetch_array($result)) {
        # code...
    //   echo var_dump($row);
      echo $row['sno'] . " Hello " . $row['name'] . "Welcome to". $row['dest'];
      echo "<br>";   
    }
    }
?>