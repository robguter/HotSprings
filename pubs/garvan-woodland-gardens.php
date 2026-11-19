<?php
            $meta_title = "Garvan Woodland Gardens — Botanical Garden on Lake Hamilton";
            $meta_description = "Garvan Woodland Gardens: a 210-acre botanical garden on Lake Hamilton — the Anthony Chapel, the Garden of the Pine Wind, the Evans Tree House — 15 minutes from downtown Hot Springs.";
            $canonical = "https://tiendahotspringsllc.com/garvan-woodland-gardens";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/jardin_garvan.webp",
                    "alt" => "Garvan Woodland Gardens in Hot Springs",
                    "titulo" => "The gardens",
                    "descripcion" => "210 acres of botanical garden on a wooded peninsula on Lake Hamilton."
                ],
                [
                    "archivo" => "/images/sendero_bosque.webp",
                    "alt" => "Shaded woodland path in Hot Springs",
                    "titulo" => "Shaded paths",
                    "descripcion" => "Wooded paths, still ponds and lake views around every bend."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">Garvan Woodland Gardens</h1>

                    <p class="descripcion-corta">
                        If you only have time for one quiet, beautiful stop in Hot Springs, make it Garvan
                        Woodland Gardens. This 210-acre botanical garden sits on a wooded peninsula on Lake
                        Hamilton, and it feels like a different world from the busy streets of downtown:
                        shaded paths, still ponds, sculptures tucked between the trees, and views of the lake
                        opening up around every bend. It is run by the University of Arkansas, and it is one
                        of the most loved places in the whole Hot Springs area.
                    </p>

                    <div class="bloque-botones">
                        <a href="#chapel" class="btn btn-primario">Start at the chapel</a>
                        <a href="#seasons" class="btn btn-secundario">Best seasons</a>
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
                    <h2>Start at the Anthony Chapel</h2>
                    <p class="kicker">Free to visit, just outside the garden entrance — a soaring glass-and-wood chapel about 57 feet tall among the pines. Plan on two to three hours here.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>The Garden of the Pine Wind</h3>
                        <p>One of the garden's highlights is the Garden of the Pine Wind, a four-acre Japanese garden with koi ponds, waterfalls, stone bridges, and carefully placed pines. Walk slowly here, watch the koi glide under the bridges, and listen to the water. In spring it fills with color; in fall, the maples turn red and gold.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>The Children's Garden &amp; Tree House</h3>
                        <p>If you are traveling with kids, head for the Children's Garden and its famous tree house — the Bob and Sunny Evans Tree House. A four-story adventure structure built among the trees, with bridges, tunnels, and lookouts, just as much fun for adults as for children.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>What else to see</h3>
                        <p>Beyond those highlights, the gardens reward wandering: a bonsai garden with small, patiently shaped trees; the Perry Wildflower Overlook, with views out over the lake; and sculptures placed along the paths that turn a walk into a kind of treasure hunt. There is also a golf cart tour — ask at the entrance, since cart tickets are sold on site, not online.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="seasons">
            <div class="wrap">
                <h2>Best seasons to visit</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Spring</h4>
                    <p>The showpiece: azaleas, tulips, and dogwoods bloom across the hillsides, and the whole garden feels new again.</p>
                </div>
                <div class="principle">
                    <h4>Summer</h4>
                    <p>Lush and green, with the lake sparkling and the shade of the pines making the heat bearable. Go in the morning if you can.</p>
                </div>
                <div class="principle">
                    <h4>Fall and winter</h4>
                    <p>Fall brings color to the maples and cooler air for long walks. Winter is the quiet season, and the gardens put on a holiday lights display in late November and December that draws crowds from all over Arkansas.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="tips">
            <div class="wrap">
                <h2>Practical tips</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Buy tickets online</h4>
                    <p>It usually saves money over buying at the gate, and it saves time at the entrance on busy days. The gardens are open daily from 10 a.m. to 6 p.m., and closed in January — check the official site for current hours and tickets before you go.</p>
                </div>
                <div class="principle">
                    <h4>Arrive when the gates open</h4>
                    <p>Mornings are cooler, quieter, and better for photos. Allow at least two hours — three is better if you like to stop, sit, and take pictures. Wear comfortable walking shoes and bring water, especially in summer.</p>
                </div>
                <div class="principle">
                    <h4>Dogs welcome</h4>
                    <p>Dogs on a leash are welcome in the gardens, which makes it a good stop if you are traveling with a pet. Check the calendar too: seasonal events, plant sales, and evening light displays can make a good visit even better.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>A good way to fit it in</h2>
                <p>Garvan Woodland Gardens pairs naturally with a lake day. Visit in the morning, then have lunch on Lake Hamilton or rent a boat for the afternoon. It is about a 15-minute drive from downtown Hot Springs, close enough to combine with Bathhouse Row in the same day if you start early. If you are staying near the lake, it may be the easiest major attraction to reach from your door. Slow, green, and genuinely beautiful, Garvan is the calm half of a Hot Springs trip — the perfect balance to the baths, the racetrack, and the rides.</p>
                <div class="bloque-botones">
                    <a href="/lakes-and-outdoors-hot-springs" class="btn btn-primario">Lakes &amp; outdoors</a>
                    <a href="/hot-springs-with-kids" class="btn btn-secundario">Hot Springs with kids</a>
                </div>
            </div>
        </section>

        <div class="disclosure">
            <div class="wrap">
                Some links on this site are affiliate links. If you book through them, Hot Springs LLC may earn a commission at no extra cost to you.
            </div>
        </div>

        <?php
      require_once 'footer.php'; // si tu footer también está separado ?>
