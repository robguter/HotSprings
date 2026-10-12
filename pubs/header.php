<?php
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'On');
    $is_english = isset($is_english) ? $is_english : false;
    $titulo_pagina = isset($meta_title) ? $meta_title : "Hot Springs LLC — Recomendaciones de Amazon: Belleza, Hogar y Vida Activa";
    $desc_pagina   = isset($meta_description) ? $meta_description : "Recomendaciones honestas de productos de Amazon en belleza y cuidado personal, cocina y hogar, y vida activa y viajes.";
    $url_canonica = isset($canonical) ? $canonical : "https://tiendahotspringsllc.com/";
    $data_niche = isset($data_niche) && !empty($data_niche) ? $data_niche : "";

    // hreflang es / en / x-default (bilingüe)
    if ($is_english) {
        $hreflang_es = str_replace('/en/', '/', $url_canonica);
        $hreflang_en = $url_canonica;
    } else {
        $hreflang_es = $url_canonica;
        $hreflang_en = str_replace('tiendahotspringsllc.com/', 'tiendahotspringsllc.com/en/', $url_canonica);
    }

    // Slug de la página actual (para nav activa y switcher de idioma)
    $url_raw = $_GET['url'] ?? 'index';
    $url_raw = preg_replace('#^en/#', '', $url_raw);
    $url_raw = rtrim($url_raw, '/');
    $slug_actual = ($url_raw === '' || $url_raw === 'en' || $url_raw === 'index') ? 'index' : basename($url_raw);

    if ($is_english) {
        $nav_items = [
            'index'      => 'Home',
            'belleza'    => 'Beauty & Care',
            'hogar'      => 'Kitchen & Home',
            'vida'       => 'Active Life & Travel',
            'contacto'   => 'Contact',
            'privacidad' => 'Privacy',
            'terminos'   => 'Terms',
        ];
        $logo_sub  = 'LLC · Recommendation store';
        $aria_nav  = 'Main navigation';
        $aria_logo = 'Hot Springs LLC, home';
        $aria_menu = 'Open menu';
    } else {
        $nav_items = [
            'index'      => 'Inicio',
            'belleza'    => 'Belleza y Cuidado',
            'hogar'      => 'Cocina y Hogar',
            'vida'       => 'Vida Activa y Viajes',
            'contacto'   => 'Contacto',
            'privacidad' => 'Privacidad',
            'terminos'   => 'Términos',
        ];
        $logo_sub  = 'LLC · Tienda de recomendaciones';
        $aria_nav  = 'Navegación principal';
        $aria_logo = 'Hot Springs LLC, inicio';
        $aria_menu = 'Abrir menú';
    }

    // URLs del switcher ES | EN (misma página en el otro idioma)
    $es_url = ($slug_actual === 'index') ? '/' : '/' . $slug_actual;
    $en_url = ($slug_actual === 'index') ? '/en/' : '/en/' . $slug_actual;
?>
<!DOCTYPE html>
<html lang="<?php echo $is_english ? 'en' : 'es'; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo htmlspecialchars($titulo_pagina); ?></title>
        <meta name="description" content="<?php echo htmlspecialchars($desc_pagina); ?>">
        <link rel="canonical" href="<?php echo $url_canonica; ?>">
        <link rel="alternate" hreflang="es" href="<?php echo $hreflang_es; ?>">
        <link rel="alternate" hreflang="en" href="<?php echo $hreflang_en; ?>">
        <link rel="alternate" hreflang="x-default" href="<?php echo $hreflang_es; ?>">

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
                <a href="<?php echo $is_english ? '/en/' : '/'; ?>" class="logo" aria-label="<?php echo $aria_logo; ?>">
                    <img src="/images/hsllc.png" alt="Hot Springs LLC, logo" width="40" height="40">
                    <span class="logo-text">
                        <strong>Hot Springs</strong>
                        <span><?php echo $logo_sub; ?></span>
                    </span>
                </a>
                <nav class="main-nav" aria-label="<?php echo $aria_nav; ?>">
                    <ul>
                        <?php foreach ($nav_items as $key => $label): ?>
                            <?php $href = ($key === 'index') ? ($is_english ? '/en/' : '/') : ($is_english ? '/en/' . $key : '/' . $key); ?>
                            <li><a href="<?php echo $href; ?>" class="<?php echo $slug_actual === $key ? 'is-active' : ''; ?>"><?php echo $label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <div class="lang-switcher" aria-label="Idioma / Language">
                    <a href="<?php echo $es_url; ?>" class="<?php echo !$is_english ? 'is-active' : ''; ?>">ES</a><span class="sep">|</span><a href="<?php echo $en_url; ?>" class="<?php echo $is_english ? 'is-active' : ''; ?>">EN</a>
                </div>
                <button class="nav-toggle" aria-label="<?php echo $aria_menu; ?>" aria-expanded="false">
                    <span></span>
                </button>
            </div>
        </header>