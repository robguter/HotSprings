<?php
            $meta_title = "Dónde dormir en Hot Springs, Arkansas: mejores zonas y hoteles";
            $meta_description = "Dónde dormir en Hot Springs, Arkansas: en el centro junto a Bathhouse Row para quienes visitan por primera vez, en Lake Hamilton para días de lago y grupos, o en Central Avenue cerca de Oaklawn para familias y buena relación calidad-precio.";
            $canonical = "https://tiendahotspringsllc.com/es/where-to-stay-in-hot-springs";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/hotel_habitacion.webp",
                    "alt" => "Habitación de hotel luminosa por la mañana",
                    "titulo" => "Centro y Bathhouse Row",
                    "descripcion" => "Despierta a unos pasos de las históricas casas de baños."
                ],
                [
                    "archivo" => "/images/lago_ouachita.webp",
                    "alt" => "El Lago Ouachita visto desde un mirador entre el bosque",
                    "titulo" => "Lake Hamilton",
                    "descripcion" => "Casas y condominios junto al lago y muelles al atardecer."
                ],
                [
                    "archivo" => "/images/piscina_termal.webp",
                    "alt" => "Piscina termal al aire libre con vapor elevándose",
                    "titulo" => "Central Avenue y Oaklawn",
                    "descripcion" => "Hoteles familiares con estacionamiento fácil y buena relación calidad-precio."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Dónde dormir en Hot Springs, Arkansas</h1>

                    <p class="descripcion-corta">
                        <strong>La respuesta rápida:</strong> alójate en el centro, en Bathhouse Row o cerca de allí, si es tu
                        primer viaje y quieres caminar a todas partes. Alójate en Lake Hamilton si el lago es el motivo del viaje.
                        Alójate cerca de Central Avenue y Oaklawn si vienes en familia, por las carreras o con un presupuesto limitado.
                    </p>

                    <div class="bloque-botones">
                        <a href="#zones" class="btn btn-primario">Comparar las tres zonas</a>
                        <a href="#choose" class="btn btn-secundario">Elegir en 30 segundos</a>
                    </div>
                </div>
                <div class="carrusel-contenedor">
                    <div class="carrusel-track">
                        <?php foreach ($imagenes_hotsprings as $imagen): ?>
                            <div class="tarjeta-slider">
                                <div class="contenedor-foto">
                                    <img src="<?php echo $imagen['archivo']; ?>" alt="<?php echo $imagen['alt']; ?>">
                                </div>
                                <div class="info-foto">
                                    <h3><?php echo $imagen['titulo']; ?></h3>
                                    <p><?php echo $imagen['descripcion']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Botones opcionales para controlar el slider manualmente -->
                    <button class="boton-slider prev" onclick="cambiarSlide(-1)">&#10094;</button>
                    <button class="boton-slider next" onclick="cambiarSlide(1)">&#10095;</button>
                </div>

            </div>
        </section>

        <section class="springs" id="zones">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Las tres zonas, comparadas con honestidad</h2>
                    <p class="kicker">Hot Springs es pequeño: la elección no depende de la distancia, sino de cómo quieres que se sienta el viaje: caminable e histórico, junto al lago y sin prisas, o práctico y familiar.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/hotel_habitacion.webp');">
                        <h3>1. Centro y Bathhouse Row: mejor para quienes visitan por primera vez</h3>
                        <p>Despierta a unos pasos de las históricas casas de baños, el Fordyce Visitor Center (369 Central Ave) y el Grand Promenade. Entre los hoteles que los viajeros reservan aquí están el histórico Arlington Resort Hotel and Spa (239 Central Ave), The Waters Hotel en Bathhouse Row (340 Central Ave) y el pequeño Hotel Hale (341 Central Ave), una antigua casa de baños con tinas de inmersión en las suites. Pagarás más y el estacionamiento es más limitado, pero quizá no necesites el auto durante todo el fin de semana.</p>
                    </div>
                    <!-- BOOKING LINK: Downtown hotels — insert after approval -->
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>2. Lake Hamilton: mejor para días de lago y grupos</h3>
                        <p>Casas vacacionales, condominios y alojamientos junto al lago, a unos 15 o 20 minutos del centro. Es la opción adecuada si vas a alquilar un bote, viajas en grupo o te quedas tres noches o más y quieres una cocina y un muelle al atardecer. Planea ir en auto al centro para los baños: el lago es la base, no la casa de baños.</p>
                    </div>
                    <!-- BOOKING LINK: Lake Hamilton stays — insert after approval -->
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/piscina_termal.webp');">
                        <h3>3. Central Avenue y Oaklawn: mejor para familias y buena relación calidad-precio</h3>
                        <p>Hoteles de cadena y suites cerca de Oaklawn Racing Casino Resort (2705 Central Ave), Magic Springs y el centro de convenciones; por ejemplo, Embassy Suites junto al centro de convenciones (400 Convention Blvd). Estacionamiento más fácil, desayuno incluido en muchas propiedades y un trayecto corto en auto hasta Bathhouse Row. Para la mayoría de las familias, es la mejor relación calidad-precio por noche en la ciudad.</p>
                    </div>
                    <!-- BOOKING LINK: Central Ave / family hotels — insert after approval -->
                </div>
            </div>
        </section>

        <section class="principles" id="choose">
            <div class="wrap">
                <h2>Cómo elegir en 30 segundos</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Fin de semana en pareja, primero los baños</h4>
                    <p>Centro / Bathhouse Row. Camina hasta el baño termal, la cena y el paseo: el auto se queda estacionado.</p>
                </div>
                <div class="principle">
                    <h4>Bote, grupo o estancia larga</h4>
                    <p>Lake Hamilton. Espacio, una cocina y el agua a la puerta; el centro queda a un trayecto corto en auto cuando lo desees.</p>
                </div>
                <div class="principle">
                    <h4>Niños, carreras o presupuesto</h4>
                    <p>Zona de Central Avenue / Oaklawn. Estacionamiento más fácil, desayuno incluido y la mejor relación calidad-precio por noche.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="springs" id="tip">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Un consejo de reserva antes de reservar</h2>
                    <p class="kicker">Elige cancelación gratuita siempre que puedas. Hot Springs se llena rápido los fines de semana de carreras, los días festivos y las noches de Garvan Gardens Holiday Lights: reserva temprano y conserva la opción de cancelar sin costo si cambian tus planes. Los precios varían según las fechas, así que compara siempre los precios en vivo para tus fechas antes de pagar.</p>
                </div>
            </div>
        </section>

        <section class="principles" id="spa-habitacion">
            <div class="wrap">
                <h2>Que la habitación del hotel se sienta como un spa</h2>
                <p class="kicker">Dos cosas pequeñas para empacar: la almohada que convierte cualquier tina de hotel en una tina de baño, y los aceites que hacen que la habitación huela a casa de baños.</p>
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:24px; margin-top:24px;">
                    <div style="border:1px solid #e5e0d8; border-radius:12px; overflow:hidden; background:#fff;">
                        <img src="/images/spa-almohada.jpg" alt="Almohada de baño con ventosas" style="width:100%; display:block;">
                        <div style="padding:18px;">
                            <h3 style="margin:0 0 8px;">Almohada de Bañera SZXYX</h3>
                            <p>Una almohada de baño con 6 ventosas que no se sueltan: cabeza, cuello y hombros apoyados, para que un baño largo en el hotel no termine con dolor de cuello.</p>
                            <p><strong>$15.99</strong> <span style="font-size:12px; color:#777;">*Precio en Amazon; puede variar.</span></p>
                            <div class="bloque-botones">
                                <a href="https://www.amazon.com/dp/B0F3XDCKJZ?tag=hotspringsllc-20" class="btn btn-primario" target="_blank" rel="noopener sponsored">Verlo en Amazon</a>
                            </div>
                            <p style="font-size:12px; color:#777; margin:12px 0 0;">Foto ilustrativa.</p>
                        </div>
                    </div>
                    <div style="border:1px solid #e5e0d8; border-radius:12px; overflow:hidden; background:#fff;">
                        <img src="/images/spa-aceites.jpg" alt="Set de aceites esenciales" style="width:100%; display:block;">
                        <div style="padding:18px;">
                            <h3 style="margin:0 0 8px;">Set de Aceites Esenciales Aeshory, 12 frascos</h3>
                            <p>12 frascos de 5 ml para difusor o humidificador: la habitación huele a spa. Para el cuarto del hotel por la noche, o para el baño en casa cuando termine el viaje.</p>
                            <p><strong>$15.99</strong> <span style="font-size:12px; color:#777;">*Precio en Amazon; puede variar.</span></p>
                            <div class="bloque-botones">
                                <a href="https://www.amazon.com/dp/B0CQJYVGSW?tag=hotspringsllc-20" class="btn btn-primario" target="_blank" rel="noopener sponsored">Verlo en Amazon</a>
                            </div>
                            <p style="font-size:12px; color:#777; margin:12px 0 0;">Foto ilustrativa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="planning">
            <div class="wrap">
                <h2>Sigue planeando</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Qué hacer</h4>
                    <p>La lista completa: baños, senderos, lagos y más.</p>
                    <p><a href="/es/things-to-do-in-hot-springs">Qué hacer en Hot Springs</a></p>
                </div>
                <div class="principle">
                    <h4>El itinerario de 2 días</h4>
                    <p>Dos días, bien aprovechados: el fin de semana en orden.</p>
                    <p><a href="/es/hot-springs-2-day-itinerary">Qué hacer en Hot Springs en 2 días</a></p>
                </div>
                <div class="principle">
                    <h4>Empezar desde el principio</h4>
                    <p>La página principal de la guía de viaje de Hot Springs.</p>
                    <p><a href="/es/">Hot Springs, Arkansas — Guía de viaje</a></p>
                </div>
                </div>
            </div>
        </section>

        <div class="disclosure">
            <div class="wrap">
                Algunos enlaces de este sitio son enlaces de afiliado. Si reservas a través de ellos, Hot Springs LLC puede ganar una comisión sin costo extra para ti.
            </div>
        </div>

        <?php
      require_once __DIR__ . '/../footer.php'; // si tu footer también está separado ?>
