<?php
            $meta_title = "Oaklawn Racing & Casino — Races, Stakes & Casino in Hot Springs";
            $meta_description = "Oaklawn in Hot Springs: live Thoroughbred racing Nov 27, 2026–May 1, 2027, the $1.5M Arkansas Derby April 10, 2027, a 24-hour smoke-free casino, hotel and spa.";
            $canonical = "https://tiendahotspringsllc.com/oaklawn-racing-casino";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/oaklawn.webp",
                    "alt" => "Derby Day at Oaklawn in Hot Springs",
                    "titulo" => "Derby Day",
                    "descripcion" => "Arkansas Derby Day at Oaklawn — the biggest race weekend in town."
                ],
                [
                    "archivo" => "/images/calle_central.webp",
                    "alt" => "Central Avenue in downtown Hot Springs",
                    "titulo" => "On Central Avenue",
                    "descripcion" => "Racetrack, casino, hotel and spa in one place on Central Avenue."
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Hot Springs, Arkansas — Travel Guide</span>
                    <h1 class="titulo-principal">Oaklawn Racing &amp; Casino</h1>

                    <p class="descripcion-corta">
                        Oaklawn has been the beating heart of Hot Springs since 1904. A Thoroughbred
                        racetrack, a casino, a hotel, and a spa, all in one place on Central Avenue — and
                        during racing season, it is where the whole town seems to gather. Even if you have
                        never watched a horse race in your life, a day at Oaklawn is one of the most fun
                        things you can do in Hot Springs.
                    </p>

                    <div class="bloque-botones">
                        <a href="#season" class="btn btn-primario">The racing season</a>
                        <a href="#big-races" class="btn btn-secundario">The big races</a>
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

        <section class="springs" id="season">
            <div class="wrap">
                <div class="springs-head">
                    <h2>The racing season</h2>
                    <p class="kicker">2026–27: Friday, November 27, 2026 — the earliest opening day in Oaklawn history — through Saturday, May 1, 2027. The casino is open 24 hours a day, all year, and smoke-free.</p>
                </div>

                <div class="spring-panels">
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/oaklawn.webp');">
                        <h3>Holiday Season</h3>
                        <p>The season opens Friday, November 27, 2026 — the day after Thanksgiving — and the Holiday Season runs from opening day through Sunday, January 10. Then there is a short break before the Classic Season picks up.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/calle_central.webp');">
                        <h3>Classic Season</h3>
                        <p>The Classic Season runs Friday, January 22 through Saturday, May 1, 2027, which is Kentucky Derby Day. Most weeks, racing happens Friday through Sunday, with some Thursdays added in the spring. There is no racing on Christmas Day or Easter Sunday.</p>
                    </div>
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/oaklawn.webp');">
                        <h3>Race day hours</h3>
                        <p>The gates open at 11 a.m. and the first race usually goes off at 12:45 p.m. General admission on race days is free, which makes Oaklawn one of the best-value days out in Hot Springs.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="principles" id="big-races">
            <div class="wrap">
                <h2>The big races</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>The Rebel Stakes — March 13, 2027</h4>
                    <p>A $1.25 million race for three-year-olds on Saturday, March 13, 2027 — a major step on the road to the Kentucky Derby, now run at 1 1/8 miles.</p>
                </div>
                <div class="principle">
                    <h4>The Arkansas Derby — April 10, 2027</h4>
                    <p>Oaklawn's biggest race of the year: a Grade 1 at a mile and an eighth, with a $1.5 million purse. The final big prep race for the Kentucky Derby — the whole town is buzzing that weekend, so book your hotel early.</p>
                </div>
                <div class="principle">
                    <h4>Apple Blossom &amp; Oaklawn Handicap — April 17, 2027</h4>
                    <p>Two $1.5 million races on the same card, one week after the Derby. The stakes schedule is the richest in the track's history — 61 stakes races worth nearly $19 million in the 2026–27 season.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="race-day">
            <div class="wrap">
                <h2>What a race day is like</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Walk right in</h4>
                    <p>You walk in through the main entrance — no ticket needed for general admission. The grandstand looks out over the track, big screens show the odds, and the paddock lets you watch the horses being saddled before each race, which is half the fun.</p>
                </div>
                <div class="principle">
                    <h4>Two minutes of thunder</h4>
                    <p>The horses parade past the crowd, the bugle sounds, and then they are off. A race lasts about two minutes, and the stretch run — the final straight — is loud in the best way.</p>
                </div>
                <div class="principle">
                    <h4>An afternoon, unhurried</h4>
                    <p>Between races there is usually about half an hour — plenty of time to get food, walk around, and watch the next set of horses in the paddock. A typical race day has eight or nine races, running from just before 1 p.m. to around 5 p.m.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="betting">
            <div class="wrap">
                <h2>Betting for first-timers</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Win, Place, Show</h4>
                    <p>You do not have to bet — plenty of people come just to watch. If you want to try, keep it simple: Win means your horse has to finish first, Place first or second, Show first, second, or third.</p>
                </div>
                <div class="principle">
                    <h4>Small and simple</h4>
                    <p>Place a bet at a window with a person, or at a self-service machine. The minimum is small — a couple of dollars — and the staff and regulars are usually happy to help a first-timer.</p>
                </div>
                <div class="principle">
                    <h4>Set a budget</h4>
                    <p>Set a budget before you start, treat it as the price of the entertainment, and stop when the budget is gone. The program you can buy at the entrance lists every horse, its past races, and its morning-line odds.</p>
                </div>
                </div>
            </div>
        </section>

        <section class="principles" id="plan">
            <div class="wrap">
                <h2>Beyond the track — and tips for your first visit</h2>
                <p>The on-site hotel has rooms overlooking the track, the Astral Spa offers massages and treatments, and there are several restaurants, from casual spots to fine dining. Even outside racing season, the casino, hotel, restaurants, and spa are open — Oaklawn works as a stop any time of year. Check the racing calendar first: racing is seasonal, mostly Friday through Sunday. Arrive before the first race — the gates open at 11 a.m. Dress is casual, and bring a layer: the grandstand can be breezy. Bring cash for small bets and tips, even though cards work in most places. And stay for the whole card — the last races are often the best.</p>
                <div class="bloque-botones">
                    <a href="/best-time-to-visit-hot-springs" class="btn btn-primario">Best time to visit</a>
                    <a href="/things-to-do-in-hot-springs" class="btn btn-secundario">See what to do</a>
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
