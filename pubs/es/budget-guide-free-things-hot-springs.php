<?php
            $meta_title = "Guía de presupuesto y cosas gratis en Hot Springs, Arkansas";
            $meta_description = "Hot Springs con poco presupuesto: el parque nacional es gratis — 43 km de senderos, el museo Fordyce, las fuentes de agua termal — además de comida y hospedaje baratos y los gustos que valen la pena.";
            $canonical = "https://tiendahotspringsllc.com/es/budget-guide-free-things-hot-springs";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/paseo_promenade.webp",
                    "alt" => "El paseo Grand Promenade detrás de Bathhouse Row",
                    "titulo" => "El Grand Promenade",
                    "descripcion" => "Gratis, con sombra y hermoso: el paseo de ladrillo de media milla detrás de Bathhouse Row."
                ],
                [
                    "archivo" => "/images/calle_central.webp",
                    "alt" => "Central Avenue en el centro de Hot Springs",
                    "titulo" => "El centro, gratis",
                    "descripcion" => "Caminar Bathhouse Row y Central Avenue no cuesta nada."
                ],
                [
                    "archivo" => "/images/torre_mirador.webp",
                    "alt" => "Vista de Hot Springs desde la torre mirador",
                    "titulo" => "Vale la pena pagar",
                    "descripcion" => "La vista desde la torre: el único mirador pago que vale la pena en un día despejado."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Hot Springs con poco presupuesto</h1>

                    <p class="descripcion-corta">
                        Hot Springs es uno de los pueblos de vacaciones más baratos de Estados Unidos, y
                        la razón es simple: lo mejor de aquí — el parque nacional — es gratis. No hay
                        entrada, ni puerta, ni boleto. Puedes pasar un día entero, o un fin de semana
                        completo, en Hot Springs y pagar casi nada si sabes dónde buscar.
                    </p>

                    <div class="bloque-botones">
                        <a href="#free" class="btn btn-primario">Cosas gratis</a>
                        <a href="#stay" class="btn btn-secundario">Dónde dormir barato</a>
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

        <section class="springs" id="free">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Lo mejor es gratis</h2>
                    <p class="kicker">El parque nacional no cobra entrada: ni puerta, ni boleto. Esto es lo que eso te da.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>Senderos y el paseo</h3>
                        <p>Las 26 millas de senderos son gratis: camina el Grand Promenade detrás de Bathhouse Row, sube a Goat Rock por la vista, o pasa un día entero en el Sunset Trail. Nada de eso cuesta un centavo.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/calle_central.webp');">
                        <h3>El museo Fordyce</h3>
                        <p>El edificio más grande de Bathhouse Row hoy es el centro de visitantes del parque y un museo gratis, abierto todos los días de 9 a. m. a 5 p. m. (cerrado el Día de Acción de Gracias, Navidad y Año Nuevo). Tres pisos de salas de baño restauradas, un gimnasio y una sala de música: uno de los mejores museos gratis de Arkansas.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>La vista que vale pagar</h3>
                        <p>La torre del monte Hot Springs es un mirador pago con vista de 360 grados: el mejor panorama del pueblo, y vale la pena una vez, en un día despejado. Todo lo demás en esta guía es gratis.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="outdoors">
            <div class="wrap">
                <h2>Aire libre gratis</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Gulpha Gorge</h4>
                    <p>La garganta junto al arroyo dentro del parque nacional tiene un área gratis para pasar el día, con mesas de picnic, una cascada pequeña y acceso a los senderos. Uno de los lugares gratis más bonitos del pueblo.</p>
                </div>
                <div class="principle">
                    <h4>Lagos Hamilton y Catherine</h4>
                    <p>Los dos lagos tienen accesos públicos gratis y parques donde nadar, pescar, hacer picnic y ver el atardecer. El parque estatal del lago Catherine tiene playa para nadar y senderos.</p>
                </div>
                <div class="principle">
                    <h4>El agua de los manantiales</h4>
                    <p>El parque tiene nueve fuentes públicas en el centro: siete termales y dos de agua fría, Happy Hollow y Whittington Spring, donde puedes llenar una botella o un bidón con agua verdadera de Hot Springs. Lleva tu propio envase. La gente lo hace desde los años 1800.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="eats">
            <div class="wrap">
                <h2>Comer barato</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Picnic</h4>
                    <p>Un picnic en Gulpha Gorge, en el paseo o junto al lago es el almuerzo bueno más barato del pueblo. Empaca sándwiches, fruta y bebidas, y come con vista.</p>
                </div>
                <div class="principle">
                    <h4>Especiales de almuerzo</h4>
                    <p>Muchos restaurantes del centro ofrecen porciones de almuerzo y especiales del día que cuestan mucho menos que la cena. Come fuerte al mediodía y cena liviano.</p>
                </div>
                <div class="principle">
                    <h4>El mercado de productores</h4>
                    <p>El mercado de productores de Hot Springs funciona por temporada en el centro y es buen lugar para comida fresca y barata y antojos locales.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="stay">
            <div class="wrap">
                <h2>Dónde dormir barato</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>El campamento de Gulpha Gorge</h4>
                    <p>El único campamento dentro del Parque Nacional de Hot Springs, con sitios para carpas y casas rodantes en una garganta con bosque. La forma más barata de dormir dentro del parque: reserva con tiempo en temporada alta.</p>
                </div>
                <div class="principle">
                    <h4>Cabañas y moteles fuera del centro</h4>
                    <p>Las carreteras que salen del pueblo hacia los lagos tienen moteles familiares y cabañas en alquiler que cuestan mucho menos que los hoteles históricos de Bathhouse Row, sobre todo entre semana.</p>
                </div>
                <div class="principle">
                    <h4>Quedarse entre semana</h4>
                    <p>Los precios de hotel en Hot Springs bajan mucho entre semana y fuera de la temporada de carreras. Una noche de martes puede costar la mitad de un sábado en fin de semana de carreras.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="worth">
            <div class="wrap">
                <h2>Lo que sí vale pagar</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Un baño en el Quapaw o el Buckstaff</h4>
                    <p>Para eso es Hot Springs. Las piscinas termales públicas del Quapaw son la opción más económica; el baño privado tradicional del Buckstaff es la experiencia clásica. Llega temprano en el día al Buckstaff: solo atiende sin cita.</p>
                </div>
                <div class="principle">
                    <h4>El atardecer desde West Mountain</h4>
                    <p>Sube en carro a West Mountain al final de la tarde para ver el panorama sobre la ciudad y las montañas Ouachita. Uno de los mejores atardeceres de Hot Springs, y no cuesta nada más que la gasolina.</p>
                </div>
                <div class="principle">
                    <h4>Las estrellas en el lago Ouachita</h4>
                    <p>El lago está bajo uno de los cielos nocturnos más oscuros de Arkansas. Sal en una noche despejada y las estrellas son extraordinarias, sin necesidad de telescopio.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Un día gratis de ejemplo</h2>
                <p>Mañana: café y un pastelito en el centro, después el museo Fordyce gratis y una caminata por Bathhouse Row y el Grand Promenade. Mediodía: picnic en Gulpha Gorge y después una caminata por el sendero del monte Hot Springs. Tarde: llena tus botellas en las fuentes, mira las galerías de Central Avenue y ve el atardecer desde West Mountain. Noche: cocina en tu alquiler, o come algo barato y bueno en el centro. Costo total del día: un café, un pastelito y las compras. El parque, el museo, los senderos, el agua y el atardecer fueron gratis.</p>
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
