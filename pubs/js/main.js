document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.querySelector(".nav-toggle");
  const nav = document.querySelector(".main-nav");
  if (!toggle || !nav) return;

  toggle.addEventListener("click", () => {
    const isOpen = nav.classList.toggle("is-open");
    toggle.setAttribute("aria-expanded", String(isOpen));
  });

  nav.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      nav.classList.remove("is-open");
      toggle.setAttribute("aria-expanded", "false");
    });
  });
});

let indiceActual = 0;
const slides = document.querySelectorAll('.tarjeta-slider');
const track = document.querySelector('.carrusel-track');

function mostrarSlide(indice) {
    if (indice >= slides.length) indiceActual = 0;
    else if (indice < 0) indiceActual = slides.length - 1;
    else indiceActual = indice;

    // Desplaza el contenedor de forma horizontal
    track.style.transform = `translateX(-${indiceActual * 100}%)`;
}

function cambiarSlide(direccion) {
    mostrarSlide(indiceActual + direccion);
}

// Configuración del movimiento automático cada 3000 milisegundos (3 segundos)
setInterval(() => {
    cambiarSlide(1);
}, 4000);