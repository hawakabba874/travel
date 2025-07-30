<?php
/*
Template Name: Contact Page
*/
get_header(); 
?>

<div class="container py-5">
  <h1 class="text-center mb-4" data-aos="fade-up">📞 Get in Touch</h1>

  <div class="row">
    <!-- Contact Info -->
    <div class="col-md-6 mb-4" data-aos="fade-right">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h4>Contact Details</h4>
          <p><strong>Phone:</strong> +92-300-1234567</p>
          <p><strong>Email:</strong> info@travelpro.com</p>
          <p><strong>Address:</strong> 123 Travel Street, Lahore, Pakistan</p>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="col-md-6" data-aos="fade-left">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h4>Send Us a Message</h4>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="name" placeholder="John Doe">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Your Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Your Message</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Type your message here..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Google Map -->
  <div class="mt-5" data-aos="fade-up">
    <h4>📍 Our Location</h4>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.4825014433045!2d73.57042707397866!3d32.96466977437542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f8ea7579ef623%3A0xc3577d690c5241e5!2sRohtas%20Fort!5e0!3m2!1sen!2s!4v1753644084731!5m2!1sen!2s" 
      width="100%" 
      height="300" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

<?php get_footer(); ?>
