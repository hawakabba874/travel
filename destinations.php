<?php
/* Template Name: Destinations */
get_header(); ?>

<div class="container py-5">
  <div class="row mb-5">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-4">Popular Destinations</h1>
      <p class="lead">Explore our hand-picked destinations around the world.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-4">
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beach.jpg" class="card-img-top" alt="Beach Paradise">
        <div class="card-body">
          <h3 class="card-title">Maldives</h3>
          <p class="card-text">Crystal clear waters, white sandy beaches, and luxury overwater villas.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-4">
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain.jpg" class="card-img-top" alt="Mountain Adventure">
        <div class="card-body">
          <h3 class="card-title">Swiss Alps</h3>
          <p class="card-text">Breathtaking mountain views, hiking trails, and winter sports.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-4">
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/city.jpg" class="card-img-top" alt="City Experience">
        <div class="card-body">
          <h3 class="card-title">Paris</h3>
          <p class="card-text">The city of lights, romance, art, and exquisite cuisine.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-4">
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture.jpg" class="card-img-top" alt="Cultural Experience">
        <div class="card-body">
          <h3 class="card-title">Kyoto</h3>
          <p class="card-text">Ancient temples, traditional gardens, and Japanese culture.</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
