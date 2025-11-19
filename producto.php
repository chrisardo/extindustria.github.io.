<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Extindustria — index</title>
    <!--Poner icono de la pagina web-->
    <link rel="icon" href="img/Logo_Extindustria.svg" type="image/svg+xml" />
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <!--Llamar a css/style.css-->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap Bundle con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome para iconos -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Barra superior de información -->
    <div class="bg-danger text-white py-1 mb-5  fixed-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span class="small me-3"><i class="fas fa-phone me-1"></i> (+51) 992 928 542</span>
                    <span class="small"><i class="fas fa-envelope me-1"></i> info@extindustria.com</span>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white text-decoration-none me-3">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-white text-decoration-none me-3">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-white text-decoration-none me-3">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-white text-decoration-none">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Barra de navegación principal -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-1 shadow-sm">
            <div class="container">
                <div class="d-flex flex-column">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img
                            src="img/Logo_Extindustria.svg"
                            alt="Extindustria Logo"
                            width="150" />
                    </a>
                    <small class="text-muted"></small>
                </div>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a
                                class="nav-link fw-medium text-dark px-3"
                                href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link fw-medium text-dark px-3"
                                href="nosotros.php">Conócenos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-medium px-3" href="servicios.php">
                                Servicios
                            </a>
                            <!--<ul
                  class="dropdown-menu shadow"
                  aria-labelledby="serviciosDropdown"
                > dropdown-toggle
                  <li><a class="dropdown-item" href="#">Consultoría</a></li>
                  <li><a class="dropdown-item" href="#">Implementación</a></li>
                  <li><a class="dropdown-item" href="#">Soporte Técnico</a></li>
                </ul>-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-dark px-3 fw-bold active" href="prodcuto.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-dark px-3" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!--Agregar boton de login-->
                <div class="ms-3">
                    <a href="login.php" class="btn btn-danger btn-sm px-4">Iniciar Sesión</a>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <!-- Encabezado estilo Bootstrap -->
    <header class="bg-dark text-white my-5 mb-0 py-4">
        <div class="container">
            <div class="row align-items-center">
                <!-- Título a la izquierda -->
                <div class="col-12 col-md-6">
                    <h1 class="h4 fw-bold mb-0">Productos</h1>
                </div>
                <!-- Breadcrumb a la derecha -->
                <div class="col-12 col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end mb-0">
                            <li class="breadcrumb-item">
                                <a href="/" class="text-white text-decoration-none">HOME</a>
                            </li>
                            <li class="breadcrumb-item">></li>

                            <li
                                class="breadcrumb-item active text-white"
                                aria-current="page">
                                PRODUCTOS
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--Productos section-->
    <div class="container-fluid bg-secondary-subtle position-relative">
        <div class="container my-0 mb-0 py-5 position-relative">

            <div class="row g-4">
                <?php
                // Conexión a la base de datos
                $conexion = new mysqli("localhost", "root", "", "extindustria_bd");

                // Verificar conexión
                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }
                // Consulta para obtener todos los mensajes
                $resultado = $conexion->query("SELECT * FROM producto order by idProducto ASC");
                while ($fila = $resultado->fetch_assoc()):
                ?>
                    <div class="col-md-3">
                        <div class="card card-hover h-100 shadow-lg">
                            <div class="card-body text-center p-4">
                                <!--Colocar imagen-->
                                <div
                                    class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                    <!--<i class="fas fa-cogs fa-lg"></i>-->
                                    <?php
                                    $imagenBinaria = base64_encode($fila['imagen']);
                                    ?>
                                    <img src="data:image/jpeg;base64,<?php echo $imagenBinaria; ?>" alt="Servicio 1" class="img-fluid" />
                                </div>
                                <h5 class="card-title text-dark fw-bold fs-6">
                                    <?php echo htmlspecialchars($fila['nombre']); ?>
                                </h5>
                                <!--Boton de whatsapp de consultar producto -->
                                <a
                                    href="https://api.whatsapp.com/send?phone=51992928542&text=Hola,%20quiero%20cotizar%20el%20producto%20 <?php echo htmlspecialchars($fila['nombre']); ?>"
                                    target="_blank"
                                    class="btn btn-outline-success btn-lg mt-0"><i class="fab fa-whatsapp"></i> Cotizar</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- llamar a otros/footer.php -->
    <?php include 'otros/footer.php'; ?>
    <!--llamar a js/script.js-->
    <script src="js/script.js"></script>
</body>

</html>