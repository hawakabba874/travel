<?php
/*
Template Name: Packages Page
*/
get_header(); 
?>

<div class="container py-5">
  <h1 class="text-center mb-5" data-aos="fade-up">🌍 Travel Packages</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="fade-up">
    
    <!-- Package Card -->
    <div class="col" data-aos="zoom-in" data-aos-delay="0">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://source.unsplash.com/400x300/?paris,travel" class="card-img-top" alt="Paris">
        <div class="card-body">
          <h5 class="card-title">🇫🇷 Paris Delight</h5>
          <p class="card-text">5 nights in Paris with Eiffel Tower tour & Seine cruise.</p>
          <p><strong>Price:</strong> $1,200</p>
          <a href="#" class="btn btn-primary w-100">Book Now</a>
        </div>
      </div>
    </div>

    <!-- Package Card -->
    <div class="col" data-aos="zoom-in" data-aos-delay="100">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://source.unsplash.com/400x300/?bali,beach" class="card-img-top" alt="Bali">
        <div class="card-body">
          <h5 class="card-title">🌴 Bali Escape</h5>
          <p class="card-text">7 days beachfront stay with water sports and spa.</p>
          <p><strong>Price:</strong> $950</p>
          <a href="#" class="btn btn-primary w-100">Book Now</a>
        </div>
      </div>
    </div>

    <!-- Package Card -->
    <div class="col" data-aos="zoom-in" data-aos-delay="200">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://source.unsplash.com/400x300/?dubai,travel" class="card-img-top" alt="Dubai">
        <div class="card-body">
          <h5 class="card-title">🏙️ Dubai Adventure</h5>
          <p class="card-text">Desert safari, Burj Khalifa visit, and shopping tour.</p>
          <p><strong>Price:</strong> $1,050</p>
          <a href="#" class="btn btn-primary w-100">Book Now</a>
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
