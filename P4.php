<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST["username"];
        $password = $_POST["pass"];
        if($username == "admin" && $password == "admin"){
            header("Location:Pp4.php");
        }
        else{
            echo "Invalid username or password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="P4.php" method="POST">
       <label>Username</label>
       <input type="text" name="username" id="username"><br>
      <br> <label>password</label>
       <input type="password" name="pass" id="pass"><br>
     <br>  <input type="submit" value="Submit now">
    </form>
</body>
</html>
