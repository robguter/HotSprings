<?php
            $meta_title = "Oaklawn: carreras y casino — carreras, clásicos y casino en Hot Springs";
            $meta_description = "Oaklawn en Hot Springs: carreras de caballos en vivo del 27 de noviembre de 2026 al 1 de mayo de 2027, el Arkansas Derby de $1.5 millones el 10 de abril de 2027, casino 24 horas sin humo, hotel y spa.";
            $canonical = "https://tiendahotspringsllc.com/es/oaklawn-racing-casino";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/oaklawn.webp",
                    "alt" => "Día del Derby en Oaklawn, Hot Springs",
                    "titulo" => "Día del Derby",
                    "descripcion" => "El día del Arkansas Derby en Oaklawn: el fin de semana de carreras más grande del pueblo."
                ],
                [
                    "archivo" => "/images/calle_central.webp",
                    "alt" => "Central Avenue en el centro de Hot Springs",
                    "titulo" => "En Central Avenue",
                    "descripcion" => "Hipódromo, casino, hotel y spa en un solo lugar sobre Central Avenue."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Oaklawn: carreras y casino</h1>

                    <p class="descripcion-corta">
                        Oaklawn ha sido el corazón de Hot Springs desde 1904. Un hipódromo de caballos
                        pura sangre, un casino, un hotel y un spa, todo en un solo lugar sobre Central
                        Avenue, y en temporada de carreras es donde parece reunirse todo el pueblo. Aunque
                        nunca hayas visto una carrera de caballos, un día en Oaklawn es una de las cosas
                        más divertidas que puedes hacer en Hot Springs.
                    </p>

                    <div class="bloque-botones">
                        <a href="#season" class="btn btn-primario">La temporada de carreras</a>
                        <a href="#big-races" class="btn btn-secundario">Las carreras grandes</a>
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

        <section class="springs" id="season">
            <div class="wrap">
                <div class="springs-head">
                    <h2>La temporada de carreras</h2>
                    <p class="kicker">2026–27: viernes 27 de noviembre de 2026 — el día de apertura más temprano en la historia de Oaklawn — hasta el sábado 1 de mayo de 2027. El casino abre 24 horas al día, todo el año, y es libre de humo.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/oaklawn.webp');">
                        <h3>Temporada de Fiestas</h3>
                        <p>La temporada abre el viernes 27 de noviembre de 2026 — el día después de Acción de Gracias — y la Temporada de Fiestas va desde el día de apertura hasta el domingo 10 de enero. Después hay un descanso corto antes de que empiece la Temporada Clásica.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/calle_central.webp');">
                        <h3>Temporada Clásica</h3>
                        <p>La Temporada Clásica va del viernes 22 de enero al sábado 1 de mayo de 2027, que es el día del Kentucky Derby. Casi todas las semanas hay carreras de viernes a domingo, con algunos jueves en primavera. No hay carreras el Día de Navidad ni el Domingo de Pascua.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/oaklawn.webp');">
                        <h3>Horarios del día de carreras</h3>
                        <p>Las puertas abren a las 11 a. m. y la primera carrera por lo general sale a las 12:45 p. m. La entrada general en los días de carreras es gratis, lo que hace de Oaklawn uno de los días más baratos en Hot Springs.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="big-races">
            <div class="wrap">
                <h2>Las carreras grandes</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>El Rebel Stakes — 13 de marzo de 2027</h4>
                    <p>Una carrera de $1.25 millones para caballos de tres años, el sábado 13 de marzo de 2027: un paso importante camino al Kentucky Derby, ahora corrida a 1 1/8 de milla.</p>
                </div>
                <div class="principle">
                    <h4>El Arkansas Derby — 10 de abril de 2027</h4>
                    <p>La carrera más grande del año en Oaklawn: Grado 1 a una milla y un octavo, con bolsa de $1.5 millones. La última gran carrera preparatoria para el Kentucky Derby: todo el pueblo vibra ese fin de semana, así que reserva tu hotel temprano.</p>
                </div>
                <div class="principle">
                    <h4>Apple Blossom y Oaklawn Handicap — 17 de abril de 2027</h4>
                    <p>Dos carreras de $1.5 millones en la misma cartelera, una semana después del Derby. El calendario de clásicos es el más rico en la historia del hipódromo: 61 carreras de clásicos por casi $19 millones en la temporada 2026–27.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="race-day">
            <div class="wrap">
                <h2>Cómo es un día de carreras</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Entra directo</h4>
                    <p>Entras por la entrada principal: no necesitas boleto para la entrada general. La tribuna mira a la pista, las pantallas grandes muestran las apuestas, y el paddock te deja ver cómo ensillan a los caballos antes de cada carrera, que es la mitad de la diversión.</p>
                </div>
                <div class="principle">
                    <h4>Dos minutos de trueno</h4>
                    <p>Los caballos desfilan frente a la gente, suena la corneta y salen. Una carrera dura unos dos minutos, y la recta final es ruidosa de la mejor forma.</p>
                </div>
                <div class="principle">
                    <h4>Una tarde sin prisa</h4>
                    <p>Entre carreras por lo general hay como media hora: tiempo de sobra para comer algo, caminar y ver el siguiente grupo de caballos en el paddock. Un día típico de carreras tiene ocho o nueve carreras, desde poco antes de la 1 p. m. hasta como las 5 p. m.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="betting">
            <div class="wrap">
                <h2>Apostar por primera vez</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Ganador, Placé, Show</h4>
                    <p>No tienes que apostar: mucha gente viene solo a mirar. Si quieres probar, hazlo simple: Ganador significa que tu caballo tiene que llegar primero, Placé primero o segundo, Show primero, segundo o tercero.</p>
                </div>
                <div class="principle">
                    <h4>Poco y simple</h4>
                    <p>Apuesta en una ventanilla con una persona, o en una máquina de autoservicio. El mínimo es poco — un par de dólares — y el personal y los habituales por lo general ayudan con gusto a alguien que apuesta por primera vez.</p>
                </div>
                <div class="principle">
                    <h4>Ponte un presupuesto</h4>
                    <p>Ponte un presupuesto antes de empezar, tómalo como el precio del entretenimiento, y para cuando se acabe. El programa que puedes comprar en la entrada lista cada caballo, sus carreras pasadas y sus probabilidades de la mañana.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Más allá de la pista, y consejos para tu primera visita</h2>
                <p>El hotel del lugar tiene habitaciones con vista a la pista, el Astral Spa ofrece masajes y tratamientos, y hay varios restaurantes, desde lugares casuales hasta cenas elegantes. Aun fuera de la temporada de carreras, el casino, el hotel, los restaurantes y el spa están abiertos: Oaklawn funciona como parada en cualquier época del año. Revisa primero el calendario de carreras: las carreras son por temporada, casi siempre de viernes a domingo. Llega antes de la primera carrera: las puertas abren a las 11 a. m. La ropa es casual, y trae una capa extra: en la tribuna puede correr brisa. Lleva efectivo para apuestas pequeñas y propinas, aunque las tarjetas funcionan en casi todos lados. Y quédate toda la cartelera: las últimas carreras suelen ser las mejores.</p>
                <div class="bloque-botones">
                    <a href="/es/best-time-to-visit-hot-springs" class="btn btn-primario">Mejor época para visitar</a>
                    <a href="/es/things-to-do-in-hot-springs" class="btn btn-secundario">Ver qué hacer</a>
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
