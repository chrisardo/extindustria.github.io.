<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "extindustria_bd");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// Consulta para obtener todos los mensajes
$resultado = $conexion->query("SELECT * FROM contacto order by idContacto ASC");
// Consulta para contar mensajes
$resultado2 = $conexion->query("SELECT COUNT(*) AS total FROM contacto");
$fila = $resultado2->fetch_assoc();
$totalMensajes = $fila['total'];
// Eliminar mensaje si se recibe el parámetro 'eliminar'
if (isset($_GET['eliminar'])) {
    $id = intval($_GET['eliminar']);
    $conexion->query("DELETE FROM contacto WHERE idContacto = $id");
    header("Location: mensajes.php"); // Redirigir para evitar reenvío del formulario
    exit();
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Extindustria — Adm</title>
    <!--Poner icono de la pagina web-->
    <link rel="icon" href="../img/Logo_Extindustria.svg" type="image/svg+xml" />
    <!-- Font Awesome para iconos -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex" style="min-height: 100vh;">
        <!-- Sidebar -->
        <nav class="bg-dark text-white p-3" style="width: 250px;">
            <h4 class="mb-4"></h4>
            <!--poner logo de la empresa-->
            <img src="../img/Logo_Extindustria.svg" alt="Logo" class="img-fluid mb-4">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="adm_index.php">
                        <!--Poner icono de inicio-->
                        <i class="fas fa-home"></i>
                        Inicio

                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-warning" href="mensajes.php">
                        <!--Poner icono de mensajes-->
                        <i class="fas fa-envelope"></i>
                        Mnesajes
                    </a>
                </li>
                <li class="nav-item dropdown dropend" >
                    <a class="nav-link dropdown-toggle dropdown-toggle-split text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!--Poner icono de productos-->
                        <i class="fas fa-box"></i>Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="registrarProducto.php">Registrar producto</a></li>
                        <li><a class="dropdown-item" href="productos_adm.php">Lista de productos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="desconectar.php">
                        <!--Poner icono de cerrar sesion-->
                        <i class="fas fa-sign-out-alt"></i>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Contenido principal -->
        <div class="flex-grow-1">
            <!-- Navbar superior -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <span class="navbar-brand">Panel de Control</span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notificaciones 🔔</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Perfil 👤</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Contenido -->
            <div class="container-fluid p-4">
                <div class="row g-4">
                    <!-- Tarjetas métricas -->
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Mensajes</h5>
                                <p class="display-6"><?php echo $totalMensajes; ?></p>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tabla -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Mensajes Recientes
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Celular</th>
                                            <th>Fecha</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($fila = $resultado->fetch_assoc()): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                                                <td><?php echo htmlspecialchars($fila['email']); ?></td>
                                                <td><?php echo htmlspecialchars($fila['celular']); ?></td>
                                                <td><?php echo htmlspecialchars($fila['fecha']); ?></td>
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalVer"
                                                        data-nombre="<?= htmlspecialchars($fila['nombre']) ?>"
                                                        data-email="<?= htmlspecialchars($fila['email']) ?>"
                                                        data-celular="<?= htmlspecialchars($fila['celular']) ?>"
                                                        data-fecha="<?= htmlspecialchars($fila['fecha']) ?>"
                                                        data-mensaje="<?= htmlspecialchars($fila['mensaje']) ?>">
                                                        Ver
                                                    </a>

                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar" onclick="setEliminarId(<?php echo $fila['idContacto']; ?>)">Eliminar</button>

                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal de confirmación -->
    <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEliminarLabel">Confirmar eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar este mensaje?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="#" class="btn btn-danger" id="btnConfirmarEliminar">Eliminar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ver Mensaje -->
    <div class="modal fade" id="modalVer" tabindex="-1" aria-labelledby="modalVerLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalVerLabel">Detalle del Mensaje</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nombre:</strong> <span id="verNombre"></span></p>
                    <p><strong>Correo:</strong> <span id="verEmail"></span></p>
                    <p><strong>Celular:</strong> <span id="verCelular"></span></p>
                    <p><strong>Fecha:</strong> <span id="verFecha"></span></p>
                    <p><strong>Mensaje:</strong></p>
                    <div class="border p-2 bg-light" id="verMensaje"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modalVer = document.getElementById('modalVer');
            modalVer.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;

                document.getElementById('verNombre').textContent = button.getAttribute('data-nombre') || '—';
                document.getElementById('verEmail').textContent = button.getAttribute('data-email') || '—';
                document.getElementById('verCelular').textContent = button.getAttribute('data-celular') || '—';
                document.getElementById('verFecha').textContent = button.getAttribute('data-fecha') || '—';
                document.getElementById('verMensaje').textContent = button.getAttribute('data-mensaje') || '—';
            });
        });

        function setEliminarId(id) {
            const btn = document.getElementById('btnConfirmarEliminar');
            btn.href = '?eliminar=' + id;
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>