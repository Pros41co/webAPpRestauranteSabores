<?php
include('connection.php');

$query = "SELECT users.id, name, lastname, username, email, rol_name FROM users LEFT JOIN roles ON users.id_rol = roles.id";
$result = $connection->query($query);
?>


<!DOCTYPE html>
<html lang="es">
<head>

    <link rel="stylesheet" href="../css/panel.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores del Bosque - Panel</title>
</head>
<body>
    <div class="main-container">
        <aside class="vertical-bar">
            <h1>Sabores del Bosque - Panel</h1>
            <nav>
                <div class="option-panel">
                    <a href="">Home</a>
                </div>
                <div class="option-panel">
                    <a href="">Tables</a>
                </div>
                <div class="option-panel">
                    <a href="">Inventory</a>
                </div>
            </nav>
        </aside>
    </div>


</body>
</html>