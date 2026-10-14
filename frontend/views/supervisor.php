<?php
session_start();

//Control de acceso para supervisor
if(!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'Supervisor'){
    //Si no es supervisor, lo vamos a expulsamos al formularo de login
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Supervisor</title>
    <link rel="stylesheet" href="../../frontend/css/supervisor.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?></h1>
        <h3>Rol actual: <?php echo $_SESSION['rol']; ?> (Permisos de Lectura y Control)</h3>
        <p>Área exclusiva para la supervisión de operaciones del sistema.</p>
        <hr>
        <a href="../../backend/api/logout.php">Cerrar Sesión de manera segura...</a>
    </div>
    
    
</body>
</html>