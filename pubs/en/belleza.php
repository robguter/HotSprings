<?php
      $meta_title = "Beauty & Care — Hot Springs LLC";
      $meta_description = "Amazon recommendations in beauty and personal care: skin, hair, makeup and daily routines.";
      $canonical = "https://tiendahotspringsllc.com/en/belleza";
      $data_niche ="belleza";

      require_once __DIR__ . '/../header.php';
    ?>

    <section class="niche-hero">
      <div class="wrap">
        <p class="breadcrumb"><a href="/en/">Home</a> / Beauty & Care</p>
        <h1>Beauty & Care</h1>
        <p>Skin, hair, makeup and those little tools that make the daily routine easier — chosen for how well they work, not how good they look in photos.</p>
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
