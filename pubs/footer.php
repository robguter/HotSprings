<?php
    // footer.php — bilingüe. $is_english viene del header (front controller).
    $is_english = isset($is_english) ? $is_english : false;
    if ($is_english) {
        $f_tagline = 'LLC · Recommendation store';
        $f_desc    = 'Amazon product recommendations in beauty, home and active living.';
        $f_nichos  = 'Niches';
        $f_siguenos = 'Follow us';
        $f_legal   = 'Transparency & Support';
        $f_contacto = 'Contact & Support';
        $f_priv    = 'Privacy Policy';
        $f_term    = 'Terms of Service';
        $f_rights  = 'All rights reserved.';
        $f_assoc   = 'As an Amazon Associate, we earn from qualifying purchases.';
        $n_belleza = 'Beauty & Care';
        $n_hogar   = 'Kitchen & Home';
        $n_vida    = 'Active Life & Travel';
        $u_belleza = '/en/belleza'; $u_hogar = '/en/hogar'; $u_vida = '/en/vida';
        $u_contacto = '/en/contacto'; $u_priv = '/en/privacidad'; $u_term = '/en/terminos';
        $u_home = '/en/';
    } else {
        $f_tagline = 'LLC · Tienda de recomendaciones';
        $f_desc    = 'Recomendaciones de productos de Amazon en belleza, hogar y vida activa.';
        $f_nichos  = 'Nichos';
        $f_siguenos = 'Síguenos';
        $f_legal   = 'Transparencia y Soporte';
        $f_contacto = 'Contacto y Soporte';
        $f_priv    = 'Política de Privacidad';
        $f_term    = 'Términos del Servicio';
        $f_rights  = 'Todos los derechos reservados.';
        $f_assoc   = 'Como Afiliado de Amazon, ganamos por las compras que califican.';
        $n_belleza = 'Belleza y Cuidado';
        $n_hogar   = 'Cocina y Hogar';
        $n_vida    = 'Vida Activa y Viajes';
        $u_belleza = 'belleza'; $u_hogar = 'hogar'; $u_vida = 'vida';
        $u_contacto = 'contacto.php'; $u_priv = 'privacidad.php'; $u_term = 'terminos.php';
        $u_home = 'index';
    }
?>
<footer class="site-footer">
            <div class="wrap">
                <div class="footer-grid">
                    <div class="footer-brand">
                        <a href="<?php echo $u_home; ?>" class="logo">
                            <img src="/images/hsllc.png" alt="Hot Springs LLC, logo" width="40" height="40">
                            <span class="logo-text"><strong>Hot Springs</strong><span><?php echo $f_tagline; ?></span></span>
                        </a>
                        <p><?php echo $f_desc; ?></p>
                    </div>
                    <div class="footer-col">
                        <h5><?php echo $f_nichos; ?></h5>
                        <ul>
                            <li><a href="<?php echo $u_belleza; ?>"><?php echo $n_belleza; ?></a></li>
                            <li><a href="<?php echo $u_hogar; ?>"><?php echo $n_hogar; ?></a></li>
                            <li><a href="<?php echo $u_vida; ?>"><?php echo $n_vida; ?></a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h5><?php echo $f_siguenos; ?></h5>
                        <ul>
                            <li><a href="https://www.facebook.com/robguter" target="_blank" rel="noopener">Facebook</a></li>
                            <li><a href="https://www.instagram.com/robert_gutierrez_gomez/" target="_blank" rel="noopener">Instagram</a></li>
                            <li><a href="https://twitter.com/" target="_blank" rel="noopener">Twitter / X</a></li>
                        </ul>
                    </div>
                    <!-- Columna 3: Legal y Soporte -->
                    <div class="footer-col">
                        <h5><?php echo $f_legal; ?></h5>
                        <ul>
                            <li><a href="<?php echo $u_contacto; ?>"><?php echo $f_contacto; ?></a></li>
                            <li><a href="<?php echo $u_priv; ?>"><?php echo $f_priv; ?></a></li>
                            <li><a href="<?php echo $u_term; ?>"><?php echo $f_term; ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <span>© <?php echo date("Y"); ?> Hot Springs LLC. <?php echo $f_rights; ?></span>
                    <span><?php echo $f_assoc; ?></span>
                </div>
            </div>
        </footer>
        <script src="/js/main.js"></script>
        <?php if (!empty($data_niche)): ?>
            <script src="/js/config.js"></script>
            <?php if ($is_english): ?>
                <script src="/js/products_en.js"></script>
            <?php else: ?>
                <script src="/js/products.js"></script>
            <?php endif; ?>
            <script>renderNiche("<?php echo htmlspecialchars($data_niche); ?>", "#grid", "#filtros", "#vacio")</script>
        <?php endif; ?>
    </body>
</html>