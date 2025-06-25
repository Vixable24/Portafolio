<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body >
    <?php
    include ('../controller/conexion.php');
    include ('../controller/new_user.php');
    ?>
    <section class="registro">
  <section class="personal" style="width: 30%; height: auto;">
  
    <form method="POST">
    <div class="mb-3">
        <h4>Ingresa tu Nombre y Apellido</h4>
        <input type="text" class="form-control" name="nombre" required>
    </div>
    <div class="mb-3">
        <h4>Ingresa tu Nombre de Usuario</h4>
        <input type="text" class="form-control" name="username" required>
    </div>
    <div class="mb-3">
        <h4>Ingresa tu correo electronico</h4>
        <input type="email" class="form-control" name="email" required>
    </div>
     <div class="mb-3">
        <h4>Ingresa tu nueva contraseña</h4>
        <input type="password" class="form-control" name="password" required>
    </div>
    <br>
    <button type="submit" name="Registrarbutton" value="1">Registrarse</button>
    <br>
    <p>¿Ya tienes una cuenta? <a style="color: white;" href="login.php">Inicia sesión aquí</a></p>
  </form>

</section>
</section>
    
</body>
</html>