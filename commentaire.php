<?php
session_start();
include "config.php";
if (!isset($_SESSION['id'])){
    header('refresh:0;url=login.php'); //Redirect To Home Page
}
$idUser = $_SESSION['id'];
$nom = $_POST["nom"];
$email = $_POST["email"];
$num = $_POST["tel"];
$sujet = $_POST["sujet"];
$message = $_POST["message"];

$sql = "INSERT INTO commentaires (idUser,nom,email,num,sujet,message)
VALUES ('".$idUser."','".$nom."','".$email."','".$num."','".$sujet."','".$message."')";

if ($connexion->query($sql) == TRUE) {
// echo "New record created successfully";
 header('refresh:0;url=hu.php'); //Redirect To Home Page

} else {
//   echo "Error: " . $sql . "<br>" . $connexion->error;
}
?>