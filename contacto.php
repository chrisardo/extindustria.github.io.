<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Extindustria — Servicio</title>
  <!--Poner icono de la pagina web-->
  <link rel="icon" href="img/Logo_Extindustria.svg" type="image/svg+xml" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Bootstrap Bundle con Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <!-- jQuery (opcional si usas animaciones) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <!-- Barra superior de información -->
  <div class="bg-danger text-white py-1 fixed-top">
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
              <a class="nav-link fw-medium text-dark px-3" href="index.php">Inicio</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link fw-medium" href="nosotros.php">Conócenos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link fw-medium px-3" href="servicios.php">
                Servicios
              </a>
              <!--<ul
                class="dropdown-menu shadow"
                aria-labelledby="serviciosDropdown"
              >dropdown-toggle
                <li><a class="dropdown-item" href="#">Consultoría</a></li>
                <li><a class="dropdown-item" href="#">Implementación</a></li>
                <li><a class="dropdown-item" href="#">Soporte Técnico</a></li>
              </ul>-->
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium text-dark px-3" href="producto.php">Productos</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link fw-medium text-dark px-3 fw-bold active"
                href="contacto.php">Contacto</a>
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
  <br /><br />
  <!-- Encabezado estilo Bootstrap -->
  <header class="bg-dark text-white py-4 mt-4">
    <div class="container">
      <div class="row align-items-center">
        <!-- Título a la izquierda -->
        <div class="col-12 col-md-6">
          <h1 class="h4 fw-bold mb-0">Contacto</h1>
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
                CONTACTO
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Contacto Section -->
  <div class="container py-2">
    <div
      class="row border p-4"
      style="
          background-image: url('img/fondo1.png');
          background-size: cover;
          background-position: center;
        "
      id="contacto">
      <!-- Columna de información de contacto -->
      <div class="col-md-6">
        <h1 class="fw-bold mb-5">Contáctanos</h1>
        <div class="mb-4">
          <!--Poner icono de telefono-->

          <h2 class="h5 fw-bold">
            <i class="fas fa-phone fa-lg text-danger me-2"></i>
            Llámanos
          </h2>
          <p>+91 5337188</p>
        </div>
        <div class="mb-4">
          <!--Poner icono de correo-->
          <h2 class="h5 fw-bold">
            <i class="fas fa-envelope fa-lg text-danger me-2"></i>
            Escríbenos
          </h2>
          <p>info@extindustria.com</p>
        </div>
        <div class="mb-4">
          <!--poner icono de whatsapp-->
          <h2 class="h5 fw-bold">
            <i class="fab fa-whatsapp fa-lg text-danger me-2"></i>
            WhatsApp
          </h2>
          <p>+91 992 928 542</p>
        </div>
      </div>

      <!-- Columna del formulario -->
      <div class="col-md-6">
        <h2 class="fw-bold mb-5">
          Coméntanos sobre tu Proyecto ...

          <div class="container bg-danger"></div>
        </h2>
        <?php include 'php/procesar_contacto.php'; ?>

        <form method="POST" action="" class="mt-4">
          <div class="mb-3">
            <label for="nombre" class="form-label">Tu Nombre</label>
            <input
              type="text"
              class="form-control"
              id="nombre"
              name="nombre"
              required />
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="correo"
              name="correo"
              required />
          </div>
          <div class="mb-3">
            <label for="celular" class="form-label">Teléfono</label>
            <input
              type="tel"
              class="form-control"
              id="celular"
              name="celular"
              required />
          </div>
          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea
              class="form-control"
              id="mensaje"
              name="mensaje"
              rows="4"
              required></textarea>
          </div>
          <button type="submit" class="btn btn-danger">ENVIAR</button>
        </form>

        <?php if (!empty($mensaje)): ?>
          <div class="alert alert-info alert-dismissible fade show mt-3" role="alert">
            <?= $mensaje ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
  <!-- llamar a otros/footer.php -->
  <?php include 'otros/footer.php'; ?>

</body>

</html>