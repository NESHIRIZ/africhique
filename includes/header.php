
<?php
  if (!isset($page_title)) { $page_title = 'AFRICHIQUE — Elegant African Clothing & Bags'; }
  if (!isset($active_page)) { $active_page = ''; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#0f3d2e" />
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="Africhique: Elegant African clothing, luxury bags, and custom tailoring. Handcrafted heritage designs with modern style. Shop dresses, suits, bags & more. Shipping worldwide." />
  <meta name="keywords" content="African clothing, African fashion, luxury bags, kente, ankara, wax print, handmade bags, custom tailoring, African designer, Bulawayo" />
  
  <!-- Open Graph / Social Media -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://africhique.co.zw/" />
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
  <meta property="og:description" content="Elegant African clothing, luxury bags, and custom tailoring. Heritage patterns with modern design." />
  <meta property="og:image" content="https://africhique.co.zw/assets/images/hero-image.jpg" />
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://africhique.co.zw/" />
  <meta property="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
  <meta property="twitter:description" content="Elegant African clothing, luxury bags, and custom tailoring. Heritage patterns with modern design." />
  <meta property="twitter:image" content="https://africhique.co.zw/assets/images/hero-image.jpg" />
  
  <!-- Canonical & Robots -->
  <link rel="canonical" href="https://africhique.co.zw/" />
  <meta name="robots" content="index, follow" />
  
  <!-- Links & Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/Styles/styles.css?v=1.1" />
  <script defer src="assets/script/main.js?v=1.1"></script>
</head>
<body>
  <a class="skip-link" href="#content">Skip to content</a>

  <header class="topbar">
    <div class="container topbar-inner">
      <a class="brand" href="index.php" aria-label="AFRICHIQUE Home">
        <img src="assets/images/logo2.svg" alt="Africhique logo" class="logo">
        <span class="brand-text">AFRICHIQUE</span>
      </a>

      <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle menu">
        <span class="nav-toggle-bar"></span>
        <span class="nav-toggle-bar"></span>
        <span class="nav-toggle-bar"></span>
      </button>

      <nav id="primary-nav" class="nav" aria-label="Primary">
        <ul>
          <li><a class="<?= $active_page==='home'?'active':'' ?>" href="index.php">Home</a></li>
          <li><a class="<?= $active_page==='about'?'active':'' ?>" href="about.php">About</a></li>
          <li><a class="<?= $active_page==='products'?'active':'' ?>" href="products.php">Products & Prices</a></li>
          <li><a class="<?= $active_page==='order'?'active':'' ?>" href="order.php">Order</a></li>
          <li><a class="<?= $active_page==='contact'?'active':'' ?>" href="contact.php">Contact</a></li>
        </ul>
      </nav>

      <a href="order.php" class="cart-link" aria-label="Cart">
        <span class="cart-icon">🛍️</span>
        <span class="cart-count" id="cart-count" aria-live="polite">0</span>
      </a>
    </div>
  </header>

  <main id="content">
