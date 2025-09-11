<?php
include 'connection.php';
include 'duplicateValidation.php';


if (isset($_POST['createBtn'])) {
    // Obtención de datos para el nuevo usuario.
    $id = null;
    $name = $_POST['user-name'];
    $lastName = $_POST['user-lastname'];
    $username = $_POST['user-username'];
    $email = $_POST['user-email'];
    $identification = $_POST['user-identification'];
    $rol = $_POST['user-rol'];
    $password = $_POST['user-password'];

    $hash = password_hash($password, PASSWORD_BCRYPT);

    
    $statement = $connection->prepare("INSERT INTO users(name, lastname, username, email, id_rol, password, identification) VALUES (?, ?, ?, ?, ?, ?, ?)");

    $statement->bind_param("ssssiss", $name, $lastName, $username, $email, $rol, $hash, $identification);

    if (IsDuplicate($identification)) {
        echo "<div>Usuario previamente registrado<div>";
        exit;
    } else {
        if ($statement->execute()) {
            header("Location: panel.php");
            exit;
        } else {
            echo "<div>Error: " . $statement->error . "</div>";
            exit;
        }
    };
}



?>