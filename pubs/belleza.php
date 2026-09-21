    <?php
      $meta_title = "Belleza y Cuidado — Hot Springs LLC";
      $meta_description = "Recomendaciones de Amazon en belleza y cuidado personal: piel, cabello, maquillaje y rutinas diarias.";
      $canonical = "https://tiendahotspringsllc.com/belleza";
      $data_niche ="belleza";
      
      require_once 'header.php';
    ?>

    <section class="niche-hero">
      <div class="wrap">
        <p class="breadcrumb"><a href="index">Inicio</a> / Belleza y Cuidado</p>
        <h1>Belleza y Cuidado</h1>
        <p>Piel, cabello, maquillaje y esas pequeñas herramientas que hacen la rutina diaria más fácil — elegidas por lo bien que funcionan, no por lo bonitas que se ven en foto.</p>
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
