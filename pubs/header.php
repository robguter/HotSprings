<?php
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'On');
    $is_spanish = isset($is_spanish) ? $is_spanish : false;
    $tiene_traduccion = isset($tiene_traduccion) ? $tiene_traduccion : false;
    if ($is_spanish) {
        $titulo_pagina = isset($meta_title) ? $meta_title : "Hot Springs, Arkansas — Guía de Viajes: Termas, Hoteles y Lagos";
        $desc_pagina   = isset($meta_description) ? $meta_description : "Planifica tu viaje a Hot Springs, Arkansas: báñate en las casas de baño históricas de Bathhouse Row, explora el Parque Nacional Hot Springs y pasa un día en el Lago Hamilton o el Lago Ouachita.";
        $url_canonica  = isset($canonical) ? $canonical : "https://tiendahotspringsllc.com/es/";
    } else {
        $titulo_pagina = isset($meta_title) ? $meta_title : "Hot Springs, Arkansas — Travel Guide: Baths, Hotels & Lakes";
        $desc_pagina   = isset($meta_description) ? $meta_description : "Plan your trip to Hot Springs, Arkansas: soak in the historic bathhouses on Bathhouse Row, explore Hot Springs National Park, and spend a day on Lake Hamilton or Lake Ouachita.";
        $url_canonica  = isset($canonical) ? $canonical : "https://tiendahotspringsllc.com/";
    }
    $data_niche = isset($data_niche) && !empty($data_niche) ? $data_niche : "";

    // hreflang en / es / x-default (solo en páginas con las dos versiones)
    if ($is_spanish) {
        $hreflang_es = $url_canonica;
        $hreflang_en = str_replace('tiendahotspringsllc.com/es/', 'tiendahotspringsllc.com/', $url_canonica);
    } else {
        $hreflang_en = $url_canonica;
        $hreflang_es = str_replace('tiendahotspringsllc.com/', 'tiendahotspringsllc.com/es/', $url_canonica);
    }

    // Slug de la página actual (para nav activa y switcher de idioma)
    $url_raw = $_GET['url'] ?? 'index';
    $url_raw = preg_replace('#^es/#', '', $url_raw);
    $url_raw = rtrim($url_raw, '/');
    $slug_actual = ($url_raw === '' || $url_raw === 'es' || $url_raw === 'index') ? 'index' : basename($url_raw);

    if ($is_spanish) {
        $nav_items = [
            'index'                        => 'Inicio',
            'things-to-do-in-hot-springs'  => 'Qué Hacer',
            'where-to-stay-in-hot-springs' => 'Dónde Dormir',
            'hot-springs-2-day-itinerary'  => 'Itinerario de 2 Días',
            'contacto'                     => 'Contacto',
        ];
        $logo_sub  = 'Arkansas · Guía de Viajes';
        $aria_nav  = 'Navegación principal';
        $aria_logo = 'Hot Springs, Arkansas guía de viajes — inicio';
        $aria_menu = 'Abrir menú';
    } else {
        $nav_items = [
            'index'                        => 'Home',
            'things-to-do-in-hot-springs'  => 'Things to Do',
            'where-to-stay-in-hot-springs' => 'Where to Stay',
            'hot-springs-2-day-itinerary'  => '2-Day Itinerary',
            'contacto'                     => 'Contact',
        ];
        $logo_sub  = 'Arkansas · Travel Guide';
        $aria_nav  = 'Main navigation';
        $aria_logo = 'Hot Springs, Arkansas travel guide — home';
        $aria_menu = 'Open menu';
    }

    // URLs del switcher EN | ES (misma página en el otro idioma)
    $en_url = ($slug_actual === 'index') ? '/' : '/' . $slug_actual;
    $es_url = ($slug_actual === 'index') ? '/es/' : '/es/' . $slug_actual;
    $home_url = $is_spanish ? '/es/' : '/';
?>
<!DOCTYPE html>
<html lang="<?php echo $is_spanish ? 'es' : 'en'; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo htmlspecialchars($titulo_pagina); ?></title>
        <meta name="description" content="<?php echo htmlspecialchars($desc_pagina); ?>">
        <link rel="canonical" href="<?php echo $url_canonica; ?>">
        <?php if ($tiene_traduccion): ?>
        <link rel="alternate" hreflang="en" href="<?php echo $hreflang_en; ?>">
        <link rel="alternate" hreflang="es" href="<?php echo $hreflang_es; ?>">
        <link rel="alternate" hreflang="x-default" href="<?php echo $hreflang_en; ?>">
        <?php endif; ?>

        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="/css/style.css">
        <style>
            .lang-switcher{display:inline-flex;align-items:center;gap:.4rem;font-size:.85rem;font-weight:600;white-space:nowrap}
            .lang-switcher a{text-decoration:none;opacity:.55}
            .lang-switcher a.is-active{opacity:1;text-decoration:underline}
            .lang-switcher .sep{opacity:.4}
        </style>

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

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Hot Springs LLC",
            "url": "https://tiendahotspringsllc.com/"
        }
        </script>

        <!-- End Meta Pixel Code -->
    </head>
    <body data-niche="<?php echo $data_niche; ?>">

        <header class="site-header">
            <div class="wrap">
                <a href="<?php echo $home_url; ?>" class="logo" aria-label="<?php echo $aria_logo; ?>">
                    <img src="/images/hsllc.png" alt="Hot Springs LLC, logo" width="40" height="40">
                    <span class="logo-text">
                        <strong>Hot Springs</strong>
                        <span><?php echo $logo_sub; ?></span>
                    </span>
                </a>
                <nav class="main-nav" aria-label="<?php echo $aria_nav; ?>">
                    <ul>
                        <?php foreach ($nav_items as $key => $label): ?>
                            <?php
                                if ($key === 'contacto') {
                                    $href = '/contacto';
                                } elseif ($key === 'index') {
                                    $href = $home_url;
                                } else {
                                    $href = ($is_spanish ? '/es/' : '/') . $key;
                                }
                            ?>
                            <li><a href="<?php echo $href; ?>" class="<?php echo $slug_actual === $key ? 'is-active' : ''; ?>"><?php echo $label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <?php if ($tiene_traduccion): ?>
                <div class="lang-switcher" aria-label="Language / Idioma">
                    <a href="<?php echo $en_url; ?>" class="<?php echo !$is_spanish ? 'is-active' : ''; ?>">EN</a><span class="sep">|</span><a href="<?php echo $es_url; ?>" class="<?php echo $is_spanish ? 'is-active' : ''; ?>">ES</a>
                </div>
                <?php endif; ?>
                <button class="nav-toggle" aria-label="<?php echo $aria_menu; ?>" aria-expanded="false">
                    <span></span>
                </button>
            </div>
        </header>
