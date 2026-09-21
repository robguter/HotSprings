  <?php
    $meta_title = "Cocina y Hogar — Hot Springs LLC";
    $meta_description = "Recomendaciones de Amazon en cocina y hogar: electrodomésticos, utensilios y organización.";
    $canonical = "https://tiendahotspringsllc.com/hogar";
    $data_niche ="hogar";
    
    require_once 'header.php';
  ?>

<section class="niche-hero">
  <div class="wrap">
    <p class="breadcrumb"><a href="index">Inicio</a> / Cocina y Hogar</p>
    <h1>Cocina y Hogar</h1>
    <p>Utensilios, electrodomésticos y organización pensados para que cocinar y mantener la casa en orden tome menos esfuerzo.</p>
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
