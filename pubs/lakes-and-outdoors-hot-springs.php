<?php
            $meta_title = "Lakes &amp; Outdoors in Hot Springs, Arkansas — Ouachita, Hamilton &amp; Catherine";
            $meta_description = "The lakes of Hot Springs, Arkansas: Lake Ouachita, the largest lake entirely in Arkansas, Lake Hamilton ten minutes from downtown, and Lake Catherine — plus where to swim, boat and fish.";
            $canonical = "https://tiendahotspringsllc.com/lakes-and-outdoors-hot-springs";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/lago_ouachita.webp",
                    "alt" => "Lake Ouachita, clear water and forested shore",
                    "titulo" => "Lake Ouachita",
                    "descripcion" => "The largest lake entirely in Arkansas — and the clearest."
                ],
                [
                    "archivo" => "/images/jardin_garvan.webp",
                    "alt" => "Garvan Woodland Gardens on the shore of Lake Hamilton",
                    "titulo" => "Garvan Woodland Gardens",
                    "descripcion" => "Botanical gardens on the shore of Lake Hamilton."
                ],
                [
                    "archivo" => "/images/sendero_bosque.webp",
                    "alt" => "Forest trail in the Ouachita National Forest",
                    "titulo" => "Trails in the forest",
                    "descripcion" => "The lakes sit inside the Ouachita National Forest."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">The lakes of Hot Springs</h1>

                    <p class="descripcion-corta">
                        Hot Springs sits on the Ouachita River, and the river makes three lakes —
                        Ouachita, Hamilton and Catherine — plus DeGray Lake a short drive away. One is
                        the largest lake entirely in Arkansas, one is ten minutes from downtown, and
                        one is the quiet small one with a state park beach. Here they are.
                    </p>

                    <div class="bloque-botones">
                        <a href="#lakes" class="btn btn-primario">The three lakes</a>
                        <a href="#ouachita" class="btn btn-secundario">Lake Ouachita</a>
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

        <section class="springs" id="lakes">
            <div class="wrap">
                <div class="springs-head">
                    <h2>The three lakes</h2>
                    <p class="kicker">All three lakes are on the Ouachita River — the Tri-Lakes — and each one has a different character.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>Lake Ouachita</h3>
                        <p>40,100 acres — the largest lake entirely in Arkansas — about 15 miles northwest of downtown, surrounded by Ouachita National Forest. The pick for clear water, kayaking and swimming.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>Lake Hamilton &amp; Garvan Woodland Gardens</h3>
                        <p>About 7,200 acres and 18.5 miles long, ten minutes from downtown. Houses, restaurants and docks line the shore, and Garvan Woodland Gardens sits on its shore.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>Lake Catherine State Park</h3>
                        <p>The smallest of the three lakes — 1,940 acres, 11 miles long — with Lake Catherine State Park on its shore: a swim beach, boat rentals and fishing in the woods.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="ouachita">
            <div class="wrap">
                <h2>Lake Ouachita: the big one</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>The biggest lake in Arkansas</h4>
                    <p>40,100 acres, the largest lake entirely in Arkansas, about 15 miles northwest of downtown and surrounded by Ouachita National Forest. Lake Ouachita State Park sits on its shore, with marinas around the lake.</p>
                </div>
                <div class="principle">
                    <h4>The clearest water</h4>
                    <p>Lake Ouachita is known for the clearest water of the three lakes — the pick for kayaking and swimming, with many small islands to explore.</p>
                </div>
                <div class="principle">
                    <h4>Fishing and diving</h4>
                    <p>Largemouth bass fishing, and water clear enough for scuba diving — the lake's two claims for anglers and divers.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="hamilton">
            <div class="wrap">
                <h2>Lake Hamilton: the close one</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Ten minutes from downtown</h4>
                    <p>About 7,200 acres and 18.5 miles long, about ten minutes from downtown — the lake you reach when you only have an afternoon.</p>
                </div>
                <div class="principle">
                    <h4>A lived-in lake</h4>
                    <p>A residential shoreline with houses, restaurants and docks — the lake where people live, eat and keep their boats.</p>
                </div>
                <div class="principle">
                    <h4>Striped bass and boating</h4>
                    <p>Striped bass fishing and boating are the draw here — the closest lake, and the local favorite for a day on a boat.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="catherine">
            <div class="wrap">
                <h2>Lake Catherine: the quiet one</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>The smallest of the three</h4>
                    <p>1,940 acres and 11 miles long — the smallest of the Tri-Lakes, and the quietest of the three.</p>
                </div>
                <div class="principle">
                    <h4>Lake Catherine State Park</h4>
                    <p>The state park on its shore has a swim beach and boat rentals — the easy way to spend a day on this lake without your own boat.</p>
                </div>
                <div class="principle">
                    <h4>Fishing</h4>
                    <p>Bass, crappie and catfish — the lake to pick when fishing is the plan.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>One more lake, and the plan</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>DeGray Lake</h4>
                    <p>13,400 acres, about 30 minutes away, with a resort state park — the fourth lake, for a second lake day.</p>
                </div>
                <div class="principle">
                    <h4>The Tri-Lakes</h4>
                    <p>Ouachita, Hamilton and Catherine are all on the Ouachita River. Pick Ouachita for clear water, Hamilton for close and lively, Catherine for quiet.</p>
                </div>
                <div class="principle">
                    <h4>Fit a lake day into the trip</h4>
                    <p>The lakes fit into the 2-day plan after the baths and the trails — and Lake Hamilton is the quieter place to stay, ten minutes from downtown.</p>
                </div>
                </div>
                <div class="bloque-botones">
                    <a href="/hot-springs-2-day-itinerary" class="btn btn-primario">See the 2-day plan</a>
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
