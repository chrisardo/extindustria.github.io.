// Función para animar números
function animateStats() {
  const counters = document.querySelectorAll(".stat-number");
  counters.forEach((counter) => {
    const target = +counter.getAttribute("data-target");
    const duration = 2000; // duración total en ms
    const increment = target / (duration / 20); // paso cada 20ms
    let current = 0;

    const updateCounter = () => {
      current += increment;
      if (current < target) {
        counter.textContent = Math.floor(current);
        setTimeout(updateCounter, 20);
      } else {
        counter.textContent = target; // valor final exacto
      }
    };

    updateCounter();
  });
}

// Ejecutar animación cuando la sección sea visible
const statsSection = document.querySelector(".stats-section");
const observer = new IntersectionObserver(
  (entries) => {
    if (entries[0].isIntersecting) {
      animateStats();
      observer.disconnect(); // solo una vez
    }
  },
  {
    threshold: 0.3,
  }
);

observer.observe(statsSection);
$(document).ready(function () {
  $("#chatButton").click(function () {
    $("#chatButtonContainer").hide();
    $("#chatFormContainer").removeClass("d-none");
  });
  $("#closeChatForm").click(function () {
    $("#chatFormContainer").addClass("d-none");
    $("#chatButtonContainer").show();
  });
  $("#chatForm").submit(function (event) {
    event.preventDefault();
    var nombre = $("#nombre").val();
    var codigoPais = $("#codigoPais").val();
    var whatsapp = $("#whatsapp").val();
    var mensaje = $("#mensaje").val();
    var url = `https://api.whatsapp.com/send?phone=${codigoPais}${whatsapp}&text=Hola,%20mi%20nombre%20es%20${encodeURIComponent(
      nombre
    )}.%20Me%20gustaría%20consultar%20sobre:%20${encodeURIComponent(mensaje)}`;
    window.open(url, "_blank");
  });
});


