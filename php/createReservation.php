<?php
include 'connection.php';
include 'duplicateValidation.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = null;
    $name = $_POST['user-name'];
    $lastName = $_POST['user-lastname'];
    $username = $_POST['user-username'];
    $email = $_POST['user-email'];
    $identification = $_POST['user-identification'];
    $rol = $_POST['user-rol'];
    $password = $_POST['user-password'];

    $personas = $_POST['user-personas'];
    $fecha = $_POST['user-fecha'];
    $hora = $_POST['user-hora'];

    $hash = password_hash($password, PASSWORD_BCRYPT);

    $connection->begin_transaction(); 

    try {

        if (IsDuplicate($identification)) {
            echo "<div>Usuario previamente registrado<div>";
            exit;
        }

        $statement = $connection->prepare(
            "INSERT INTO users(name, lastname, username, email, id_rol, password, identification) 
             VALUES (?, ?, ?, ?, ?, ?, ?)"
        );
        $statement->bind_param("ssssiss", $name, $lastName, $username, $email, $rol, $hash, $identification);

        if (!$statement->execute()) {
            throw new Exception("Error al crear usuario: " . $statement->error);
        }

        $user_id = $connection->insert_id; 

        $stmtReserva = $connection->prepare(
            "INSERT INTO reservas(user_id, personas, fecha, hora) VALUES (?, ?, ?, ?)"
        );
        $stmtReserva->bind_param("iiss", $user_id, $personas, $fecha, $hora);

        if (!$stmtReserva->execute()) {
            throw new Exception("Error al crear reserva: " . $stmtReserva->error);
        }

        $connection->commit();

        header("Location: panel.php");
        exit;

    } catch (Exception $e) {
        $connection->rollback(); 
        echo "<div>Error: " . $e->getMessage() . "</div>";
    }
}
?>
