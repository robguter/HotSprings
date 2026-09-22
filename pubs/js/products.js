/* ===========================================================
   CATÁLOGO DE PRODUCTOS — productos reales de Amazon
   -----------------------------------------------------------
   precio: texto libre (rango o precio fijo), se actualiza a mano
   de vez en cuando si Amazon cambia mucho el precio real.
   =========================================================== */

const PRODUCTS = {

  belleza: [
    { name:"Estée Lauder Dream Skin In One Sleep, Set 4 piezas", cat:"Piel", blurb:"Limpiador, sérum, hidratante y tratamiento nocturno de una marca de lujo reconocida.", precio:"$45.00", icon:"<img src='images/belleza/belleza_01.webp' >", asin:"B0FNRT96B8" },
    { name:"Set de brochas de maquillaje profesional, edición viaje", cat:"Maquillaje", blurb:"Cerdas suaves y mango ergonómico, con estuche compacto para llevar a cualquier lado.", precio:"$9.99 – $24.99", icon:"<img src='images/belleza/belleza_02.webp' >", asin:"B0FLX6PPYT" },
    { name:"Remington Shine Therapy con Argán y Keratina, plancha de cabello", cat:"Cabello", blurb:"Placas con infusión de aceite de argán y keratina para reducir el frizz y dar brillo.", precio:"$33.99 – $79.98", icon:"<img src='images/belleza/belleza_03.webp' >", asin:"B09RTLFV3F" },
    { name:"Espejo tríptico con aumento y luz LED, color Rosa Gold", cat:"Cuidado personal", blurb:"Tres paneles plegables con luz regulable, ideal para rutinas de precisión.", precio:"$21.49 – $29.98", icon:"<img src='images/belleza/belleza_04.webp' >", asin:"B06X9TMK83" },
    { name:"Anua 3-Step Set (edición para principiantes)", cat:"Piel", blurb:"Rutina coreana simplificada de 3 pasos, ideal para empezar sin complicarse.", precio:"$45.00", icon:"<img src='images/belleza/belleza_05.webp' >", asin:"B0F384Y1KR" },
    { name:"Revlon secador de cabello compacto y ligero", cat:"Cabello", blurb:"Motor de 1875W en un cuerpo compacto, ideal para llevar de viaje.", precio:"$14.98 – $18.99", icon:"<img src='images/belleza/belleza_06.webp' >", asin:"B07GBZ2D79" },
    { name:"AMEITECH organizador giratorio de maquillaje, 360°", cat:"Organización", blurb:"8 niveles con capacidad grande, rotación completa para ver todo tu set de un vistazo.", precio:"$17.99 – $25.99", icon:"<img src='images/belleza/belleza_07.webp' >", asin:"B073S4PQ6H" },
    { name:"BAIMEI IcyMe Rodillo de Cuarzo Rosa y Gua Sha, set facial", cat:"Piel", blurb:"Masaje facial frío para desinflamar y relajar, con herramienta de gua sha incluida.", precio:"$9.99 – $19.99", icon:"<img src='images/belleza/belleza_08.webp' >", asin:"B07WWC3T9Q" }
  ],

  hogar: [
    { name:"Utopia Kitchen Set de Sartenes Antiadherentes, 3 piezas", cat:"Cocina", blurb:"Distribución de calor pareja para cocinar sin que se pegue, apto para inducción.", precio:"$34.99", icon:"<img src='images/hogar/hogar_01.webp' >", asin:"B073WFLD35" },
    { name:"Cosori TurboBlaze Freidora de Aire, 9-en-1, 6 Qt", cat:"Electrodomésticos", blurb:"Comidas crujientes usando una fracción del aceite habitual, con 5 niveles de velocidad.", precio:"$99.99 – $129.99", icon:"<img src='images/hogar/hogar_02.webp' >", asin:"B0C33CHG99" },
    { name:"HENCKELS Set de Cuchillos Profesional, 15 piezas", cat:"Cocina", blurb:"Filo duradero de acero inoxidable y balance cómodo para cortar a diario.", precio:"$149.95 – $169.93", icon:"<img src='images/hogar/hogar_03.webp' >", asin:"B00GHX5HGG" },
    { name:"Kamenstein Organizador de Especias Giratorio, 20 frascos", cat:"Organización", blurb:"Cada frasco a un giro de distancia, con recargas gratis de especias por 5 años.", precio:"$50.99", icon:"<img src='images/hogar/hogar_04.webp' >", asin:"B00008WQ3L" },
    { name:"Hamilton Beach 2-Way Brewer, Individual y Jarra 12 Tazas", cat:"Electrodomésticos", blurb:"Programa la noche anterior y despierta con café listo, con opción de taza individual.", precio:"$88.95 – $88.99", icon:"<img src='images/hogar/hogar_05.webp' >", asin:"B00EI7DPPI" },
    { name:"JoyJolt Set de 24 Recipientes de Vidrio con Tapa", cat:"Organización", blurb:"Guarda sobras sin manchas ni olores que se queden, apto para congelador.", precio:"$36.25 – $50.71", icon:"<img src='images/hogar/hogar_06.webp' >", asin:"B09ZP2K9VP" },
    { name:"Eufy 11S MAX Robot Aspirador, Súper Delgado", cat:"Electrodomésticos", blurb:"Limpieza automática y silenciosa, ideal para pisos duros y alfombras de pelo medio.", precio:"$169.99", icon:"<img src='images/hogar/hogar_07.webp' >", asin:"B07R295MLS" },
    { name:"ASAKUKI Difusor de Aceites Esenciales, 500ML con Luz LED", cat:"Ambiente", blurb:"Un aroma constante y suave en cualquier habitación, con luces de color y control remoto.", precio:"$20.49 – $31.99", icon:"<img src='images/hogar/hogar_08.webp' >", asin:"B07BMVCBDD" }
  ],

  vida: [
    { name:"Travelers Club Chicago Maleta Rígida Expandible, 22\" Carry-On", cat:"Equipaje", blurb:"Resistente a golpes y fácil de maniobrar entre pasillos, con ruedas giratorias 360°.", precio:"$48.00 – $74.79", icon:"<img src='images/vida/vida_01.webp' >", asin:"B0787DL55W" },
    { name:"WENIG Mochila Antirrobo con Puerto USB, 15.6\"", cat:"Equipaje", blurb:"Compartimientos ocultos y carga para el celular en movimiento, resistente al agua.", precio:"$19.99 – $26.99", icon:"<img src='images/vida/vida_02.webp' >", asin:"B07YF1RWYV" },
    { name:"BAGAIL Set de 8 Cubos Organizadores para Maleta", cat:"Equipaje", blurb:"Empaca por categoría y encuentra todo sin desarmar la maleta.", precio:"$16.98 – $34.99", icon:"<img src='images/vida/vida_03.webp' >", asin:"B0C58697GB" },
    { name:"Owala FreeSip Botella Térmica de Acero Inoxidable, 24 oz", cat:"Accesorios", blurb:"Frío o caliente por horas, resistente para uso diario y de viaje.", precio:"$29.99", icon:"<img src='images/vida/vida_04.webp' >", asin:"B0FFTNJVQN" },
    { name:"Fit Simplify Bandas de Resistencia, Set de 5", cat:"Fitness", blurb:"Entrena en casa o de viaje sin necesitar máquinas, con guía y bolsa de transporte.", precio:"$9.98", icon:"<img src='images/vida/vida_05.webp' >", asin:"B01AVDVHTI" },
    { name:"Gaiam Esterilla de Yoga Gruesa con Correa de Transporte", cat:"Fitness", blurb:"Agarre firme y buen acolchado para rutinas diarias, con correa fácil de ajustar.", precio:"$22.48 – $25.41", icon:"<img src='images/vida/vida_06.webp' >", asin:"B07H9PZ6MH" },
    { name:"Napfun Almohada de Viaje con Memory Foam, Soporte 360°", cat:"Accesorios", blurb:"Soporte real para el cuello en vuelos y viajes largos, con correa ajustable.", precio:"$13.96 – $21.99", icon:"<img src='images/vida/vida_07.webp' >", asin:"B09JC5CZFY" },
    { name:"Etekcity Báscula Digital de Equipaje, hasta 110 lb", cat:"Equipaje", blurb:"Evita sorpresas y cargos extra al facturar la maleta, con gancho resistente.", precio:"$10.99 – $18.86", icon:"<img src='images/vida/vida_08.webp' >", asin:"B082LYC2TN" }
  ]

};

/**
 * Dibuja las tarjetas de producto de un nicho dentro de un contenedor,
 * y arma los chips de filtro según las categorías presentes.
 */
function renderNiche(nicheKey, gridSelector, filtersSelector, emptyStateSelector){
  const grid = document.querySelector(gridSelector);
  const filtersBar = document.querySelector(filtersSelector);
  const emptyState = document.querySelector(emptyStateSelector);
  const items = PRODUCTS[nicheKey] || [];

  const categories = ["Todos", ...Array.from(new Set(items.map(p => p.cat)))];

  filtersBar.innerHTML = categories.map((cat, i) =>
    `<button class="chip${i === 0 ? " is-active" : ""}" data-cat="${cat}">${cat}</button>`
  ).join("");

  function draw(filterCat){
    const list = filterCat === "Todos" ? items : items.filter(p => p.cat === filterCat);
    grid.innerHTML = list.map(p => `
      <article class="product-card">
        <h3>Foto ilustrativa</h3>
        <div class="product-media">${p.icon}</div>
        <div class="product-body">
          <span class="product-cat">${p.cat}</span>
          <h3>${p.name}</h3>
          <p>${p.blurb}</p>
          <div class="product-foot">
            <span class="price-tier">${p.precio}</span>
            <a class="product-cta" href="${buildAmazonLink(p)}" target="_blank" rel="nofollow sponsored noopener">
              Ver en Amazon
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17 17 7M9 7h8v8"/></svg>
            </a>
          </div>
        </div>
      </article>
    `).join("");
    emptyState.classList.toggle("is-visible", list.length === 0);
  }

  filtersBar.addEventListener("click", (e) => {
    const btn = e.target.closest(".chip");
    if (!btn) return;
    filtersBar.querySelectorAll(".chip").forEach(c => c.classList.remove("is-active"));
    btn.classList.add("is-active");
    draw(btn.dataset.cat);
  });

  draw("Todos");
}

