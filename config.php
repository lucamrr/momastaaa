<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "momasta"
);

if ($conn->connect_error) {
    die("Error de conexión");
}
?>