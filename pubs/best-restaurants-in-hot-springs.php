<?php
            $meta_title = "Best Restaurants in Hot Springs, Arkansas — Where to Eat";
            $meta_description = "Where to eat in Hot Springs, Arkansas: barbecue at McClard's since 1928, the Ohio Club on Central Avenue, beer brewed with thermal water at Superior Bathhouse Brewery, and more.";
            $canonical = "https://tiendahotspringsllc.com/best-restaurants-in-hot-springs";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/calle_central.webp",
                    "alt" => "Central Avenue in downtown Hot Springs",
                    "titulo" => "Central Avenue",
                    "descripcion" => "Downtown Hot Springs, where most of the restaurants are."
                ],
                [
                    "archivo" => "/images/paseo_promenade.webp",
                    "alt" => "The Grand Promenade walkway behind Bathhouse Row",
                    "titulo" => "Bathhouse Row",
                    "descripcion" => "Dinner on the Row, steps from the thermal water."
                ],
                [
                    "archivo" => "/images/torre_mirador.webp",
                    "alt" => "View over Hot Springs from the Mountain Tower",
                    "titulo" => "Dinner with a view",
                    "descripcion" => "The city from above — the Arlington looks out over the Row."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">Where to eat in Hot Springs</h1>

                    <p class="descripcion-corta">
                        Hot Springs is a small downtown, and most of its best tables sit within a few
                        blocks of Bathhouse Row and Central Avenue. Barbecue that has been going since
                        1928, the oldest bar in Arkansas, a brewery inside a bathhouse, and a hotel
                        dining room above the Row — here is where to eat.
                    </p>

                    <div class="bloque-botones">
                        <a href="#downtown" class="btn btn-primario">Start downtown</a>
                        <a href="#classics" class="btn btn-secundario">The classics</a>
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

        <section class="springs" id="downtown">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Dinner downtown</h2>
                    <p class="kicker">Most of the tables worth knowing are on Central Avenue or on Bathhouse Row itself — all of it walkable from the baths.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/calle_central.webp');">
                        <h3>Central Avenue</h3>
                        <p>The Ohio Club has poured drinks at 336 Central Avenue since 1905 — the oldest bar in Arkansas. Order the Reuben, stay for the live music, and look for the Al Capone-era history. Down the same street, Rolando's, The Vault and DeLuca's Pizzeria are the names first-time visitors hear most.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>Bathhouse Row</h3>
                        <p>Superior Bathhouse Brewery sits right on Bathhouse Row — the only brewery inside a U.S. national park — and brews its beer with thermal spring water. On weekends from April through October, book ahead.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>Dinner with a view</h3>
                        <p>The Arlington Hotel restaurant overlooks Bathhouse Row from the hotel on Central Avenue. Like Superior, it books out on weekends from April through October, so reserve ahead.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="classics">
            <div class="wrap">
                <h2>The classics</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>McClard's Bar-B-Q</h4>
                    <p>Arkansas barbecue at 505 Albert Pike Road, going since 1928. The signature order is "the spread" — barbecue and tamales on one plate, with the house sauce. McClard's takes no reservations, so arrive early for lunch.</p>
                </div>
                <div class="principle">
                    <h4>The Ohio Club</h4>
                    <p>Drinks at 336 Central Avenue since 1905 — the oldest bar in Arkansas. The Reuben sandwich is the order, there is live music, and the Al Capone-era history is part of the room.</p>
                </div>
                <div class="principle">
                    <h4>Superior Bathhouse Brewery</h4>
                    <p>The only brewery inside a U.S. national park, on Bathhouse Row, brewing beer with thermal spring water. Reserve ahead on weekends from April through October.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="first-visit">
            <div class="wrap">
                <h2>First visit? Start here</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Rolando's</h4>
                    <p>One of the three names every first-time visitor hears — a reliable first dinner in Hot Springs, recommended again and again.</p>
                </div>
                <div class="principle">
                    <h4>The Vault</h4>
                    <p>Another first-visit favorite, recommended again and again — the kind of place to pick when you want a safe, good dinner on your first night.</p>
                </div>
                <div class="principle">
                    <h4>DeLuca's Pizzeria</h4>
                    <p>The third name on every first-timer's list — pizza, and one of the most consistently recommended stops for a first visit.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="tips">
            <div class="wrap">
                <h2>Good to know before dinner</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Book ahead on weekends</h4>
                    <p>Reservations are recommended at Superior Bathhouse Brewery and The Arlington on weekends from April through October.</p>
                </div>
                <div class="principle">
                    <h4>McClard's takes no reservations</h4>
                    <p>At McClard's there is no booking — arrive early for lunch, especially on weekends, or expect a line.</p>
                </div>
                <div class="principle">
                    <h4>Stay downtown and walk</h4>
                    <p>Stay along Central Avenue near Bathhouse Row and walk to the baths, the park and dinner — the restaurants are part of the evening walk, not a drive.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Fit dinner into the trip</h2>
                <p>Eat downtown after the baths, then walk the promenade. The full plan puts the meals in order with the baths, the trails and the lakes.</p>
                <div class="bloque-botones">
                    <a href="/things-to-do-in-hot-springs" class="btn btn-primario">See what to do</a>
                    <a href="/hot-springs-2-day-itinerary" class="btn btn-secundario">See the 2-day plan</a>
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
