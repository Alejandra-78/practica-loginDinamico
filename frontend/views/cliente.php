<?php
session_start();

//Control de acceso para el cliente
if(!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'Cliente'){
    //Si no es cliente, lo vamos a expulsamos al formularo de login
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Cliente</title>
    <link rel="stylesheet" href="../../frontend/css/cliente.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?></h1>
        <h3>Rol actual: <?php echo $_SESSION['rol']; ?> (Permisos de Lectura)</h3>
        <p>Área exclusiva para el cliente.</p>
        <hr>
        <a href="../../backend/api/logout.php">Cerrar Sesión de manera segura...</a>
    </div>
    
    
</body>
</html>