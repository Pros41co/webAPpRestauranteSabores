<?php
include 'connection.php';



function IsDuplicate($identification) {

    global $connection;

    $validationDuplicatesQuery = "SELECT id FROM users WHERE identification = '$identification'";

    $resultQuery = $connection->query($validationDuplicatesQuery);

    return $resultQuery->num_rows > 0;
}



?>