<?php 

require "connection.php";

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $rpass = $_POST["rpassword"];

    // Check if the email already exists in the database
    $select = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($select) > 0){
        echo "<script>alert('User already exists!');</script>";
    } else{
        // Check if passwords match
        if($pass != $rpass){
            echo "<script>alert('Passwords do not match');</script>";
        } else{
            // Insert user into the database
            $stmt = mysqli_prepare($conn, "INSERT INTO users (email, password) VALUES (?, ?)");
            mysqli_stmt_bind_param($stmt, "ss", $email, $pass);
            mysqli_stmt_execute($stmt);
            
            echo "<script>alert('Registration successful');</script>";
            header("Location: login.php");
            exit; // Add an exit to stop further execution
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to ENGINE-DIG</title>
    <link rel="stylesheet" href="style.css">
    <style>

img{
    position: relative;
    left: 20%;
}


        </style>
</head>
<body>
    <div id="engine">
        <img src="icon/piston-engine-illu.png" alt="Engine Illustration">
    </div>
    <h1>SIGN UP</h1>
    <form action="" method="post">
        <label for="email" id="mail">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="password" id="pswd">Password</label>
        <input type="password" id="password" name="password" required>
        <label for="rpassword" id="rpswd">Re-enter password</label>
        <input type="password" id="rpassword" name="rpassword" required>
        <input type="submit" name="submit" value="Sign up" class="sign">
    </form>
    <label id="txt">I have an account</label>   
    <a href="login.php"><button id="loginbtn">Login</button></a>
</body>
</html>
