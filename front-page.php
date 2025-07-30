<?php get_header(); ?>

<!-- Hero Banner -->
<section class="hero bg-dark text-white text-center py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_template_directory_uri(); ?>/assets/images/beach.jpg') center/cover;">
  <div class="container" data-aos="fade-down">
    <h1 class="display-4 fw-bold">Explore the World with TravelPro 🌍</h1>
    <p class="lead">Best travel packages, destinations, and experiences just for you.</p>
    <a href="<?php echo site_url('/packages'); ?>" class="btn btn-warning btn-lg mt-3">📦 View Packages</a>
  </div>
</section>

<!-- Features Section -->
<section class="features py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4" data-aos="zoom-in">
        <i class="bi bi-airplane-fill fs-1 text-primary"></i>
        <h4 class="mt-3">Air Ticketing</h4>
        <p>Book affordable flights with ease.</p>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <i class="bi bi-hotel fs-1 text-success"></i>
        <h4 class="mt-3">Hotel Bookings</h4>
        <p>Comfortable and luxurious stays.</p>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
        <i class="bi bi-globe fs-1 text-info"></i>
        <h4 class="mt-3">Global Destinations</h4>
        <p>Discover over 100+ dream spots.</p>
      </div>
    </div>
  </div>
</section>

<!-- Popular Packages -->
<section class="packages bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4" data-aos="fade-up">🔥 Popular Travel Packages</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col" data-aos="fade-up" data-aos-delay="0">
        <div class="card h-100 shadow">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/beach.jpg" class="card-img-top" alt="Beach Destination">
          <div class="card-body">
            <h5 class="card-title">Maldives Honeymoon</h5>
            <p class="card-text">5 nights | Luxury stay | Island tours</p>
            <a href="<?php echo site_url('/packages'); ?>" class="btn btn-outline-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 shadow">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain.jpg" class="card-img-top" alt="Mountain Adventure">
          <div class="card-body">
            <h5 class="card-title">Swiss Alps Adventure</h5>
            <p class="card-text">7 days | Mountain resort | Skiing</p>
            <a href="<?php echo site_url('/packages'); ?>" class="btn btn-outline-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100 shadow">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/city.jpg" class="card-img-top" alt="City Tour">
          <div class="card-body">
            <h5 class="card-title">Paris City Break</h5>
            <p class="card-text">4 nights | City center | Guided tours</p>
            <a href="<?php echo site_url('/packages'); ?>" class="btn btn-outline-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="testimonials py-5 bg-white">
  <div class="container">
    <h2 class="text-center mb-4" data-aos="fade-up">❤️ What Our Clients Say</h2>
    <div class="row text-center">
      <div class="col-md-6" data-aos="fade-right">
        <blockquote class="blockquote">
          <p>"Excellent service and amazing destinations. Highly recommended!"</p>
          <footer class="blockquote-footer">Fatima A.</footer>
        </blockquote>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <blockquote class="blockquote">
          <p>"Very professional team. Helped us plan the perfect family trip."</p>
          <footer class="blockquote-footer">Usman R.</footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="cta text-white bg-primary text-center py-5">
  <div class="container" data-aos="zoom-in">
    <h2 class="mb-3">Ready to Plan Your Next Adventure?</h2>
    <a href="<?php echo site_url('/contact'); ?>" class="btn btn-light btn-lg">📞 Contact Us</a>
  </div>
</section>

<?php get_footer(); ?>
