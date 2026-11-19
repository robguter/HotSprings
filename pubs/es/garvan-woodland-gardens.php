<?php
            $meta_title = "Garvan Woodland Gardens — jardín botánico en el lago Hamilton";
            $meta_description = "Garvan Woodland Gardens: un jardín botánico de 210 acres en el lago Hamilton — la capilla Anthony, el Jardín del Viento del Pino, la casa del árbol Evans — a 15 minutos del centro de Hot Springs.";
            $canonical = "https://tiendahotspringsllc.com/es/garvan-woodland-gardens";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/jardin_garvan.webp",
                    "alt" => "Garvan Woodland Gardens en Hot Springs",
                    "titulo" => "Los jardines",
                    "descripcion" => "210 acres de jardín botánico en una península arbolada del lago Hamilton."
                ],
                [
                    "archivo" => "/images/sendero_bosque.webp",
                    "alt" => "Sendero arbolado con sombra en Hot Springs",
                    "titulo" => "Senderos con sombra",
                    "descripcion" => "Senderos arbolados, estanques tranquilos y vistas al lago en cada curva."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Garvan Woodland Gardens</h1>

                    <p class="descripcion-corta">
                        Si solo tienes tiempo para una parada tranquila y hermosa en Hot Springs, que sea
                        Garvan Woodland Gardens. Este jardín botánico de 210 acres está en una península
                        arbolada del lago Hamilton, y se siente como otro mundo comparado con las calles
                        del centro: senderos con sombra, estanques quietos, esculturas entre los árboles
                        y vistas al lago que se abren en cada curva. Lo maneja la Universidad de Arkansas,
                        y es uno de los lugares más queridos de toda la zona de Hot Springs.
                    </p>

                    <div class="bloque-botones">
                        <a href="#chapel" class="btn btn-primario">Empieza en la capilla</a>
                        <a href="#seasons" class="btn btn-secundario">Mejores estaciones</a>
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

        <section class="springs" id="chapel">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Empieza en la capilla Anthony</h2>
                    <p class="kicker">Gratis, justo afuera de la entrada del jardín: una capilla de vidrio y madera de unos 57 pies de alto entre los pinos. Reserva dos a tres horas aquí.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>El Jardín del Viento del Pino</h3>
                        <p>Uno de los puntos altos del jardín es el Jardín del Viento del Pino, un jardín japonés de cuatro acres con estanques de peces koi, cascadas, puentes de piedra y pinos colocados con cuidado. Camina despacio, mira los koi deslizarse bajo los puentes y escucha el agua. En primavera se llena de color; en otoño, los arces se vuelven rojos y dorados.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>El jardín infantil y la casa del árbol</h3>
                        <p>Si viajas con niños, ve al jardín infantil y su famosa casa del árbol: la casa del árbol de Bob y Sunny Evans. Una estructura de aventura de cuatro pisos construida entre los árboles, con puentes, túneles y miradores, tan divertida para los adultos como para los niños.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>Qué más ver</h3>
                        <p>Más allá de esos puntos altos, los jardines premian al que camina sin prisa: un jardín de bonsáis con arbolitos formados con paciencia; el mirador Perry Wildflower, con vista al lago; y esculturas en los senderos que convierten el paseo en una búsqueda del tesoro. También hay un tour en carrito de golf: pregunta en la entrada, porque los boletos del carrito se venden en el lugar, no en línea.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="seasons">
            <div class="wrap">
                <h2>Mejores estaciones para visitar</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Primavera</h4>
                    <p>La gran muestra: azaleas, tulipanes y cornejos florecen por las laderas, y todo el jardín se siente nuevo otra vez.</p>
                </div>
                <div class="principle">
                    <h4>Verano</h4>
                    <p>Verde y frondoso, con el lago brillando y la sombra de los pinos haciendo el calor aguantable. Ve en la mañana si puedes.</p>
                </div>
                <div class="principle">
                    <h4>Otoño e invierno</h4>
                    <p>El otoño trae color a los arces y aire más fresco para caminatas largas. El invierno es la estación tranquila, y los jardines ponen una muestra de luces festivas a fines de noviembre y en diciembre que atrae gente de todo Arkansas.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="tips">
            <div class="wrap">
                <h2>Consejos prácticos</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Compra los boletos en línea</h4>
                    <p>Por lo general sale más barato que comprar en la puerta, y ahorra tiempo en la entrada en los días de más gente. Los jardines abren todos los días de 10 a. m. a 6 p. m. y cierran en enero: revisa el sitio oficial para los horarios y boletos actuales antes de ir.</p>
                </div>
                <div class="principle">
                    <h4>Llega cuando abren</h4>
                    <p>Las mañanas son más frescas, más tranquilas y mejores para las fotos. Reserva por lo menos dos horas: tres es mejor si te gusta parar, sentarte y tomar fotos. Usa zapatos cómodos y lleva agua, sobre todo en verano.</p>
                </div>
                <div class="principle">
                    <h4>Perros bienvenidos</h4>
                    <p>Los perros con correa son bienvenidos en los jardines, lo que lo hace buena parada si viajas con mascota. Revisa también el calendario: eventos de temporada, ventas de plantas y muestras de luces en la noche pueden hacer una buena visita aún mejor.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Cómo combinarlo</h2>
                <p>Garvan Woodland Gardens combina natural con un día en el lago. Visítalo en la mañana y después almuerza en el lago Hamilton o alquila un bote para la tarde. Está a unos 15 minutos en carro del centro de Hot Springs, lo suficientemente cerca para combinarlo con Bathhouse Row el mismo día si empiezas temprano. Si te hospedas cerca del lago, puede ser la atracción grande más fácil de llegar desde tu puerta. Lento, verde y de verdad hermoso, Garvan es la mitad tranquila del viaje a Hot Springs: el equilibrio perfecto para los baños, el hipódromo y los juegos.</p>
                <div class="bloque-botones">
                    <a href="/es/lakes-and-outdoors-hot-springs" class="btn btn-primario">Lagos y aire libre</a>
                    <a href="/es/hot-springs-with-kids" class="btn btn-secundario">Hot Springs en familia</a>
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
