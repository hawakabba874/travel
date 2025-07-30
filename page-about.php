<?php
/*
Template Name: About Page
*/
get_header(); 
?>

<div class="container py-5">
  <!-- Hero Section -->
  <div class="text-center mb-5" data-aos="fade-up">
    <h1 class="display-4 mb-3">About TravelPro</h1>
    <p class="lead">Your trusted partner in creating unforgettable travel experiences</p>
  </div>

  <!-- Our Story Section -->
  <div class="row mb-5 align-items-center">
    <div class="col-md-6 mb-4" data-aos="fade-right">
      <h2 class="h3">Our Story</h2>
      <p>Founded in 2020, TravelPro has been at the forefront of creating unique and memorable travel experiences. We believe in the transformative power of travel and its ability to broaden horizons, create connections, and inspire change.</p>
      <p>Our team of experienced travel experts is dedicated to crafting personalized journeys that cater to your unique interests and preferences.</p>
    </div>
    <div class="col-md-6 mb-4" data-aos="fade-left">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" 
           alt="About Us" 
           class="img-fluid rounded shadow-lg">
    </div>
  </div>

  <!-- Why Choose Us Section -->
  <div class="row mb-5">
    <div class="col-12 text-center mb-4" data-aos="fade-up">
      <h2 class="h3">Why Choose Us</h2>
    </div>
    <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="0">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body text-center">
          <div class="display-4 text-primary mb-3">✈️</div>
          <h3 class="h5">Expert Knowledge</h3>
          <p>Our team brings years of travel expertise to create your perfect journey.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body text-center">
          <div class="display-4 text-primary mb-3">🌟</div>
          <h3 class="h5">Personalized Service</h3>
          <p>Every itinerary is tailored to your specific interests and preferences.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body text-center">
          <div class="display-4 text-primary mb-3">💎</div>
          <h3 class="h5">Best Value</h3>
          <p>We offer competitive prices without compromising on quality.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Team Section -->
  <div class="row mb-5">
    <div class="col-12 text-center mb-4" data-aos="fade-up">
      <h2 class="h3">Meet Our Team</h2>
    </div>
    <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="0">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="rounded-circle overflow-hidden mx-auto mb-3" style="width: 150px; height: 150px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team1.jpg" alt="Team Member" class="img-fluid">
          </div>
          <h3 class="h5">John Doe</h3>
          <p class="text-muted">Founder & CEO</p>
          <p>Travel enthusiast with 15+ years of industry experience.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="rounded-circle overflow-hidden mx-auto mb-3" style="width: 150px; height: 150px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team2.jpg" alt="Team Member" class="img-fluid">
          </div>
          <h3 class="h5">Jane Smith</h3>
          <p class="text-muted">Travel Coordinator</p>
          <p>Expert in crafting unique travel experiences.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <div class="rounded-circle overflow-hidden mx-auto mb-3" style="width: 150px; height: 150px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team3.jpg" alt="Team Member" class="img-fluid">
          </div>
          <h3 class="h5">Mike Johnson</h3>
          <p class="text-muted">Customer Experience</p>
          <p>Dedicated to ensuring your journey is perfect.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="text-center py-5" data-aos="fade-up">
    <h2 class="h3 mb-4">Ready to Start Your Adventure?</h2>
    <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary btn-lg">Contact Us Today</a>
  </div>
</div>

<?php get_footer(); ?>
