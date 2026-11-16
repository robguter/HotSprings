<?php
            $meta_title = "Los mejores restaurantes de Hot Springs, Arkansas — dónde comer";
            $meta_description = "Dónde comer en Hot Springs, Arkansas: barbacoa en McClard's desde 1928, el Ohio Club en Central Avenue, cerveza con agua termal en Superior Bathhouse Brewery y más.";
            $canonical = "https://tiendahotspringsllc.com/es/best-restaurants-in-hot-springs";
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
                    "descripcion" => "El centro de Hot Springs, donde están casi todos los restaurantes."
                ],
                [
                    "archivo" => "/images/paseo_promenade.webp",
                    "alt" => "El paseo Grand Promenade detrás de Bathhouse Row",
                    "titulo" => "Bathhouse Row",
                    "descripcion" => "Cena en Bathhouse Row, a pasos del agua termal."
                ],
                [
                    "archivo" => "/images/torre_mirador.webp",
                    "alt" => "Vista de Hot Springs desde la torre mirador",
                    "titulo" => "Cena con vista",
                    "descripcion" => "La ciudad desde arriba: el Arlington mira hacia Bathhouse Row."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Dónde comer en Hot Springs</h1>

                    <p class="descripcion-corta">
                        Hot Springs es un centro pequeño, y casi todas sus mejores mesas están a unas
                        pocas cuadras de Bathhouse Row y Central Avenue. Barbacoa desde 1928, el bar
                        más viejo de Arkansas, una cervecería dentro de una casa de baños y el
                        restaurante de un hotel sobre Bathhouse Row: aquí es donde se come.
                    </p>

                    <div class="bloque-botones">
                        <a href="#downtown" class="btn btn-primario">Empieza en el centro</a>
                        <a href="#classics" class="btn btn-secundario">Los clásicos</a>
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

        <section class="springs" id="downtown">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Cena en el centro</h2>
                    <p class="kicker">Casi todas las mesas que valen la pena están en Central Avenue o en la misma Bathhouse Row — todo a pie desde los baños.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/calle_central.webp');">
                        <h3>Central Avenue</h3>
                        <p>El Ohio Club sirve tragos en 336 Central Avenue desde 1905: el bar más viejo de Arkansas. Pide el sándwich Reuben, quédate para la música en vivo y busca la historia de la época de Al Capone. Por la misma calle, Rolando's, The Vault y DeLuca's Pizzeria son los nombres que más escuchan los que visitan por primera vez.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>Bathhouse Row</h3>
                        <p>Superior Bathhouse Brewery está en plena Bathhouse Row — la única cervecería dentro de un parque nacional de EE. UU. — y hace su cerveza con agua termal. Los fines de semana de abril a octubre, reserva con tiempo.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>Cena con vista</h3>
                        <p>El restaurante del Arlington Hotel mira hacia Bathhouse Row desde el hotel en Central Avenue. Igual que Superior, se llena los fines de semana de abril a octubre, así que reserva con tiempo.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="classics">
            <div class="wrap">
                <h2>Los clásicos</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>McClard's Bar-B-Q</h4>
                    <p>Barbacoa de Arkansas en 505 Albert Pike Road, desde 1928. El pedido de la casa es "the spread": barbacoa y tamales en un solo plato, con la salsa de la casa. McClard's no toma reservas, así que llega temprano para el almuerzo.</p>
                </div>
                <div class="principle">
                    <h4>The Ohio Club</h4>
                    <p>Tragos en 336 Central Avenue desde 1905: el bar más viejo de Arkansas. El sándwich Reuben es el pedido, hay música en vivo y la historia de la época de Al Capone es parte del lugar.</p>
                </div>
                <div class="principle">
                    <h4>Superior Bathhouse Brewery</h4>
                    <p>La única cervecería dentro de un parque nacional de EE. UU., en Bathhouse Row, haciendo cerveza con agua termal. Reserva con tiempo los fines de semana de abril a octubre.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="first-visit">
            <div class="wrap">
                <h2>¿Primera visita? Empieza aquí</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Rolando's</h4>
                    <p>Uno de los tres nombres que escucha todo el que visita por primera vez: una primera cena confiable en Hot Springs, recomendada una y otra vez.</p>
                </div>
                <div class="principle">
                    <h4>The Vault</h4>
                    <p>Otro favorito de primera visita, recomendado una y otra vez: el lugar para elegir cuando quieres una cena buena y segura la primera noche.</p>
                </div>
                <div class="principle">
                    <h4>DeLuca's Pizzeria</h4>
                    <p>El tercer nombre en la lista de todo primerizo: pizza, y una de las paradas más recomendadas para una primera visita.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="tips">
            <div class="wrap">
                <h2>Bueno saberlo antes de cenar</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Reserva los fines de semana</h4>
                    <p>Se recomienda reservar en Superior Bathhouse Brewery y en The Arlington los fines de semana de abril a octubre.</p>
                </div>
                <div class="principle">
                    <h4>McClard's no toma reservas</h4>
                    <p>En McClard's no se reserva: llega temprano para el almuerzo, sobre todo los fines de semana, o espera fila.</p>
                </div>
                <div class="principle">
                    <h4>Hospédate en el centro y camina</h4>
                    <p>Hospédate sobre Central Avenue cerca de Bathhouse Row y camina a los baños, al parque y a cenar: los restaurantes son parte del paseo de la noche, no un viaje en carro.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>La cena dentro del viaje</h2>
                <p>Cena en el centro después de los baños y después camina el paseo. El plan completo pone las comidas en orden con los baños, los senderos y los lagos.</p>
                <div class="bloque-botones">
                    <a href="/es/things-to-do-in-hot-springs" class="btn btn-primario">Ver qué hacer</a>
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
