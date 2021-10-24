<?php
session_start();
include "config.php";
if (!isset($_SESSION['id'])){
    header('refresh:0;url=login.php'); //Redirect To Home Page
}
$idUser = $_SESSION['id'];
$localistion_depart = $_POST["localistion_depart"];
$nombre_personnes = $_POST["nombre_personnes"];
$arrivée = $_POST["arrivee"];
$departure = $_POST["departure"];
$sql = "INSERT INTO reservation (idUser,localistion_depart,nombre_personnes,arrivée,departure)
VALUES ('".$idUser."', '".$localistion_depart."', '".$nombre_personnes."','".$arrivée."','".$departure."')";

if ($connexion->query($sql) == TRUE) {
//   echo "New record created successfully";
    header('refresh:0;url=hu.php'); //Redirect To Home Page

} else {
//   echo "Error: " . $sql . "<br>" . $connexion->error;
}

?>