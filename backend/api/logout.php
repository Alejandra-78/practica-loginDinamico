<?php 
//Destrucción de la Sesion
session_start();
$_SESSION = array(); //Limpiar las variables en memoria

//Borrar la cookie fiseica del navegador 
if (ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

}

session_destroy(); //Destruir la sesion en el servidor
header("location: ../../frontend/views/index.html");

exit();

