<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Extindustria — Nosotros</title>
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
              <a
                class="nav-link fw-medium fw-bold px-3 active"
                href="nosotros.php">Conócenos</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link fw-medium text-dark px-3"
                href="servicios.php">
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
                class="nav-link fw-medium text-dark px-3"
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
          <h1 class="h4 fw-bold mb-0">Nosotros</h1>
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
                NOSOTROS
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Hero Section -->
  <div class="bg-light py-5 mt-5">
    <div
      class="container overflow-hidden"
      style="
          background-image: url('img/fondo3.png');
          background-size: cover;
          background-position: center;
        ">
      <div class="row align-items-center">
        <!-- Texto: entra primero desde la derecha -->
        <div class="col-lg-6 hero-text">
          <h1 class="display-5 fw-bold text-danger mb-4 fs-3">
            EXTINDUSTRIA PERÚ
          </h1>
          <p class="fw-bold">Ingeniería contra incendios</p>
          <p class="lead mb-0 fs-6">
            Una empresa al servicio del sector comercial, industrial,
            construcción, minero; especialistas con amplia experiencia
            dedicado a la solución integral de Sistemas de protección contra
            incendios (Detección y Extinción), diseñamos, suministramos,
            instalamos y damos mantenimiento de acuerdo a las normas de la
            NFPA. Ejecutamos el montaje de obras llave en mano y puesta en
            marcha de sistemas de protección contra incendios. Además,
            brindamos servicios adicionales como sistemas de bombeo de agua y
            desagüe y sistemas de aire acondicionado.
          </p>
        </div>

        <!-- Imagen: entra después desde la derecha -->
        <div class="col-lg-6 text-center hero-image">
          <img
            src="img/sistem-alarm-contra-incen.jpg"
            alt="Hero Image"
            class="img-fluid rounded img-thumbnail" />
        </div>
      </div>
    </div>
  </div>

  <section class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card border-success mb-3">
          <div
            class="fw-bold card-header bg-transparent border-secondary text-center">
            Misión de la empresa
          </div>
          <div class="card-body">
            <p class="card-text">
              Brindar soluciones integrales a nuestros clientes, enfocándonos
              en la seguridad, calidad, productividad, contribuyendo al
              desarrollo sostenible de nuestra sociedad.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-secondary mb-3">
          <div
            class="fw-bold card-header bg-transparent border-secondary text-center">
            Visión de la empresa
          </div>
          <div class="card-body">
            <p class="card-text">
              Ser reconocida como empresa líder en el mercado por sus
              servicios especializados.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-secondary mb-3">
          <div
            class="fw-bold card-header bg-transparent border-secondary text-center">
            Valores de la empresa
          </div>
          <div class="card-body">
            <p class="card-text">
              Vocación de servicio Ética Seguridad laboral Compromiso con el
              cliente Transparencia comercial Trabajo en Equipo
              Responsabilidad social
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cta-section bg-dark text-white py-5">
    <div
      class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
      <h2 class="cta-text mb-3 mb-md-0 text-center text-md-start">
        Cuéntanos sobre <strong>TU próximo Proyecto</strong>
      </h2>
      <a href="#contacto">
        <button class="btn btn-danger btn-lg px-4">Cotiza</button>
      </a>
    </div>
  </section>

  <!--Industrias section-->
  <div class="container-fluid bg-secondary-subtle position-relative">
    <div class="container my-0 mb-4 py-4 position-relative">
      <div class="row mb-5">
        <div class="col text-center">
          <h2 class="fw-bold text-dark">
            Industrias con las que nos Comprometemos
          </h2>
        </div>
      </div>

      <!-- 5 columnas -->
      <div class="row row-cols-1 row-cols-md-5 g-2">
        <div class="col">
          <div class="card card-hover h-100 shadow-lg">
            <div class="card-body text-center p-4">
              <div
                class="text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                <i class="fas fa-building fa-lg"></i>
              </div>
              <h5 class="card-title text-dark fw-bold fs-5">Residencial</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-hover h-100 shadow-lg">
            <div class="card-body text-center p-4">
              <div
                class="text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                <i class="fas fa-shopping-cart fa-lg"></i>
              </div>
              <h5 class="card-title text-dark fw-bold fs-5">Comercial</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-hover shadow-lg">
            <div class="card-body text-center p-4">
              <div
                class="text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                <i class="fas fa-hard-hat fa-lg"></i>
              </div>
              <h5 class="card-title text-dark fw-bold fs-5">Construcción</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-hover shadow-lg">
            <div class="card-body text-center p-4">
              <div
                class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3 text-danger">
                <i class="fas fa-industry fa-lg"></i>
              </div>
              <h5 class="card-title text-dark fw-bold fs-5">Industrial</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-hover shadow-lg">
            <div class="card-body text-center p-4">
              <div
                class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3 text-danger">
                <i class="fas fa-gem fa-lg"></i>
              </div>
              <h5 class="card-title text-dark fw-bold fs-5">Minería</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- llamar a otros/footer.php -->
  <?php include 'otros/footer.php'; ?>
  <script>
    // Al cargar, animar texto; cuando termine, animar imagen
    window.addEventListener("DOMContentLoaded", () => {
      const text = document.querySelector(".hero-text");
      const image = document.querySelector(".hero-image");

      // Asegura que la imagen permanezca oculta y fuera mientras entra el texto
      image.style.visibility = "hidden";

      // Disparar animación del texto
      text.classList.add("animate-text");

      // Cuando el texto termina, mostrar y animar la imagen
      text.addEventListener(
        "animationend",
        () => {
          image.style.visibility = "visible";
          image.classList.add("animate-image");
        }, {
          once: true
        }
      );
    });
  </script>
</body>

</html>