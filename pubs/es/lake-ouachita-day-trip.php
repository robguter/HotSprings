<?php
            $meta_title = "Un día en el lago Ouachita — paseos en bote, natación e islas";
            $meta_description = "El lago Ouachita, el lago más limpio de EE. UU. y el más grande dentro de Arkansas: paseos en bote, kayak, playas para nadar, picnic en las islas y cielos nocturnos oscuros, a 15 millas de Hot Springs.";
            $canonical = "https://tiendahotspringsllc.com/es/lake-ouachita-day-trip";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/lago_ouachita.webp",
                    "alt" => "El lago Ouachita en el Bosque Nacional Ouachita",
                    "titulo" => "El lago",
                    "descripcion" => "Más de 40,000 acres de agua clara en el Bosque Nacional Ouachita."
                ],
                [
                    "archivo" => "/images/sendero_bosque.webp",
                    "alt" => "Sendero en el bosque con vista al lago Ouachita",
                    "titulo" => "Sendero Vista del lago Ouachita",
                    "descripcion" => "Vistas largas sobre el agua desde la orilla sur."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Un día completo en el lago Ouachita</h1>

                    <p class="descripcion-corta">
                        El lago Ouachita es el lago más limpio del país y el lago más grande dentro de
                        Arkansas: más de 40,000 acres de agua clara y azul rodeados por el Bosque Nacional
                        Ouachita, con más de 200 islas. Los locales lo llaman el Caribe de Arkansas, y
                        cuando veas el agua vas a entender por qué. Está a unas 15 millas del centro de
                        Hot Springs, y es la mejor escapada de un día entero desde la ciudad.
                    </p>

                    <div class="bloque-botones">
                        <a href="#morning" class="btn btn-primario">La mañana en el agua</a>
                        <a href="#bring" class="btn btn-secundario">Qué llevar</a>
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

        <section class="springs" id="morning">
            <div class="wrap">
                <div class="springs-head">
                    <h2>La mañana: en el agua</h2>
                    <p class="kicker">Empieza temprano: el lago está más calmado en la mañana y las calas están vacías. El punto de partida más fácil es el parque estatal del lago Ouachita, a unas 15 millas de Hot Springs.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>Paseos en bote</h3>
                        <p>Un pontón es la opción más fácil para familias: estable, amplio y simple de manejar. Recorre el agua abierta y después métete en una cala tranquila a nadar. El lago tiene de 600 a 900 millas de orilla según el nivel del agua, así que nunca se siente lleno cuando te alejas de la marina.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>El sendero Vista</h3>
                        <p>El sendero Vista del lago Ouachita corre por la orilla sur del lago y ofrece vistas largas sobre el agua. Es una buena forma de ver el lago desde arriba sin meterte en un bote, y un descanso en tierra si no estás navegando.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>Pesca</h3>
                        <p>El lago es conocido por la lobina negra, la lobina rayada, el crappie y el bagre. Temprano en la mañana y al final de la tarde son los mejores momentos. Vas a necesitar una licencia de pesca de Arkansas, que puedes comprar en línea antes del viaje.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="midday">
            <div class="wrap">
                <h2>Mediodía: nadar, explorar y comer</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Natación y buceo</h4>
                    <p>El lago tiene cinco playas designadas para nadar, incluida una en el parque estatal, y el agua está suficientemente tibia desde mayo, más tibia en julio y agosto. La claridad también es lo que hace famoso al lago para el buceo: por lo menos 30 sitios designados, con formaciones de roca, un bosque hundido e incluso medusas de agua dulce y esponjas.</p>
                </div>
                <div class="principle">
                    <h4>Kayak y paddleboard</h4>
                    <p>La forma más lenta y cercana de vivir el lago. El sendero acuático Rabbit Tail es un circuito de 8.5 millas para remar, y el de Buckville es una ruta de 5.4 millas: los dos son buenos paseos de medio día con lugares para parar. Quédate en las calas tranquilas en días de viento o fines de semana feriados con mucho tránsito.</p>
                </div>
                <div class="principle">
                    <h4>Picnic en las islas</h4>
                    <p>Todas las islas del lago, menos Bird Island, están abiertas para acampar en forma primitiva y pasar el día, gratis. Hotel Island es la más popular, con arena suave, cuevas naturales y una orilla intacta: llega temprano si quieres un lugar tranquilo.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="bring">
            <div class="wrap">
                <h2>Qué llevar</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Sol, agua y una hielera</h4>
                    <p>Protector solar, sombreros y mucha agua: hay muy poca sombra en el agua abierta. Empaca una hielera con comida y bebidas: hay pocos lugares para comprar algo cuando te alejas de la marina.</p>
                </div>
                <div class="principle">
                    <h4>Zapatos de agua y bolsa seca</h4>
                    <p>Algunas orillas son rocosas, y los zapatos de agua hacen mucho más fácil entrar y salir de los botes y kayaks. Una bolsa seca mantiene a salvo el teléfono, las llaves y la billetera.</p>
                </div>
                <div class="principle">
                    <h4>Chalecos y licencias</h4>
                    <p>La marina da chalecos salvavidas con los alquileres, y la ley de Arkansas exige llevarlos a bordo. Los niños deben usarlos en todo momento. Lleva licencia de pesca si vas a pescar, y un certificado de seguridad para botes si naciste después de 1985 y vas a manejar un bote de motor.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="careful">
            <div class="wrap">
                <h2>Algunas cosas con cuidado</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>El clima cambia rápido</h4>
                    <p>Mira el cielo y vuelve a la orilla si se levanta viento. El viento fuerte puede volver el agua tranquila en agua brava en minutos en un lago grande.</p>
                </div>
                <div class="principle">
                    <h4>Reglas para los botes</h4>
                    <p>Arkansas exige un certificado de seguridad para botes a quienes manejan botes de motor y nacieron después de 1985; los kayaks, las canoas y las tablas de paddle no lo necesitan. Manejar un bote de noche exige luces de navegación adecuadas, así que planea tu regreso.</p>
                </div>
                <div class="principle">
                    <h4>El lago es profundo</h4>
                    <p>La profundidad promedio es de unos 50 pies y la máxima es de más de 400 pies: el más profundo de Arkansas. Los que no saben nadar deben quedarse en las áreas designadas para nadar y usar chaleco salvavidas. Reserva los alquileres temprano: los botes y kayaks de la marina del parque estatal se van rápido los fines de semana de verano y los feriados.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Cuándo ir</h2>
                <p>De fines de primavera a principios de otoño es la temporada del lago. Mayo y septiembre son los puntos dulces: agua tibia, menos gente y precios más bajos en los alquileres. Julio y agosto son los meses más llenos y más calientes, y también cuando el agua está mejor para nadar. El invierno es tranquilo y hermoso de otra forma, y los paseos del parque estatal para ver águilas calvas hacen que valga una visita con frío. Y el lago está bajo uno de los cielos nocturnos más oscuros de Arkansas, así que si te quedas después del atardecer — acampando en una isla o en el parque estatal — las estrellas son extraordinarias.</p>
                <div class="bloque-botones">
                    <a href="/es/lakes-and-outdoors-hot-springs" class="btn btn-primario">Lagos y aire libre</a>
                    <a href="/es/hot-springs-2-day-itinerary" class="btn btn-secundario">Ver el plan de 2 días</a>
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
