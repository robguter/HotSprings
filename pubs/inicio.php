<?php
            $meta_title = "Hot Springs LLC — Recomendaciones de Amazon por nicho";
            $meta_description = "Recomendaciones curadas de Amazon en tres nichos: Belleza y Cuidado, Cocina y Hogar, y Vida Activa, Equipaje y Viajes.";
            $canonical = "https://tiendahotspringsllc.com/";
            $data_niche ="";
            
            require_once 'header.php';
            
            // Tarjetas del carrusel: una por nicho, enlazan a su página
            $imagenes_hotsprings = [
                [
                    "archivo" => "images/belleza/belleza_01.webp",
                    "alt" => "Mujer descansando con antifaz para dormir",
                    "titulo" => "Belleza y Cuidado",
                    "descripcion" => "Piel, cabello y descanso: lo esencial para verte y sentirte bien.",
                    "enlace" => "belleza"
                ],
                [
                    "archivo" => "images/hogar/hogar_01.webp",
                    "alt" => "Batería de cocina de acero inoxidable",
                    "titulo" => "Cocina y Hogar",
                    "descripcion" => "Herramientas de cocina y organización que simplifican el día a día.",
                    "enlace" => "hogar"
                ],
                [
                    "archivo" => "images/vida/vida_01.webp",
                    "alt" => "Maletas de viaje azules",
                    "titulo" => "Vida Activa, Equipaje y Viajes",
                    "descripcion" => "Equipaje, fitness y accesorios para moverte donde vayas.",
                    "enlace" => "vida"
                ],
            ];
            ?>
        <section class="hero">
            <div class="wrap">
                <div class="columna-texto">
                    <span class="subtitulo-superior">Recomendaciones de Amazon</span>
                    <h1 class="titulo-principal">Tres fuentes de buenas decisiones de compra</h1>
                    
                    <p class="descripcion-corta">
                        Reunimos en un solo lugar los productos que valen la pena en 
                        <strong>belleza, hogar y vida activa</strong>. Nos encargamos de filtrar las 
                        reseñas para que elijas solo lo mejor.
                    </p>
                    
                    <div class="bloque-botones">
                        <a href="belleza" class="btn btn-primario">Explorar Belleza y Cuidado</a>
                        <a href="#nichos" class="btn btn-secundario">Ver los tres nichos</a>
                    </div>
                </div>
                <!-- <div class="hero-glyph" aria-hidden="true">
                    <img src="images/hsllc.png" alt="Hot Springs LLC, logo" width="240" height="240">
                </div> -->
                <div class="carrusel-contenedor">
                    <div class="carrusel-track">
                        <?php foreach ($imagenes_hotsprings as $imagen): ?>
                            <a class="tarjeta-slider" href="<?php echo $imagen['enlace']; ?>">
                                <div class="contenedor-foto">
                                    <img src="<?php echo $imagen['archivo']; ?>" alt="<?php echo $imagen['alt']; ?>">
                                </div>
                                <div class="info-foto">
                                    <h3><?php echo $imagen['titulo']; ?></h3>
                                    <p><?php echo $imagen['descripcion']; ?></p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <!-- Botones opcionales para controlar el slider manualmente -->
                    <button class="boton-slider prev" onclick="cambiarSlide(-1)">&#10094;</button>
                    <button class="boton-slider next" onclick="cambiarSlide(1)">&#10095;</button>
                </div>

            </div>
        </section>

        <section class="springs" id="nichos">
            <div class="wrap">
                <div class="springs-head">
                    <h2>Un mismo criterio, tres nichos que explorar</h2>
                    <p class="kicker">Cada nicho tiene su propia selección, revisada y actualizada — entra al que buscas.</p>
                </div>

                <div class="spring-panels">
                    <a href="belleza" class="spring-panel spring-panel--belleza">
                        <!-- <span class="spring-tag">Nicho 1</span> -->
                        <h3>Belleza y Cuidado</h3>
                        <p>Piel, cabello y rutinas diarias: lo esencial para verte y sentirte bien, sin gastar más.</p>
                        <span class="btn btn-ghost">Ver productos</span>
                    </a>
                    <a href="hogar" class="spring-panel spring-panel--hogar">
                        <!-- <span class="spring-tag">Nicho 2</span> -->
                        <h3>Cocina y Hogar</h3>
                        <p>Herramientas de cocina y organización que hacen el día a día más simple.</p>
                        <span class="btn btn-ghost">Ver productos</span>
                    </a>
                    <a href="vida" class="spring-panel spring-panel--vida">
                        <!-- <span class="spring-tag">Nicho 3</span> -->
                        <h3>Vida Activa, Equipaje y Viajes</h3>
                        <p>Equipaje, fitness y accesorios para moverte — dentro o fuera de casa.</p>
                        <span class="btn btn-ghost">Ver productos</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="principles">
            <div class="wrap">
                <h2>Cómo elegimos lo que recomendamos</h2>
                <div class="principles-grid">
                <div class="principle">
                    <h4>Utilidad real</h4>
                    <p>Priorizamos productos que resuelven un problema concreto del día a día, no solo los más vendidos.</p>
                </div>
                <div class="principle">
                    <h4>Relación calidad-precio</h4>
                    <p>Marcamos el rango de precio de cada producto para que compares sin sorpresas.</p>
                </div>
                <div class="principle">
                    <h4>Catálogo vivo</h4>
                    <p>Revisamos y renovamos la selección de cada nicho de forma periódica.</p>
                </div>
                </div>
            </div>
        </section>

        <div class="disclosure">
            <div class="wrap">
                Como Afiliados de Amazon, Hot Springs LLC obtiene una comisión por las compras que califican, sin costo adicional para ti.
            </div>
        </div>

        <?php
      require_once 'footer.php';