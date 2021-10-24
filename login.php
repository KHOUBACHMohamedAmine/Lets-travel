<?php

session_start();
include "config.php";


$Errlogin ='';
$ErrClass ='';
$success ='';
$SuccessClass = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["login"])) {
        $username =htmlentities($_POST['username']);
        $password = $_POST['password'];
        $hashedPass = sha1($password);

        //Check If The User Exists In Database
        $sql = "SELECT id, username, password FROM user
            WHERE username = '".$username."' AND password = '".$hashedPass."'";

        $result = $connexion->query($sql);

        // If count > 0 This Mean The Database Contain Record About This UserName
        if ($result->rowCount() == 1 && $row = $result->fetch(PDO::FETCH_ASSOC)) {

          $_SESSION['id'] = $row["id"]; // Register Session Name
          $SuccessClass = 'success';
          $success = 'Logged in successfully';
          $ErrClass = '';

          header('refresh:3;url=hu.php'); //Redirect To Home Page
        }else {
          $Errlogin .= 'Username and password incorrect!!';
          $ErrClass = 'error';
          $SuccessClass = '';
        }





    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login Form</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <header>
        <video src="images/vid-1.mp4" autoplay muted loop></video>
        <form action="<?=$_SERVER['PHP_SELF']?>"  method="POST">
        <div class="card">
            <h3>Login</h3>
            <div class="form-group">
                <i class="fas fa-user"></i>
                <label >Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <label >Password</label>
                <input type="password" name="password" required>
            </div>
            <button name="login" class="btn" type="submit">Login</button>
            <span class='<?= $ErrClass?>'><?= $Errlogin;?></span>
            <span class ='<?= $SuccessClass?>'><?= $success;?></span>
            <a href="signup.php">Don't have an account? <span class="underlined">Sign Up</span></a>
        </div>
        </form>
    </header>
</body>
</html>
