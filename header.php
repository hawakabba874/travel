<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- AOS Animation Library -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- ✅ Modern Horizontal Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="<?php echo home_url(); ?>">✈️ TravelPro</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link text-white" href="<?php echo home_url(); ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="<?php echo site_url('/destinations'); ?>">Destinations</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="<?php echo site_url('/packages'); ?>">Packages</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="<?php echo site_url('/about'); ?>">About</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="<?php echo site_url('/contact'); ?>">Contact</a></li>
      </ul>

      <!-- 🌗 Dark Mode Toggle -->
      <button class="btn btn-outline-light btn-sm ms-3" id="darkToggle">🌓</button>
    </div>
  </div>
</nav>
