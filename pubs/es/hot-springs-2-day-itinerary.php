<?php
            $meta_title = "Qué hacer en Hot Springs en 2 días: el itinerario perfecto de fin de semana";
            $meta_description = "Un itinerario de 2 días en Hot Springs, Arkansas: el día 1 en Bathhouse Row con los baños termales y el día 2 en Garvan Woodland Gardens, la Anthony Chapel y Lake Hamilton, con un plan hora por hora.";
            $canonical = "https://tiendahotspringsllc.com/es/hot-springs-2-day-itinerary";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/piscina_termal.webp",
                    "alt" => "Piscina termal al aire libre con vapor elevándose",
                    "titulo" => "Día 1 — Bathhouse Row",
                    "descripcion" => "Los baños termales y la histórica calle de casas de baños."
                ],
                [
                    "archivo" => "/images/lago_ouachita.webp",
                    "alt" => "El Lago Ouachita visto desde un mirador entre el bosque",
                    "titulo" => "Día 2 — Jardines y lago",
                    "descripcion" => "Garvan Gardens, la capilla y Lake Hamilton."
                ],
                [
                    "archivo" => "/images/spa_relax.webp",
                    "alt" => "Sesión de spa y masaje",
                    "titulo" => "Agua termal",
                    "descripcion" => "Agua caliente de manantial, directamente de la montaña."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Qué hacer en Hot Springs en 2 días</h1>

                    <p class="descripcion-corta">
                        Dos días son el viaje clásico a Hot Springs, y alcanzan si el orden es el correcto.
                        <strong>El día 1 es Bathhouse Row y los baños termales. El día 2 es Garvan Woodland Gardens,
                        la capilla y el lago.</strong> Aquí está el fin de semana, hora por hora.
                    </p>

                    <div class="bloque-botones">
                        <a href="#day1" class="btn btn-primario">Día 1 — los baños</a>
                        <a href="#day2" class="btn btn-secundario">Día 2 — jardines y lago</a>
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

        <section class="springs" id="day1">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Día 1 — Bathhouse Row y los baños termales</h2>
                    <p class="kicker">Empieza por la razón de ser de la ciudad: el agua caliente, la calle de casas de baños que surgió gracias a ella y un baño prolongado para terminar la tarde.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/spa_relax.webp');">
                        <h3>Primero entiéndelo: el Fordyce</h3>
                        <p>Comienza en el Fordyce Bathhouse Visitor Center and Museum (gratis, 369 Central Ave) para entender cómo los manantiales dieron origen a esta ciudad. Después camina por Bathhouse Row —ocho históricas casas de baños construidas entre 1892 y 1923— y por el Grand Promenade, detrás de la calle.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/piscina_termal.webp');">
                        <h3>Después, a remojarse</h3>
                        <p>Elige tu ritual: el Buckstaff, en funcionamiento desde 1912, para el tradicional baño en tina privada, o Quapaw Baths and Spa para las modernas piscinas termales. En el camino, llena una jarra en una de las fuentes de agua caliente: los habitantes locales lo hacen.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/calle_central.webp');">
                        <h3>Cena en Central Avenue</h3>
                        <p>Termina con una cena en Central Avenue y una bebida en Superior Bathhouse Brewery, la cervecería dentro del parque nacional que elabora su cerveza con agua termal.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="principles">
            <div class="wrap">
                <p>¿Lo prefieres guiado? El tour con audioguía recorre Bathhouse Row y el Parque Nacional a tu ritmo.</p>
                <div class="bloque-botones">
                    <a href="https://www.viator.com/Hot-Springs/d50758-ttd?pid=P00331044&mcid=42383&medium=link&campaign=things-to-do" class="btn btn-primario" target="_blank" rel="noopener sponsored">Ver tours del Día 1 en Viator</a>
                </div>
            </div>
        </section>

        <section class="springs" id="day2">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Día 2 — Jardines, capilla y el lago</h2>
                    <p class="kicker">El día 2 cambia el vapor por la sombra y el agua abierta: los jardines con la luz de la mañana y el lago por la tarde.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>Garvan Woodland Gardens</h3>
                        <p>La mañana en Garvan Woodland Gardens (550 Arkridge Rd): 210 acres de jardines junto a Lake Hamilton. Ve temprano y visita la Anthony Chapel con la luz tranquila, antes de que llegue la multitud.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>Tarde en Lake Hamilton</h3>
                        <p>Alquila un bote, haz un tour en vehículo anfibio o simplemente disfruta un almuerzo prolongado junto al lago. El lago es la segunda mitad del viaje a Hot Springs: no lo saltes por pasar más tiempo en el centro.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>Si todavía queda energía</h3>
                        <p>Añade una opción: las carreras o el casino de Oaklawn, Magic Springs Theme and Water Park (1701 E Grand Ave) si viajas con niños, o Hot Springs Mountain Tower para disfrutar la vista antes de partir.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="principles">
            <div class="wrap">
                <p>Para los jardines y el lago, revisa los tours y entradas que encajan con el Día 2.</p>
                <div class="bloque-botones">
                    <a href="https://www.viator.com/Hot-Springs/d50758-ttd?pid=P00331044&mcid=42383&medium=link&campaign=things-to-do" class="btn btn-primario" target="_blank" rel="noopener sponsored">Ver tours del Día 2 en Viator</a>
                </div>
            </div>
        </section>

        <section class="principles" id="schedule1">
            <div class="wrap">
                <h2>Día 1, hora por hora</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>8:00 a. m.</h4>
                    <p>Desayuno en Central Avenue. Llega temprano: Bathhouse Row se llena.</p>
                </div>
                <div class="principle">
                    <h4>9:00 a. m.</h4>
                    <p>Fordyce Bathhouse Visitor Center (gratis). Mapa y contexto para el día.</p>
                </div>
                <div class="principle">
                    <h4>11:00 a. m.</h4>
                    <p>Camina por Bathhouse Row y después por el Grand Promenade, detrás de la calle.</p>
                </div>
                <div class="principle">
                    <h4>1:00 p. m.</h4>
                    <p>Almuerzo en el centro.</p>
                </div>
                <div class="principle">
                    <h4>3:00 p. m.</h4>
                    <p>El baño termal: Buckstaff para el ritual tradicional o Quapaw para las piscinas modernas. Ve temprano: el baño es la parada que todos quieren.</p>
                </div>
                <div class="principle">
                    <h4>6:00 p. m.</h4>
                    <p>Cena en Central Avenue y una cerveza de agua termal en Superior Bathhouse Brewery.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="schedule2">
            <div class="wrap">
                <h2>Día 2, hora por hora</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>8:00 a. m.</h4>
                    <p>Salida hacia Garvan Woodland Gardens: unos 20 minutos en auto.</p>
                </div>
                <div class="principle">
                    <h4>9:00 a. m.</h4>
                    <p>Garvan Gardens: los senderos, el jardín asiático y la Anthony Chapel, temprano y con tranquilidad.</p>
                </div>
                <div class="principle">
                    <h4>11:00 a. m.</h4>
                    <p>Regreso hacia el lago. Café o brunch cerca de Lake Hamilton.</p>
                </div>
                <div class="principle">
                    <h4>1:00 p. m.</h4>
                    <p>Lake Hamilton: alquiler de un bote, un tour en vehículo anfibio o almuerzo junto al agua.</p>
                </div>
                <div class="principle">
                    <h4>3:00 p. m.</h4>
                    <p>Elige tu opción: Magic Springs con la familia, Oaklawn para los adultos o Mountain Tower para la vista.</p>
                </div>
                <div class="principle">
                    <h4>6:00 p. m.</h4>
                    <p>Atardecer en Lake Hamilton y una cena de despedida.</p>
                </div>
                </div>
            </div>
        </section>
        <!-- BOOKING LINK: Stay one more night — insert after approval -->

        <section class="springs" id="full-guide">
            <div class="wrap">
                <div class="springs-head">
                    <h2>El itinerario completo llegará como guía descargable</h2>
                    <p class="kicker">Esta página presenta el fin de semana en orden. La versión completa descargable añade lo que una página web no puede llevar en tu bolsillo: el orden de las reservas (qué reservar primero —hotel, baño termal, tours— y qué dejar abierto), un plan para la lluvia, un plan para viajar con niños, un plan de fin de semana de carreras en Oaklawn, consejos de estacionamiento en el centro y una lista de equipaje para el viaje termal. El mismo itinerario, totalmente ordenado y listo para viajar.</p>
                </div>
            </div>
        </section>

        <section class="principles" id="planning">
            <div class="wrap">
                <h2>Sigue planeando</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Dónde dormir</h4>
                    <p>Las tres zonas comparadas: el centro, el lago o Central Avenue.</p>
                    <p><a href="/es/where-to-stay-in-hot-springs">Dónde dormir en Hot Springs</a></p>
                </div>
                <div class="principle">
                    <h4>Qué hacer</h4>
                    <p>La lista completa: baños, senderos, lagos y más.</p>
                    <p><a href="/es/things-to-do-in-hot-springs">Qué hacer en Hot Springs</a></p>
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
