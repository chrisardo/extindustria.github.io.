  <!-- Footer -->
  <footer class="bg-dark text-white py-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 mb-4 mb-lg-0">
                  <h4 class="text-danger mb-3">EXTINDUSTRIA</h4>
                  <p class="mb-3">
                      Ingeniería y soluciones integrales para la protección contra
                      incendios.
                  </p>
                  <div class="d-flex">
                      <a href="#" class="text-white me-3">
                          <i class="fab fa-facebook-f fa-lg"></i>
                      </a>
                      <a href="#" class="text-white me-3">
                          <i class="fab fa-twitter fa-lg"></i>
                      </a>
                      <a href="#" class="text-white me-3">
                          <i class="fab fa-linkedin-in fa-lg"></i>
                      </a>
                      <a href="#" class="text-white">
                          <i class="fab fa-instagram fa-lg"></i>
                      </a>
                  </div>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                  <h5 class="mb-3">Enlaces</h5>
                  <ul class="list-unstyled">
                      <li class="mb-2">
                          <a href="./index.php" class="text-white text-decoration-none">Inicio</a>
                      </li>
                      <li class="mb-2">
                          <a href="./nosotros.php" class="text-white text-decoration-none">Conócenos</a>
                      </li>
                      <li class="mb-2">
                          <a href="./servicios.php" class="text-white text-decoration-none">Servicios</a>
                      </li>
                      <li class="mb-2">
                          <a href="./producto.php" class="text-white text-decoration-none">Productos</a>
                      </li>
                      <li class="mb-2">
                          <a href="./contacto.php" class="text-white text-decoration-none">Contacto</a>
                      </li>
                  </ul>
              </div>
              <div class="col-lg-3">
                  <h5 class="mb-3">Contacto</h5>
                  <ul class="list-unstyled">
                      <li class="mb-2">
                          <i class="fas fa-phone me-2"></i> (+51) 992 928 542
                      </li>
                      <li class="mb-2">
                          <i class="fas fa-envelope me-2"></i> info@extindustria.com
                      </li>
                      <li class="mb-2">
                          <i class="fas fa-map-marker-alt me-2"></i> Lima, Perú
                      </li>
                  </ul>
              </div>
              <div class="col-lg-3">
                  <h5 class="mb-3">Horario de apertura</h5>
                  <ul class="list-unstyled">
                      <li class="mb-2">Lun - Vi: 8:30 am to 6:30 pm</li>
                      <li class="mb-2">Sábado: 9:30 am to 1:00 pm</li>
                      <li class="mb-2">Domingo: Closed</li>
                  </ul>
              </div>
          </div>
          <hr class="my-4 bg-secondary" />
          <div class="row">
              <div class="col-md-6">
                  <p class="mb-0 small">
                      &copy; Todos los derechos reservadoos 2024. Desarrollado por
                      CoDevPro Technology.
                  </p>
              </div>
              <div class="col-md-6 text-md-end">
                  <a href="#" class="text-white text-decoration-none small me-3">Aviso Legal</a>
                  <a href="#" class="text-white text-decoration-none small">Política de Privacidad</a>
              </div>
          </div>
      </div>
  </footer>
  <!-- Floating Chat Button -->
  <div
      id="chatContainer"
      class="position-fixed bottom-0 start-0 p-4"
      style="z-index: 1050">
      <div id="chatButtonContainer">
          <button
              id="chatButton"
              class="btn btn-success btn-lg d-flex align-items-center"
              type="button">
              <img
                  src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png"
                  alt="WhatsApp Icon"
                  width="30"
                  height="30"
                  class="me-2" />
              <div class="text-start text-white">
                  <div>Chatea con nosotros</div>
              </div>
          </button>
      </div>
      <!-- Form inside the button -->
      <div id="chatFormContainer" class="card d-none">
          <div
              class="card-header bg-success text-white d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                  <img
                      src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png"
                      alt="WhatsApp Icon"
                      width="30"
                      height="30"
                      class="me-2" />
                  <div>WhatsApp</div>
              </div>
              <button
                  type="button"
                  class="btn-close btn-close-white"
                  aria-label="Close"
                  id="closeChatForm"></button>
          </div>
          <div class="card-body">
              <h5 class="card-title">Completa con tus datos</h5>
              <p class="card-text">Te comunicaremos con uno de nuestros asesores</p>
              <form id="chatForm">
                  <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="nombre" required />
                  </div>
                  <div class="mb-3">
                      <label for="whatsapp" class="form-label">Nº de WhatsApp</label>
                      <div class="input-group">
                          <select
                              class="form-select"
                              id="codigoPais"
                              style="max-width: 80px"
                              required>
                              <option value="+51" selected>+51</option>
                              <option value="+56">+56</option>
                              <option value="+1">+1</option>
                              <option value="+44">+44</option>
                              <option value="+52">+52</option>
                              <!-- Añade aquí más códigos de país según sea necesario -->
                          </select>
                          <input
                              type="text"
                              class="form-control"
                              id="whatsapp"
                              placeholder="Nº de WhatsApp"
                              required />
                      </div>
                  </div>
                  <div class="mb-3">
                      <label for="mensaje" class="form-label">Mensaje</label>
                      <textarea
                          class="form-control"
                          id="mensaje"
                          rows="3"
                          required></textarea>
                  </div>
                  <button type="submit" class="btn btn-success w-100">
                      Iniciar Chat
                  </button>
              </form>
          </div>
      </div>
  </div>