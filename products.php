<?php
  $page_title = 'Products & Prices — AFRICHIQUE';
  $active_page = 'products';
  include 'Includes/header.php';
?>
<section class="page-hero small">
  <div class="container">
    <h1>Products & Prices</h1>
    <p>Browse popular pieces. Custom colours and sizes available on request.</p>
  </div>
</section>

<section class="container section">
  <div class="toolbar">
    <input id="search" class="input" type="search" placeholder="Search products..." aria-label="Search products">
    <select id="filter" class="select" aria-label="Filter category">
      <option value="all">All</option>
      <option value="clothing">Clothing</option>
      <option value="bags">Bags</option>
      <option value="accessories">Accessories</option>
    </select>
  </div>

  <div id="product-grid" class="grid cards-3">
    <?php
      include 'Includes/cards.php';
      $products = [
        ['id'=>'Earth_toned_pair','title'=>'Earth Toned Pair','price'=>'$90','img'=>'assets/images/earth.jpg','desc'=>'Graceful movement & bold print.','cat'=>'clothing'],
        ['id'=>'tropical_neon','title'=>'Tropical Neon Shirts','price'=>'$120','img'=>'assets/images/tropical.jpg','desc'=>'Tailored, versatile, iconic.','cat'=>'clothing'],
        ['id'=>'Blue_patterned_shirts','title'=>'Blue Patterned Shirts','price'=>'$48','img'=>'assets/images/blue.jpg','desc'=>'Compact everyday elegance.','cat'=>'clothing'],
        ['id'=>'styled_red_yellow_green_pair','title'=>'Styled Red Yellow Green Satchel','price'=>'$110','img'=>'assets/images/syrg.jpg','desc'=>'kente detail.','cat'=>'clothing'],
        ['id'=>'red_yellow_green','title'=>'Red Yellow Green bagy pants','price'=>'$15','img'=>'assets/images/ryg.jpg','desc'=>'Statement accessory.','cat'=>'clothing'],
        ['id'=>'white_and_yellow_pair','title'=>"white and yellow bagy pants",'price'=>'$60','img'=>'assets/images/wy.jpg','desc'=>'Casual-smart classic.','cat'=>'clothing'],
      ];
      foreach ($products as $item) { render_card($item); }
    ?>
  </div>
</section>

<?php include 'Includes/footer.php'; ?>
