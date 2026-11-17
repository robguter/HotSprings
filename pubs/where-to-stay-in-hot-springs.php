<?php
            $meta_title = "Where to Stay in Hot Springs, Arkansas: Best Areas and Hotels - Hot Springs";
            $meta_description = "Where to stay in Hot Springs, Arkansas: downtown by Bathhouse Row for first-time visitors, Lake Hamilton for lake days and groups, or Central Avenue near Oaklawn for families and value.";
            $canonical = "https://tiendahotspringsllc.com/where-to-stay-in-hot-springs";
            $tiene_traduccion = true;
            $data_niche ="";

            require_once 'header.php';

            // Carousel cards: real Hot Springs photos already on the site.
            $imagenes_hotsprings = [
                [
                    "archivo" => "/images/hotel_habitacion.webp",
                    "alt" => "Bright hotel room in the morning",
                    "titulo" => "Downtown & Bathhouse Row",
                    "descripcion" => "Wake up steps from the historic bathhouses."
                ],
                [
                    "archivo" => "/images/lago_ouachita.webp",
                    "alt" => "Lake Ouachita seen from a forested overlook",
                    "titulo" => "Lake Hamilton",
                    "descripcion" => "Lakeside homes, condos and sunset docks."
                ],
                [
                    "archivo" => "/images/piscina_termal.webp",
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
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(173, 109, 101, 0.05), rgba(120, 54, 43, 0.06)), url('/images/hotel_habitacion.webp');">
                        <h3>1. Downtown &amp; Bathhouse Row</h3>
                        <p>Wake up near the historic bathhouses, the Fordyce Visitor Center (369 Central Ave), and the Grand Promenade. Among the most popular hotels here are the historic Arlington Resort Hotel and Spa (239 Central Ave), The Waters Hotel on Bathhouse Row (340 Central Ave), and the intimate Hotel Hale (341 Central Ave)—a former bathhouse that features bathtubs in its suites. While prices are higher and parking is more limited, you may find that you don’t need a car at all for the entire weekend.</p>
                    </div>
                    <!-- BOOKING LINK: Downtown hotels — insert after approval -->
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(106, 178, 168, 0.05), rgba(31, 89, 81, 0.06)), url('/images/lago_ouachita.webp');">
                        <h3>2. Lake Hamilton</h3>
                        <p>Vacation homes, condos and lakeside stays about 15 to 20 minutes from downtown. This is the pick if you are renting a boat, traveling with a group, or staying three or more nights and want a kitchen and a dock at sunset. Plan to drive downtown for the baths — the lake is the base, not the bathhouse.</p>
                    </div>
                    <!-- BOOKING LINK: Lake Hamilton stays — insert after approval -->
                    <div class="spring-panel" style="--panel-bg: linear-gradient(155deg, rgba(215, 154, 62, 0.05), rgba(169, 106, 30, 0.06)), url('/images/piscina_termal.webp');">
                        <h3>3. Central Avenue &amp; Oaklawn</h3>
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

        <section class="principles" id="spa-habitacion">
            <div class="wrap">
                <h2>Make the hotel room feel like a spa</h2>
                <p class="kicker">Two small things to pack: the pillow that turns any hotel tub into a soaking tub, and the oils that make the room smell like the bathhouse.</p>
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:24px; margin-top:24px;">
                    <div style="border:1px solid #e5e0d8; border-radius:12px; overflow:hidden; background:#fff;">
                        <img src="/images/spa-almohada.jpg" alt="Bath pillow with suction cups" style="width:100%; display:block;">
                        <div style="padding:18px;">
                            <h3 style="margin:0 0 8px;">SZXYX Bath Pillows for Tub</h3>
                            <p>A bath pillow with 6 suction cups that stay put — head, neck and shoulders supported, so a long hotel soak doesn't end with a sore neck.</p>
                            <p><strong>$15.99</strong> <span style="font-size:12px; color:#777;">*Price on Amazon; may vary.</span></p>
                            <div class="bloque-botones">
                                <a href="https://www.amazon.com/dp/B0F3XDCKJZ?tag=hotspringsllc-20" class="btn btn-primario" target="_blank" rel="noopener sponsored">See it on Amazon</a>
                            </div>
                            <p style="font-size:12px; color:#777; margin:12px 0 0;">Illustrative photo.</p>
                        </div>
                    </div>
                    <div style="border:1px solid #e5e0d8; border-radius:12px; overflow:hidden; background:#fff;">
                        <img src="/images/spa-aceites.jpg" alt="Essential oils set" style="width:100%; display:block;">
                        <div style="padding:18px;">
                            <h3 style="margin:0 0 8px;">Aeshory Essential Oils Set, 12 bottles</h3>
                            <p>12 bottles of 5 ml for a diffuser or humidifier: the room smells like a spa. For the hotel room at night, or the bathroom at home when the trip is over.</p>
                            <p><strong>$15.99</strong> <span style="font-size:12px; color:#777;">*Price on Amazon; may vary.</span></p>
                            <div class="bloque-botones">
                                <a href="https://www.amazon.com/dp/B0CQJYVGSW?tag=hotspringsllc-20" class="btn btn-primario" target="_blank" rel="noopener sponsored">See it on Amazon</a>
                            </div>
                            <p style="font-size:12px; color:#777; margin:12px 0 0;">Illustrative photo.</p>
                        </div>
                    </div>
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
