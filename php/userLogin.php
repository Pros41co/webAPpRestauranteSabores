<?php
require_once 'connection.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user-username'];
    $password = $_POST['user-password'];

    $statement = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $statement->bind_param("s", $username);
    
    
    if ($statement->execute()) {
        $result = $statement->get_result();
        $user = $result->fetch_assoc();

        if (($user['username'] == $username) && password_verify($password, $user['password'])) {
            $_SESSION['user-id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['id_rol'] = $user['id_rol'];

            if ($user['id_rol'] == 2) {
                header("Location: panel.php");
            } else {
                header("Location: userPanel.php");
            }

            header("Location: panel.php");
            exit();
        } else {

        }
    }
}



?>