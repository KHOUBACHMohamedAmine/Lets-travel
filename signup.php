
<?php
include 'config.php';
//if (isset($_POST['submit'])) {
//    $username = $_POST['username'];
//    $email = $_POST['email'];
//    $password = sha1($_POST['password']);
//    $cPassword = sha1($_POST['cPassword']);
//
//    if ($password == $cPassword) {
//        $sql = "insert into user (username, email, password) VALUES ('$username,$email,$password')";
//        $result = mysqli_query($conn, $sql);
//        if ($result) {
//            echo "<script> alert('Woow! User registration successful.') </script>";
//        }else {
//            echo "<script> alert('Woops !! Something went wrong !') </script>";
//        }
//
//    } else {
//        echo "<script> alert('Password Not matched.') </script>";
//    }
//}
$Err ='';
$Errlogin ='';
$ErrDataBase ='';
$success ='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST["signup"])){

$username = $_POST['username'];
$password = sha1($_POST['password']);
$cPassword = sha1($_POST['cPassword']);
$email = $_POST["email"];


if (!empty($username) && !empty($password) && !empty($cPassword)  && !empty($email)) {



if ($cPassword == $password ){

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//Check If The User Exists In Database
$query = "SELECT username, password, email FROM user WHERE username = ? AND password = ? AND email = ?";
$stmt  = $connexion -> prepare($query);
$stmt -> execute(array($username,$password,$email));
$count = $stmt -> rowCount();

// If count > 0 This Mean The Database Contain Record About This UserName

if ($count == 1) {
$ErrDataBase ="Username or email Already Exists In Database \n";

}else {
$sql = "INSERT INTO user (username, password, email) VALUES (?,?,?)";
$stmt= $connexion->prepare($sql);
$stmt->execute(array($username, $password, $email));

$success ="Thanks For Signin Up \n";
$success.=" You Can Login Now ";
}

}else {
$Err .= "Invalid Email Format";

}
}else {
$Err .= "Password do not match";

}


}else {
$Err .= "All Fields Are Required";

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
    <title>Sign Up Form</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <header>
        <video src="images/vid-2.mp4" autoplay muted loop></video>
        <form action="<?=$_SERVER['PHP_SELF']?>"  method="POST">
        <div class="card">
            <h3>Sign Up</h3>
            <div class="form-group">
                <i class="fas fa-user"></i>
                <label >Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label >Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <label >Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <label >Confirm Password</label>
                <input type="password" name="cPassword" required>
            </div>
            <button class="btn" type="submit" name="signup">Sign Up</button>
            <span style='color:red;'><?= $Errlogin;?></span>
            <span class ='text-center' style='color:red;'><?= $Err;?></span>
            <span class ='text-center' style='color:red;'><?= $ErrDataBase;?></span>
            <span class ='text-center' style='color:darkred;'><?= $success;?></span>
            <a href="login.php">Already have an account? Login</a>
        </div>
        </form>
    </header>
</body>
</html>
