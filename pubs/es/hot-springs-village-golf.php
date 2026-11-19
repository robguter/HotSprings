<?php
            $meta_title = "Hot Springs Village y golf — 9 campos, 171 hoyos en Arkansas";
            $meta_description = "Hot Springs Village: la comunidad cerrada más grande de EE. UU. — 26,000 acres, 9 campos de golf, 171 hoyos, 11 lagos, 30 millas de senderos, a 20 minutos de Hot Springs.";
            $canonical = "https://tiendahotspringsllc.com/es/hot-springs-village-golf";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/lago_ouachita.webp",
                    "alt" => "Agua clara de un lago en las montañas Ouachita",
                    "titulo" => "Los lagos",
                    "descripcion" => "Once lagos dentro de las puertas: pesca, paseos en bote, natación y playas."
                ],
                [
                    "archivo" => "/images/sendero_bosque.webp",
                    "alt" => "Sendero en el bosque de las montañas Ouachita",
                    "titulo" => "Senderos",
                    "descripcion" => "30 millas de senderos para caminar y andar en bici entre los pinos."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Hot Springs Village y golf</h1>

                    <p class="descripcion-corta">
                        A unos 20 minutos al noreste de Hot Springs, detrás de unas puertas en las
                        montañas Ouachita, está uno de los lugares más sorprendentes de Arkansas: Hot
                        Springs Village. La comunidad cerrada más grande de Estados Unidos — unos 26,000
                        acres de pinos, lagos y campos de golf, con unos 17,000 residentes — y para los
                        golfistas, uno de los secretos mejor guardados del sur: nueve campos de golf y
                        171 hoyos dentro de una sola comunidad.
                    </p>

                    <div class="bloque-botones">
                        <a href="#golf" class="btn btn-primario">El golf</a>
                        <a href="#stay" class="btn btn-secundario">Hospedarse en el Village</a>
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

        <section class="springs" id="village">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Un mundo pequeño detrás de las puertas</h2>
                    <p class="kicker">La comunidad cerrada más grande de EE. UU.: 26,000 acres, unos 17,000 residentes, fundada en 1970.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>El Village</h3>
                        <p>Dentro de las puertas hay 11 lagos, dos marinas de servicio completo, dos playas para nadar, 30 millas de senderos para caminar y andar en bici, un centro de tenis de 13 canchas, un centro de pickleball de 14 canchas, un gimnasio con piscina techada y más de 200 clubes y organizaciones. Las calles llevan nombres de exploradores españoles, y todo el lugar va a un ritmo más lento que la ciudad.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>Los lagos</h3>
                        <p>El golf se lleva la atención, pero los lagos son el otro gran tesoro del Village. El lago Balboa es el más grande, con marina, rampa para botes y playa. Los lagos Coronado, Cortez y DeSoto son los otros nombres grandes: todos ofrecen pesca, paseos en bote, natación y deportes acuáticos, y los lagos están sembrados de lobina y crappie.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>Senderos y calma</h3>
                        <p>Treinta millas de senderos para caminar y andar en bici serpentean entre los pinos. No hay vida nocturna dentro del Village: las noches son para el porche, la parrilla y el lago. Si quieres restaurantes y bares, el centro de Hot Springs está a 20 minutos en carro.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="golf">
            <div class="wrap">
                <h2>El golf: 9 campos, 171 hoyos</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Los campos</h4>
                    <p>Los nombres más conocidos son Balboa, DeSoto, Cortez, Granada, Isabella y Ponce de Leon: campos de campeonato y campos ejecutivos más cortos, cada uno con su carácter. El club privado Diamante Country Club es solo para socios y no está abierto al público.</p>
                </div>
                <div class="principle">
                    <h4>Reserva con tiempo</h4>
                    <p>Las horas de salida en los campos más populares se llenan, sobre todo los fines de semana y en primavera y otoño, que son las mejores estaciones para jugar. Los demás campos por lo general permiten jugar al público como invitado, con tarifa de invitado, pero las reglas pueden cambiar según el campo y la temporada: llama siempre antes.</p>
                </div>
                <div class="principle">
                    <h4>Juega más de un campo</h4>
                    <p>Ese es todo el punto del Village. Dos o tres campos distintos en un fin de semana te dan una idea real del lugar. Son campos de verdad, con colinas y árboles, no pistas planas de resort: golf hermoso y algunos hoyos exigentes.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="stay">
            <div class="wrap">
                <h2>Hospedarse en el Village</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Alquila una casa de vacaciones</h4>
                    <p>Hay cientos de alquileres: casas frente al lago, casas en el campo de golf y cabañas en el bosque. Tu alquiler por lo general incluye un pase de invitado para la puerta y acceso a las amenidades, y muchos incluyen privilegios de golf o tarifas de invitado con descuento. Pregunta al reservar.</p>
                </div>
                <div class="principle">
                    <h4>Necesitas un pase de invitado</h4>
                    <p>Tu anfitrión del alquiler arregla el pase para la puerta. Confírmalo antes de llegar y llévalo siempre contigo: las puertas tienen personal, y lo vas a necesitar cada vez que entres y salgas.</p>
                </div>
                <div class="principle">
                    <h4>Lleva carro y compra antes</h4>
                    <p>El Village cubre 26,000 acres, así que el carro es indispensable. Hay tiendas adentro, pero la compra grande es más fácil en Hot Springs antes de pasar las puertas.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="suits">
            <div class="wrap">
                <h2>Para quién es</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Grupos de golf</h4>
                    <p>Jugar un campo distinto cada día sin manejar a ningún lado: así es el Village en su mejor momento.</p>
                </div>
                <div class="principle">
                    <h4>Familias y grupos</h4>
                    <p>Una casa grande con un lago o un campo de golf afuera, y espacio para estirarse. La comunidad es mayormente de gente mayor, pero no tiene límite de edad: las familias y los visitantes jóvenes son bienvenidos.</p>
                </div>
                <div class="principle">
                    <h4>El que busca calma</h4>
                    <p>Si el centro de Hot Springs y el hipódromo se sienten muy movidos, el Village es la alternativa tranquila. Vale una estadía de por lo menos dos o tres días, con carro y un plan para usar las amenidades.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Cómo combinarlo</h2>
                <p>Combina el Village con la ciudad. Quédate dos o tres noches dentro de las puertas, juega golf en las mañanas, disfruta los lagos en las tardes y maneja a Hot Springs para cenar y ver Bathhouse Row en las noches. O al revés: hospédate en el centro y pasa un día en el Village para una ronda de golf y una tarde en el lago. De cualquier forma, el contraste es el punto: el pueblo histórico de aguas termales abajo, y la comunidad tranquila, verde y llena de golf en las colinas de arriba.</p>
                <div class="bloque-botones">
                    <a href="/es/lakes-and-outdoors-hot-springs" class="btn btn-primario">Lagos y aire libre</a>
                    <a href="/es/where-to-stay-in-hot-springs" class="btn btn-secundario">Dónde dormir</a>
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
