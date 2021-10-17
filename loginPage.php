<?php
include "config.php";
$Err ='';
$Errlogin ='';
$ErrDataBase ='';
$success ='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["login"])) {
        $username =htmlentities($_POST['username']);
        $password = $_POST['password'];
        $hashedPass = sha1($password);

        //Check If The User Exists In Database
        $query = "SELECT id, username, password 
					FROM user 
					WHERE username = ? 
					AND password = ?";
        $stmt  = $connexion -> prepare($query);
        $stmt -> execute(array($username,$hashedPass));
        $count = $stmt -> rowCount();

        // If count > 0 This Mean The Database Contain Record About This UserName

        if ($count == 1) {
            $_SESSION['username'] = $username; // Register Session Name
            $_SESSION['id'] = $count['id'];
            header('Location:hu.php'); //Redirect To Home Page

        }else {
            $Errlogin .= 'ERROR! <br>';
            $Errlogin .= 'If You D\'ont Have An Account Please Sign Up !!';
        }
    }}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- login form container  -->

<div class="login-form-container">
    <!--  <?php
    //include "login.php";
    //?>
    -->
    <i class="fas fa-times" id="form-close"></i>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <h3>login</h3>
        <input type="text" name="username" class="box" placeholder="enter your username">
        <input type="password" name="password" class="box" placeholder="enter your password">
        <input type="submit" name= "login" value="login now" class="btn">
        <span style='color:red;'><?= $Errlogin;?></span>
        <span class ='text-center' style='color:red;'><?= $Err;?></span>
        <span class ='text-center' style='color:red;'><?= $ErrDataBase;?></span>
        <span class ='text-center' style='color:darkred;'><?= $success;?></span>
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="register.php">register now</a></p>
    </form>

</div>
</body>
</html>
