<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a mi Pagina Web <?=$_SESSION['username'];?></h1>
    <a href="logout.php">cerrar sesion</a>
</body>
</html>