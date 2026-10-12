<?php
  ini_set('display_errors', 'Off');
  ini_set('log_errors', 'On');

  // ============================================================
  //  Front controller bilingüe (ES por defecto, /en/ en inglés)
  //  - /            -> inicio.php (ES)
  //  - /belleza     -> belleza.php (ES)
  //  - /en/         -> en/inicio.php (EN)
  //  - /en/belleza  -> en/belleza.php (EN)
  //  No requiere cambios en .htaccess: todo pasa por ?url=
  // ============================================================

  $is_english = false;
  $url_param = $_GET['url'] ?? 'index';

  // Canónica sin .php: /belleza.php -> 301 a /belleza (también en /en/)
  if (substr($url_param, -4) === '.php') {
      $canon = preg_replace('#\.php$#', '', $url_param);
      header('Location: https://tiendahotspringsllc.com/' . $canon, true, 301);
      exit;
  }

  if (preg_match('#^en(/|$)#', $url_param)) {
      $is_english = true;
      $resto = preg_replace('#^en/#', '', $url_param);
      $resto = ($resto === '' || $resto === 'en') ? 'index' : $resto;
  } else {
      $resto = ($url_param === '') ? 'index' : $url_param;
  }

  // ------------------------------------------------------------
  //  Redirección automática por idioma del navegador (302)
  //  - Solo en páginas ES, sin cookie hs_lang, sin bots y no-POST
  //  - Los bots ven ambas versiones vía hreflang + sitemap
  // ------------------------------------------------------------
  if (!$is_english && !isset($_COOKIE['hs_lang']) && ($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
      $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
      $es_bot = preg_match('/bot|crawl|slurp|spider|mediapartners|baidu|yandex|sogou|exabot|facebot|ia_archiver/i', $ua);
      $accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
      if (!$es_bot && preg_match('/^\s*en/i', $accept)) {
          $dest = ($resto === 'index') ? 'en/' : 'en/' . basename($resto);
          header('Location: https://tiendahotspringsllc.com/' . $dest, true, 302);
          exit;
      }
  }

  // La cookie siempre refleja la versión que se está viendo
  setcookie('hs_lang', $is_english ? 'en' : 'es', time() + 31536000, '/');

  $pagina = basename($resto); // evita path traversal

  $paginas_validas = ['belleza', 'hogar', 'vida', 'contacto', 'privacidad', 'terminos'];

  if ($is_english) {
      if (in_array($pagina, $paginas_validas) && file_exists("en/{$pagina}.php")) {
          require "en/{$pagina}.php";
      } else {
          require 'en/inicio.php';
      }
  } else {
      if (in_array($pagina, $paginas_validas) && file_exists("{$pagina}.php")) {
          require "{$pagina}.php";
      } else {
          require 'inicio.php';
      }
  }