<?php
session_start();

if(!isset($_SESSION["empleado"])){
    header("Location:index.php");
    exit;
}

$empleado = $_SESSION["empleado"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Momasta - Panel</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">

    <h1>Bienvenido <?= $empleado["nombre"] ?></h1>

    <div class="info">

        <p><b>Nombre:</b> <?= $empleado["nombre"] ?></p>

        <p><b>Apellido:</b> <?= $empleado["apellido"] ?></p>

        <p><b>Email:</b> <?= $empleado["email"] ?></p>

        <p><b>Sueldo:</b> $<?= $empleado["sueldo"] ?></p>

    </div>

    <a href="logout.php" class="logout">
        Cerrar sesión
    </a>

</div>

</body>
</html>