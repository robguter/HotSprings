<?php
            $meta_title = "Hot Springs LLC — Amazon Recommendations by Niche";
            $meta_description = "Curated Amazon recommendations across three niches: Beauty & Care, Kitchen & Home, and Active Life, Gear & Travel.";
            $canonical = "https://tiendahotspringsllc.com/en/";
            $data_niche ="";

            require_once __DIR__ . '/../header.php';

            // Slider cards: one per niche, linking to its page
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/belleza/belleza_01.webp",
                    "alt" => "Woman resting with a sleep mask",
                    "titulo" => "Beauty & Care",
                    "descripcion" => "Skin, hair and rest: the essentials to look and feel good.",
                    "enlace" => "/en/belleza"
                ],
                [
                    "archivo" => "/images/hogar/hogar_01.webp",
                    "alt" => "Stainless steel cookware set",
                    "titulo" => "Kitchen & Home",
                    "descripcion" => "Kitchen tools and organization that simplify day-to-day life.",
                    "enlace" => "/en/hogar"
                ],
                [
                    "archivo" => "/images/vida/vida_01.webp",
                    "alt" => "Blue travel suitcases",
                    "titulo" => "Active Life, Gear & Travel",
                    "descripcion" => "Gear, fitness and accessories to keep you moving — at home or away.",
                    "enlace" => "/en/vida"
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Amazon Recommendations</span>
                    <h1 class="titulo-principal">Three sources of smart buying decisions</h1>

                    <p class="descripcion-corta">
                        We bring together in one place the products worth your money in
                        <strong>beauty, home and active living</strong>. We sift through the
                        reviews so you only pick the best.
                    </p>

                    <div class="bloque-botones">
                        <a href="/en/belleza" class="btn btn-primario">Explore Beauty & Care</a>
                        <a href="#nichos" class="btn btn-secundario">See all three niches</a>
                    </div>
                </div>
                <div class="carrusel-contenedor">
                    <div class="carrusel-track">
                        <?php foreach ($imagenes_hotsprings as $imagen): ?>
                            <a class="tarjeta-slider" href="<?php echo $imagen['enlace']; ?>">
                                <div class="contenedor-foto">
                                    <img src="<?php echo $imagen['archivo']; ?>" alt="<?php echo $imagen['alt']; ?>">
                                </div>
                                <div class="info-foto">
                                    <h3><?php echo $imagen['titulo']; ?></h3>
                                    <p><?php echo $imagen['descripcion']; ?></p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <!-- Optional buttons to control the slider manually -->
                    <button class="boton-slider prev" onclick="cambiarSlide(-1)">&#10094;</button>
                    <button class="boton-slider next" onclick="cambiarSlide(1)">&#10095;</button>
                </div>

            </div>
        </section>

        <section class="springs" id="nichos">
            <div class="wrap">
                <div class="springs-head">
                    <h2>One standard, three niches to explore</h2>
                    <p class="kicker">Each niche has its own hand-picked selection, reviewed and updated — jump into the one you're looking for.</p>
                </div>
                <div class="spring-paneles">
                    <a href="/en/belleza" class="spring-panel spring-panel--belleza">
                        <h3>Beauty & Care</h3>
                        <p>Skin, hair and daily routines: the essentials to look and feel your best, without overspending.</p>
                        <span class="btn btn-ghost">View products</span>
                    </a>
                    <a href="/en/hogar" class="spring-panel spring-panel--hogar">
                        <h3>Kitchen & Home</h3>
                        <p>Kitchen tools and organization that make everyday life simpler.</p>
                        <span class="btn btn-ghost">View products</span>
                    </a>
                    <a href="/en/vida" class="spring-panel spring-panel--vida">
                        <h3>Active Life, Gear & Travel</h3>
                        <p>Gear, fitness and accessories to keep you moving — at home or away.</p>
                        <span class="btn btn-ghost">View products</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="principios">
            <div class="wrap">
                <h2>How we choose what to recommend</h2>
                <div class="principios-grid">
                    <div class="principio">
                        <h4>Real utility</h4>
                        <p>We prioritize products that solve a concrete everyday problem, not just the best sellers.</p>
                    </div>
                    <div class="principio">
                        <h4>Quality-price balance</h4>
                        <p>We show the price range of each product so you can compare with no surprises.</p>
                    </div>
                    <div class="principio">
                        <h4>Living catalog</h4>
                        <p>We review and refresh each niche's selection on a regular basis.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="disclosure">
            <div class="wrap">
                As an Amazon Associate, Hot Springs LLC earns from qualifying purchases, at no additional cost to you.
            </div>
        </div>

        <?php
      require_once __DIR__ . '/../footer.php';
