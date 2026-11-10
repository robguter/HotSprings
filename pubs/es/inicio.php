<?php
            $meta_title = "Hot Springs, Arkansas — Guía de viaje: baños termales, hoteles y lagos";
            $meta_description = "Planea tu viaje a Hot Springs, Arkansas: sumérgete en las históricas casas de baños de Bathhouse Row, explora Hot Springs National Park y pasa un día en el Lake Hamilton o el Lake Ouachita.";
            $canonical = "https://tiendahotspringsllc.com/es/";
            $is_spanish = true;
            $tiene_traduccion = true;
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Carousel cards: real Hot Springs photos already on the site, no links yet —
            // the guides they will point to arrive in week 2 of the plan.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/spa_relax.webp",
                    "alt" => "Sesión de spa y masaje",
                    "titulo" => "Casas de baños y spas",
                    "descripcion" => "Sumérgete en una histórica casa de baños en Bathhouse Row."
                ],
                [
                    "archivo" => "/images/piscina_termal.webp",
                    "alt" => "Piscina termal al aire libre con vapor elevándose",
                    "titulo" => "Aguas termales",
                    "descripcion" => "Agua caliente natural, directa de la montaña."
                ],
                [
                    "archivo" => "/images/entorno_natural.webp",
                    "alt" => "Paisaje natural alrededor de Hot Springs",
                    "titulo" => "Parque nacional y lagos",
                    "descripcion" => "Senderos, montañas y lagos de aguas claras por todos lados."
                ],
            ];
            ?>
        <section class="hero hero--video">
            <video class="hero-bg" autoplay muted loop playsinline preload="auto" poster="/images/piscina_termal.webp">
                <source src="/images/video-portada.webm" type="video/webm">
                <source src="/images/video-portada.mp4" type="video/mp4">
            </video>
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Guía de viaje</span>
                    <h1 class="titulo-principal">El primer balneario de Estados Unidos, todavía humeante</h1>

                    <p class="descripcion-corta">
                        Hot Springs National Park recibió <strong>2,5 millones de visitas en 2025</strong>.
                        Ven por el agua termal de Bathhouse Row, quédate por los senderos,
                        los lagos y el pequeño centro que los rodea. Aquí te contamos cómo planear el viaje.
                    </p>

                    <div class="bloque-botones">
                        <a href="#guias" class="btn btn-primario">Planea tu visita</a>
                        <a href="#plan" class="btn btn-secundario">Ver el plan de 2 días</a>
                    </div>
                </div>

            </div>
        </section>

        <section class="springs" id="guias">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Empieza por el agua. Lo demás viene solo.</h2>
                    <p class="kicker">Las guías completas — dónde hospedarse, qué reservar y qué ofrece cada casa de baños — están en camino. Empieza por las tres cosas que hacen diferente a Hot Springs.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/piscina_termal.webp');">
                        <h3>Las aguas termales</h3>
                        <p>El agua caliente sale de la montaña en el corazón de la ciudad. No hay piscinas termales al aire libre en el parque: la manera de sumergirse es dentro de una casa de baños.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/spa_relax.webp');">
                        <h3>Casas de baños y spas</h3>
                        <p>Ocho históricas casas de baños bordean Bathhouse Row. Empieza en la Fordyce Bathhouse — hoy el centro de visitantes y museo del parque — y después recorre la hilera y el Grand Promenade que está detrás.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/entorno_natural.webp');">
                        <h3>Parque nacional y senderos</h3>
                        <p>El parque está dentro de la ciudad, con 26 millas de senderos entre las montañas Ouachita: la visita es gratis y los perros con correa son bienvenidos en los senderos.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Planea tu viaje en tres pasos</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Dónde hospedarse</h4>
                    <p>Hospédate en el centro, sobre Central Avenue cerca de Bathhouse Row, y camina a los baños, al parque y a cenar. Lake Hamilton, a diez minutos del centro, es la opción más tranquila junto al lago.</p>
                </div>
                <div class="principle">
                    <h4>Los lagos</h4>
                    <p>Lake Hamilton es el lago cercano y animado para pasear en bote. Lake Ouachita — el lago más grande de Arkansas, famoso por sus aguas claras — es la elección para kayak, natación y un día completo de lago.</p>
                </div>
                <div class="principle">
                    <h4>Dos días, ya resuelto</h4>
                    <p>Viene un itinerario completo de 2 días: baños, senderos, lagos, dónde comer y cuánto cuesta cada parada. También estará disponible como guía descargable.</p>
                </div>
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
