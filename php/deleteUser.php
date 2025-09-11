<?php

include('connection.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {

    $id = intval($_POST['id']);
    


    $stmt = $connection->prepare("DELETE FROM users WHERE id = ?");

    $stmt->bind_param("i", $id);
    

    if ($stmt->execute()) {

        header("Location: panel.php?msg=Usuario eliminado correctamente");

        exit();

    } else {

        echo "Error al eliminar usuario: " . $connection->error;

        
        

        $stmt->close();
    }
};
?>
