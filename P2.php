<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="P2.php" method="POST">
     <label >Name</label>
     <input type="text" name="name" id="name"><br>
     <br><input type="submit" value="Submit now"><br>
     <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    if($name == ""){
        echo "Please enter your name";
    } 
    else{
        echo "Your name is Submitted";
    }
}

?>
</form>
</body>
</html>