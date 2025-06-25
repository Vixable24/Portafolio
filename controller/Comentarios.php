<?php
session_start();
include('conexion.php');

if (isset($_POST['enviar_nota'])) {
    $nombre = $_POST['nombreyapellido'];
    $usuario = $_POST['usuario'];
    $nota = $_POST['nota'];
    $fecha = date("Y-m-d H:i:s");
    $stmt = $conn->prepare("INSERT INTO comentarios (nombreyapellido, usuario, nota, fechanota) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $usuario, $nota, $fecha);
    $stmt->execute();
    $stmt->close();

    header("Location: ../model/portafolio_php_version.php");
    exit();
}
?>