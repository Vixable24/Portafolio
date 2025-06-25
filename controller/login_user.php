<?php
session_start();
include('conexion.php'); // ajusta si está en otro path

if (isset($_POST['Loginbutton'])) {
    $login_Nombre_usuario = $_POST['login_username'] ?? '';
    $login_password = $_POST['login_password'] ?? '';

    if ($login_Nombre_usuario && $login_password) {
        $Sql = $conn->query("SELECT * FROM usuarios WHERE Nombre_usuario = '$login_Nombre_usuario' AND PASSWORD = '$login_password'");

        if ($user = $Sql->fetch_object()) {
            $_SESSION['ID'] = $user->ID;
            $_SESSION['Nombre'] = $user->Nombre;
            $_SESSION['Nombre_usuario'] = $user->Nombre_usuario;
            $_SESSION['email'] = $user->correo;
            header("Location: ../model/portafolio_php_version.php");
            exit();
        } else {
            echo "<script>alert('Usuario/contraseña incorrectos o el usuario no existe'); window.location.href = '../model/login.php';</script>";
        }
    } else {
        echo "<script>alert('Por favor, complete todos los campos'); window.location.href = '../model/login.php';</script>";
    }
}
?>