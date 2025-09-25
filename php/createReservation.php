<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connection.php';
include 'duplicateValidation.php';
include 'sendReservation.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = null;
    $name = $_POST['user-name'];
    $lastname = $_POST['user-lastname'];
    $username = $_POST['user-username'];
    $email = $_POST['user-email'];
    $identification = $_POST['user-identification'];
    $rol = $_POST['user-rol'];
    $password = $_POST['user-password'];

    $personas = $_POST['user-personas'];
    $fecha = $_POST['user-fecha'];
    $hora = $_POST['user-hora'];

    $hash = password_hash($password, PASSWORD_BCRYPT);

    if (!IsDuplicate($id)) {
        $statement = $connection->prepare("INSERT INTO users(name, lastname, username, email, id_rol, password, identification) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $statement->bind_param("ssssiss", $name, $lastname, $username, $email, $rol, $hash, $identification);

        if ($statement->execute()) {
            $id_user = $connection->insert_id;
            
            $statement = $connection->prepare("INSERT INTO reservas(user_id, personas, fecha, hora) VALUES (?, ?, ?, ?)");
            $statement->bind_param("iiss", $id_user, $personas, $fecha, $hora);

            if ($statement->execute()) {
                //header("Location: ../index.html");
                sendEmail($username, $fecha, "now", $personas); 
                exit();
            } else {
                echo "Error al crear la reserva.";
                exit();
            }

        }else {
            echo "Error al crear el usuario";
            exit();
        }

    } else {
        echo "Usuario duplicado";
    }

}

    
