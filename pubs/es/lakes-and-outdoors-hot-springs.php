<?php
            $meta_title = "Lagos y aire libre en Hot Springs, Arkansas — Ouachita, Hamilton y Catherine";
            $meta_description = "Los lagos de Hot Springs, Arkansas: el Lake Ouachita, el lago más grande dentro de Arkansas, el Lake Hamilton a diez minutos del centro y el Lake Catherine; dónde nadar, pasear en bote y pescar.";
            $canonical = "https://tiendahotspringsllc.com/es/lakes-and-outdoors-hot-springs";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/lago_ouachita.webp",
                    "alt" => "Lake Ouachita, agua clara y orilla de bosque",
                    "titulo" => "Lake Ouachita",
                    "descripcion" => "El lago más grande dentro de Arkansas, y el de agua más clara."
                ],
                [
                    "archivo" => "/images/jardin_garvan.webp",
                    "alt" => "Jardines Garvan Woodland a orillas del Lake Hamilton",
                    "titulo" => "Garvan Woodland Gardens",
                    "descripcion" => "Jardines botánicos a orillas del Lake Hamilton."
                ],
                [
                    "archivo" => "/images/sendero_bosque.webp",
                    "alt" => "Sendero en el bosque del Ouachita National Forest",
                    "titulo" => "Senderos en el bosque",
                    "descripcion" => "Los lagos están dentro del Ouachita National Forest."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Los lagos de Hot Springs</h1>

                    <p class="descripcion-corta">
                        Hot Springs está sobre el río Ouachita, y el río forma tres lagos — Ouachita,
                        Hamilton y Catherine — más el lago DeGray a poca distancia en carro. Uno es el
                        lago más grande dentro de Arkansas, uno está a diez minutos del centro y uno
                        es el pequeño y tranquilo, con playa en el parque estatal. Aquí están.
                    </p>

                    <div class="bloque-botones">
                        <a href="#lakes" class="btn btn-primario">Los tres lagos</a>
                        <a href="#ouachita" class="btn btn-secundario">Lake Ouachita</a>
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

        <section class="springs" id="lakes">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Los tres lagos</h2>
                    <p class="kicker">Los tres lagos están sobre el río Ouachita — los Tri-Lakes — y cada uno tiene su propio carácter.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>Lake Ouachita</h3>
                        <p>40.100 acres — el lago más grande dentro de Arkansas — a unas 15 millas al noroeste del centro, rodeado por el Ouachita National Forest. La elección para agua clara, kayak y natación.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>Lake Hamilton y Garvan Woodland Gardens</h3>
                        <p>Unos 7.200 acres y 18,5 millas de largo, a diez minutos del centro. Casas, restaurantes y muelles bordean la orilla, y Garvan Woodland Gardens está a orillas del lago.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>Lake Catherine State Park</h3>
                        <p>El más pequeño de los tres lagos — 1.940 acres, 11 millas de largo — con el Lake Catherine State Park a orillas: playa para nadar, alquiler de botes y pesca entre el bosque.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="ouachita">
            <div class="wrap">
                <h2>Lake Ouachita: el grande</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>El lago más grande de Arkansas</h4>
                    <p>40.100 acres, el lago más grande dentro de Arkansas, a unas 15 millas al noroeste del centro y rodeado por el Ouachita National Forest. El Lake Ouachita State Park está a orillas del lago, con marinas alrededor.</p>
                </div>
                <div class="principle">
                    <h4>El agua más clara</h4>
                    <p>El Lake Ouachita es conocido por el agua más clara de los tres lagos: la elección para kayak y natación, con muchas islas pequeñas por explorar.</p>
                </div>
                <div class="principle">
                    <h4>Pesca y buceo</h4>
                    <p>Pesca de lobina negra, y agua tan clara que permite bucear: las dos cartas del lago para pescadores y buzos.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="hamilton">
            <div class="wrap">
                <h2>Lake Hamilton: el cercano</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>A diez minutos del centro</h4>
                    <p>Unos 7.200 acres y 18,5 millas de largo, a unos diez minutos del centro: el lago al que llegas cuando solo tienes una tarde.</p>
                </div>
                <div class="principle">
                    <h4>Un lago habitado</h4>
                    <p>Una orilla residencial con casas, restaurantes y muelles: el lago donde la gente vive, come y guarda sus botes.</p>
                </div>
                <div class="principle">
                    <h4>Lobina rayada y botes</h4>
                    <p>Pesca de lobina rayada y paseos en bote: el lago más cercano, y el favorito local para un día en bote.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="catherine">
            <div class="wrap">
                <h2>Lake Catherine: el tranquilo</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>El más pequeño de los tres</h4>
                    <p>1.940 acres y 11 millas de largo: el más pequeño de los Tri-Lakes, y el más tranquilo de los tres.</p>
                </div>
                <div class="principle">
                    <h4>Lake Catherine State Park</h4>
                    <p>El parque estatal a orillas del lago tiene playa para nadar y alquiler de botes: la manera fácil de pasar un día en este lago sin tener bote propio.</p>
                </div>
                <div class="principle">
                    <h4>Pesca</h4>
                    <p>Lobina, mojarra y bagre: el lago para elegir cuando el plan es pescar.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Un lago más, y el plan</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>DeGray Lake</h4>
                    <p>13.400 acres, a unos 30 minutos, con un parque estatal tipo resort: el cuarto lago, para un segundo día de lago.</p>
                </div>
                <div class="principle">
                    <h4>Los Tri-Lakes</h4>
                    <p>Ouachita, Hamilton y Catherine están todos sobre el río Ouachita. Elige Ouachita por el agua clara, Hamilton por cercano y animado, Catherine por tranquilo.</p>
                </div>
                <div class="principle">
                    <h4>El día de lago dentro del viaje</h4>
                    <p>Los lagos caben en el plan de 2 días después de los baños y los senderos, y el Lake Hamilton es el lugar más tranquilo para hospedarse, a diez minutos del centro.</p>
                </div>
                </div>
                <div class="bloque-botones">
                    <a href="/es/hot-springs-2-day-itinerary" class="btn btn-primario">Ver el plan de 2 días</a>
                    <a href="/es/where-to-stay-in-hot-springs" class="btn btn-secundario">Dónde hospedarse</a>
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
