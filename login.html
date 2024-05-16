<?php

require "connection.php";

session_start();

if (isset($_POST["submit"])) {

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];

    $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";
    
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {

        // Password is correct, redirect to dashboard
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: dashboard.php");
            exit();
        }
    } else {
        echo "<script>alert('Incorrect email or password!');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to ENGINE-DIG</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div id="engine">
        <img src="icon/piston-engine-illu.png" alt="Engine Illustration">
        <style>

img{
    position: relative;
    left: 20%;
}


        </style>
    </div>
    <h1>LOGIN</h1>
    <form action="" method="post">
        <label for="email" id="mail">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="password" id="pswd">Password</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" name="submit" value="Login" class="loginbtn">
    </form>
    <?php if(isset($error)): ?>
    <p><?php echo $error; ?></p>
    <?php endif; ?>
    <label id="txt">I don't have an account</label>   
    <a href="sign_up.php"><button id="sign">Sign Up</button></a>
</body>
</html>
