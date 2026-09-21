<?php
    // contacto.php - Página de Soporte Funcional de Hot Springs LLC
    $meta_title = "Contacto y Soporte - Hot Springs";
    $meta_description = "Formulario de contacto oficial de Hot Springs LLC. Escríbenos para dudas, sugerencias o colaboraciones sobre el cuidado de perros senior.";
    $canonical = "https://tiendahotspringsllc.com/contacto";
      $data_niche ="";

    require_once 'header.php';

    // ==========================================================================
    // LÓGICA DE PROCESAMIENTO Y ENVÍO DEL CORREO (PHP PURO)
    // ==========================================================================
    $mensaje_resultado = ""; // Variable para mostrar alertas en pantalla

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitizar las entradas del usuario para evitar hackeos o inyecciones
        $nombre = strip_tags(trim($_POST["nombre"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $mensaje = strip_tags(trim($_POST["mensaje"]));
        
        $destinatario = "admin@tiendahotspringsllc.com";
        $asunto = "Nuevo mensaje de soporte en Hot Springs: $nombre";
        
        $contenido_email = "Has recibido un nuevo mensaje desde el formulario de contacto de tu web.\n\n";
        $contenido_email .= "Nombre: $nombre\n";
        $contenido_email .= "Correo: $email\n\n";
        $contenido_email .= "Mensaje:\n$mensaje\n";

        // Encabezados obligatorios para que el correo no caiga en la carpeta de SPAM
        $cabeceras = "From: web@tiendahotspringsllc.com\r\n"; // El remitente debe ser un correo de tu propio dominio
        $cabeceras .= "Reply-To: $email\r\n";          // Si le das a 'Responder', le llegará directo al cliente
        $cabeceras .= "X-Mailer: PHP/" . phpversion();
        
        if (mail($destinatario, $asunto, $contenido_email, $cabeceras)) {
            $mensaje_resultado = "<div style='background: #d4edda; color: #155724; padding: 15px; border-radius: 6px; margin-bottom: 20px; text-align: center; font-weight: bold;'>¡Mensaje enviado con éxito! Te responderemos muy pronto.</div>";
        } else {
            $mensaje_resultado = "<div style='background: #f8d7da; color: #721c24; padding: 15px; border-radius: 6px; margin-bottom: 20px; text-align: center; font-weight: bold;'>Error: El servidor no pudo enviar tu mensaje. Inténtalo más tarde.</div>";
        }
    }
?>

<section class="niche-hero">
  <div class="wrap">
    <p class="breadcrumb"><a href="index">Inicio</a> / Contacto y Soporte</p>
    <h1>Contacto y Soporte</h1>
    <p>¿Tienes una pregunta sobre algún producto o una sugerencia para el catálogo? Escríbenos.</p>
  </div>
</section>
<main class="contenedor-productos">

    <!-- MUESTRA LA ALERTA DE ÉXITO O ERROR EN PANTALLA -->
    <?php echo $mensaje_resultado; ?>

    <!-- FORMULARIO CON ACTION APUNTANDO A SÍ MISMO PARA PROCESAR EL POST -->
    <div class="producto-card producto-card--form">
        <form action="contacto" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            
            <div style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600; font-size: 0.95rem;">Nombre Completo:</label>
                <input type="text" name="nombre" required style="padding: 12px; border: 1px solid var(--gris-borde); border-radius: 6px; font-family: inherit;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600; font-size: 0.95rem;">Correo Electrónico:</label>
                <input type="email" name="email" required style="padding: 12px; border: 1px solid var(--gris-borde); border-radius: 6px; font-family: inherit;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600; font-size: 0.95rem;">Tu Mensaje o Consulta:</label>
                <textarea name="mensaje" rows="6" required style="padding: 12px; border: 1px solid var(--gris-borde); border-radius: 6px; font-family: inherit; resize: vertical;"></textarea>
            </div>

            <button type="submit" class="btn-ver-amazon" style="border: none; cursor: pointer; width: 100%;">
                Enviar Mensaje →
            </button>
        </form>
    </div>
</main>

<?php
      require_once 'footer.php'; ?>