<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "usuario", "contraseña", "extindustria_bd");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para contar mensajes
$resultado = $conexion->query("SELECT COUNT(*) AS total FROM contacto");
$fila = $resultado->fetch_assoc();
$totalMensajes = $fila['total'];
?>
