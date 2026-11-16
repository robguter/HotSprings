<?php
  // Portada en español: al pedir /es/ el servidor busca un index
  // dentro de esta carpeta; este carga la portada (inicio.php).
  // Guarda el idioma (es) para que el botón EN funcione después.
  setcookie('hs_lang', 'es', time() + 31536000, '/');
  require __DIR__ . '/inicio.php';