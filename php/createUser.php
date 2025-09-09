<?php

include('connection.php');

$id = null;
$name = $_POST['user-name'];
$lastName = $_POST['user-lastname'];
$email = $_POST['user-email'];
$identification = $_POST['user-identification'];
$rol = $_POST['user-rol'];
$password = $_POST['user-password'];

$validationDuplicatesQuery = "SELECT id FROM users WHERE identification = '$identification'";

$insertUserQuery = "INSERT INTO users(id, name, lastname, email, rol, password, identification) VALUES ('$id', '$name', '$lastName', '$email', '$rol', '$password', '$identification')";

$result = $connection->query($validationDuplicatesQuery);

if ($result->num_rows > 0) {
    echo "Usuario previamente registrado";
} else {
    $resultInsert = $connection->query($insertUserQuery);

    if ($resultInsert) {
        header("Location: panel.php");
    };

};


?>