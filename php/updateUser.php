<?php

include 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['user-id'];
    $name = $_POST['user-name'];
    $lastName = $_POST['user-lastname'];
    $username = $_POST['user-username'];
    $email = $_POST['user-email'];
    $identification = $_POST['user-identification'];
    $rol = $_POST['user-rol'];
    

    $statement = $connection->prepare("UPDATE users SET name = ?, lastname = ?, username = ?, email = ?, identification = ?, id_rol = ? WHERE id = ?");
    $statement->bind_param("sssssii", $name, $lastname, $username, $email, $identification, $rol, $id);
    
    if($statement->execute()) {
        header("Location: panel.php");
        exit();
    } else {
        die ("Error:");
    }
}

?>