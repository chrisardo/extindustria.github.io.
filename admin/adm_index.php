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
// Consulta para contar mensajes
$resultado2 = $conexion->query("SELECT COUNT(*) AS total FROM contacto");
$fila = $resultado2->fetch_assoc();
$totalMensajes = $fila['total'];
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
            <h4 class="mb-4">Dashboard</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-warning" href="adm_index.php">
                        <!--Poner icono de inicio-->
                        <i class="fas fa-home"></i>
                        Inicio

                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="mensajes.php">
                        <!--Poner icono de mensajes-->
                        <i class="fas fa-envelope"></i>
                        Mnesajes
                    </a>
                </li>
                <li class="nav-item dropdown dropend">
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
                <!-- Título -->
                <h2 class="mb-4">Bienvenido: <?php echo $_SESSION['nombre']; ?></h2>

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
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Productos</h5>
                                <p class="display-6">4</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>