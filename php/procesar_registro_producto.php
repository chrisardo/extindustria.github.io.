<?php
$mensaje = "";
$tipoAlerta = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "extindustria_bd");
    if ($conexion->connect_error) {
        $mensaje = "Error de conexión: " . $conexion->connect_error;
        $tipoAlerta = "danger";
    } else {
        // Validar campos
        if (
            !empty(trim($_POST['nombre']))  &&
            isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK
        ) {
            $nombre = $conexion->real_escape_string(trim($_POST['nombre']));
            $descripcion = $conexion->real_escape_string(trim($_POST['descripcion']));
            $precio = floatval($_POST['precio']);
            $imagenBinaria = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

            $sql = "INSERT INTO producto (nombre, descripcion, precio, imagen, fecha_registro)
                    VALUES ('$nombre', '$descripcion', $precio, '$imagenBinaria', NOW())";

            if ($conexion->query($sql) === TRUE) {
                $mensaje = "✅ Producto registrado correctamente.";
                $tipoAlerta = "success";
            } else {
                $mensaje = "❌ Error al registrar el producto: " . $conexion->error;
                $tipoAlerta = "danger";
            }
        } else {
            $mensaje = "⚠️ Todos los campos son obligatorios.";
            $tipoAlerta = "warning";
        }
        $conexion->close();
    }
}
