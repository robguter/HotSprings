    <?php
      $meta_title = "Vida Activa, Equipaje y Viajes — Hot Springs LLC";
      $meta_description = "Recomendaciones de Amazon en vida activa, equipaje y viajes: fitness, maletas y accesorios de viaje.";
      $canonical = "https://tiendahotspringsllc.com/vida";
      $data_niche ="vida";
      
      require_once 'header.php';
    ?>

    <section class="niche-hero">
      <div class="wrap">
        <p class="breadcrumb"><a href="index">Inicio</a> / Vida Activa, Equipaje y Viajes</p>
        <h1>Vida Activa, Equipaje y Viajes</h1>
        <p>Equipaje que aguanta el uso real, y accesorios de fitness y viaje que valen la pena llevar contigo.</p>
      </div>
    </section>

    <section class="filters">
      <div class="wrap" id="filtros"></div>
    </section>

    <section class="products">
      <div class="wrap">
        <div class="product-grid" id="grid"></div>
        <p class="empty-state" id="vacio">No hay productos en esta categoría todavía.</p>
      </div>
    </section>

    <div class="disclosure">
      <div class="wrap">
        Como Afiliados de Amazon, Hot Springs LLC obtiene una comisión por las compras que califican, sin costo adicional para ti.
      </div>
    </div>

    <?php
      require_once 'footer.php'; // si tu footer también está separado ?>
