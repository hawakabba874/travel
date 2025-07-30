<?php
/*
Template Name: Destinations Page
*/
get_header(); 
?>

<div class="container py-5">
  <h1 class="text-center mb-5" data-aos="fade-up">🌏 Explore Our Destinations</h1>

  <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="fade-up">
    <!-- Destination Card 1 -->
    <div class="col" data-aos="zoom-in" data-aos-delay="0">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://source.unsplash.com/400x300/?tokyo,japan" class="card-img-top" alt="Tokyo">
        <div class="card-body">
          <h5 class="card-title">🇯🇵 Tokyo, Japan</h5>
          <p class="card-text">Experience the blend of tradition and technology in Tokyo.</p>
          <a href="#" class="btn btn-outline-primary w-100">View Packages</a>
        </div>
      </div>
    </div>

    <!-- Destination Card 2 -->
    <div class="col" data-aos="zoom-in" data-aos-delay="100">
      <div class="card h-99 shadow-sm border-0">
        <img src="https://source.unsplash.com/400x300/?rome,italy" class="card-img-top" alt="Rome">
        <div class="card-body">
          <h5 class="card-title">🇮🇹 Rome, Italy</h5>
          <p class="card-text">Step into history with Roman architecture, art, and food.</p>
          <a href="#" class="btn btn-outline-primary w-100">View Packages</a>
        </div>
      </div>
    </div>

    <!-- Destination Card 3 -->
    <div class="col" data-aos="zoom-in" data-aos-delay="200">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://source.unsplash.com/400x300/?istanbul,travel" class="card-img-top" alt="Istanbul">
        <div class="card-body">
          <h5 class="card-title">🇹🇷 Istanbul, Turkey</h5>
          <p class="card-text">Explore vibrant bazaars, mosques, and the Bosphorus.</p>
          <a href="#" class="btn btn-outline-primary w-100">View Packages</a>
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>