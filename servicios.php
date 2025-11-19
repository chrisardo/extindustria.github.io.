<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Extindustria — Servicio</title>
  <!--Poner icono de la pagina web-->
  <link rel="icon" href="img/Logo_Extindustria.svg" type="image/svg+xml" />
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" />

  <!-- Bootstrap Bundle con Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Font Awesome para iconos -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    @keyframes slideInLeft {
      from {
        transform: translateX(-100%);
        opacity: 0;
      }

      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    /* Texto */
    .slide-left {
      animation: slideInLeft 11s ease forwards;
    }

    /* Imagen: aparece después del texto */
    .img-delay2 {
      animation: slideInLeft 1s ease forwards;
      animation-delay: 12s;
      /* espera a que termine el texto */
    }

    @keyframes slideInRight {
      from {
        transform: translateX(100%);
        opacity: 0;
      }

      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    /* Texto */
    .slide-right {
      animation: slideInRight 6s ease forwards;
    }

    /* Imagen: espera a que termine el texto */
    .img-delay {
      animation: slideInRight 1s ease forwards;
      animation-delay: 2s;
      /* empieza después de que el texto terminó */
    }

    /* Estado inicial: fuera de pantalla a la derecha */
    .hero-text,
    .hero-image {
      transform: translateX(100vw);
      opacity: 0;
      will-change: transform, opacity;
    }

    /* Animación de entrada */
    @keyframes enterFromRight {
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    .animate-text {
      animation: enterFromRight 0.5s ease-out forwards;
    }

    .animate-image {
      animation: enterFromRight 0.5s ease-out forwards;
    }

    body {
      background-color: #fff;
      color: #0b0b0b;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .section-container {
      padding: 3rem 2rem;
    }

    .section-title {
      font-weight: 700;
      font-size: 2rem;
      line-height: 1.3;
    }

    .subtitle {
      color: #c0392b;
      font-weight: 600;
      font-size: 0.95rem;
    }

    .nav-tabs {
      border-bottom: 1px solid #ddd;
      margin-top: 1.5rem;
    }

    .nav-tabs .nav-link {
      font-weight: 600;
      color: #0b0b0b;
      border: none;
      border-bottom: 2px solid transparent;
      margin-right: 1.5rem;
    }

    .nav-tabs .nav-link.active {
      color: #c0392b;
      border-bottom-color: #c0392b;
    }

    .feature-list {
      margin-top: 1rem;
    }

    .feature-item {
      display: flex;
      align-items: center;
      margin-bottom: 0.5rem;
      font-weight: 500;
    }

    .feature-item i {
      color: #c0392b;
      margin-right: 0.5rem;
    }

    .placeholder-box {
      background-color: #ccc;
      width: 100%;
      height: 545px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: #555;
    }

    .custom-divider {
      border-top: 3px solid #000;
      margin: 2rem 0;
    }

    .service-title {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .nav-button {
      border: 2px solid #000;
      border-radius: 0;
      font-weight: bold;
      padding: 0.5rem 1rem;
      margin: 0.2rem;
      background: white;
      color: black;
      text-decoration: none;
      display: inline-block;
    }

    .nav-button:hover {
      background: #000;
      color: white;
    }

    .contact-title {
      font-size: 2rem;
      font-weight: bold;
      text-transform: uppercase;
    }
  </style>
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
              <a
                class="nav-link fw-medium fw-bold px-3 active"
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
  <br /><br />
  <!-- Encabezado estilo Bootstrap -->
  <header class="bg-dark text-white py-4 mt-4">
    <div class="container">
      <div class="row align-items-center">
        <!-- Título a la izquierda -->
        <div class="col-12 col-md-6">
          <h1 class="h4 fw-bold mb-0">Servicios</h1>
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
                SERVICIOS
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Hero Section -->
  <div class="container bg-light py-5 mt-5 mb-1 overflow-hidden">
    <div
      class="container"
      style="
          background-image: url('img/fondo3.png');
          background-size: cover;
          background-position: center;
        ">
      <div class="row align-items-center">
        <!-- Texto -->
        <div class="col-lg-6 hero-text">
          <p class="fw-bold">Extindustria</p>
          <h1 class="display-5 fw-bold text-danger mb-1 fs-3">
            Implementación de Sistemas
          </h1>
          <div class="feature-list">
            <p class="lead mb-0 fs-6">
              Sistemas contra Incendios para Proyectos comerciales,
              residenciales e industriales.
            </p>
            <div class="feature-item">
              <i class="fas fa-check-circle text-danger me-2"></i>Proyectos
              Industriales para:
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle text-danger me-2"></i>Fábricas -
              Papeleras - Farmacéuticas
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle text-danger me-2"></i> Almacenes
              en General - Archivo de Documentos
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle text-danger me-2"></i>
              Petroquímicas y Datacenters
            </div>
          </div>
        </div>

        <!-- Imagen -->
        <div class="col-lg-6 text-center hero-image">
          <img
            src="img/crw_1240h_620.webp"
            alt="Hero Image"
            class="img-fluid img-thumbnail" />
        </div>
      </div>
    </div>
  </div>
  <!-- Servicios Section -->
  <div class="container text-center p-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-12">
              <h5 class="card-title fw-bold mb-1 fs-5">
                Sistema de Extinción con Agua
              </h5>
              <div class="card-body">
                <p class="card-text text-start">
                  El sistema de extinción por agua es el más utilizado por su
                  bajo coste y su alta efectividad a la hora de controlar y
                  suprimir los fuegos. Sus características convierten a este
                  sistema en el más exitoso. El agua es fácil de transportar y
                  bombear pudiéndose obtener de acueductos públicos, pozos,
                  largos, ríos o piscinas, entre otros. La facilidad que
                  aporta para su uso en la extinción de incendios lo convierte
                  en el método más elegido, siendo estable, poco corrosivo y
                  no tóxico. El agua como agente enfriador es sumamente
                  efectiva por la magnitud de su calor latente de evaporación
                  (2260 KJ/Kg).
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <img
                src="img/ban2a-1536x576.jpg"
                class="rounded-start"
                alt="..."
                style="width: 390px; margin-left: 16px" />
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-12">
              <h5 class="card-title fw-bold mb-1 fs-5">
                Sistema de Extinción con Agente Limpio
              </h5>
              <div class="card-body">
                <p class="card-text text-start">
                  El uso de agua como agente de supresión de incendios en
                  zonas en las que existen equipos electrónicos en
                  funcionamiento o en las que se almacenan activos
                  irremplazables de gran valor podría ser tan devastador como
                  el propio incendio. Protejalos con un sistema de agentes
                  limpios sin causar daños a las personas o el medio ambiente.
                </p>
                <div class="feature-item fw-bold">
                  <i class="fas fa-check-circle text-danger me-2"></i>Proyectos Industriales para:
                </div>
                <p class="lead mb-0 fs-6 text-start">
                  Sistemas contra Incendios para Proyectos comerciales,
                  residenciales e industriales.
                </p>
                <div class="feature-item fw-bold">
                  <i class="fas fa-check-circle text-danger me-2"></i>Sistema
                  Supresión Incendio – FM 200
                </div>
                <p class="lead mb-0 fs-6 text-start">
                  FM-200® es un agente de supresión de incendios limpio,
                  incoloro y respetuoso con el medio ambiente que es
                  eléctricamente no conductor y seguro para los seres humanos.
                  Extingue las llamas a través de la absorción de calor, sin
                  dejar residuos, minimizando así el tiempo de inactividad
                  después de un incendio.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="container mt-1">
      <div
        class="row mb-4 mt-5"
        style="
            background-image: url('img/fondo3.png');
            background-size: cover;
            background-position: center;
          ">
        <div class="col-md-6">
          <h2 class="slide-right">Ingeniería contra Incendios</h2>
          <p class="slide-right">
            Expertos profesionales e Ingenieros especialistas en el diseño y
            cálculo de sistemas contra incendio por extinción por agua,
            detección y alarma contra incendio, sistema FM 200, EKARO 25,
            considerando todas las derivaciones.
          </p>
          <div class="feature-item fw-bold slide-right">
            <i class="fas fa-check-circle text-danger me-2"></i>
            Asesoría contra Incendios
          </div>
          <div class="feature-item fw-bold slide-right">
            <i class="fas fa-check-circle text-danger me-2"></i>
            Estudio y Diseño en Ingeniería
          </div>
          <div class="feature-item fw-bold slide-right">
            <i class="fas fa-check-circle text-danger me-2"></i>
            Consultoría en Proyectos
          </div>
          <div class="feature-item fw-bold slide-right">
            <i class="fas fa-check-circle text-danger me-2"></i>
            Ingeniería en Extinción
          </div>
        </div>
        <div class="col-md-6">
          <!-- Imagen que aparece después -->
          <img
            src="img/pe07_valentine.jpg"
            class="rounded img-fluid slide-right delay"
            alt="Huella de carbono" />
        </div>
      </div>
      <div
        class="row mb-4"
        style="
            background-image: url('img/fondo1.png');
            background-size: cover;
            background-position: center;
          ">
        <div class="col-md-6">
          <!-- Imagen que aparece después del texto -->
          <img
            src="img/mantenimiento-instalaciones-contra-incendio.jpg"
            class="rounded img-fluid slide-left img-delay2"
            alt="Huella de plastico" />
        </div>

        <div class="col-md-6">
          <h2 class="slide-left">Mantenimiento de Sistemas</h2>
          <p class="slide-left">
            Realizamos mantenimiento preventivo y correctivo a equipos de
            protección contra incendios y seguridad: bombas contra incendio,
            tanques bladder, ILBPs, proporcionadores de espuma.
          </p>
          <div class="feature-item fw-bold slide-left">
            <i class="fas fa-check-circle text-danger me-2"></i>
            Mantenimientos Sistema de Bombeo
          </div>
          <div class="feature-item fw-bold slide-left">
            <i class="fas fa-check-circle text-danger me-2"></i>
            Mantenimiento de Ductos y Tuberías
          </div>
          <div class="feature-item fw-bold slide-left">
            <i class="fas fa-check-circle text-danger me-2"></i>
            Mantenimiento de Protección contra Incendios
          </div>
          <div class="feature-item fw-bold slide-left">
            <i class="fas fa-check-circle text-danger me-2"></i>
            Mantenimiento Sistemas de Extinción
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Industrias section-->
  <div class="container-fluid bg-secondary-subtle position-relative">
    <div class="container my-0 mb-4 py-4 position-relative">
      <div class="row mb-5">
        <div class="col text-center">
          <h2 class="text-dark">Industrias con las que nos Comprometemos</h2>
        </div>
      </div>

      <!-- 5 columnas -->
      <div class="row row-cols-1 row-cols-md-5 g-2">
        <div class="col">
          <div class="card h-100 shadow-lg">
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
          <div class="card h-100 shadow-lg">
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
          <div class="card shadow-lg">
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
          <div class="card shadow-lg">
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
          <div class="card shadow-lg">
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
  <!-- CTA Section -->
  <section class="cta-section bg-dark text-white py-4">
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
  <div class="container my-0 py-4">
    <div class="row row-cols-1 row-cols-md-0">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card mb-3" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="img/depositphotos_247501172-stock-photo-firemen-helmets-standing-looking-red.jpg"
                class="img-fluid rounded-start"
                alt="..."
                style="height: 280px" />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Consultoría en seguridad humana</h5>
                <p class="card-text fs-6 lh-1">
                  Realizamos estudios y asesorías de seguridad humana con el
                  principal propósito de definir parámetros y especificaciones
                  arquitectónicas y constructivas tendientes a la seguridad y
                  la preservación de la vida de los ocupantes y usuarios de
                  las distintas edificaciones, además de buscar determinar las
                  protecciones pasivas y activas que deben tener los
                  diferentes proyectos en caso de incendio.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card mb-3" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="img/pruebas y comisionamientos.png"
                class="img-fluid rounded-start"
                alt="..."
                style="height: 280px" />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">Pruebas y comisionamientos</h5>
                <p class="card-text lh-1">
                  Ofrecemos el servicio de pruebas de sistemas contra incendio
                  a base de agua bajo los parámetros de la norma NFPA 25,
                  realizamos curvas de desempeño de sistemas de bombeo,
                  conexiones de mangueras Clase I, Clase II y Clase III para
                  verificar que los parámetros de diseño y de la NFPA
                  aplicable al sistema se cumplan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="img/Planos-de-bombas-contra-incendios.jpg"
                class="img-fluid rounded-start"
                alt="..."
                style="height: 240px" />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Diseños de sistemas de extinción de incendios
                </h5>
                <p class="card-text lh-1">
                  Realizamos diseños de sistema de extinción de incendios a
                  base de agua teniendo como base las últimas versiones de los
                  estándares NFPA (National Fire Protection Asociation) y FM
                  Global.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="img/segurmania_atmosferas_explosivas_ii_destacada.jpg"
                class="img-fluid"
                alt="..."
                style="height: 240px" />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Análisis de riesgos, polvos combustibles y atmósferas
                  explosivas
                </h5>
                <p class="card-text lh-1">
                  Entendemos la importancia de garantizar la seguridad y
                  protección contra incendios en los lugares de trabajo. Es
                  por eso que prestamos servicios especializados de análisis
                  de polvos inflamables y combustibles para ayudar a
                  identificar y mitigar riesgos potenciales.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  <!--llamar a js/script.js-->
  <script src="js/script.js"></script>
  <script>
    window.addEventListener("DOMContentLoaded", () => {
      const text = document.querySelector(".hero-text");
      const image = document.querySelector(".hero-image");

      // Ocultar imagen hasta que toque su turno
      image.style.visibility = "hidden";

      // Animar texto primero
      text.classList.add("animate-text");

      // Cuando termine el texto, animar la imagen
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