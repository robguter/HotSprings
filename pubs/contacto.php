<?php
    // contacto.php - Functional Support Page of Hot Springs LLC
    $meta_title = "Contact & Support - Hot Springs";
    $meta_description = "Official contact form for Hot Springs LLC. Write to us with questions, suggestions or collaboration ideas about visiting Hot Springs, Arkansas.";
    $canonical = "https://tiendahotspringsllc.com/contacto";
      $data_niche ="";

    require_once 'header.php';

    // ==========================================================================
    // FORM PROCESSING AND EMAIL SENDING LOGIC (PURE PHP)
    // ==========================================================================
    $mensaje_resultado = ""; // Variable to display alerts on screen

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize user input to prevent hacking or injections
        $nombre = strip_tags(trim($_POST["nombre"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $mensaje = strip_tags(trim($_POST["mensaje"]));
        
        $destinatario = "admin@tiendahotspringsllc.com";
        $asunto = "New support message on Hot Springs: $nombre";
        
        $contenido_email = "You have received a new message from your website's contact form.\n\n";
        $contenido_email .= "Name: $nombre\n";
        $contenido_email .= "Email: $email\n\n";
        $contenido_email .= "Message:\n$mensaje\n";

        // Required headers so the email does not land in the SPAM folder
        $cabeceras = "From: web@tiendahotspringsllc.com\r\n"; // The sender must be an email address on your own domain
        $cabeceras .= "Reply-To: $email\r\n";          // If you hit 'Reply', it goes straight to the visitor
        $cabeceras .= "X-Mailer: PHP/" . phpversion();
        
        if (mail($destinatario, $asunto, $contenido_email, $cabeceras)) {
            $mensaje_resultado = "<div style='background: #d4edda; color: #155724; padding: 15px; border-radius: 6px; margin-bottom: 20px; text-align: center; font-weight: bold;'>Message sent successfully! We will get back to you very soon.</div>";
        } else {
            $mensaje_resultado = "<div style='background: #f8d7da; color: #721c24; padding: 15px; border-radius: 6px; margin-bottom: 20px; text-align: center; font-weight: bold;'>Error: The server could not send your message. Please try again later.</div>";
        }
    }
?>

<section class="niche-hero">
  <div class="wrap">
    <p class="breadcrumb"><a href="index">Home</a> / Contact & Support</p>
    <h1>Contact & Support</h1>
    <p>Do you have a question about visiting Hot Springs, or a suggestion for our guides? Write to us.</p>
  </div>
</section>
<main class="contenedor-productos">

    <!-- DISPLAYS THE SUCCESS OR ERROR ALERT ON SCREEN -->
    <?php echo $mensaje_resultado; ?>

    <!-- FORM WITH ACTION POINTING TO ITSELF TO PROCESS THE POST -->
    <div class="producto-card producto-card--form">
        <form action="contacto" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            
            <div style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600; font-size: 0.95rem;">Full Name:</label>
                <input type="text" name="nombre" required style="padding: 12px; border: 1px solid var(--gris-borde); border-radius: 6px; font-family: inherit;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600; font-size: 0.95rem;">Email Address:</label>
                <input type="email" name="email" required style="padding: 12px; border: 1px solid var(--gris-borde); border-radius: 6px; font-family: inherit;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600; font-size: 0.95rem;">Your Message or Question:</label>
                <textarea name="mensaje" rows="6" required style="padding: 12px; border: 1px solid var(--gris-borde); border-radius: 6px; font-family: inherit; resize: vertical;"></textarea>
            </div>

            <button type="submit" class="btn-ver-amazon" style="border: none; cursor: pointer; width: 100%;">
                Send Message →
            </button>
        </form>
    </div>
</main>

<?php
      require_once 'footer.php'; ?>
