<?php
include('connection.php');

$query = "SELECT id, name, lastname, email, rol FROM users";
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
                    <a href="">Users</a>
                </div>
                <div class="option-panel">
                    <a href="">Tables</a>
                </div>
                <div class="option-panel">
                    <a href="">Inventory</a>
                </div>
            </nav>
        </aside>

        <section class='user-panel'>
            <div class="user-creation">
                <form action="createUser.php" method='post'>
                    <h2>Creación de Usuario</h2>          
                    <input type="text" name="user-name" placeholder="Nombre" required>
                    <input type="text" name="user-lastname" placeholder="Apellido" required>
                    <input type="email" name="user-email" placeholder="Correo@Correo.com" required>
                    <input type="text" name="user-identification" placeholder="Cedula" required>
                    <select name="user-rol" id="user-rol" placeholder="Rol" required>
                        <option value="s">Supervisor</option>
                        <option value="a">Administrator</option>
                        <option value="i">Inventory</option>
                        <option value="d">Dummy</option>
                    </select>
                    <input type="password" name="user-password" required>
                    <button type="submit">Crear Usuario</button>
                </form>
            </div>
            <div class="user-table">
                <h2>Tabla de usuarios</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($result)):?>
                        <tr>
                            <th> <?=$row['id'] ?> </th>
                            <th> <?=$row['name'] ?> </th>
                            <th> <?=$row['lastname'] ?> </th>
                            <th> <?=$row['email'] ?> </th>
                            <th> <?=$row['rol'] ?> </th>
                            <th><div class="edit-icon"></div></th>
                            <th><div class="delete-icon"></div></th>

                        </tr>

                        <?php endwhile; ?>
                    </tbody>
                </table>                
            </div>
        </section>
    </div>





</body>
</html>