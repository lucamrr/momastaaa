<?php
session_start();
include("config.php");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM empleados 
        WHERE email = '$email' 
        AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $user = $result->fetch_assoc();

    // GUARDAR SESIÓN (esto es lo importante)
    $_SESSION["empleado"] = $user;

    header("Location: dashboard.php");
    exit;

} else {
    echo "<h2 style='color:white;text-align:center'>Login incorrecto</h2>";
}
?>