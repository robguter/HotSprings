<?php
      $meta_title = "Active Life, Gear & Travel — Hot Springs LLC";
      $meta_description = "Amazon recommendations for active living, gear and travel: fitness, luggage and travel accessories.";
      $canonical = "https://tiendahotspringsllc.com/en/vida";
      $data_niche ="vida";

      require_once __DIR__ . '/../header.php';
    ?>

    <section class="niche-hero">
      <div class="wrap">
        <p class="breadcrumb"><a href="/en/">Home</a> / Active Life, Gear & Travel</p>
        <h1>Active Life, Gear & Travel</h1>
        <p>Gear that stands up to real use, plus fitness and travel accessories worth packing.</p>
      </div>
    </section>

    <section class="filters">
      <div class="wrap" id="filtros"></div>
    </section>

    <section class="products">
      <div class="wrap">
        <div class="product-grid" id="grid"></div>
        <p class="empty-state" id="vacio">No products in this category yet.</p>
      </div>
    </section>

    <div class="disclosure">
      <div class="wrap">
        As an Amazon Associate, Hot Springs LLC earns from qualifying purchases, at no additional cost to you.
      </div>
    </div>

    <?php
      require_once __DIR__ . '/../footer.php';
    ?>
