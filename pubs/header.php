<?php
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'On');
    $titulo_pagina = isset($meta_title) ? $meta_title : "Hot Springs LLC — Recomendaciones de Amazon: Belleza, Hogar y Vida Activa";
    $desc_pagina   = isset($meta_description) ? $meta_description : "Recomendaciones honestas de productos de Amazon en belleza y cuidado personal, cocina y hogar, y vida activa y viajes.";
    $url_canonical = isset($canonical) ? $canonical : "https://tiendahotspringsllc.com/";
    $data_niche = isset($data_niche) && !empty($data_niche) ? $data_niche : "";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <title><?php echo htmlspecialchars($titulo_pagina); ?></title>
        <meta name="description" content="<?php echo htmlspecialchars($desc_pagina); ?>">
        <link rel="canonical" href="<?php echo $url_canonical; ?>">
    
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="css/style.css">

        <!-- Meta Pixel Code: Hot Springs - Web (1060524906953580) -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1060524906953580');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1060524906953580&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
    </head>
    <body data-niche="<?php echo $data_niche; ?>">

        <header class="site-header">
                
            <div class="wrap">
                <a href="index" class="logo" aria-label="Hot Springs LLC, inicio">
                <img src="images/hsllc.png" alt="Hot Springs LLC, logo" width="40" height="40">
                <span class="logo-text">
                    <strong>Hot Springs</strong>
                    <span>LLC · Tienda de recomendaciones</span>
                </span>
                </a>

                <nav class="main-nav" aria-label="Navegación principal">
                    <?php $pagina_actual = basename($_GET['url'] ?? 'index'); ?>
                    <ul>
                        <li><a href="index" class="<?php echo $pagina_actual === 'index' ? 'is-active' : ''; ?>">Inicio</a></li>
                        <li><a href="belleza" data-niche="belleza" class="<?php echo $pagina_actual === 'belleza' ? 'is-active' : ''; ?>">Belleza y Cuidado</a></li>
                        <li><a href="hogar" data-niche="hogar" class="<?php echo $pagina_actual === 'hogar' ? 'is-active' : ''; ?>">Cocina y Hogar</a></li>
                        <li><a href="vida" data-niche="vida" class="<?php echo $pagina_actual === 'vida' ? 'is-active' : ''; ?>">Vida Activa y Viajes</a></li>
                        <li><a href="contacto" class="<?php echo $pagina_actual === 'contacto' ? 'is-active' : ''; ?>">Contacto</a></li>
                        <li><a href="privacidad" class="<?php echo $pagina_actual === 'privacidad' ? 'is-active' : ''; ?>">Privacidad</a></li>
                        <li><a href="terminos" class="<?php echo $pagina_actual === 'terminos' ? 'is-active' : ''; ?>">Términos</a></li>
                    </ul>
                </nav>

                <button class="nav-toggle" aria-label="Abrir menú" aria-expanded="false">
                <span></span>
                </button>
            </div>
        </header>