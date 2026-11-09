<?php
            $meta_title = "Where to Stay in Hot Springs, Arkansas: Best Areas and Hotels";
            $meta_description = "Where to stay in Hot Springs, Arkansas: downtown by Bathhouse Row for first-time visitors, Lake Hamilton for lake days and groups, or Central Avenue near Oaklawn for families and value.";
            $canonical = "https://tiendahotspringsllc.com/where-to-stay-in-hot-springs";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "images/spa_relax.webp",
                    "alt" => "Spa and massage session",
                    "titulo" => "Downtown & Bathhouse Row",
                    "descripcion" => "Wake up steps from the historic bathhouses."
                ],
                [
                    "archivo" => "images/entorno_natural.webp",
                    "alt" => "Natural landscape around Hot Springs",
                    "titulo" => "Lake Hamilton",
                    "descripcion" => "Lakeside homes, condos and sunset docks."
                ],
                [
                    "archivo" => "images/piscina_termal.webp",
                    "alt" => "Outdoor thermal pool with steam rising",
                    "titulo" => "Central Avenue & Oaklawn",
                    "descripcion" => "Family hotels with easy parking and value."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">Where to stay in Hot Springs, Arkansas</h1>

                    <p class="descripcion-corta">
                        <strong>The quick answer:</strong> stay downtown, on or near Bathhouse Row, if it is your
                        first trip and you want to walk everywhere. Stay on Lake Hamilton if the lake is the trip.
                        Stay near Central Avenue and Oaklawn if you are coming with family, for racing, or on a budget.
                    </p>

                    <div class="bloque-botones">
                        <a href="#zones" class="btn btn-primario">Compare the three areas</a>
                        <a href="#choose" class="btn btn-secundario">Choose in 30 seconds</a>
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

        <section class="springs" id="zones">
            <div class="wrap">
                <div class="springs-head">
                    <h2>The three areas, honestly compared</h2>
                    <p class="kicker">Hot Springs is small — the choice is not about distance, it is about how you want the trip to feel: walkable and historic, lakeside and slow, or easy and family-friendly.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.5), rgba(120, 54, 43, 0.6)), url('images/spa_relax.webp');">
                        <h3>1. Downtown &amp; Bathhouse Row — best for first-time visitors</h3>
                        <p>Wake up steps from the historic bathhouses, the Fordyce Visitor Center (369 Central Ave) and the Grand Promenade. The hotels travelers book here include the historic Arlington Resort Hotel and Spa (239 Central Ave), The Waters Hotel on Bathhouse Row (340 Central Ave) and the small Hotel Hale (341 Central Ave), a former bathhouse with soaking tubs in the suites. You will pay more, and parking is tighter — but you may not need your car all weekend.</p>
                    </div>
                    <!-- BOOKING LINK: Downtown hotels — insert after approval -->
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.5), rgba(31, 89, 81, 0.6)), url('images/entorno_natural.webp');">
                        <h3>2. Lake Hamilton — best for lake days and groups</h3>
                        <p>Vacation homes, condos and lakeside stays about 15 to 20 minutes from downtown. This is the pick if you are renting a boat, traveling with a group, or staying three or more nights and want a kitchen and a dock at sunset. Plan to drive downtown for the baths — the lake is the base, not the bathhouse.</p>
                    </div>
                    <!-- BOOKING LINK: Lake Hamilton stays — insert after approval -->
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.5), rgba(169, 106, 30, 0.6)), url('images/piscina_termal.webp');">
                        <h3>3. Central Avenue &amp; Oaklawn — best for families and value</h3>
                        <p>Chain hotels and suites near Oaklawn Racing Casino Resort (2705 Central Ave), Magic Springs and the convention center — for example the Embassy Suites by the convention center (400 Convention Blvd). Easier parking, breakfast included at many properties, and a short drive to Bathhouse Row. For most families, this is the best value per night in town.</p>
                    </div>
                    <!-- BOOKING LINK: Central Ave / family hotels — insert after approval -->
                </div>
            </div>
        </section>

        <section class="principles" id="choose">
            <div class="wrap">
                <h2>How to choose in 30 seconds</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Couples weekend, baths first</h4>
                    <p>Downtown / Bathhouse Row. Walk to the soak, dinner and the promenade — the car stays parked.</p>
                </div>
                <div class="principle">
                    <h4>Boat, group or long stay</h4>
                    <p>Lake Hamilton. Space, a kitchen and the water at the door; downtown is a short drive when you want it.</p>
                </div>
                <div class="principle">
                    <h4>Kids, racing or budget</h4>
                    <p>Central Avenue / Oaklawn area. Easier parking, breakfast included, and the best value per night.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="springs" id="tip">
            <div class="wrap">
                <div class="springs-head">
                    <h2>One booking tip before you reserve</h2>
                    <p class="kicker">Choose free cancellation whenever you can. Hot Springs fills up fast on race weekends, holidays and Garvan Gardens Holiday Lights nights — book early, and keep the option to cancel free if your plans change. Prices move with dates, so always compare live prices for your own dates before you pay.</p>
                </div>
            </div>
        </section>

        <section class="principles" id="planning">
            <div class="wrap">
                <h2>Keep planning</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Things to do</h4>
                    <p>The full list: baths, trails, lakes and more.</p>
                    <p><a href="https://tiendahotspringsllc.com/things-to-do-in-hot-springs">Things to Do in Hot Springs</a></p>
                </div>
                <div class="principle">
                    <h4>The 2-day itinerary</h4>
                    <p>Two days, done right — the weekend in order.</p>
                    <p><a href="https://tiendahotspringsllc.com/hot-springs-2-day-itinerary">What to Do in Hot Springs in 2 Days</a></p>
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
