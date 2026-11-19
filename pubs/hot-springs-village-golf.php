<?php
            $meta_title = "Hot Springs Village & Golf — 9 Courses, 171 Holes in Arkansas";
            $meta_description = "Hot Springs Village: the largest gated community in the U.S. — 26,000 acres, 9 golf courses, 171 holes, 11 lakes, 30 miles of trails, 20 minutes from Hot Springs.";
            $canonical = "https://tiendahotspringsllc.com/hot-springs-village-golf";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/lago_ouachita.webp",
                    "alt" => "Clear lake water in the Ouachita Mountains",
                    "titulo" => "The lakes",
                    "descripcion" => "Eleven lakes inside the gates — fishing, boating, swimming and beaches."
                ],
                [
                    "archivo" => "/images/sendero_bosque.webp",
                    "alt" => "Forest trail in the Ouachita Mountains",
                    "titulo" => "Trails",
                    "descripcion" => "30 miles of hiking and biking trails through the pines."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">Hot Springs Village &amp; golf</h1>

                    <p class="descripcion-corta">
                        About 20 minutes northeast of Hot Springs, behind a set of gates in the Ouachita
                        Mountains, sits one of the most surprising places in Arkansas: Hot Springs Village.
                        The largest gated community in the United States — about 26,000 acres of pine
                        forest, lakes, and golf courses, with around 17,000 residents — and for golfers,
                        one of the best-kept secrets in the South: nine golf courses and 171 holes inside
                        a single community.
                    </p>

                    <div class="bloque-botones">
                        <a href="#golf" class="btn btn-primario">The golf</a>
                        <a href="#stay" class="btn btn-secundario">Staying in the Village</a>
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

        <section class="springs" id="village">
            <div class="wrap">
                <div class="springs-head">
                    <h2>A small world behind the gates</h2>
                    <p class="kicker">The largest gated community in the U.S. — 26,000 acres, about 17,000 residents, founded in 1970.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>The village itself</h3>
                        <p>Inside the gates are 11 lakes, two full-service marinas, two swimming beaches, 30 miles of hiking and biking trails, a 13-court tennis center, a 14-court pickleball facility, a fitness center with an indoor pool, and more than 200 clubs and organizations. The streets are named after Spanish explorers, and the whole place moves at a slower pace than the city down the road.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>The lakes</h3>
                        <p>Golf gets the attention, but the lakes are the Village's other great asset. Lake Balboa is the largest, with a marina, a boat ramp, and a beach. Lake Coronado, Lake Cortez, and Lake DeSoto are the other big names — all of them offer fishing, boating, swimming, and water sports, and the lakes are stocked with bass and crappie.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>Trails and quiet</h3>
                        <p>Thirty miles of hiking and biking trails wind through the pines. There is no nightlife scene inside the Village — evenings are for the porch, the grill, and the lake. If you want restaurants and bars, downtown Hot Springs is a 20-minute drive.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="golf">
            <div class="wrap">
                <h2>The golf: 9 courses, 171 holes</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>The courses</h4>
                    <p>The best-known names are Balboa, DeSoto, Cortez, Granada, Isabella, and Ponce de Leon — championship layouts and shorter executive courses, each with its own character. The private Diamante Country Club is members-only and not open to the public.</p>
                </div>
                <div class="principle">
                    <h4>Book ahead</h4>
                    <p>Tee times at the most popular courses fill up, especially on weekends and in spring and fall, which are the best seasons for golf here. The other courses generally allow public play as a guest, with a guest fee — but access rules can vary by course and by season, so always call ahead.</p>
                </div>
                <div class="principle">
                    <h4>Play more than one course</h4>
                    <p>That is the whole point of the Village. Two or three different courses in a weekend give you a real sense of the place. These are real, hilly, tree-lined courses, not flat resort tracks — beautiful golf and some demanding holes.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="stay">
            <div class="wrap">
                <h2>Staying in the Village</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Rent a vacation home</h4>
                    <p>There are hundreds of rentals — lakefront houses, golf-course homes, and wooded cabins. Your rental typically comes with a guest pass for the gate and access to the amenities, and many include golf privileges or discounted guest rates. Ask when you book.</p>
                </div>
                <div class="principle">
                    <h4>You need a guest pass</h4>
                    <p>Your rental host arranges the gate pass. Confirm it before you arrive, and keep it with you — the gates are staffed, and you will need it every time you come and go.</p>
                </div>
                <div class="principle">
                    <h4>Bring a car, stock up first</h4>
                    <p>The Village covers 26,000 acres, so a car is essential. There are shops inside, but the big grocery run is easier in Hot Springs before you head through the gates.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="suits">
            <div class="wrap">
                <h2>Who it suits</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Golf groups</h4>
                    <p>Play a different course every day without driving anywhere — that is the Village at its best.</p>
                </div>
                <div class="principle">
                    <h4>Families and groups</h4>
                    <p>A big house with a lake or a golf course outside, and space to spread out. The community skews older, but it is not age-restricted — families and younger visitors are welcome.</p>
                </div>
                <div class="principle">
                    <h4>Anyone who wants quiet</h4>
                    <p>If downtown Hot Springs and the racetrack feel too busy, the Village is the calm alternative. It rewards a stay of at least two or three days, with a car and a plan to use the amenities.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>A good way to fit it in</h2>
                <p>Pair the Village with the city. Stay two or three nights inside the gates, play golf in the mornings, enjoy the lakes in the afternoons, and drive into Hot Springs for dinner and Bathhouse Row in the evenings. Or flip it: stay downtown, and spend one day in the Village for a round of golf and a lake afternoon. Either way, the contrast is the point — the historic spa town below, and the quiet, green, golf-filled community in the hills above it.</p>
                <div class="bloque-botones">
                    <a href="/lakes-and-outdoors-hot-springs" class="btn btn-primario">Lakes &amp; outdoors</a>
                    <a href="/where-to-stay-in-hot-springs" class="btn btn-secundario">Where to stay</a>
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
