<?php
            $meta_title = "Things to Do in Hot Springs, Arkansas — Baths, Trails & Lakes";
            $meta_description = "The best things to do in Hot Springs, Arkansas: soak on Bathhouse Row, walk the Grand Promenade, hike 26 miles of national park trails, and spend a day on Lake Hamilton or Lake Ouachita.";
            $canonical = "https://tiendahotspringsllc.com/things-to-do-in-hot-springs";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/entorno_natural.webp",
                    "alt" => "Natural landscape around Hot Springs",
                    "titulo" => "Park, Trails & Lakes",
                    "descripcion" => "Mountains, trails and clear-water lakes all around."
                ],
                [
                    "archivo" => "/images/piscina_termal.webp",
                    "alt" => "Outdoor thermal pool with steam rising",
                    "titulo" => "Thermal Water",
                    "descripcion" => "Hot spring water, straight from the mountain."
                ],
                [
                    "archivo" => "/images/spa_relax.webp",
                    "alt" => "Spa and massage session",
                    "titulo" => "Bathhouse Row",
                    "descripcion" => "Eight historic bathhouses on Central Avenue."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">The best things to do in Hot Springs</h1>

                    <p class="descripcion-corta">
                        Hot Springs National Park welcomed <strong>2.5 million visitors in 2025</strong> — and most of
                        what they came for sits within a few streets of Bathhouse Row. Soak in the thermal
                        water, walk the promenade, climb the tower, then head for the lakes. Here is the list.
                    </p>

                    <div class="bloque-botones">
                        <a href="#classics" class="btn btn-primario">Start with the classics</a>
                        <a href="#lakes" class="btn btn-secundario">Lakes &amp; more</a>
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

        <section class="principles" id="oaklawn">
            <div class="wrap">
                <h2>Horse racing and the casino</h2>
                <p class="kicker">Thoroughbreds have run at Oaklawn since 1904. Today the track sits inside Arkansas's only racing casino resort, a short drive down Central Avenue from Bathhouse Row — and every spring it hosts one of the biggest horse races in the United States.</p>
                <div class="spring-panels" style="grid-template-columns: 1fr;">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/oaklawn.webp');">
                        <h3>Oaklawn Racing Casino Resort</h3>
                        <p>Derby Day at Oaklawn Park: the starting gate, the crowd and the dirt track.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="springs" id="classics">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Start with the water and the Row</h2>
                    <p class="kicker">Bathhouse Row is the heart of Hot Springs: eight historic bathhouses along Central Avenue, built around the thermal springs that gave the city its name.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/spa_relax.webp');">
                        <h3>Bathhouse Row &amp; the Fordyce</h3>
                        <p>Walk the row of eight historic bathhouses on Central Avenue. The Fordyce Bathhouse is now the park visitor center and museum — free to enter, and the best first stop to understand the place.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/piscina_termal.webp');">
                        <h3>Where You Can Still Soak</h3>
                        <p>Of the eight bathhouses, the Buckstaff and the Quapaw are the two where visitors can still soak in the thermal water today.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/entorno_natural.webp');">
                        <h3>The Water Itself</h3>
                        <p>The water emerges at 143°F from 47 hot springs. There are no outdoor soaking pools in the park — soaking happens inside bathhouses and spas. In town, public filling stations let anyone fill jugs with the hot spring water for free.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="springs" id="park">
            <div class="wrap">
                <div class="springs-head">
                    <h2>The park behind the Row</h2>
                    <p class="kicker">The national park wraps around downtown: a promenade behind the bathhouses, a tower above the city and miles of trails in the Ouachita Mountains.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>The Grand Promenade</h3>
                        <p>A brick walkway running behind Bathhouse Row — the quiet way to walk the length of the row, above the street.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>Hot Springs Mountain Tower</h3>
                        <p>An observation tower above the city: ride the elevator up for views over the Ouachita Mountains.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>26 Miles of Trails</h3>
                        <p>The park's hiking trails include the Goat Rock viewpoint and the long Sunset Trail. Dogs on a leash are welcome on the trails.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="lakes">
            <div class="wrap">
                <h2>The lakes and the gardens</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Lake Hamilton</h4>
                    <p>The closest lake, about ten minutes from downtown, and the local favorite for boating.</p>
                </div>
                <div class="principle">
                    <h4>Lake Ouachita</h4>
                    <p>Arkansas's largest lake, famous for its clear water — the pick for kayaking and swimming, with many small islands to explore.</p>
                </div>
                <div class="principle">
                    <h4>Garvan Woodland Gardens</h4>
                    <p>Botanical gardens on Lake Hamilton, known for the Anthony Chapel — a glass-and-wood chapel standing in the woods.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="oaklawn">
            <div class="wrap">
                <h2>Horse racing and the casino</h2>
                <div class="principles-grid">
                    <div class="principle">
                        <h4>The Arkansas Derby</h4>
                        <p>A Grade 1 race with a $1.5 million purse — the final 100-point qualifier for the Kentucky Derby, and one of the most important prep races in the country. The next running is April 10, 2027, and the weekend books out months ahead.</p>
                    </div>
                    <div class="principle">
                        <h4>Live racing season</h4>
                        <p>The 2026–27 season runs November 27, 2026 to May 1, 2027, with the big stakes days — Smarty Jones, Southwest, Rebel, Arkansas Derby — spread across the winter and spring. Check oaklawn.com for the day's card before you go.</p>
                    </div>
                    <div class="principle">
                        <h4>The casino, all year</h4>
                        <p>The smoke-free casino runs 24 hours a day, all year: more than 1,400 slot machines, 30-plus table games and a sportsbook. The Bugler and The OAK room &amp; bar are the only two Forbes Recommended restaurants in Arkansas, and the Astral Spa and hotel are on site, at 2705 Central Avenue. Racing is 18+, casino gaming 21+.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="more">
            <div class="wrap">
                <h2>More ways to fill a day</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>The Gangster Museum of America</h4>
                    <p>The city's 1920s–30s gangster era — when Al Capone visited Hot Springs — told in one museum.</p>
                </div>
                <div class="principle">
                    <h4>Magic Springs</h4>
                    <p>A theme park and water park in one, open in season.</p>
                </div>
                <div class="principle">
                    <h4>Mid-America Science Museum</h4>
                    <p>A hands-on science museum — a good stop for kids.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="tours">
            <div class="wrap">
                <h2>Book the experiences before you go</h2>
                <p>The top-rated Hot Springs experiences — the self-guided National Park audio tour, the small-group zipline and the Hot Springs scavenger hunt — are booked through Viator, most of them with free cancellation.</p>
                <div class="bloque-botones">
                    <a href="https://www.viator.com/Hot-Springs/d50758-ttd?pid=P00331044&mcid=42383&medium=link&campaign=things-to-do" class="btn btn-primario" target="_blank" rel="noopener sponsored">See Hot Springs tours on Viator</a>
                </div>
            </div>
        </section>
        <!-- BOOKING LINK: hotels — insert after Awin/Booking approval -->

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Short on time? Follow the 2-day plan</h2>
                <p>The baths, the trails and the lakes fit neatly into two days. Our step-by-step plan puts them in order.</p>
                <div class="bloque-botones">
                    <a href="https://tiendahotspringsllc.com/#plan" class="btn btn-primario">See the 2-day plan</a>
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
