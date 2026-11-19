<?php
            $meta_title = "Downtown Hot Springs & Central Avenue Walk — Bathhouse Row";
            $meta_description = "Walk downtown Hot Springs: Bathhouse Row, the free Fordyce museum, the Grand Promenade, the Arlington, galleries and the Gangster Museum — all on Central Avenue.";
            $canonical = "https://tiendahotspringsllc.com/downtown-central-avenue-hot-springs";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/calle_central.webp",
                    "alt" => "Central Avenue in downtown Hot Springs",
                    "titulo" => "Central Avenue",
                    "descripcion" => "The historic core — bathhouses on one side, shops and galleries on the other."
                ],
                [
                    "archivo" => "/images/paseo_promenade.webp",
                    "alt" => "The Grand Promenade walkway behind Bathhouse Row",
                    "titulo" => "Grand Promenade",
                    "descripcion" => "The half-mile brick walkway behind Bathhouse Row."
                ],
                [
                    "archivo" => "/images/torre_mirador.webp",
                    "alt" => "View over Hot Springs from the Mountain Tower",
                    "titulo" => "From above",
                    "descripcion" => "The city and the mountains from Hot Springs Mountain."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">Downtown Hot Springs &amp; Central Avenue</h1>

                    <p class="descripcion-corta">
                        Downtown Hot Springs is small, walkable, and full of character — and the best way
                        to see it is on foot. The whole historic core runs along Central Avenue, with the
                        grand old bathhouses on one side and shops, galleries, restaurants, and hotels on
                        the other, and the Ouachita Mountains rising directly behind it. You can walk the
                        main stretch in an hour, but give it a whole morning or afternoon.
                    </p>

                    <div class="bloque-botones">
                        <a href="#bathhouse-row" class="btn btn-primario">Start at Bathhouse Row</a>
                        <a href="#galleries" class="btn btn-secundario">Galleries &amp; shops</a>
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

        <section class="springs" id="bathhouse-row">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Stop 1: Bathhouse Row</h2>
                    <p class="kicker">Eight historic bathhouses, built between the late 1800s and the 1920s — a national park you walk through on a city sidewalk, with no entrance gate and no admission fee.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/calle_central.webp');">
                        <h3>The Fordyce</h3>
                        <p>The largest and most ornate building on the row. It opened in 1915 and now serves as the park's visitor center and a free museum — three floors of bath halls, a gymnasium with wooden lifting clubs, a music room, and the men's bath hall under a stained-glass ceiling of mermaids. Open daily from 9 a.m. to 5 p.m. and costs nothing.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>The Grand Promenade</h3>
                        <p>Behind Bathhouse Row runs the Grand Promenade, a half-mile brick walkway along the hillside. Shaded, quiet, and raised above the street, with views down over the bathhouses and the city. Stroller- and wheelchair-friendly, it connects to the park's trail network — about half an hour at a stroll.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/calle_central.webp');">
                        <h3>Buckstaff, Quapaw, Superior</h3>
                        <p>As you walk north along the row, you will pass the Buckstaff, the only bathhouse in continuous operation since 1912 and still offering the traditional private bathing ritual, and the Quapaw, with modern public thermal pools. At the north end sits the Superior Bathhouse — now a brewery, the only brewery in a national park, brewing its beer with thermal spring water.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="north-end">
            <div class="wrap">
                <h2>Stop 2: the north end</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>The Arlington Hotel</h4>
                    <p>The grand twin-towered hotel that has anchored downtown since the 1920s. It is worth stepping into the lobby just to see it, even if you are not staying there.</p>
                </div>
                <div class="principle">
                    <h4>Medical Arts Building</h4>
                    <p>A tall Art Deco tower that is one of the most recognizable buildings in the city skyline, near the Arlington at the north end of Central Avenue.</p>
                </div>
                <div class="principle">
                    <h4>The Hot Water Cascade</h4>
                    <p>Between the buildings, look for the Hot Water Cascade, where the spring water runs open down the hillside, and the public fountains where you can fill a bottle or a jug with thermal spring water for free.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="galleries">
            <div class="wrap">
                <h2>Stop 3: shops, galleries, and the art scene</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>American Art Gallery</h4>
                    <p>The American Art Gallery at 724 Central Avenue shows paintings, jewelry, pottery, sculpture, and Arkansas-made crafts — better souvenirs than anything in a gas station gift shop.</p>
                </div>
                <div class="principle">
                    <h4>Collective Arts Gallery</h4>
                    <p>Shows work by dozens of local artists, along with the small gift shops and studios scattered along the street — hot sauce, handmade candles, and more.</p>
                </div>
                <div class="principle">
                    <h4>Gallery Walk</h4>
                    <p>On the first Friday of each month, the downtown galleries stay open late for the Gallery Walk, with new shows, refreshments, and crowds strolling from one gallery to the next. If your trip lines up with a first Friday, plan your evening around it.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="food-museum">
            <div class="wrap">
                <h2>Stop 4: food and the Gangster Museum</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>The Ohio Club</h4>
                    <p>The oldest bar in Arkansas, where gangsters drank during Prohibition. There are cafes for a slow breakfast, ice cream shops for the afternoon, and restaurants ranging from casual to fine dining.</p>
                </div>
                <div class="principle">
                    <h4>Barbecue since 1928</h4>
                    <p>The street has everything from barbecue joints that have been serving since 1928 to fine dining. Start with breakfast downtown, have lunch at a cafe on Central, and come back in the evening for dinner and live music.</p>
                </div>
                <div class="principle">
                    <h4>Gangster Museum of America</h4>
                    <p>Between the 1920s and the 1940s, Hot Springs ran wide open — illegal casinos, bootleggers, and visiting mobsters like Al Capone and Owney Madden. The museum tells that story across seven galleries, with guided tours running through the day.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Practical tips for the walk</h2>
                <p>Go early for the Fordyce — the museum is free and the best starting point, but it gets busy by midday, so arrive when it opens at 9 a.m. Wear comfortable shoes: Central Avenue looks flat, but the Promenade and the streets behind it climb. Parking is easy, with public lots and street parking around downtown. Bring a bottle for the spring water — the public fountains are free, and filling a jug is a local ritual. Allow half a day: the walk itself is short, but the museum, the shops, the galleries, and a long lunch will fill a morning or an afternoon easily. And come back at night — the bathhouses are lit, the restaurants fill up, and live music drifts out of the bars.</p>
                <div class="bloque-botones">
                    <a href="/things-to-do-in-hot-springs" class="btn btn-primario">See what to do</a>
                    <a href="/best-restaurants-in-hot-springs" class="btn btn-secundario">Where to eat</a>
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
