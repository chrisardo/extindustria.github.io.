<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "extindustria_bd");

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener y sanitizar datos
    $nombre = $conn->real_escape_string($_POST["nombre"]);
    $correo = $conn->real_escape_string($_POST["correo"]);
    $celular = intval($_POST["celular"]);
    $mensajeTexto = $conn->real_escape_string($_POST["mensaje"]);
    //Obtener la fecha y hora actual
    // Obtener fecha y hora actual
    $fecha = date("d/m/Y H:i:s");

    // Insertar en la base de datos
    $sql = "INSERT INTO contacto (nombre, email, celular, mensaje, fecha) VALUES ('$nombre', '$correo', '$celular', '$mensajeTexto', now())";

    if ($conn->query($sql) === TRUE) {
        $mensaje = "✅ ¡Registro exitoso!";
    } else {
        $mensaje = "❌ Error: " . $conn->error;
    }

    $conn->close();
}
