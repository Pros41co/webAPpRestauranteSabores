<?php


$databaseServer = "127.0.0.1";
$databaseName = "restaurantephp";
$databasePassword = "";
$databaseUser = "root";

$connection = mysqli_connect($databaseServer,$databaseUser,$databasePassword,$databaseName);

if (!$connection) {
    die("Failed connection: ". mysqli_connect_error());
}

?>