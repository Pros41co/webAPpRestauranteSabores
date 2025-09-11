<?php

include 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id =  $_POST['user-id'];
    $id = intval($id);

    $statement = $connection->prepare("SELECT * FROM users WHERE id = ?");
    $statement->bind_param("i", $id);
    
    if($statement->execute()) {
        $result = $statement->get_result();
        $user = $result->fetch_assoc();
    }
}

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
                    <a href="">Users</a>
                </div>
                <div class="option-panel">
                    <a href="">Tables</a>
                </div>
                <div class="option-panel">
                    <a href="">Inventory</a>
                </div>
            </nav>
            <div class="logout-option">
                <div class="logout-image"></div>
                <div class="logout-username">Usuario: <?=$_SESSION['username'] ?></div>
                <a class="logout-link" name="logout" href="userLogout.php">Cerrar Sesión</a>
            </div>
        </aside>

        <section class='user-panel '>
            <div class="user-creation edition-mode">
                <form action="updateUser.php" method='post'>
                    <h2>Edición de Usuario</h2>
                    <input type="text" name="user-name" placeholder="Nombre" required value=<?=$user['name']?>>
                    <input type="text" name="user-lastname" placeholder="Apellido" required value=<?=$user['lastname']?>>
                    <input type="text" name="user-username" placeholder="Nombre de Usuario" required value=<?=$user['username']?>>
                    <input type="email" name="user-email" placeholder="Correo@Correo.com" required value=<?=$user['email']?>>
                    <input type="text" name="user-identification" placeholder="Cedula" required value=<?=$user['identification']?>>
                    <select name="user-rol" id="user-rol" placeholder="Rol" required value=<?=intval($user['id_rol'])?>>
                        <option value=1>Supervisor</option>
                        <option value=2>Administrator</option>
                        <option value=3>Inventory</option>
                        <option value=4>Dummy</option>
                    </select>
                    <input type="hidden" name="user-id" value=<?=$user['id']?>>               
                    <button type="submit" name="createBtn">Confirmar</button>
                    <button><a href="panel.php">Cancelar</a></button>         
                </form>
            </div>
        </section>
    </div>
</body>
</html>