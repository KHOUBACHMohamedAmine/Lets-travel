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
if(isset($_POST["signup"])){

    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $cPassword = sha1($_POST['cPassword']);
    $email = $_POST["email"];


    if (!empty($username) && !empty($password) && !empty($cPassword)  && !empty($email)) {



            if ($cPassword == $password ){

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    //Check If The User Exists In Database
                    $query = "SELECT username, password FROM user WHERE username = ? AND password = ?";
                    $stmt  = $connexion -> prepare($query);
                    $stmt -> execute(array($username,$password));
                    $count = $stmt -> rowCount();

                    // If count > 0 This Mean The Database Contain Record About This UserName

                    if ($count == 1) {
                        $ErrDataBase ="User Name Already Exists In Database \n";
                        $ErrDataBase .=" Please Try Another User Name</p>";

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
                $Err .= "Password Not Same";

            }


    }else {
        $Err .= "All Fields Are Required";

    }


}
?>
   <i class="fas fa-times" id="form-close"></i>

    <form action="" method="POST">
        <h3>Register</h3>
        <input type="text" name="username"  class="box" placeholder="enter your username">
        <input type="email" name="email"   class="box" placeholder="enter your email">
        <input type="password" name="password"  class="box" placeholder="enter your password">
        <input type="password" name="cPassword"   class="box" placeholder="confirm your password">
        <input type="submit" name= "signup" value="register" class="btn">
        <span style='color:red;'><?= $Errlogin;?></span>
        <span class ='text-center' style='color:red;'><?= $Err;?></span>
        <span class ='text-center' style='color:red;'><?= $ErrDataBase;?></span>
        <span class ='text-center' style='color:darkred;'><?= $success;?></span>
        <p>Do you have an account? <a href="login.php">Login</a></p>
    </form>
