<?php
            $meta_title = "Hot Springs en familia — guía para niños en Arkansas";
            $meta_description = "Hot Springs, Arkansas en familia: el parque Magic Springs, la granja de caimanes, museos interactivos, la torre mirador, los jardines Garvan Woodland y el Grand Promenade.";
            $canonical = "https://tiendahotspringsllc.com/es/hot-springs-with-kids";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/jardin_garvan.webp",
                    "alt" => "Jardines Garvan Woodland y la capilla Anthony Chapel",
                    "titulo" => "Garvan Woodland Gardens",
                    "descripcion" => "Jardines junto al Lake Hamilton, con una capilla de vidrio en el bosque."
                ],
                [
                    "archivo" => "/images/torre_mirador.webp",
                    "alt" => "La torre mirador de Hot Springs Mountain sobre la ciudad",
                    "titulo" => "Hot Springs Mountain Tower",
                    "descripcion" => "Sube en el elevador y mira las montañas Ouachita."
                ],
                [
                    "archivo" => "/images/paseo_promenade.webp",
                    "alt" => "El paseo de ladrillos Grand Promenade detrás de Bathhouse Row",
                    "titulo" => "The Grand Promenade",
                    "descripcion" => "El paseo tranquilo, bueno con cochecito, detrás de Bathhouse Row."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Hot Springs en familia</h1>

                    <p class="descripcion-corta">
                        Hot Springs es un viaje familiar fácil: un parque de diversiones y un parque
                        acuático en uno, un museo de ciencia, una granja de caimanes donde los niños
                        pueden sostener un caimán bebé, jardines con una capilla de vidrio en el
                        bosque y una torre sobre la ciudad. Aquí está la lista familiar.
                    </p>

                    <div class="bloque-botones">
                        <a href="#icons" class="btn btn-primario">Las paradas grandes</a>
                        <a href="#play" class="btn btn-secundario">Jugar</a>
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

        <section class="springs" id="icons">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Las paradas grandes</h2>
                    <p class="kicker">Tres lugares que toda familia termina visitando: la torre, los jardines y el paseo, todos fáciles con niños.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>Hot Springs Mountain Tower</h3>
                        <p>Sube en el elevador y mira las montañas Ouachita: toda la ciudad y los lagos desde un solo punto, y la vista grande más fácil de Hot Springs.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>Garvan Woodland Gardens</h3>
                        <p>Jardines botánicos junto al Lake Hamilton, con la Anthony Chapel, una capilla de vidrio y madera en medio del bosque. Los jardines son una mañana tranquila que los niños sí disfrutan.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>The Grand Promenade</h3>
                        <p>Un paseo de ladrillos detrás de Bathhouse Row: la manera tranquila, buena con cochecito, de recorrer toda la hilera por encima de la calle.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="play">
            <div class="wrap">
                <h2>Jugar</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Magic Springs Theme &amp; Water Park</h4>
                    <p>Un parque de diversiones y un parque acuático en uno, abierto en temporada: la parada de día completo para las familias, con juegos mecánicos y toboganes de agua en la misma entrada.</p>
                </div>
                <div class="principle">
                    <h4>Family Fun Park</h4>
                    <p>Go-karts y carros chocones en 3500 Central Avenue: la parada fácil de la tarde, cuando a los niños todavía les queda energía después de cenar.</p>
                </div>
                <div class="principle">
                    <h4>Mid-America Science Museum</h4>
                    <p>Un museo de ciencia interactivo: una buena parada para los niños, y el plan para un día de lluvia en Hot Springs.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="hands-on">
            <div class="wrap">
                <h2>Para tocar y probar</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Arkansas Alligator Farm &amp; Petting Zoo</h4>
                    <p>En 847 Whittington Avenue, desde 1902: la atracción más vieja de Arkansas. Los niños pueden sostener un caimán bebé, ver los shows de alimentación y visitar el zoológico de contacto con cabras y patos.</p>
                </div>
                <div class="principle">
                    <h4>Mystic Ozark</h4>
                    <p>Un museo para niños dentro de la histórica Ozark Bathhouse, en 425 Central Avenue: una parada pequeña e interactiva en plena Bathhouse Row.</p>
                </div>
                <div class="principle">
                    <h4>Gangster Museum of America</h4>
                    <p>La era de los gánsteres de la ciudad en los años 20 y 30 — cuando Al Capone visitaba Hot Springs — contada en un solo museo. Mejor para los niños grandes que para los pequeños.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="outside">
            <div class="wrap">
                <h2>Afuera, en familia</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Senderos para toda la familia</h4>
                    <p>El parque tiene 26 millas de senderos, y los perros con correa son bienvenidos: trae a toda la familia, incluido el perro, para una caminata fácil en la mañana.</p>
                </div>
                <div class="principle">
                    <h4>El día a los lagos</h4>
                    <p>El verano es temporada de lagos: el Lake Hamilton está a diez minutos del centro, y el Lake Ouachita es la elección para nadar y remar en kayak. Mira nuestra guía de lagos para elegir.</p>
                </div>
                </div>
                <div class="bloque-botones">
                    <a href="/es/lakes-and-outdoors-hot-springs" class="btn btn-primario">Ver la guía de lagos</a>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>El día familiar dentro del viaje</h2>
                <p>Un día en familia cubre la torre, los jardines y la granja de caimanes; después los baños y los lagos llenan el segundo día. El plan completo lo pone todo en orden.</p>
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
