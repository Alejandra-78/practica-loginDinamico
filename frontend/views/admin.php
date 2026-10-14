<?php
session_start();

//Control de acceso estricto nivel de servidor
if(!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'Administrador'){
    //Si no está logueado o no pertenece aquí, es expulsado al login inmediatamente 
    header('Location: index.html') ;
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
    <link rel="stylesheet" href="../../frontend/css/admin.css">
</head>
<body>
    <!-- htmlspecialchars previene atacaques XSS a renbderizar datos del usuario -->
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?></h1>
    <h3>Rol actual: <?php echo $_SESSION['rol']; ?> (Acesso Total)</h3>
    <p>Área exclusiva de administración</p>

    <a href="../../backend/api/logout.php">Cerrar Sesión de manera segura...</a>

</body>
</html>