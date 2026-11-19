<?php
            $meta_title = "Senderos del Parque Nacional de Hot Springs — 26 millas de senderos gratis";
            $meta_description = "26 millas de senderos gratis en el Parque Nacional de Hot Springs: el Grand Promenade, Goat Rock, el monte Hot Springs, Gulpha Gorge y el Sunset Trail de 10 millas.";
            $canonical = "https://tiendahotspringsllc.com/es/hiking-trails-hot-springs";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/sendero_bosque.webp",
                    "alt" => "Sendero en el bosque del Parque Nacional de Hot Springs",
                    "titulo" => "Senderos en el bosque",
                    "descripcion" => "26 millas de senderos en las montañas justo detrás del centro."
                ],
                [
                    "archivo" => "/images/paseo_promenade.webp",
                    "alt" => "El paseo Grand Promenade detrás de Bathhouse Row",
                    "titulo" => "Grand Promenade",
                    "descripcion" => "La caminata más fácil del parque: plana, con sombra, media milla."
                ],
                [
                    "archivo" => "/images/torre_mirador.webp",
                    "alt" => "Vista de Hot Springs desde la torre mirador",
                    "titulo" => "Desde la cima",
                    "descripcion" => "La torre del monte Hot Springs: vista de 360 grados sobre los senderos."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">Senderos del parque nacional</h1>

                    <p class="descripcion-corta">
                        El Parque Nacional de Hot Springs es pequeño — el segundo parque nacional más
                        pequeño del país — pero tiene 26 millas de senderos en las montañas justo detrás
                        del centro. Puedes salir de una casa de baños, cruzar la calle y estar en un
                        sendero del bosque en cinco minutos. Los senderos son gratis, están abiertos todo
                        el año y son la mejor forma de ver la otra mitad de Hot Springs: la mitad
                        tranquila, arbolada y de montaña.
                    </p>

                    <div class="bloque-botones">
                        <a href="#easy" class="btn btn-primario">Caminatas fáciles</a>
                        <a href="#long" class="btn btn-secundario">El sendero largo</a>
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

        <section class="springs" id="easy">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Caminatas fáciles</h2>
                    <p class="kicker">Empieza aquí si no eres senderista, o si solo tienes media hora.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>Grand Promenade — 0.5 millas</h3>
                        <p>La caminata más fácil y popular del parque: un paseo pavimentado de ladrillo a lo largo de la ladera, justo detrás de Bathhouse Row. Plano, con sombra, apto para cochecitos y sillas de ruedas, como media hora a paso lento, con vista a las casas de baño y la ciudad.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>Fountain Trail — muy corto</h3>
                        <p>Un sendero corto de conexión cerca del extremo norte del parque, bueno para estirar las piernas entre una parada y otra. Es más un enlace que un destino, pero es una forma fácil de sumarle un poco de bosque a un día en el centro.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>Sendero del monte Hot Springs — 1.7 millas</h3>
                        <p>El circuito clásico del parque rodea la cima del monte Hot Springs, pasando por miradores con vista a la ciudad y las montañas Ouachita. Casi todo suave, con sombra casi todo el camino. Calcula entre una hora y una hora y media. En la cima, la torre mirador ofrece vista de 360 grados: una atracción paga, que vale la pena en un día despejado.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="moderate">
            <div class="wrap">
                <h2>Caminatas moderadas</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Sendero Goat Rock — 1.1 millas</h4>
                    <p>La caminata que más recomiendan los locales cuando pides la mejor vista. El sendero llega a un mirador rocoso en North Mountain, pasando bajo enormes losas de roca novaculita. Calcula entre una hora y una hora y media ida y vuelta. El estacionamiento del mirador es limitado: ve temprano o entre semana.</p>
                </div>
                <div class="principle">
                    <h4>Sendero Gulpha Gorge — 0.6 millas</h4>
                    <p>Que la distancia no te engañe: la primera mitad es empinada, sube rápido fuera de la garganta por un camino de grava, con pendientes de casi 14 por ciento en algunos tramos. La recompensa es una caminata junto al arroyo con cascadas pequeñas y flores silvestres en primavera.</p>
                </div>
                <div class="principle">
                    <h4>Circuito del monte Hot Springs — 3.3 millas</h4>
                    <p>Empieza en el campamento de Gulpha Gorge, sube por el sendero Gulpha Gorge, únete al sendero del monte Hot Springs alrededor de la cima y baja de vuelta. Calcula entre una hora y media y dos horas: la mejor caminata de medio día del parque para la mayoría.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="long">
            <div class="wrap">
                <h2>Los senderos largos</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Sunset Trail — unas 10 millas</h4>
                    <p>El sendero más largo del parque y el único que se siente como una caminata de verdad en el monte. Un día completo — seis a siete horas — por West Mountain y bosque tranquilo, lejos de la gente de Bathhouse Row. Mejor para senderistas con experiencia. No intentes el recorrido completo con el calor de una tarde de verano.</p>
                </div>
                <div class="principle">
                    <h4>Sendero Oertel — 1.4 millas</h4>
                    <p>Un sendero de conexión en el lado norte del parque, de moderado a muy empinado. Sirve para unir puntos de partida, y es buen ejercicio por sí solo: úsalo como parte de una ruta más larga y no como destino.</p>
                </div>
                <div class="principle">
                    <h4>También valen los tramos cortos</h4>
                    <p>Puedes caminar tramos cortos del Sunset Trail: los puntos de partida del oeste dan acceso a los tramos más tranquilos sin comprometerte con todo el circuito. Empieza temprano y lleva más agua de la que crees necesitar.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="bring">
            <div class="wrap">
                <h2>Qué llevar</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Agua</h4>
                    <p>No hay agua para beber en los senderos. Lleva más de la que crees necesitar, sobre todo en verano: por lo menos un litro por persona para una caminata corta, y el doble para cualquier cosa de más de dos horas.</p>
                </div>
                <div class="principle">
                    <h4>Buen calzado y un mapa</h4>
                    <p>Los senderos son rocosos y desparejos. Para el paseo alcanzan las zapatillas; para algo más largo hacen falta botas de senderismo con agarre. Los senderos se cruzan seguido: recoge un mapa de papel en el centro de visitantes Fordyce antes de empezar.</p>
                </div>
                <div class="principle">
                    <h4>Protector solar y repelente</h4>
                    <p>Gran parte de los senderos tiene sombra, pero los miradores y las crestas están expuestos, y los mosquitos están activos de primavera a otoño.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Bueno saberlo antes de caminar</h2>
                <p>Los perros son bienvenidos en todos los senderos del parque, con correa, y el centro de visitantes Fordyce hasta ofrece un certificado BARK Ranger para los perros visitantes. Los venados son comunes y a veces se ven osos negros: haz ruido al caminar, guarda la comida bien cerrada y nunca te acerques a los animales. Los senderos están abiertos todo el año; el mejor clima para caminar es de marzo a mayo y de septiembre a noviembre. Empieza en el Fordyce: recoge un mapa, pregunta a un guardaparques por las condiciones, usa el baño y sal por la puerta de atrás directo al paseo.</p>
                <div class="bloque-botones">
                    <a href="/es/things-to-do-in-hot-springs" class="btn btn-primario">Ver qué hacer</a>
                    <a href="/es/budget-guide-free-things-hot-springs" class="btn btn-secundario">Hot Springs con poco presupuesto</a>
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
