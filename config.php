<?php


$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName= "alpha_net";


$connection = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if($connection == false){

    die("Connection failed: ". mysqli_connect_error());
}

?>