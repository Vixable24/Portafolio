<?php
include('../controller/conexion.php');
include('../controller/login_user.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
    <section class="registro">
        <section class="personal" style="width: 30%; height: auto;">
            <form method="POST" action="../controller/login_user.php">
                <div class="mb-3">
                    <h4>Ingrese su Nombre de usuario</h4>
                    <input type="text" class="form-control" name="login_username" required>
                </div>
                <div class="mb-3">
                    <h4>Ingrese su contraseña</h4>
                    <input type="password" class="form-control" name="login_password" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="Loginbutton" value="1">Iniciar sesión</button>
                <br>
                <p>¿No tienes una cuenta? <a style="color: white;" href="registro.php">Regístrate aquí</a></p>
            </form>
        </section>
    </section>
</body>
</html>