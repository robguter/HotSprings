<?php
  ini_set('display_errors', 'Off');
  ini_set('log_errors', 'On');
  $pagina = $_GET['url'] ?? 'index';
  $pagina = basename($pagina); // evita path traversal

  $paginas_validas = ['belleza', 'hogar', 'vida', 'contacto', 'privacidad', 'terminos'];

  if (in_array($pagina, $paginas_validas) && file_exists("{$pagina}.php")) {
      require "{$pagina}.php";
  } else {
      require 'inicio.php';
  }