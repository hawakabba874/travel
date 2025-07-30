<?php
/*
Template Name: About Page
*/
get_header(); 
?>

<div class="container py-5">
  <h1 class="text-center mb-4">🌟 About Us</h1>

  <div class="row">
    <div class="col-md-6 mb-4">
      <h4>Our Story</h4>
      <p>We are a passionate team of travel experts dedicated to creating memorable journeys around the world. With 10+ years of experience, we help you explore dream destinations with comfort and safety.</p>
    </div>
    <div class="col-md-6 mb-4">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="About Us" class="img-fluid rounded">
    </div>
  </div>

  <div class="row py-4">
    <div class="col-md-4 text-center">
      <h5>🌍 100+ Destinations</h5>
      <p>From beaches to mountains, we take you everywhere.</p>
    </div>
    <div class="col-md-4 text-center">
      <h5>✈️ Expert Tour Guides</h5>
      <p>Local experts to make your journey unforgettable.</p>
    </div>
    <div class="col-md-4 text-center">
      <h5>📆 Custom Packages</h5>
      <p>We tailor trips to your schedule and style.</p>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="<?php echo site_url('/contact'); ?>" class="btn btn-outline-primary btn-lg">📞 Contact Us Today</a>
  </div>
</div>

<?php get_footer(); ?>
