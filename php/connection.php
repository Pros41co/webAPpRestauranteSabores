<?php


$databaseServer = "192.168.0.16";
$databaseName = "restaurantephp";
$databasePassword = "111";
$databaseUser = "alex";

$connection = mysqli_connect($databaseServer,$databaseUser,$databasePassword,$databaseName);

if (!$connection) {
    die("Failed connection: ". mysqli_connect_error());
}

?>