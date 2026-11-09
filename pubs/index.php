<?php
  ini_set('display_errors', 'Off');
  ini_set('log_errors', 'On');

  // ============================================================
  //  Front controller bilingüe (EN por defecto, /es/ en español)
  //  - /                              -> inicio.php (EN)
  //  - /things-to-do-in-hot-springs   -> things-to-do-in-hot-springs.php (EN)
  //  - /es/                           -> es/inicio.php (ES)
  //  - /es/things-to-do-in-hot-springs -> es/things-to-do-in-hot-springs.php (ES)
  //  Páginas viejas (belleza, hogar, vida y todo /en/) -> 301 a la nueva web
  //  No requiere cambios en .htaccess: todo pasa por ?url=
  // ============================================================

  $is_spanish = false;
  $url_param = $_GET['url'] ?? 'index';

  // Canónica sin .php: /things-to-do-in-hot-springs.php -> 301 sin .php (también en /es/)
  if (substr($url_param, -4) === '.php') {
      $canon = preg_replace('#\.php$#', '', $url_param);
      header('Location: https://tiendahotspringsllc.com/' . $canon, true, 301);
      exit;
  }

  // Páginas válidas en inglés (raíz) y en español (/es/)
  $paginas_en = ['things-to-do-in-hot-springs', 'where-to-stay-in-hot-springs', 'hot-springs-2-day-itinerary', 'contacto', 'privacidad', 'terminos'];
  $paginas_es = ['things-to-do-in-hot-springs', 'where-to-stay-in-hot-springs', 'hot-springs-2-day-itinerary'];
  // Páginas con versión en los dos idiomas (para la redirección por idioma)
  $paginas_bilingues = ['index', 'things-to-do-in-hot-springs', 'where-to-stay-in-hot-springs', 'hot-springs-2-day-itinerary'];

  // Lo viejo en /en/ ya no existe: 301 a la página equivalente en la raíz
  if (preg_match('#^en(/|$)#', $url_param)) {
      $resto_en = preg_replace('#^en/#', '', $url_param);
      $base_en = basename($resto_en);
      if (in_array($base_en, $paginas_en, true)) {
          header('Location: https://tiendahotspringsllc.com/' . $base_en, true, 301);
      } else {
          header('Location: https://tiendahotspringsllc.com/', true, 301);
      }
      exit;
  }

  if (preg_match('#^es(/|$)#', $url_param)) {
      $is_spanish = true;
      $resto = preg_replace('#^es/#', '', $url_param);
      $resto = ($resto === '' || $resto === 'es') ? 'index' : $resto;
  } else {
      $resto = ($url_param === '') ? 'index' : $url_param;
  }

  $pagina = basename($resto); // evita path traversal

  // Páginas viejas de la tienda de productos: 301 a la portada nueva
  if (in_array($pagina, ['belleza', 'hogar', 'vida'], true)) {
      header('Location: https://tiendahotspringsllc.com/', true, 301);
      exit;
  }

  // ------------------------------------------------------------
  //  Redirección automática por idioma del navegador (302)
  //  - Solo en páginas bilingües, sin cookie hs_lang, sin bots y no-POST
  //  - Los bots ven ambas versiones vía hreflang + sitemap
  // ------------------------------------------------------------
  if (in_array($pagina, $paginas_bilingues, true) && !isset($_COOKIE['hs_lang']) && ($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
      $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
      $es_bot = preg_match('/bot|crawl|slurp|spider|mediapartners|baidu|yandex|sogou|exabot|facebot|ia_archiver/i', $ua);
      $accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
      if (!$es_bot) {
          if (!$is_spanish && preg_match('/^\s*es/i', $accept)) {
              $dest = ($pagina === 'index') ? 'es/' : 'es/' . $pagina;
              header('Location: https://tiendahotspringsllc.com/' . $dest, true, 302);
              exit;
          }
          if ($is_spanish && preg_match('/^\s*en/i', $accept)) {
              $dest = ($pagina === 'index') ? '' : $pagina;
              header('Location: https://tiendahotspringsllc.com/' . $dest, true, 302);
              exit;
          }
      }
  }

  // La cookie siempre refleja la versión que se está viendo
  setcookie('hs_lang', $is_spanish ? 'es' : 'en', time() + 31536000, '/');

  if ($is_spanish) {
      if ($pagina === 'index') {
          require 'es/inicio.php';
      } elseif (in_array($pagina, $paginas_es, true) && file_exists("es/{$pagina}.php")) {
          require "es/{$pagina}.php";
      } else {
          http_response_code(404);
          require 'es/inicio.php';
      }
  } else {
      if ($pagina === 'index') {
          require 'inicio.php';
      } elseif (in_array($pagina, $paginas_en, true) && file_exists("{$pagina}.php")) {
          require "{$pagina}.php";
      } else {
          http_response_code(404);
          require 'inicio.php';
      }
  }
