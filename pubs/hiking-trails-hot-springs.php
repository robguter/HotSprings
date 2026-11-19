<?php
            $meta_title = "Hiking Trails in Hot Springs National Park — 26 Miles of Free Trails";
            $meta_description = "26 miles of free hiking trails in Hot Springs National Park: the Grand Promenade, Goat Rock, Hot Springs Mountain, Gulpha Gorge and the 10-mile Sunset Trail.";
            $canonical = "https://tiendahotspringsllc.com/hiking-trails-hot-springs";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/sendero_bosque.webp",
                    "alt" => "Forest trail in Hot Springs National Park",
                    "titulo" => "Forest trails",
                    "descripcion" => "26 miles of trails in the mountains right behind downtown."
                ],
                [
                    "archivo" => "/images/paseo_promenade.webp",
                    "alt" => "The Grand Promenade walkway behind Bathhouse Row",
                    "titulo" => "Grand Promenade",
                    "descripcion" => "The easiest walk in the park — flat, shaded, half a mile."
                ],
                [
                    "archivo" => "/images/torre_mirador.webp",
                    "alt" => "View over Hot Springs from the Mountain Tower",
                    "titulo" => "From the summit",
                    "descripcion" => "Hot Springs Mountain Tower: 360-degree views above the trails."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">Hiking the national park trails</h1>

                    <p class="descripcion-corta">
                        Hot Springs National Park is small — the second-smallest national park in the
                        country — but it packs 26 miles of hiking trails into the mountains right behind
                        downtown. You can walk out of a bathhouse, cross the street, and be on a forest
                        trail in five minutes. The trails are free, open year-round, and the best way to
                        see the quiet, wooded half of Hot Springs.
                    </p>

                    <div class="bloque-botones">
                        <a href="#easy" class="btn btn-primario">Easy walks</a>
                        <a href="#long" class="btn btn-secundario">The long one</a>
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

        <section class="springs" id="easy">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Easy walks</h2>
                    <p class="kicker">Start here if you are not a hiker — or if you only have half an hour.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/paseo_promenade.webp');">
                        <h3>Grand Promenade — 0.5 miles</h3>
                        <p>The easiest and most popular walk in the park: a paved, brick walkway along the hillside directly behind Bathhouse Row. Flat, shaded, stroller- and wheelchair-friendly, about half an hour at a stroll, with views down over the bathhouses and the city.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/sendero_bosque.webp');">
                        <h3>Fountain Trail — very short</h3>
                        <p>A short connector trail near the north end of the park, good for a quick stretch of the legs between other stops. More of a link than a destination, but an easy way to add a little forest to a downtown day.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/torre_mirador.webp');">
                        <h3>Hot Springs Mountain Trail — 1.7 miles</h3>
                        <p>The park's classic loop circles the top of Hot Springs Mountain, passing scenic overlooks with views over the city and the Ouachita Mountains. Mostly gentle, shaded nearly the whole way. Allow about an hour to an hour and a half. At the summit, the Mountain Tower offers 360-degree views — a paid attraction, worth it on a clear day.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="moderate">
            <div class="wrap">
                <h2>Moderate hikes</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Goat Rock Trail — 1.1 miles</h4>
                    <p>The hike most locals recommend for the best view. The trail runs out to a rocky overlook on North Mountain, passing under huge slabs of novaculite rock. Allow one to one and a half hours round trip. Parking at the North Mountain overlook is limited, so go early or on a weekday.</p>
                </div>
                <div class="principle">
                    <h4>Gulpha Gorge Trail — 0.6 miles</h4>
                    <p>Do not let the distance fool you: the first half is steep, climbing quickly out of the gorge with a grade of nearly 14 percent in places. The reward is a creekside walk with small waterfalls and wildflowers in spring.</p>
                </div>
                <div class="principle">
                    <h4>Hot Springs Mountain Loop — 3.3 miles</h4>
                    <p>Start at the Gulpha Gorge Campground, climb the Gulpha Gorge Trail, join the Hot Springs Mountain Trail around the summit, and come back down. Allow one and a half to two hours — the best half-day hike in the park for most visitors.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="long">
            <div class="wrap">
                <h2>The long ones</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Sunset Trail — about 10 miles</h4>
                    <p>The longest trail in the park and the only one that feels like a true backcountry hike. A full day — six to seven hours — over West Mountain and through quiet forest, far from the crowds. Best for experienced hikers. Do not attempt the full trail in the heat of a summer afternoon.</p>
                </div>
                <div class="principle">
                    <h4>Oertel Trail — 1.4 miles</h4>
                    <p>A connector trail on the north side of the park that ranges from moderate to very steep. A useful link between trailheads, and a good workout on its own — use it as part of a longer route rather than a destination.</p>
                </div>
                <div class="principle">
                    <h4>Shorter sections work too</h4>
                    <p>You can hike shorter sections of the Sunset Trail: the western trailheads give access to the quieter stretches without committing to the whole loop. Start early, and carry more water than you think you need.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="bring">
            <div class="wrap">
                <h2>What to bring</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Water</h4>
                    <p>There is no drinking water on the trails. Bring more than you think you need, especially in summer — at least a liter per person for a short hike, twice that for anything over two hours.</p>
                </div>
                <div class="principle">
                    <h4>Good shoes and a map</h4>
                    <p>The trails are rocky and uneven. Sneakers are fine for the Promenade; anything longer deserves hiking shoes with grip. The trails intersect often — pick up a paper map at the Fordyce visitor center before you start.</p>
                </div>
                <div class="principle">
                    <h4>Sun protection and bug spray</h4>
                    <p>Much of the trail system is shaded, but the overlooks and ridgetops are exposed, and mosquitoes are active from spring through fall.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Good to know before you hike</h2>
                <p>Dogs are welcome on all park trails, on a leash — and the Fordyce visitor center even offers a BARK Ranger certificate for canine visitors. Deer are common, and black bears are occasionally seen: make noise as you walk, keep food sealed, and never approach wildlife. The trails are open year-round; the best hiking weather is March through May and September through November. Start at the Fordyce: pick up a trail map, ask a ranger for conditions, use the restroom, and then walk out the back door onto the Promenade.</p>
                <div class="bloque-botones">
                    <a href="/things-to-do-in-hot-springs" class="btn btn-primario">See what to do</a>
                    <a href="/budget-guide-free-things-hot-springs" class="btn btn-secundario">Hot Springs on a budget</a>
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
