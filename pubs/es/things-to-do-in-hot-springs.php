<?php
            $meta_title = "Qué hacer en Hot Springs, Arkansas — baños termales, senderos y lagos";
            $meta_description = "Lo mejor que hacer en Hot Springs, Arkansas: sumérgete en Bathhouse Row, camina el Grand Promenade, recorre 26 millas de senderos del parque nacional y pasa un día en el Lake Hamilton o el Lake Ouachita.";
            $canonical = "https://tiendahotspringsllc.com/es/things-to-do-in-hot-springs";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/entorno_natural.webp",
                    "alt" => "Paisaje natural alrededor de Hot Springs",
                    "titulo" => "Parque, senderos y lagos",
                    "descripcion" => "Montañas, senderos y lagos de aguas claras por todos lados."
                ],
                [
                    "archivo" => "/images/piscina_termal.webp",
                    "alt" => "Piscina termal al aire libre con vapor elevándose",
                    "titulo" => "Agua termal",
                    "descripcion" => "Agua de manantial caliente, directa de la montaña."
                ],
                [
                    "archivo" => "/images/spa_relax.webp",
                    "alt" => "Sesión de spa y masaje",
                    "titulo" => "Bathhouse Row",
                    "descripcion" => "Ocho históricas casas de baños en Central Avenue."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Lo mejor que hacer en Hot Springs</h1>

                    <p class="descripcion-corta">
                        Hot Springs National Park recibió <strong>2,5 millones de visitas en 2025</strong> — y casi todo
                        lo que vinieron a buscar está a unas pocas calles de Bathhouse Row. Sumérgete en el
                        agua termal, camina el paseo, sube a la torre y después ve a los lagos. Aquí está la lista.
                    </p>

                    <div class="bloque-botones">
                        <a href="#classics" class="btn btn-primario">Empieza por los clásicos</a>
                        <a href="#lakes" class="btn btn-secundario">Lagos y más</a>
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

        <section class="principles" id="oaklawn">
            <div class="wrap">
                <h2>Las carreras de caballos y el casino</h2>
                <p class="kicker">En Oaklawn corren caballos pura sangre desde 1904. Hoy el hipódromo está dentro del único resort con carreras y casino de Arkansas, a pocos minutos en carro por Central Avenue desde Bathhouse Row — y cada primavera recibe una de las carreras más importantes de Estados Unidos.</p>
                <div class="spring-panels" style="grid-template-columns: 1fr;">
                    <div class="spring-panel spring-panel--alta" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/oaklawn.webp');">
                        <h3>Oaklawn Racing Casino Resort</h3>
                        <p>El día del Derby en Oaklawn Park: la puerta de salida, la multitud y la pista de tierra.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="springs" id="classics">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Empieza con el agua y Bathhouse Row</h2>
                    <p class="kicker">Bathhouse Row es el corazón de Hot Springs: ocho históricas casas de baños a lo largo de Central Avenue, construidas alrededor de los manantiales termales que le dieron el nombre a la ciudad.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/spa_relax.webp');">
                        <h3>Bathhouse Row y la Fordyce</h3>
                        <p>Recorre la hilera de ocho históricas casas de baños en Central Avenue. La Fordyce Bathhouse es hoy el centro de visitantes y museo del parque: la entrada es gratis y es la mejor primera parada para entender el lugar.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/piscina_termal.webp');">
                        <h3>Dónde todavía puedes sumergirte</h3>
                        <p>De las ocho casas de baños, la Buckstaff y la Quapaw son las dos donde los visitantes todavía pueden sumergirse en el agua termal hoy.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/entorno_natural.webp');">
                        <h3>El agua en sí</h3>
                        <p>El agua brota a 143 °F desde 47 manantiales termales. No hay piscinas al aire libre para sumergirse en el parque: el baño se hace dentro de las casas de baños y los spas. En la ciudad, las estaciones públicas de llenado permiten que cualquiera llene garrafas con el agua termal, gratis.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="springs" id="park">
            <div class="wrap">
                <div class="springs-head">
                    <h2>El parque detrás de Bathhouse Row</h2>
                    <p class="kicker">El parque nacional rodea el centro: un paseo detrás de las casas de baños, una torre sobre la ciudad y millas de senderos en las montañas Ouachita.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>The Grand Promenade</h3>
                        <p>Un paseo de ladrillos que corre detrás de Bathhouse Row: la manera tranquila de recorrer la hilera completa, por encima de la calle.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>Hot Springs Mountain Tower</h3>
                        <p>Una torre de observación sobre la ciudad: sube en el elevador para ver las montañas Ouachita.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>26 millas de senderos</h3>
                        <p>Los senderos del parque incluyen el mirador Goat Rock y el largo Sunset Trail. Los perros con correa son bienvenidos en los senderos.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="lakes">
            <div class="wrap">
                <h2>Los lagos y los jardines</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Lake Hamilton</h4>
                    <p>El lago más cercano, a unos diez minutos del centro, y el favorito local para pasear en bote.</p>
                </div>
                <div class="principle">
                    <h4>Lake Ouachita</h4>
                    <p>El lago más grande de Arkansas, famoso por sus aguas claras: la elección para kayak y natación, con muchas islas pequeñas por explorar.</p>
                </div>
                <div class="principle">
                    <h4>Garvan Woodland Gardens</h4>
                    <p>Jardines botánicos a orillas del Lake Hamilton, conocidos por la Anthony Chapel, una capilla de vidrio y madera en medio del bosque.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="oaklawn">
            <div class="wrap">
                <h2>Las carreras de caballos y el casino</h2>
                <div class="principles-grid">
                    <div class="principle">
                        <h4>El Arkansas Derby</h4>
                        <p>Una carrera de Grado 1 con bolsa de $1.5 millones — la última clasificatoria de 100 puntos para el Kentucky Derby y una de las carreras preparatorias más importantes del país. La próxima es el 10 de abril de 2027, y ese fin de semana se llena con meses de anticipación.</p>
                    </div>
                    <div class="principle">
                        <h4>Temporada de carreras</h4>
                        <p>La temporada 2026–27 va del 27 de noviembre de 2026 al 1 de mayo de 2027, con los días grandes — Smarty Jones, Southwest, Rebel y el Arkansas Derby — repartidos entre el invierno y la primavera. Revisa la cartelera del día en oaklawn.com antes de ir.</p>
                    </div>
                    <div class="principle">
                        <h4>El casino, todo el año</h4>
                        <p>El casino libre de humo abre las 24 horas, todo el año: más de 1,400 máquinas tragamonedas, más de 30 mesas de juego y apuestas deportivas. The Bugler y The OAK room &amp; bar son los únicos dos restaurantes Forbes Recommended de Arkansas, y el Astral Spa y el hotel están en el mismo lugar, en 2705 Central Avenue. Carreras desde los 18 años; casino desde los 21.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="more">
            <div class="wrap">
                <h2>Más maneras de llenar el día</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>The Gangster Museum of America</h4>
                    <p>La era de los gánsteres de la ciudad en los años 20 y 30 — cuando Al Capone visitaba Hot Springs — contada en un solo museo.</p>
                </div>
                <div class="principle">
                    <h4>Magic Springs</h4>
                    <p>Un parque de diversiones y un parque acuático en uno, abierto en temporada.</p>
                </div>
                <div class="principle">
                    <h4>Mid-America Science Museum</h4>
                    <p>Un museo de ciencia interactivo: una buena parada para los niños.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="tours">
            <div class="wrap">
                <h2>Reserva las experiencias antes de ir</h2>
                <p>Las experiencias mejor valoradas de Hot Springs — el tour con audioguía del Parque Nacional, la tirolina para grupos pequeños y la búsqueda del tesoro de Hot Springs — se reservan por Viator, la mayoría con cancelación gratuita.</p>
                <div class="bloque-botones">
                    <a href="https://www.viator.com/Hot-Springs/d50758-ttd?pid=P00331044&mcid=42383&medium=link&campaign=things-to-do" class="btn btn-primario" target="_blank" rel="noopener sponsored">Ver tours de Hot Springs en Viator</a>
                </div>
            </div>
        </section>
        <!-- BOOKING LINK: hoteles — insertar tras la aprobación de Awin/Booking -->

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>¿Poco tiempo? Sigue el plan de 2 días</h2>
                <p>Los baños, los senderos y los lagos caben perfecto en dos días. Nuestro plan paso a paso los pone en orden.</p>
                <div class="bloque-botones">
                    <a href="/es/#plan" class="btn btn-primario">Ver el plan de 2 días</a>
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
