<?php
    // footer.php — bilingüe. $is_spanish viene del header.
    $is_spanish = isset($is_spanish) ? $is_spanish : false;
    if ($is_spanish) {
        $f_tagline = 'Arkansas · Guía de Viajes';
        $f_desc    = 'Una guía de viajes gratuita de Hot Springs, Arkansas: las casas de baño de Bathhouse Row, el parque nacional y los lagos — dónde dormir y qué hacer en 2 días.';
        $f_guias   = 'Guías';
        $f_plan    = 'Planifica tu viaje';
        $f_legal   = 'Transparencia y Soporte';
        $f_contacto = 'Contacto y Soporte';
        $f_priv    = 'Política de Privacidad';
        $f_term    = 'Términos del Servicio';
        $f_rights  = 'Todos los derechos reservados.';
        $f_assoc   = 'Algunos enlaces de este sitio son enlaces de afiliado. Si reservas a través de ellos, podemos ganar una comisión sin costo extra para ti.';
        $f_credits = 'Fotos de los lugares: Eric Friedebach (CC BY 2.0), Larry D. Moore (CC BY 4.0) y Brandonrush (CC BY-SA 3.0), vía Wikimedia Commons.';
        $g_things  = 'Qué Hacer';
        $g_stay    = 'Dónde Dormir';
        $g_itin    = 'Itinerario de 2 Días';
        $p_start   = 'Empieza por el agua';
        $p_plan    = 'El plan de 2 días';
        $p_home    = 'Inicio';
        $u_home    = '/es/';
        $u_things  = '/es/things-to-do-in-hot-springs';
        $u_stay    = '/es/where-to-stay-in-hot-springs';
        $u_itin    = '/es/hot-springs-2-day-itinerary';
        $u_start   = '/es/#guias';
        $u_plan    = '/es/#plan';
    } else {
        $f_tagline = 'Arkansas · Travel Guide';
        $f_desc    = 'A free travel guide to Hot Springs, Arkansas: the bathhouses on Bathhouse Row, the national park and the lakes — where to stay and what to do in 2 days.';
        $f_guias   = 'Guides';
        $f_plan    = 'Plan your trip';
        $f_legal   = 'Transparency & Support';
        $f_contacto = 'Contact & Support';
        $f_priv    = 'Privacy Policy';
        $f_term    = 'Terms of Service';
        $f_rights  = 'All rights reserved.';
        $f_assoc   = 'Some links on this site are affiliate links. If you book through them, we may earn a commission at no extra cost to you.';
        $f_credits = 'Place photos: Eric Friedebach (CC BY 2.0), Larry D. Moore (CC BY 4.0) and Brandonrush (CC BY-SA 3.0), via Wikimedia Commons.';
        $g_things  = 'Things to Do';
        $g_stay    = 'Where to Stay';
        $g_itin    = '2-Day Itinerary';
        $p_start   = 'Start with the water';
        $p_plan    = 'The 2-day plan';
        $p_home    = 'Home';
        $u_home    = '/';
        $u_things  = '/things-to-do-in-hot-springs';
        $u_stay    = '/where-to-stay-in-hot-springs';
        $u_itin    = '/hot-springs-2-day-itinerary';
        $u_start   = '/#guias';
        $u_plan    = '/#plan';
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
                        <h5><?php echo $f_guias; ?></h5>
                        <ul>
                            <li><a href="<?php echo $u_things; ?>"><?php echo $g_things; ?></a></li>
                            <li><a href="<?php echo $u_stay; ?>"><?php echo $g_stay; ?></a></li>
                            <li><a href="<?php echo $u_itin; ?>"><?php echo $g_itin; ?></a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h5><?php echo $f_plan; ?></h5>
                        <ul>
                            <li><a href="<?php echo $u_start; ?>"><?php echo $p_start; ?></a></li>
                            <li><a href="<?php echo $u_plan; ?>"><?php echo $p_plan; ?></a></li>
                            <li><a href="<?php echo $u_home; ?>"><?php echo $p_home; ?></a></li>
                        </ul>
                    </div>
                    <!-- Columna 3: Legal y Soporte -->
                    <div class="footer-col">
                        <h5><?php echo $f_legal; ?></h5>
                        <ul>
                            <li><a href="/contacto"><?php echo $f_contacto; ?></a></li>
                            <li><a href="/privacidad"><?php echo $f_priv; ?></a></li>
                            <li><a href="/terminos"><?php echo $f_term; ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <span>© <?php echo date("Y"); ?> Hot Springs LLC. <?php echo $f_rights; ?></span>
                    <span><?php echo $f_assoc; ?></span>
                    <span><?php echo $f_credits; ?></span>
                </div>
            </div>
        </footer>
        <script src="/js/main.js"></script>
    </body>
</html>
