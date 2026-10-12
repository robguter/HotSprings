<?php
// /en/ es un directorio real: el .htaccess no lo reescribe -> 403.
// Este archivo delega al front controller manteniendo la URL limpia.
chdir(__DIR__ . '/..');
$_GET['url'] = 'en/';
require __DIR__ . '/../index.php';