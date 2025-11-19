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
              <a
                class="nav-link fw-medium text-dark px-3 fw-bold active"
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
              <a class="nav-link fw-medium text-dark px-3" href="producto.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium text-dark px-3" href="contacto.php">Contacto</a>
            </li>
          </ul>
          <!--Agregar boton de login-->
          <div class="ms-3">
            <a href="login.php" class="btn btn-danger btn-sm px-4">Iniciar Sesión</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-- Carousel Section -->
  <section>
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="img/banner_CONTRAINCENDIO-3.jpg"
            class="d-block w-100"
            height="450"
            alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h1>Ingenieria Contra Incendios</h1>
            <p>
              <span class="badge">
                Empresa de protección contra incendios y sistemas de seguridad
                desde un punto de vista global: Ingeniería, Instalación y
                Mantenimiento
              </span>
            </p>

            <a href="contacto.php" class="btn btn-danger btn-lg px-4">Contáctanos</a>
            <a
              href="servicios.php"
              class="btn btn-outline-danger btn-lg px-4"
              style="background-color: white; color: red">Nuestros Servicios</a>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="img/sistem-alarm-contra-incen.jpg"
            class="d-block w-100"
            height="450"
            alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <div class="container section-container">
    <div
      class="row align-items-center"
      style="
          background-image: url('img/fondo1.png');
          background-size: cover;
          background-position: center;
        ">
      <!-- Imagen -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img
          src="img/concepto-prevencion-incendios-diseno-plano_23-2149140959.avif"
          alt="Protección contra incendios"
          class="img-fluid rounded img-fluid img-thumbnail" />
      </div>

      <!-- Texto -->
      <div class="col-md-6">
        <!--<p class="subtitle mb-1">Grupo Eurofesa</p>-->
        <h2 class="section-title mb-3 fs-3">
          Protección contra incendios y<br />
          soluciones integrales en seguridad
        </h2>

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="securityTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="incendios-tab"
              data-bs-toggle="tab"
              data-bs-target="#incendios"
              type="button"
              role="tab"
              aria-controls="incendios"
              aria-selected="true">
              Protección contra incendios
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="seguridad-tab"
              data-bs-toggle="tab"
              data-bs-target="#seguridad"
              type="button"
              role="tab"
              aria-controls="seguridad"
              aria-selected="false">
              Sistemas de seguridad
            </button>
          </li>
        </ul>

        <!-- Contenido de las pestañas -->
        <div class="tab-content mt-3" id="securityTabsContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="incendios"
            role="tabpanel"
            aria-labelledby="incendios-tab">
            <div class="feature-list">
              <div class="feature-item">
                <i class="bi bi-shield-check"></i> Montaje por personal
                especializado
              </div>
              <div class="feature-item">
                <i class="bi bi-gear"></i> Servicios a su medida
              </div>
              <div class="feature-item">
                <i class="bi bi-award"></i> Empresa líder en su sector
              </div>
              <div class="feature-item">
                <i class="bi bi-cash-coin"></i> Precios competitivos
              </div>
              <div class="feature-item">
                <i class="bi bi-hand-thumbs-up"></i> Servicio posventa
                garantizado
              </div>
            </div>
          </div>

          <!-- Tab 2 -->
          <div
            class="tab-pane fade"
            id="seguridad"
            role="tabpanel"
            aria-labelledby="seguridad-tab">
            <div class="feature-list">
              <div class="feature-item">
                <i class="bi bi-camera-video"></i> Instalación de sistema
                contra incendio y de alarma - detección
              </div>
              <div class="feature-item">
                <i class="bi bi-bell"></i> Inspeción y mantenimiento de
                sistemas contra incendios
              </div>
              <div class="feature-item">
                <i class="bi bi-lock"></i> Panel de detección de sistemas
                contra incendios
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Servicios Section -->
  <div
    class="container-fluid position-relative"
    style="
        background-image: url('img/Red-contra-incendios-560x367.jpg');
        background-size: cover;
        background-position: center;
      ">
    <!-- Overlay gris transparente -->
    <div
      class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>

    <div class="container my-5 py-5 position-relative">
      <div class="row mb-5">
        <div class="col text-center">
          <h2 class="fw-bold text-white">Nuestros Servicios</h2>
          <p class="text-white">
            Buscamos la satisfacción total de nuestros clientes, respaldados
            por nuestra propia asesoría técnica y un factor humano competente,
            comprometido con la calidad de servicio y con la mejora continua.
            Liderar el mercado nacional de seguridad contra incendio.
          </p>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card card-hover h-100 border-0 shadow-lg">
            <div class="card-body text-center p-4">
              <!--Colocar imagen-->
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 60px; height: 60px">
                <!--<i class="fas fa-cogs fa-lg"></i>-->
                <img
                  src="img/seguro-de-vida-150x150.png"
                  alt="Servicio 1"
                  class="img-fluid" />
              </div>

              <h5 class="card-title text-dark">
                Consultoría en seguridad humana
              </h5>
              <!--<p class="card-text">
                  Desarrollamos e implementamos soluciones tecnológicas
                  avanzadas para el sector industrial.
                </p>
                <a href="#" class="btn btn-outline-danger">Saber más</a>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-hover h-100 border-0 shadow-lg">
            <div class="card-body text-center p-4">
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 60px; height: 60px">
                <img
                  src="img/Incendios3.png"
                  alt="Servicio 2"
                  class="img-fluid" />
                <!--<i class="fas fa-chart-line fa-lg"></i>-->
              </div>
              <h5 class="card-titletext-dark">
                Diseños de sistemas de extinción de incendios
              </h5>
              <!--<p class="card-text">
                  Asesoramiento especializado para optimizar procesos y
                  maximizar la eficiencia operativa.
                </p>
                <a href="#" class="btn btn-outline-danger">Saber más</a>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-hover h-100 border-0 shadow-lg">
            <div class="card-body text-center p-4">
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 60px; height: 60px">
                <img
                  src="img/alarma-480x480.png"
                  alt="Servicio 3"
                  class="img-fluid" />
                <!--<i class="fas fa-shield-alt fa-lg"></i>-->
              </div>
              <h5 class="card-title text-dark">
                Diseños de sistemas de detección y alarma de incendios
              </h5>
              <!--<p class="card-text">
                  Garantizamos que tu empresa cumpla con todas las normativas y
                  regulaciones aplicables.
                </p>
                <a href="#" class="btn btn-outline-danger">Saber más</a>-->
            </div>
          </div>
        </div>
      </div>
      <div class="row g-4 py-4">
        <div class="col-md-4">
          <div class="card card-hover h-100 border-0 shadow-lg">
            <div class="card-body text-center p-4">
              <!--Colocar imagen-->
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 60px; height: 60px">
                <!--<i class="fas fa-cogs fa-lg"></i>-->
                <img
                  src="img/pruebas-150x150.png"
                  alt="Servicio 1"
                  class="img-fluid" />
              </div>

              <h5 class="card-title text-dark">Pruebas y comisionamientos</h5>
              <!--<p class="card-text">
                  Desarrollamos e implementamos soluciones tecnológicas
                  avanzadas para el sector industrial.
                </p>
                <a href="#" class="btn btn-outline-danger">Saber más</a>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-hover h-100 border-0 shadow-lg">
            <div class="card-body text-center p-4">
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 60px; height: 60px">
                <img
                  src="img/extintor-de-incendios-150x150.png"
                  alt="Servicio 2"
                  class="img-fluid" />
                <!--<i class="fas fa-chart-line fa-lg"></i>-->
              </div>
              <h5 class="card-title text-dark">
                Diseños de sistemas especiales para supresión de incendios
              </h5>
              <!--<p class="card-text">
                  Asesoramiento especializado para optimizar procesos y
                  maximizar la eficiencia operativa.
                </p>
                <a href="#" class="btn btn-outline-danger">Saber más</a>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-hover h-100 border-0 shadow-lg">
            <div class="card-body text-center p-4">
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 60px; height: 60px">
                <img
                  src="img/icono_analisis_riesgo_polvos-480x480.png"
                  alt="Servicio 3"
                  class="img-fluid" />
                <!--<i class="fas fa-shield-alt fa-lg"></i>-->
              </div>
              <h5 class="card-title text-dark">
                Análisis de riesgos, polvos y atmósferas explosivas
              </h5>
              <!--<p class="card-text">
                  Garantizamos que tu empresa cumpla con todas las normativas y
                  regulaciones aplicables.
                </p>
                <a href="#" class="btn btn-outline-danger">Saber más</a>-->
            </div>
          </div>
        </div>
      </div>
      <!--Poner boton en el centro de "Ver detalle de cada servicio"-->
      <div class="text-center mt-4">
        <a href="servicios.html" class="btn btn-danger btn-lg px-4">Ver todos los servicios</a>
      </div>
    </div>
  </div>

  <!-- Stats Section -->
  <section class="stats-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col text-center">
          <h2 class="fw-bold mb-4 fw-bold text-danger">
            Nuestra experiencia
          </h2>
          <p>
            Durante todos estos años trabajando vamos forjando estos números.
            Enfocándonos siempre en el bienestar del cliente.
          </p>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3 mb-4">
          <div
            class="stat-number display-5 fw-bold text-danger"
            data-target="25">
            0
          </div>
          <p>Años de experiencia</p>
        </div>
        <div class="col-md-3 mb-4">
          <div
            class="stat-number display-5 fw-bold text-danger"
            data-target="180">
            0
          </div>
          <p>Clientes a nivel nacional</p>
        </div>
        <div class="col-md-3 mb-4">
          <div
            class="stat-number display-5 fw-bold text-danger"
            data-target="48">
            0
          </div>
          <p>Proyectos realizados</p>
        </div>
        <div class="col-md-3 mb-4">
          <div
            class="stat-number display-5 fw-bold text-danger"
            data-target="95">
            0
          </div>
          <p>Satisfacción de clientes</p>
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
  <!-- Clientes Section -->
  <section class="clientes-section container py-5">
    <div class="row align-items-center">
      <!-- Texto -->
      <div class="col-md-5 mb-4 mb-md-0">
        <h6 class="text-danger">Ellos confían en nosotros</h6>
        <h2 class="fw-bold">Nuestros Clientes</h2>
        <p>
          Con más de 20 años de experiencia hemos forjado una cartera de
          clientes con empresas importantes del país.
        </p>
      </div>
      <!-- Carrusel -->
      <div class="col-md-7">
        <div
          id="clientesCarousel"
          class="carousel slide"
          data-bs-ride="carousel">
          <!-- Indicadores -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#clientesCarousel"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
              class="bg-danger"></button>
            <button
              type="button"
              data-bs-target="#clientesCarousel"
              data-bs-slide-to="1"
              aria-label="Slide 2"
              class="bg-danger"></button>
            <button
              type="button"
              data-bs-target="#clientesCarousel"
              data-bs-slide-to="2"
              aria-label="Slide 3"
              class="bg-danger"></button>
          </div>

          <!-- Slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/logo_farmedic.png"
                class="d-inline-block"
                alt="Cliente 1" />
              <img
                src="img/logo_CIDELSA.jpg"
                class="d-inline-block"
                alt="Cliente 2" />
              <img
                src="img/logo_cobra.jpg"
                class="d-inline-block"
                alt="Cliente 3" />
            </div>
            <div class="carousel-item">
              <img
                src="img/logo_rey.png"
                class="d-inline-block"
                alt="Cliente 4" />
              <img
                src="img/logo_perufarma.png"
                class="d-inline-block"
                alt="Cliente 5" />
              <img
                src="img/logo_Famesa.png"
                class="d-inline-block"
                alt="Cliente 6" />
            </div>
            <div class="carousel-item">
              <img
                src="img/logo_victaulic.png"
                class="d-inline-block"
                alt="Cliente 7" />
              <img
                src="img/logo_metrocolor.png"
                class="d-inline-block"
                alt="Cliente 8" />
              <img
                src="img/logo_ shell.jpg"
                class="d-inline-block"
                alt="Cliente 9" />
            </div>
          </div>

          <!-- Controles -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#clientesCarousel"
            data-bs-slide="prev"
            class="bg-danger">
            <span
              class="carousel-control-prev-icon bg-danger"
              aria-hidden="true"></span>
            <span class="visually-hidden bg-danger">Anterior</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#clientesCarousel"
            data-bs-slide="next"
            class="bg-danger">
            <span
              class="carousel-control-next-icon bg-danger"
              aria-hidden="true"></span>
            <span class="visually-hidde">Siguiente</span>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- Por que elegirnos Section -->
  <div class="container">
    <img src="img/barraroja.png" class="container" />
  </div>

  <div class="container-fluid position-relative">
    <div class="container my-0 mb-5 position-relative">
      <div class="row mb-5">
        <div class="col text-center">
          <h2 class="fw-bold text-danger">
            ¿Por qué elegirnos como su mejor opción?
          </h2>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card card-hover h-100 border-danger shadow-lg">
            <div class="card-body text-center p-4">
              <h5 class="card-title text-dark fw-bold fs-4">
                Presupuesto
                <strong class="text-danger">Sin costo</strong>
              </h5>
              <p class="card-text lh-sm">
                Evaluamos presencialmente los equipos y presentamos nuestra
                mejor propuesta sin costo ni compromisos.
                <strong class="text-dark">¡Cotizaciones rápidas y económicas!</strong>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-hover h-100 border-danger shadow-lg">
            <div class="card-body text-center p-4">
              <h5 class="card-title text-dark fw-bold fs-4">
                Staff
                <strong class="text-danger">Técnico y profesional</strong>
              </h5>
              <p class="card-text lh-sm">
                Nuestro staff está preparado para brindar el mejor servicio
                con la más alta calidad para lograr la satisfacción de
                nuestros asociados.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-hover h-100 border-danger shadow-lg">
            <div class="card-body text-center p-4">
              <h5 class="card-title text-dark fw-bold fs-4">
                Seguimiento de
                <strong class="text-danger">clientes</strong>
              </h5>
              <p class="card-text lh-sm">
                Nuestros técnicos especialistas visitarán sus instalaciones
                luego de la realización del mantenimiento y/o reparación de
                los sistemas contra incendio.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-hover h-100 border-danger shadow-lg">
            <div class="card-body text-center p-4">
              <h5 class="card-title text-dark fw-bold fs-4">
                Seguimiento de
                <strong class="text-danger">clientes</strong>
              </h5>
              <p class="card-text lh-sm">
                Nuestros técnicos especialistas visitarán sus instalaciones
                luego de la realización del mantenimiento y/o reparación de
                los sistemas contra incendio.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Testimonios Section -->
  <section class="testimonios-section bg-light py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col">
          <h2 class="fw-bold text-danger">Testimonios de Clientes</h2>
          <p class="">
            Lo que nuestros clientes dicen sobre nosotros y nuestros
            servicios.
          </p>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="img/logo_CIDELSA.jpg"
                  class="img-fluid rounded-start"
                  alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Carlos Ramirez</h5>
                  <p class="card-text">
                    <small class="text-body-secondary">Cidelsa</small>
                  </p>
                  <!--poner icono de entre comillas-->

                  <p class="card-text">
                    <i class="fas fa-quote-left fa-lg mb-2"></i>
                    Excelente Atención y Trabajo de Equipo en todo el
                    desarrollo del proyecto. Gran comunicación.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="img/logo_rey.png"
                  class="img-fluid rounded-start"
                  alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">John Vargas</h5>
                  <p class="card-text">
                    <small class="text-body-secondary">Corporación Rey</small>
                  </p>
                  <!--poner icono de entre comillas-->

                  <p class="card-text">
                    <i class="fas fa-quote-left bg-danger fa-lg mb-2"></i>
                    Trabajo de Realizado en los Tiempos Proyectados
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="img/logo_ shell.jpg"
                  class="img-fluid rounded-start"
                  alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title fw-bold">John Doe</h5>
                  <p class="card-text">
                    <small class="text-body-secondary">Shell</small>
                  </p>
                  <!--poner icono de entre comillas-->

                  <p class="card-text">
                    <i class="fas fa-quote-left fa-lg mb-2"></i>
                    Un gran socio estrátegico que nos permitió posicionarnos
                    mejor en el mercado, así como brindarnos el mejor soporte
                    en el servicio.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Productos Section -->
  </section>
  <!--Productos section-->
  <div class="container-fluid bg-secondary-subtle position-relative">
    <div class="container my-0 mb-5 py-5 position-relative">
      <div class="row mb-5">
        <div class="col text-center">
          <h2 class="fw-bold text-dark">Productos Destacados</h2>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card card-hover h-100 shadow-lg">
            <div class="card-body text-center p-4">
              <!--Colocar imagen-->
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                <!--<i class="fas fa-cogs fa-lg"></i>-->
                <img src="img/2a.png" alt="Servicio 1" class="img-fluid" />
              </div>
              <h5 class="card-title text-dark fw-bold fs-6">
                Bomba contra incendios centrífuga con motor eléctrico
              </h5>
              <!--Boton de whatsapp de consultar producto -->
              <a
                href="https://api.whatsapp.com/send?phone=51992928542&text=Hola,%20quiero%20cotizar%20el%20producto%20bomba%20contra%20incendios%20centrífuga%20con%20motor%20eléctrico"
                target="_blank"
                class="btn btn-outline-success btn-lg mt-0"><i class="fab fa-whatsapp"></i> Cotizar</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-hover h-100 shadow-lg">
            <div class="card-body text-center p-4">
              <!--Colocar imagen-->
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                <!--<i class="fas fa-cogs fa-lg"></i>-->
                <img src="img/2b.png" alt="Servicio 1" class="img-fluid" />
              </div>
              <h5 class="card-title text-dark fw-bold fs-6">
                Gabinete de manguera contra incendios
              </h5>
              <!--Boton de whatsapp de consultar producto -->
              <a
                href="https://api.whatsapp.com/send?phone=51992928542&text=Hola,%20me%20gustaría%20cotizar%20el%20gabinete%20de%20manguera%20contra%20incendios."
                target="_blank"
                class="btn btn-outline-success btn-lg mt-0"><i class="fab fa-whatsapp"></i> Cotizar</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-hover h-100 shadow-lg">
            <div class="card-body text-center p-4">
              <!--Colocar imagen-->
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                <!--<i class="fas fa-cogs fa-lg"></i>-->
                <img src="img/2c.png" alt="Servicio 1" class="img-fluid" />
              </div>
              <h5 class="card-title text-dark fw-bold fs-6">
                Rociador automático contra incendios
              </h5>
              <!--Boton de whatsapp de consultar producto -->
              <a
                href="https://api.whatsapp.com/send?phone=51992928542&text=Hola,%20quiero%20cotizar%20el%20producto%20de%20rociador%20automático%20contra%20incendios."
                target="_blank"
                class="btn btn-outline-success btn-lg mt-0"><i class="fab fa-whatsapp"></i> Cotizar</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-hover h-100 shadow-lg">
            <div class="card-body text-center p-4">
              <!--Colocar imagen-->
              <div
                class="text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                <!--<i class="fas fa-cogs fa-lg"></i>-->
                <img src="img/2d.png" alt="Servicio 1" class="img-fluid" />
              </div>
              <h5 class="card-title text-dark fw-bold fs-6">
                Válvula de tubería seca
              </h5>
              <!--Boton de whatsapp de consultar producto -->
              <a
                href="https://api.whatsapp.com/send?phone=51992928542&text=Hola,%20me%20gustaría%20solicitar%20una%20cotización%20para%20la%20válvula%20de%20tubería%20seca."
                target="_blank"
                class="btn btn-outline-success btn-lg mt-0"><i class="fab fa-whatsapp"></i> Cotizar</a>
            </div>
          </div>
        </div>
      </div>
      <!--Poner boton en el centro de "Ver detalle de cada servicio"-->
      <div class="text-center mt-4">
        <a href="producto.php" class="btn btn-danger btn-lg px-4">Ver todos los productos</a>
      </div>
    </div>
  </div>
  <div
    class="container py-2"
    style="
        background-image: url('img/fondo1.png');
        background-size: cover;
        background-position: center;
      ">
    <div class="row border p-4" id="contacto">
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
  <!--llamar a js/script.js-->
  <script src="js/script.js"></script>
</body>

</html>