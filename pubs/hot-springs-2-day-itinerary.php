<?php
            $meta_title = "What to Do in Hot Springs in 2 Days: The Perfect Weekend Itinerary";
            $meta_description = "A 2-day Hot Springs, Arkansas itinerary: Day 1 on Bathhouse Row with the thermal baths, Day 2 at Garvan Woodland Gardens, the Anthony Chapel and Lake Hamilton — with an hour-by-hour plan.";
            $canonical = "https://tiendahotspringsllc.com/hot-springs-2-day-itinerary";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "images/spa_relax.webp",
                    "alt" => "Spa and massage session",
                    "titulo" => "Day 1 — Bathhouse Row",
                    "descripcion" => "The thermal baths and the historic row."
                ],
                [
                    "archivo" => "images/entorno_natural.webp",
                    "alt" => "Natural landscape around Hot Springs",
                    "titulo" => "Day 2 — Gardens & Lake",
                    "descripcion" => "Garvan Gardens, the chapel and Lake Hamilton."
                ],
                [
                    "archivo" => "images/piscina_termal.webp",
                    "alt" => "Outdoor thermal pool with steam rising",
                    "titulo" => "Thermal Water",
                    "descripcion" => "Hot spring water, straight from the mountain."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">What to do in Hot Springs in 2 days</h1>

                    <p class="descripcion-corta">
                        Two days is the classic Hot Springs trip — and it is enough, if the order is right.
                        <strong>Day 1 is Bathhouse Row and the thermal baths. Day 2 is Garvan Woodland Gardens,
                        the chapel and the lake.</strong> Here is the weekend, hour by hour.
                    </p>

                    <div class="bloque-botones">
                        <a href="#day1" class="btn btn-primario">Day 1 — the baths</a>
                        <a href="#day2" class="btn btn-secundario">Day 2 — gardens &amp; lake</a>
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

        <section class="springs" id="day1">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Day 1 — Bathhouse Row and the thermal baths</h2>
                    <p class="kicker">Start with the reason the town exists: the hot water, the row of bathhouses it built, and a long soak to finish the afternoon.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.5), rgba(120, 54, 43, 0.6)), url('images/spa_relax.webp');">
                        <h3>Understand it first: the Fordyce</h3>
                        <p>Begin at the Fordyce Bathhouse Visitor Center and Museum (free, 369 Central Ave) to understand how the springs made this town. Then walk Bathhouse Row — eight historic bathhouses built between 1892 and 1923 — and the Grand Promenade behind it.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.5), rgba(31, 89, 81, 0.6)), url('images/piscina_termal.webp');">
                        <h3>Then soak</h3>
                        <p>Choose your ritual: the Buckstaff, operating since 1912, for the traditional private-tub bath, or Quapaw Baths and Spa for modern thermal pools. On the way, fill a jug at one of the hot-water jug fountains — the locals do.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.5), rgba(169, 106, 30, 0.6)), url('images/spa_relax.webp');">
                        <h3>Dinner on Central Avenue</h3>
                        <p>Finish with dinner on Central Avenue and a drink at Superior Bathhouse Brewery — the brewery inside the national park that brews its beer with thermal water.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- VIATOR LINK: Day 1 tours — insert after approval -->

        <section class="springs" id="day2">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Day 2 — Gardens, chapel and the lake</h2>
                    <p class="kicker">Day 2 trades steam for shade and open water: the gardens in the morning light, the lake for the afternoon.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.5), rgba(31, 89, 81, 0.6)), url('images/entorno_natural.webp');">
                        <h3>Garvan Woodland Gardens</h3>
                        <p>Morning at Garvan Woodland Gardens (550 Arkridge Rd) — 210 acres of gardens on Lake Hamilton. Go early, and see the Anthony Chapel in the quiet light before the crowds.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.5), rgba(169, 106, 30, 0.6)), url('images/entorno_natural.webp');">
                        <h3>Afternoon on Lake Hamilton</h3>
                        <p>Rent a boat, take a duck tour, or keep it simple with a long lakeside lunch. The lake is the second half of the Hot Springs trip — do not skip it for more downtown.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.5), rgba(120, 54, 43, 0.6)), url('images/entorno_natural.webp');">
                        <h3>If energy remains</h3>
                        <p>Add one: Oaklawn racing or the casino, Magic Springs Theme and Water Park (1701 E Grand Ave) if you are traveling with kids, or Hot Springs Mountain Tower for the view before you leave.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- VIATOR LINK: Day 2 tours — insert after approval -->

        <section class="principles" id="schedule1">
            <div class="wrap">
                <h2>Day 1, hour by hour</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>8:00 am</h4>
                    <p>Breakfast on Central Avenue. Arrive early — Bathhouse Row fills up.</p>
                </div>
                <div class="principle">
                    <h4>9:00 am</h4>
                    <p>Fordyce Bathhouse Visitor Center (free). Map and context for the day.</p>
                </div>
                <div class="principle">
                    <h4>11:00 am</h4>
                    <p>Walk Bathhouse Row, then the Grand Promenade behind it.</p>
                </div>
                <div class="principle">
                    <h4>1:00 pm</h4>
                    <p>Lunch downtown.</p>
                </div>
                <div class="principle">
                    <h4>3:00 pm</h4>
                    <p>The thermal soak: Buckstaff for the traditional ritual, or Quapaw for the modern pools. Go early — the soak is the stop everyone wants.</p>
                </div>
                <div class="principle">
                    <h4>6:00 pm</h4>
                    <p>Dinner on Central Avenue, and a thermal-water beer at Superior Bathhouse Brewery.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="schedule2">
            <div class="wrap">
                <h2>Day 2, hour by hour</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>8:00 am</h4>
                    <p>Leave for Garvan Woodland Gardens — about 20 minutes by car.</p>
                </div>
                <div class="principle">
                    <h4>9:00 am</h4>
                    <p>Garvan Gardens: the trails, the Asian garden and the Anthony Chapel, early and quiet.</p>
                </div>
                <div class="principle">
                    <h4>11:00 am</h4>
                    <p>Head back toward the lake. Coffee or brunch near Lake Hamilton.</p>
                </div>
                <div class="principle">
                    <h4>1:00 pm</h4>
                    <p>Lake Hamilton: a boat rental, a duck tour, or lunch by the water.</p>
                </div>
                <div class="principle">
                    <h4>3:00 pm</h4>
                    <p>Pick your option: Magic Springs with the family, Oaklawn for the adults, or the Mountain Tower for the view.</p>
                </div>
                <div class="principle">
                    <h4>6:00 pm</h4>
                    <p>Sunset on Lake Hamilton, and a farewell dinner.</p>
                </div>
                </div>
            </div>
        </section>
        <!-- BOOKING LINK: Stay one more night — insert after approval -->

        <section class="springs" id="full-guide">
            <div class="wrap">
                <div class="springs-head">
                    <h2>The full itinerary is coming as a downloadable guide</h2>
                    <p class="kicker">This page is the weekend in order. The complete downloadable version adds what a web page cannot carry in your pocket: the reservation order (what to book first — hotel, thermal bath, tours — and what to leave open), a rain plan, a plan for traveling with kids, a race-weekend plan for Oaklawn, parking tips for downtown and a thermal-trip packing list. Same itinerary, fully ordered, ready to travel with.</p>
                </div>
            </div>
        </section>

        <section class="principles" id="planning">
            <div class="wrap">
                <h2>Keep planning</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Where to stay</h4>
                    <p>The three areas compared — downtown, the lake, or Central Avenue.</p>
                    <p><a href="https://tiendahotspringsllc.com/where-to-stay-in-hot-springs">Where to Stay in Hot Springs</a></p>
                </div>
                <div class="principle">
                    <h4>Things to do</h4>
                    <p>The full list: baths, trails, lakes and more.</p>
                    <p><a href="https://tiendahotspringsllc.com/things-to-do-in-hot-springs">Things to Do in Hot Springs</a></p>
                </div>
                <div class="principle">
                    <h4>Start from the top</h4>
                    <p>The Hot Springs travel guide home page.</p>
                    <p><a href="https://tiendahotspringsllc.com/">Hot Springs, Arkansas — Travel Guide</a></p>
                </div>
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
