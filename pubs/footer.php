        <footer class="site-footer">
            <div class="wrap">
                <div class="footer-grid">
                    <div class="footer-brand">
                        <a href="index" class="logo">
                        <img src="images/hsllc.png" alt="Hot Springs LLC, logo" width="40" height="40">
                        <span class="logo-text"><strong>Hot Springs</strong><span>LLC · Tienda de activa</span></span>
                        </a>
                        <p>Recomendaciones de productos de Amazon en belleza, hogar y vida activa.</p>
                    </div>
                    <div class="footer-col">
                        <h5>Nichos</h5>
                        <ul>
                        <li><a href="belleza">Belleza y Cuidado</a></li>
                        <li><a href="hogar">Cocina y Hogar</a></li>
                        <li><a href="vida">Vida Activa y Viajes</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h5>Síguenos</h5>
                        <ul>
                        <li><a href="https://www.facebook.com/robguter" target="_blank" rel="noopener">Facebook</a></li>
                        <li><a href="https://www.instagram.com/robert_gutierrez_gomez/" target="_blank" rel="noopener">Instagram</a></li>
                        <li><a href="https://twitter.com/" target="_blank" rel="noopener">Twitter / X</a></li>
                        </ul>
                    </div>
                    
                    <!-- Columna 3: Legal y Soporte -->
                    <div class="footer-col">
                        <h5>Transparencia y Soporte</h5>
                        <ul>
                            <li><a href="contacto.php">Contacto y Soporte</a></li>
                            <li><a href="privacidad.php">Política de Privacidad</a></li>
                            <li><a href="terminos.php">Términos del Servicio</a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="footer-bottom">
                    <span>© <?php echo date("Y"); ?> Hot Springs LLC. Todos los derechos reservados.</span>
                    <span>Como Afiliado de Amazon, ganamos por las compras que califican.</span>
                </div>
            </div>
        </footer>
        <script src="js/main.js"></script>
        <?php if (!empty($data_niche)): ?>
            <script src="js/config.js"></script>
            <script src="js/products.js"></script>
            <script>renderNiche("<?php echo htmlspecialchars($data_niche); ?>", "#grid", "#filtros", "#vacio");</script>
        <?php endif; ?>
    </body>
 </html>