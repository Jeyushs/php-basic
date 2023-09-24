<?php

$servername = "localhost";
$username = "root";
$password = "newpassword";
$database = "College";
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get data from the form
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $roll = $_POST['roll'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    

    
    // Prepare the SQL statement
    $sql = "INSERT INTO Student (name, address, age, roll, gender, phone) VALUES ('$name', '$address', $age, $roll, '$gender', '$phone')";
    $result = mysqli_query($conn,$sql);
    
        if($result){
            echo "record inserted successfully";
        }
        else{
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    
    
    // Execute the query
}

// Close the database connection
mysqli_close($conn);
?>