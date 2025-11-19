<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
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
            <h4 class="mb-4">Dashboard</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="adm_index.php">
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
                    <a class="nav-link dropdown-toggle dropdown-toggle-split text-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!--Poner icono de productos-->
                        <i class="fas fa-box"></i>Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item active" href="registrarProducto.php">Registrar producto</a></li>
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
                <h2 class="mb-4">Registrar productos</h2>
                <!--llamar a php/procesar_registro_producto.php-->
                <?php include '../php/procesar_registro_producto.php'; ?>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" ></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="numbe"  class="form-control" id="precio" name="precio" >
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen del producto</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar Producto</button>
                        </form>
                    </div>

                    <?php if (!empty($mensaje)): ?>
                        <div class="alert alert-<?= $tipoAlerta ?> alert-dismissible fade show" role="alert">
                            <?= $mensaje ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>