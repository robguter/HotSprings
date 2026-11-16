<?php
            $meta_title = "Hot Springs with Kids — Family Guide to Arkansas";
            $meta_description = "Hot Springs, Arkansas with kids: Magic Springs theme and water park, the Alligator Farm, hands-on museums, the Mountain Tower, Garvan Woodland Gardens and the Grand Promenade.";
            $canonical = "https://tiendahotspringsllc.com/hot-springs-with-kids";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/jardin_garvan.webp",
                    "alt" => "Garvan Woodland Gardens and the Anthony Chapel",
                    "titulo" => "Garvan Woodland Gardens",
                    "descripcion" => "Gardens on Lake Hamilton, with a glass chapel in the woods."
                ],
                [
                    "archivo" => "/images/torre_mirador.webp",
                    "alt" => "Hot Springs Mountain Tower above the city",
                    "titulo" => "Hot Springs Mountain Tower",
                    "descripcion" => "Ride the elevator up for views over the Ouachita Mountains."
                ],
                [
                    "archivo" => "/images/paseo_promenade.webp",
                    "alt" => "The Grand Promenade brick walkway behind Bathhouse Row",
                    "titulo" => "The Grand Promenade",
                    "descripcion" => "The quiet, stroller-friendly walk behind Bathhouse Row."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">Hot Springs with kids</h1>

                    <p class="descripcion-corta">
                        Hot Springs is an easy family trip: a theme park and water park in one, a
                        science museum, an alligator farm where kids can hold a baby alligator,
                        gardens with a glass chapel in the woods, and a tower above the city.
                        Here is the family list.
                    </p>

                    <div class="bloque-botones">
                        <a href="#icons" class="btn btn-primario">The big stops</a>
                        <a href="#play" class="btn btn-secundario">Play</a>
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

        <section class="springs" id="icons">
            <div class="wrap">
                <div class="springs-head">
                    <h2>The big stops</h2>
                    <p class="kicker">Three places every family ends up visiting: the tower, the gardens and the promenade — all of them easy with kids in tow.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>Hot Springs Mountain Tower</h3>
                        <p>Ride the elevator up for views over the Ouachita Mountains — the whole city and the lakes from one spot, and the easiest big view in Hot Springs.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/jardin_garvan.webp');">
                        <h3>Garvan Woodland Gardens</h3>
                        <p>Botanical gardens on Lake Hamilton, with the Anthony Chapel — a glass-and-wood chapel standing in the woods. The gardens are a slow morning that kids actually enjoy.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>The Grand Promenade</h3>
                        <p>A brick walkway behind Bathhouse Row — the quiet, stroller-friendly way to walk the length of the Row, above the street.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="play">
            <div class="wrap">
                <h2>Play</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Magic Springs Theme &amp; Water Park</h4>
                    <p>A theme park and water park in one, open in season — the full-day stop for families, with rides and water slides in the same ticket.</p>
                </div>
                <div class="principle">
                    <h4>Family Fun Park</h4>
                    <p>Go-karts and bumper cars at 3500 Central Avenue — the easy evening stop when the kids still have energy after dinner.</p>
                </div>
                <div class="principle">
                    <h4>Mid-America Science Museum</h4>
                    <p>A hands-on science museum — a good stop for kids, and the rainy-day plan in Hot Springs.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="hands-on">
            <div class="wrap">
                <h2>Hands-on stops</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Arkansas Alligator Farm &amp; Petting Zoo</h4>
                    <p>At 847 Whittington Avenue, going since 1902 — the oldest attraction in Arkansas. Kids can hold a baby alligator, watch the feeding shows, and visit the petting zoo with goats and ducks.</p>
                </div>
                <div class="principle">
                    <h4>Mystic Ozark</h4>
                    <p>A children's museum inside the historic Ozark Bathhouse, at 425 Central Avenue — a small, hands-on stop right on Bathhouse Row.</p>
                </div>
                <div class="principle">
                    <h4>Gangster Museum of America</h4>
                    <p>The city's 1920s-30s gangster era — when Al Capone visited Hot Springs — told in one museum. Better for older kids than for little ones.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="outside">
            <div class="wrap">
                <h2>Outside with the family</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Trails the whole family can walk</h4>
                    <p>The park has 26 miles of trails, and dogs on a leash are welcome — bring the whole family, including the dog, for an easy morning hike.</p>
                </div>
                <div class="principle">
                    <h4>Take the day to the lakes</h4>
                    <p>Summer is lake season: Lake Hamilton is ten minutes from downtown, and Lake Ouachita is the pick for swimming and kayaking. See our lakes guide to choose.</p>
                </div>
                </div>
                <div class="bloque-botones">
                    <a href="/lakes-and-outdoors-hot-springs" class="btn btn-primario">See the lakes guide</a>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Fit the family day into the trip</h2>
                <p>One family day covers the tower, the gardens and the alligator farm — then the baths and the lakes fill the second day. The full plan puts it all in order.</p>
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
