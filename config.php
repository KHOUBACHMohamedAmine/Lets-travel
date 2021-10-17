<?php
//    $server = "localhost";
//    $db_user = "root";
//    $db_password = "";
//    $database = "travel_db";
//
//    $conn = mysqli_connect($server, $db_user, $db_password, $database);
//
//    if(!$conn) {
//        echo "<script> alert('Connection Failed') </script>";
//    }
//?>
<?php

$dsn = 'mysql:host=localhost;dbname=travel_db;charset=utf8';
$dbuser = 'root';
$dbpass= '';

try {

    $connexion = new PDO($dsn,$dbuser,$dbpass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e) {

    echo 'failed' . $e->getMessage();

}



?>
