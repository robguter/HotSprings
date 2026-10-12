/* ===========================================================
  PRODUCT CATALOG — real Amazon products (ENGLISH version)
  -----------------------------------------------------------
  Mirrors pubs/js/products.js. Only name / cat / blurb are
  translated; precio, asin and icon stay identical.
  precio: free text (range or fixed price), updated by hand
  from time to time if Amazon changes the real price a lot.
  =========================================================== */

const PRODUCTS = {

  belleza: [
    { name:"Blissy Silk Pillowcase", cat:"Skin", blurb:"100% 22-momme mulberry silk pillowcase: won't absorb your creams, reduces sleep lines and leaves hair frizz-free in the morning.", precio:"$57.98 – $109.95", icon:"<img src='/images/belleza/belleza_011.webp' >", asin:"B0BFDH1DL4" },
    { name:"LAPCOS Collagen Overnight Mask, 4 pcs", cat:"Skin", blurb:"The Korean glass-skin secret: hydrogel mask with collagen — sleep in it and wake up with hydrated, glowing skin.", precio:"$19.00 – $29.00", icon:"<img src='/images/belleza/belleza_021.webp' >", asin:"B0DTQ11K1B" },
    { name:"Estée Lauder Dream Skin In One Sleep, 4-Piece Set", cat:"Skin", blurb:"Cleanser, serum, moisturizer and overnight treatment from a recognized luxury brand.", precio:"$45.00", icon:"<img src='/images/belleza/belleza_01.webp' >", asin:"B0FNRT96B8" },
    { name:"Professional Makeup Brush Set, Travel Edition", cat:"Makeup", blurb:"Soft bristles and ergonomic handle, with a compact case to take anywhere.", precio:"$9.99 – $24.99", icon:"<img src='/images/belleza/belleza_02.webp' >", asin:"B0FLX6PPYT" },
    { name:"Remington Shine Therapy with Argan & Keratin Hair Straightener", cat:"Hair", blurb:"Plates infused with argan oil and keratin to reduce frizz and add shine.", precio:"$33.99 – $79.98", icon:"<img src='/images/belleza/belleza_03.webp' >", asin:"B09RTLFV3F" },
    { name:"Tri-Fold Vanity Mirror with Magnification & LED Light, Rose Gold", cat:"Personal Care", blurb:"Three foldable panels with adjustable light, ideal for precision routines.", precio:"$21.49 – $29.98", icon:"<img src='/images/belleza/belleza_04.webp' >", asin:"B06X9TMK83" },
    { name:"Anua 3-Step Set (Beginner Edition)", cat:"Skin", blurb:"Simplified 3-step Korean routine, ideal for starting without complications.", precio:"$45.00", icon:"<img src='/images/belleza/belleza_05.webp' >", asin:"B0F384Y1KR" },
    { name:"Revlon Compact & Lightweight Hair Dryer", cat:"Hair", blurb:"1875W motor in a compact body, ideal for travel.", precio:"$14.98 – $18.99", icon:"<img src='/images/belleza/belleza_06.webp' >", asin:"B07GBZ2D79" },
    { name:"AMEITECH 360° Rotating Makeup Organizer", cat:"Organization", blurb:"8 levels with large capacity, full rotation to see your whole set at a glance.", precio:"$17.99 – $25.99", icon:"<img src='/images/belleza/belleza_07.webp' >", asin:"B073S4PQ6H" },
    { name:"BAIMEI IcyMe Rose Quartz Roller & Gua Sha Facial Set", cat:"Skin", blurb:"Cooling facial massage to de-puff and relax, with gua sha tool included.", precio:"$9.99 – $19.99", icon:"<img src='/images/belleza/belleza_08.webp' >", asin:"B07WWC3T9Q" }
  ],

  hogar: [
    { name:"Rain Cloud Humidifier with Light", cat:"Ambiance", blurb:"A cloud that really rains, with real rain sounds and 7-color light. Humidifies, diffuses your essential oils and decorates.", precio:"$45.99 – $49.99", icon:"<img src='/images/hogar/hogar_011.webp' >", asin:"B0CM8Q8884" },
    { name:"ASAKUKI 500ML Essential Oil Diffuser", cat:"Ambiance", blurb:"Silent ultrasonic cool mist, 7 LED light colors, remote control and auto shut-off. Your room becomes a spa.", precio:"$19.47 – $31.99", icon:"<img src='/images/hogar/hogar_021.webp' >", asin:"B01MR4Y0CZ" },
    { name:"Halloween Floating LED Candles, 20 pcs", cat:"Decor", blurb:"20 LED candles that look like they float, with a magic wand to light them with a gesture. No fire or wax, safe around kids and pets.", precio:"$13.50 – $19.99", icon:"<img src='/images/hogar/hogar_031.webp' >", asin:"B0FH9YBRNK" },
    { name:"Utopia Kitchen Nonstick Cookware Set, 3 Pieces", cat:"Kitchen", blurb:"Even heat distribution for cooking without sticking, induction-ready.", precio:"$34.99", icon:"<img src='/images/hogar/hogar_01.webp' >", asin:"B073WFLD35" },
    { name:"Cosori TurboBlaze Air Fryer, 9-in-1, 6 Qt", cat:"Appliances", blurb:"Crispy meals using a fraction of the usual oil, with 5 speed levels.", precio:"$99.99 – $129.99", icon:"<img src='/images/hogar/hogar_02.webp' >", asin:"B0C33CHG99" },
    { name:"HENCKELS Professional Knife Set, 15 Pieces", cat:"Kitchen", blurb:"Long-lasting stainless steel edge with a comfortable balance for everyday cutting.", precio:"$149.95 – $169.93", icon:"<img src='/images/hogar/hogar_03.webp' >", asin:"B00GHX5HGG" },
    { name:"Kamenstein 20-Jar Rotating Spice Organizer", cat:"Organization", blurb:"Every jar a spin away, with free spice refills for 5 years.", precio:"$50.99", icon:"<img src='/images/hogar/hogar_04.webp' >", asin:"B00008WQ3L" },
    { name:"Hamilton Beach 2-Way Brewer, Single Serve & 12-Cup", cat:"Appliances", blurb:"Program the night before and wake up to ready coffee, with single-cup option.", precio:"$88.95 – $88.99", icon:"<img src='/images/hogar/hogar_05.webp' >", asin:"B00EI7DPPI" },
    { name:"JoyJolt 24-Piece Glass Food Storage Set with Lids", cat:"Organization", blurb:"Store leftovers without stains or lingering odors, freezer-safe.", precio:"$36.25 – $50.71", icon:"<img src='/images/hogar/hogar_06.webp' >", asin:"B09ZP2K9VP" },
    { name:"Eufy 11S MAX Robot Vacuum, Super Slim", cat:"Appliances", blurb:"Automatic, quiet cleaning, ideal for hard floors and medium-pile rugs.", precio:"$169.99", icon:"<img src='/images/hogar/hogar_07.webp' >", asin:"B07R295MLS" },
    { name:"ASAKUKI Essential Oil Diffuser, 500ML with LED Light", cat:"Ambiance", blurb:"A steady, gentle aroma in any room, with color lights and remote control.", precio:"$20.49 – $31.99", icon:"<img src='/images/hogar/hogar_08.webp' >", asin:"B07BMVCBDD" }
  ],

  vida: [
    { name:"Bob and Brad Q2 Pro Mini Massage Gun", cat:"Fitness", blurb:"Physical-therapist recovery in your pocket: deep percussion with hot and cold head. Fits any bag, charges via USB-C.", precio:"$59.48 – $113.99", icon:"<img src='/images/vida/vida_011.webp' >", asin:"B0D16W8531" },
    { name:"WHATAFIT Resistance Bands Set", cat:"Fitness", blurb:"5 bands from 10 to 30 lbs (combinable up to 100 lbs) with padded handles, door anchor and travel bag. The gym that fits in a drawer.", precio:"$19.55 – $42.49", icon:"<img src='/images/vida/vida_021.webp' >", asin:"B0CGR95HBW" },
    { name:"Sunrise Simulation Alarm Clock", cat:"Wellness", blurb:"Simulates sunrise 30 minutes before your time: the light rises gradually like the sun and you wake up naturally, without jolts.", precio:"$39.99", icon:"<img src='/images/vida/vida_031.webp' >", asin:"B0C8TTCQDL" },
    { name:"Travelers Club Chicago Expandable Hardside Luggage, 22\" Carry-On", cat:"Luggage", blurb:"Impact-resistant and easy to maneuver through aisles, with 360° spinner wheels.", precio:"$48.00 – $74.79", icon:"<img src='/images/vida/vida_01.webp' >", asin:"B0787DL55W" },
    { name:"WENIG Anti-Theft Backpack with USB Port, 15.6\"", cat:"Luggage", blurb:"Hidden compartments and on-the-go phone charging, water-resistant.", precio:"$19.99 – $26.99", icon:"<img src='/images/vida/vida_02.webp' >", asin:"B07YF1RWYV" },
    { name:"BAGAIL Set of 8 Packing Cubes for Luggage", cat:"Luggage", blurb:"Pack by category and find everything without unpacking the suitcase.", precio:"$16.98 – $34.99", icon:"<img src='/images/vida/vida_03.webp' >", asin:"B0C58697GB" },
    { name:"Owala FreeSip Stainless Steel Thermal Bottle, 24 oz", cat:"Accessories", blurb:"Cold or hot for hours, tough enough for daily use and travel.", precio:"$29.99", icon:"<img src='/images/vida/vida_04.webp' >", asin:"B0FFTNJVQN" },
    { name:"Fit Simplify Resistance Bands, Set of 5", cat:"Fitness", blurb:"Train at home or on the road with no machines needed, with guide and carry bag.", precio:"$9.98", icon:"<img src='/images/vida/vida_05.webp' >", asin:"B01AVDVHTI" },
    { name:"Gaiam Thick Yoga Mat with Carrying Strap", cat:"Fitness", blurb:"Firm grip and good cushioning for daily routines, with an easy-adjust strap.", precio:"$22.48 – $25.41", icon:"<img src='/images/vida/vida_06.webp' >", asin:"B07H9PZ6MH" },
    { name:"Napfun Memory Foam Travel Pillow, 360° Support", cat:"Accessories", blurb:"Real neck support on flights and long trips, with adjustable strap.", precio:"$13.96 – $21.99", icon:"<img src='/images/vida/vida_07.webp' >", asin:"B09JC5CZFY" },
    { name:"Etekcity Digital Luggage Scale, up to 110 lb", cat:"Luggage", blurb:"Avoid surprises and extra fees when checking your bag, with a sturdy hook.", precio:"$10.99 – $18.86", icon:"<img src='/images/vida/vida_08.webp' >", asin:"B082LYC2TN" }
  ]

};

/**
 * Draws the product cards of a niche inside a container,
 * and builds the filter chips from the categories present.
 */
function renderNiche(nicheKey, gridSelector, filtersSelector, emptyStateSelector){
  const grid = document.querySelector(gridSelector);
  const filtersBar = document.querySelector(filtersSelector);
  const emptyState = document.querySelector(emptyStateSelector);
  const items = PRODUCTS[nicheKey] || [];

  const categories = ["All", ...Array.from(new Set(items.map(p => p.cat)))];

  filtersBar.innerHTML = categories.map((cat, i) =>
    `<button class="chip${i === 0 ? " is-active" : ""}" data-cat="${cat}">${cat}</button>`
  ).join("");

  function draw(filterCat){
    const list = filterCat === "All" ? items : items.filter(p => p.cat === filterCat);
    grid.innerHTML = list.map(p => `
      <article class="product-card">
        <h5>Illustrative photo</h5>
        <div class="product-media">${p.icon}</div>
        <div class="product-body">
          <span class="product-cat">${p.cat}</span>
          <h3>${p.name}</h3>
          <p>${p.blurb}</p>
          <div class="product-foot">
            <span class="price-tier">${p.precio}</span>
            <a class="product-cta" href="${buildAmazonLink(p)}" target="_blank" rel="nofollow sponsored noopener">
              View on Amazon
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17 17 7M9 7h8v8"/></svg>
            </a>
          </div>
        </div>
      </article>
    `).join("");
    emptyState.classList.toggle("is-visible", list.length === 0);
  }

  filtersBar.addEventListener("click", (e) => {
    const btn = e.target.closest(".chip");
    if (!btn) return;
    filtersBar.querySelectorAll(".chip").forEach(c => c.classList.remove("is-active"));
    btn.classList.add("is-active");
    draw(btn.dataset.cat);
  });
  draw("All");

  // Structured data: ItemList of Products (with offers, per Search Console)
  (function(){
    var items = (PRODUCTS[nicheKey] || []).map(function(p, i){
      var m = (p.icon || "").match(/src='([^']+)'/);
      var src = m ? m[1] : "";
      if (src && src.indexOf("http") !== 0) src = "https://tiendahotspringsllc.com" + (src.charAt(0) === "/" ? "" : "/") + src;
      // offers: Search Console requires "offers", "review" or "aggregateRating" on Product.
      // Takes the first value of the price range ("$57.98 – $109.95" -> "57.98").
      var precioNum = (p.precio || "").replace(/[^0-9.,\u2013-]/g, "").split(/[\u2013-]/)[0];
      var prod = {
        "@type": "Product",
        "name": p.name,
        "image": src,
        "description": p.blurb,
        "category": p.cat
      };
      if (precioNum) {
        prod.offers = {
          "@type": "Offer",
          "priceCurrency": "USD",
          "price": precioNum,
          "availability": "https://schema.org/InStock",
          "url": buildAmazonLink(p)
        };
      }
      return {
        "@type": "ListItem",
        "position": i + 1,
        "item": prod
      };
    });
    var ld = {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "name": document.title,
      "itemListElement": items
    };
    var s = document.createElement("script");
    s.type = "application/ld+json";
    s.textContent = JSON.stringify(ld);
    document.head.appendChild(s);
  })();
}
