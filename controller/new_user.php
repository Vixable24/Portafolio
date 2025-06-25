<?php

include('../controller/conexion.php');
/*Pendiente con que todo este igual que ya este pendejo tardo mas de 5 horas en darse cuentas que el password
lo metio en mayusculas!*/
if (!empty($_POST["Registrarbutton"])) {
    $Nombre = $_POST['nombre'];
    $Nombre_usuario = $_POST['username'];
    $correo = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($Nombre) && !empty($Nombre_usuario) && !empty($correo) && !empty($password)) {
        $Sql = $conn->query("INSERT INTO usuarios (Nombre, Nombre_usuario, correo, PASSWORD) 
                             VALUES ('$Nombre', '$Nombre_usuario', '$correo', '$password')");
        if ($Sql == true) {
            
            header("Location: ../model/portafolio_php_version.php");
            exit();
exit();
        } else {
            echo "<script>alert('Error al registrar: " . $conn->error . "');</script>";
        }
    } else {
        echo "<script>alert('Por favor, complete todos los campos');</script>";
    }
}
?>
