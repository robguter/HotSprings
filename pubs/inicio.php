<?php
            $meta_title = "Hot Springs, Arkansas — Travel Guide: Baths, Hotels & Lakes - Hot Springs";
            $meta_description = "Plan your trip to Hot Springs, Arkansas: soak in the historic bathhouses on Bathhouse Row, explore Hot Springs National Park, and spend a day on Lake Hamilton or Lake Ouachita.";
            $canonical = "https://tiendahotspringsllc.com/";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site, no links yet —
            // the guides they will point to arrive in week 2 of the plan.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/spa_relax.webp",
                    "alt" => "Spa and massage session",
                    "titulo" => "Bathhouses & Spas",
                    "descripcion" => "Soak in a historic bathhouse on Bathhouse Row."
                ],
                [
                    "archivo" => "/images/piscina_termal.webp",
                    "alt" => "Outdoor thermal pool with steam rising",
                    "titulo" => "Thermal Springs",
                    "descripcion" => "Natural hot water, straight from the mountain."
                ],
                [
                    "archivo" => "/images/entorno_natural.webp",
                    "alt" => "Natural landscape around Hot Springs",
                    "titulo" => "National Park & Lakes",
                    "descripcion" => "Trails, mountains and clear-water lakes all around."
                ],
            ];
            ?>
        <section class="hero hero--video">
            <video class="hero-bg" autoplay muted loop playsinline preload="auto" poster="/images/piscina_termal.webp">
                <source src="/images/video-mejores-sitios.webm" type="video/webm">
                <source src="/images/video-mejores-sitios.mp4" type="video/mp4">
            </video>
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">America's first resort, still steaming</h1>

                    <p class="descripcion-corta">
                        Hot Springs National Park welcomed <strong>2.5 million visitors in 2025</strong>.
                        Come for the thermal water on Bathhouse Row, stay for the trails,
                        the lakes and the small downtown around them. Here is how to plan the trip.
                    </p>

                    <div class="bloque-botones">
                        <a href="#guias" class="btn btn-primario">Plan your visit</a>
                        <a href="#plan" class="btn btn-secundario">See the 2-day plan</a>
                    </div>
                </div>

            </div>
        </section>

        <section class="springs" id="guias">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Start with the water. The rest follows.</h2>
                    <p class="kicker">Full guides — where to stay, what to do, and the 2-day plan — are live below.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/piscina_termal.webp');">
                        <h3>The Thermal Springs</h3>
                        <p>Hot water comes out of the mountain at the heart of the city.
                            There are no outdoor thermal pools in the park — the way to soak is inside a bathhouse.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/spa_relax.webp');">
                        <h3>Bathhouses &amp; Spas</h3>
                        <p>Eight historic bathhouses line Bathhouse Row. Start at the Fordyce Bathhouse — today the park visitor center and museum — then walk the row and the Grand Promenade behind it.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/entorno_natural.webp');">
                        <h3>National Park &amp; Trails</h3>
                        <p>The park sits inside the city, with 26 miles of hiking trails through the Ouachita Mountains — free to visit, and dogs on a leash are welcome on the trails.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="springs" id="mas-guias">
            <div class="wrap">
                <div class="springs-head">
                    <h2>More guides</h2>
                    <p class="kicker">Eleven more guides to plan the trip: where to eat, when to go, the lakes, the family list, budget, trails, the Village, Lake Ouachita, downtown, Oaklawn and Garvan.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/calle_central.webp');">
                        <h3>Restaurants</h3>
                        <p>Barbecue since 1928, the oldest bar in Arkansas and a brewery inside a bathhouse.</p>
                        <div class="bloque-botones">
                            <a href="/best-restaurants-in-hot-springs" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/oaklawn.webp');">
                        <h3>Best Time to Visit</h3>
                        <p>Spring festivals, summer lake season, fall foliage and the winter races.</p>
                        <div class="bloque-botones">
                            <a href="/best-time-to-visit-hot-springs" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>Lakes &amp; Outdoors</h3>
                        <p>Ouachita, Hamilton and Catherine — where to swim, boat and fish.</p>
                        <div class="bloque-botones">
                            <a href="/lakes-and-outdoors-hot-springs" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>With Kids</h3>
                        <p>Theme park, alligator farm, museums and the tower — the family list.</p>
                        <div class="bloque-botones">
                            <a href="/hot-springs-with-kids" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>Budget &amp; Free Things</h3>
                        <p>The park is free — trails, the museum and spring water for almost nothing.</p>
                        <div class="bloque-botones">
                            <a href="/budget-guide-free-things-hot-springs" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>Hiking Trails</h3>
                        <p>26 miles of free trails behind downtown, from the Promenade to the Sunset Trail.</p>
                        <div class="bloque-botones">
                            <a href="/hiking-trails-hot-springs" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>Hot Springs Village</h3>
                        <p>Nine golf courses, 171 holes, 11 lakes and 30 miles of trails behind the gates.</p>
                        <div class="bloque-botones">
                            <a href="/hot-springs-village-golf" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>Lake Ouachita</h3>
                        <p>A full day on the cleanest lake in the country, 15 miles from town.</p>
                        <div class="bloque-botones">
                            <a href="/lake-ouachita-day-trip" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/calle_central.webp');">
                        <h3>Downtown &amp; Central Ave</h3>
                        <p>Bathhouse Row, the Promenade, galleries and the Gangster Museum on foot.</p>
                        <div class="bloque-botones">
                            <a href="/downtown-central-avenue-hot-springs" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/oaklawn.webp');">
                        <h3>Oaklawn</h3>
                        <p>Live racing Nov 27–May 1, the $1.5M Arkansas Derby and a 24-hour casino.</p>
                        <div class="bloque-botones">
                            <a href="/oaklawn-racing-casino" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>Garvan Gardens</h3>
                        <p>210 acres of gardens on Lake Hamilton: the chapel, the Japanese garden, the tree house.</p>
                        <div class="bloque-botones">
                            <a href="/garvan-woodland-gardens" class="btn btn-primario">Read the guide</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Plan your trip in three steps</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Where to stay</h4>
                    <p>Stay downtown, along Central Avenue near Bathhouse Row, and walk to the baths, the park and dinner. Lake Hamilton, ten minutes from downtown, is the quieter lakeside option.</p>
                </div>
                <div class="principle">
                    <h4>The lakes</h4>
                    <p>Lake Hamilton is the close, lively lake for boating. Lake Ouachita — Arkansas's largest lake, famous for its clear water — is the pick for kayaking, swimming and a full lake day.</p>
                </div>
                <div class="principle">
                    <h4>Two days, done for you</h4>
                    <p>A complete 2-day itinerary is live: baths, trails, lakes, where to eat and what each stop costs. It will also be available as a downloadable guide.</p>
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
