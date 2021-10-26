<?php
session_start();
include "config.php";
if (isset($_SESSION['id'])){

$idUser = $_SESSION['id'];
$localistion_depart = $_POST["localistion_depart"];
$nombre_personnes = $_POST["nombre_personnes"];
$arrivée = $_POST["arrivee"];
$departure = $_POST["departure"];
$sql = "INSERT INTO reservation (idUser,localistion_depart,nombre_personnes,arrivée,departure)
VALUES ('".$idUser."', '".$localistion_depart."', '".$nombre_personnes."','".$arrivée."','".$departure."')";

if ($connexion->query($sql) == TRUE) {
//   echo "New record created successfully";
//    echo '<script> alert("Votre réservation a été effectuée") </script>';
    echo '<alert>Votre réservation a été effectuée </alert>';
    header('refresh:2;url=hu.php'); //Redirect To Home Page

} else {
//   echo "Error: " . $sql . "<br>" . $connexion->error;
}
} else {

    echo '<alert style="font-size: 24px; background-color:#ab0202; color: #e9e9e9 ; padding: 10px"> Pour effectuer une réservation, vous devez être authentifié !!!</alert>';
    header('refresh: 2; url=login.php'); //Redirect To Home Page

}
