<?php
session_start();
if($_SESSION['tipo_usuario']==1)
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h1>Hola administradir</h1>
    <a href="../controlador/logout.php">cerrar sesion</a>
</body>
</html>

<?php
}
else{
    header('location: ../vista/login.php');
}
?>