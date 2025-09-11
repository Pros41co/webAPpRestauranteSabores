<?php

include('connection.php');
session_start();

$query = "SELECT users.id, name, lastname, username, email, rol_name FROM users LEFT JOIN roles ON users.id_rol = roles.id";
$rolesQuery = "SELECT rol_name, COUNT(*) AS count FROM users LEFT JOIN roles on users.id_rol = roles.id GROUP BY id_rol";

$result = $connection->query($query);

$rolesResult = $connection->query($rolesQuery);
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

        <section class='user-panel'>
            <div class="user-creation">
                <form action="createUser.php" method='post'>
                    <h2>Creación de Usuario</h2>
                    <input type="text" name="user-name" placeholder="Nombre" required>
                    <input type="text" name="user-lastname" placeholder="Apellido" required>
                    <input type="text" name="user-username" placeholder="Nombre de Usuario" required>
                    <input type="email" name="user-email" placeholder="Correo@Correo.com" required>
                    <input type="text" name="user-identification" placeholder="Cedula" required>
                    <select name="user-rol" id="user-rol" placeholder="Rol" required>
                        <option value=1>Supervisor</option>
                        <option value=2>Administrator</option>
                        <option value=3>Inventory</option>
                        <option value=4>Dummy</option>
                    </select>
                    <input type="password" name="user-password" required>
                    <button type="submit" name="createBtn">Crear Usuario</button>          
                </form>
                <div class="user-creation-summary">
                    <?php while($row= mysqli_fetch_array($rolesResult)):?>
                    <div class="user-creation-summary-option">
                        <div class="summary-title"><?=$row['rol_name']?></div>
                        <div class="summary-value"><?=$row['count']?></div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="user-table">
                <h2>Tabla de usuarios</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Nombre de Usuario</th>
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
                            <th> <?=$row['lastname']?> </th>
                            <th> <?=$row['email'] ?> </th>
                            <th> <?=$row['username']?> </th>
                            <th> <?= $row['rol_name']?> </th>
                            <th>
                                <form action="panelUpdate.php" method="post">
                                    <input type="hidden" name="user-id" value="<?=$row['id'] ?>"> 
                                    <button type="submit"><div class="edit-icon"></div></button> 
                                </form>
                            </th>
                            <th>
                                <form action="deleteUser.php" method="post" style="display:inline;">
                                    <input type="hidden" name="id" value="<?=$row['id'] ?>">
                                    <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar este usuario?');"><div class="delete-icon" ></div></button>
                                </form></th>
                        </tr>

                        <?php endwhile; ?>
                    </tbody>
                </table>                
            </div>
        </section>
    </div>





</body>
</html>