<?php
            $meta_title = "El centro de Hot Springs y Central Avenue — Bathhouse Row";
            $meta_description = "Camina por el centro de Hot Springs: Bathhouse Row, el museo Fordyce gratis, el Grand Promenade, el Arlington, las galerías y el Museo de los Gánsteres, todo en Central Avenue.";
            $canonical = "https://tiendahotspringsllc.com/es/downtown-central-avenue-hot-springs";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/calle_central.webp",
                    "alt" => "Central Avenue en el centro de Hot Springs",
                    "titulo" => "Central Avenue",
                    "descripcion" => "El centro histórico: casas de baño de un lado, tiendas y galerías del otro."
                ],
                [
                    "archivo" => "/images/paseo_promenade.webp",
                    "alt" => "El paseo Grand Promenade detrás de Bathhouse Row",
                    "titulo" => "Grand Promenade",
                    "descripcion" => "El paseo de ladrillo de media milla detrás de Bathhouse Row."
                ],
                [
                    "archivo" => "/images/torre_mirador.webp",
                    "alt" => "Vista de Hot Springs desde la torre mirador",
                    "titulo" => "Desde arriba",
                    "descripcion" => "La ciudad y las montañas desde el monte Hot Springs."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">El centro de Hot Springs y Central Avenue</h1>

                    <p class="descripcion-corta">
                        El centro de Hot Springs es pequeño, se camina entero y está lleno de carácter,
                        y la mejor forma de verlo es a pie. Todo el centro histórico corre por Central
                        Avenue, con las viejas casas de baño de un lado y tiendas, galerías, restaurantes
                        y hoteles del otro, y las montañas Ouachita levantándose justo detrás. Puedes
                        caminar el tramo principal en una hora, pero vale darle toda una mañana o una
                        tarde.
                    </p>

                    <div class="bloque-botones">
                        <a href="#bathhouse-row" class="btn btn-primario">Empieza en Bathhouse Row</a>
                        <a href="#galleries" class="btn btn-secundario">Galerías y tiendas</a>
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

        <section class="springs" id="bathhouse-row">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Parada 1: Bathhouse Row</h2>
                    <p class="kicker">Ocho casas de baño históricas, construidas entre fines de los años 1800 y los años 1920: un parque nacional que se camina por una acera de ciudad, sin puerta de entrada ni boleto.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/calle_central.webp');">
                        <h3>El Fordyce</h3>
                        <p>El edificio más grande y ornamentado de la fila. Se abrió en 1915 y hoy es el centro de visitantes del parque y un museo gratis: tres pisos de salas de baño, un gimnasio con mazas de madera, una sala de música y la sala de baño de hombres bajo un techo de vitral con sirenas. Abierto todos los días de 9 a. m. a 5 p. m. y no cuesta nada.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>El Grand Promenade</h3>
                        <p>Detrás de Bathhouse Row corre el Grand Promenade, un paseo de ladrillo de media milla por la ladera. Con sombra, tranquilo y elevado sobre la calle, con vista a las casas de baño y la ciudad. Apto para cochecitos y sillas de ruedas, se conecta con los senderos del parque: como media hora a paso lento.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/calle_central.webp');">
                        <h3>Buckstaff, Quapaw, Superior</h3>
                        <p>Caminando al norte por la fila vas a pasar el Buckstaff, la única casa de baños en operación continua desde 1912 y que todavía ofrece el ritual tradicional del baño privado, y el Quapaw, con piscinas termales públicas modernas. En el extremo norte está la casa Superior: hoy una cervecería, la única cervecería en un parque nacional, que hace su cerveza con agua termal.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="north-end">
            <div class="wrap">
                <h2>Parada 2: el extremo norte</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>El hotel Arlington</h4>
                    <p>El gran hotel de dos torres que ancla el centro desde los años 1920. Vale entrar al lobby solo para verlo, aunque no te hospedes ahí.</p>
                </div>
                <div class="principle">
                    <h4>El edificio Medical Arts</h4>
                    <p>Una torre alta de estilo art déco, uno de los edificios más reconocibles del horizonte de la ciudad, cerca del Arlington en el extremo norte de Central Avenue.</p>
                </div>
                <div class="principle">
                    <h4>La cascada de agua caliente</h4>
                    <p>Entre los edificios, busca la cascada de agua caliente, donde el agua del manantial baja abierta por la ladera, y las fuentes públicas donde puedes llenar una botella o un bidón con agua termal gratis.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="galleries">
            <div class="wrap">
                <h2>Parada 3: tiendas, galerías y arte</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>American Art Gallery</h4>
                    <p>La American Art Gallery en 724 Central Avenue muestra pinturas, joyería, cerámica, esculturas y artesanías hechas en Arkansas: mejores recuerdos que cualquier cosa de una tienda de gasolinera.</p>
                </div>
                <div class="principle">
                    <h4>Collective Arts Gallery</h4>
                    <p>Muestra obras de decenas de artistas locales, junto con las tienditas y estudios de la calle: salsa picante, velas hechas a mano y más.</p>
                </div>
                <div class="principle">
                    <h4>Gallery Walk</h4>
                    <p>El primer viernes de cada mes, las galerías del centro se quedan abiertas hasta tarde para el Gallery Walk, con muestras nuevas, refrigerios y gente caminando de una galería a otra. Si tu viaje coincide con un primer viernes, planea la noche alrededor de eso.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="food-museum">
            <div class="wrap">
                <h2>Parada 4: comida y el Museo de los Gánsteres</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>El Ohio Club</h4>
                    <p>El bar más viejo de Arkansas, donde tomaban los gánsteres durante la Prohibición. Hay cafés para un desayuno lento, heladerías para la tarde y restaurantes de casuales a elegantes.</p>
                </div>
                <div class="principle">
                    <h4>Barbacoa desde 1928</h4>
                    <p>La calle tiene de todo, desde parrillas de barbacoa que sirven desde 1928 hasta cenas elegantes. Empieza con desayuno en el centro, almuerza en un café de Central y vuelve en la noche para cenar con música en vivo.</p>
                </div>
                <div class="principle">
                    <h4>Museo de los Gánsteres</h4>
                    <p>Entre los años 1920 y 1940, Hot Springs era tierra abierta: casinos ilegales, contrabandistas y mafiosos visitantes como Al Capone y Owney Madden. El museo cuenta esa historia en siete galerías, con visitas guiadas durante el día.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Consejos prácticos para la caminata</h2>
                <p>Ve temprano al Fordyce: el museo es gratis y el mejor punto de partida, pero se llena hacia el mediodía, así que llega cuando abre a las 9 a. m. Usa zapatos cómodos: Central Avenue parece plana, pero el paseo y las calles de atrás suben. Estacionar es fácil, con lotes públicos y estacionamiento en la calle por el centro. Lleva una botella para el agua del manantial: las fuentes públicas son gratis y llenar un bidón es un ritual local. Reserva media jornada: la caminata en sí es corta, pero el museo, las tiendas, las galerías y un almuerzo largo llenan una mañana o una tarde sin problema. Y vuelve de noche: las casas de baño se iluminan, los restaurantes se llenan y la música en vivo sale de los bares.</p>
                <div class="bloque-botones">
                    <a href="/es/things-to-do-in-hot-springs" class="btn btn-primario">Ver qué hacer</a>
                    <a href="/es/best-restaurants-in-hot-springs" class="btn btn-secundario">Dónde comer</a>
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
