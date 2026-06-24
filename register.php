<?php
include("config.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$sueldo = $_POST["sueldo"];

$sql = "INSERT INTO empleados (nombre, apellido, email, password, sueldo)
VALUES ('$nombre', '$apellido', '$email', '$password', '$sueldo')";

if ($conn->query($sql)) {
    echo "Usuario guardado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>