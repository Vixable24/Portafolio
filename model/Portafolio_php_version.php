<?php
session_start();
if (!isset($_SESSION['ID'])){
    header("Location: ../model/login.php");
    exit();
}
include('../controller/conexion.php');
$comentarios = $conn->query("SELECT * FROM comentarios ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - marvel vs capcoom</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
 
    <div class = "encabezado_movil">
        <span style="display:inline-block; width: 10%; text-align: left;">Bienvenido a Mi pagina Web</span>
        
        <div class="botones-acceso">
            <div class=" me-3">

                
  <a href="../controller/logout_user.php"><button >Cerrar Sesión</button></a>

            </div>
        </div>
    </div>
    <header>
        <h1>Carlos Daniel Gómez Díaz</h1>
        <p>Pescador de las islas de vertebra mayor</p>
    </header>
    
    <section class="personal">
        <h2>Sobre Mí</h2>
        <p class="p">Gustos personales:
            <ul>
                <li>Videojuegos:</li>
                <br>
                <ol>Dredge (Primer Platino)</ol>
                <br></br>
                <img src="/images/Dredge-Release-Date-Feature-Image.webp" alt="" width="350" height="200">
                <br></br>
                <ol>Ultimate Marvel vs Capcom 3</ol>
                <br></br>
                <img src="/images/OIP (2).jpeg" alt="" width="350" height="200">
                <br></br>
                <ol>Portal 2 (Cerca del Platino, solo faltan 3 logros)</ol>
                <br></br>
                <img src="/images/OIP.jpeg" alt="" width="350" height="200">
                <br></br>
                <li>Anime</li>
                <br></br>
                <ol>Kimetsu no yaiba</ol>
                <br></br>
                <img src="/images/imagenes-de-kimetsu-no-yaiba-ekypmhesa3ghjw9r.jpg" alt="" width="350" height="200">
                <br></br>
                <ol>nanatsu no taizai</ol>
                <br></br>
                <img src="/images/OIP (1).jpeg" alt="" width="350" height="200">
            </ul>
        </p>
    </section>

    <section class="proyectos">
        <h2>Metas enfocados en este trimestre</h2>
        <div class="proyectos">
            <h3>Aprender HTML</h3>
            <p>Conocimiento Basico de HTML y CCS</p>
            <br></br>
        </div>
        <div class="proyectos">
            <h3>Poder pasar la materia</h3>
            <p>Mi proposito es pasar la materia, 10 es nota lo demas es lujo</p>
        </div>
        
    </section>

    <section class="contacto">
        <h2>Contacto</h2>
        <p>Email: cgomez.7634@unimar.edu.ve</p>
        <p>Teléfono: 0412-3572988</p>
    </section>
    <section class="comentarios">
        <h2>Comentarios</h2>
        <form method="POST" action="../controller/comentarios.php">>
    <input type="hidden" name="nombreyapellido" value="<?php echo $_SESSION['Nombre']; ?>">
    <input type="hidden" name="usuario" value="<?php echo $_SESSION['Nombre_usuario']; ?>">
  

    <label>Nota:</label>
    <textarea name="nota" required></textarea>

    <button type="submit" name="enviar_nota">Enviar</button>
</form>
<?php if ($comentarios && $comentarios->num_rows > 0): ?>
    <h3>Notas recientes:</h3>
    <?php while ($fila = $comentarios->fetch_assoc()): ?>
        <div class="nota" style="border: 1px solid #ccc; padding: 10px; margin: 10px 0;">
            <strong><?php echo htmlspecialchars($fila['nombreyapellido']); ?></strong>
            <?php if (!empty($fila['usuario'])): ?>
                <em>(<?php echo htmlspecialchars($fila['usuario']); ?>)</em>
            <?php endif; ?>
            <p><?php echo nl2br(htmlspecialchars($fila['nota'])); ?></p>
            <small>Fecha: <?php echo htmlspecialchars($fila['fechanota']); ?></small>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p>No hay comentarios aún.</p>
<?php endif; ?>
    </section>
    <footer>
        <p>&copy; Vixable's Company - Todos los derechos reservados, Segundo aviso de demanda en caso de rasparme</p>
    </footer>
</body>
</html>