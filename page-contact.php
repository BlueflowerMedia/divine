<?php get_header(); ?>

<section id="section-contact">
  <div class="container">
    <h1>Get in touch!</h1>
    <div class="right flex-row">

      <div class="contact-information flex1">
        <img class="white-triangle" src="<?php echo get_template_directory_uri(); ?>/images/triangle-top-bg.svg" alt="">

          <div class="flex-row">
            <i class="fas fa-map-marker-alt"></i>
            <div class="info">
              <h2>Address</h2>
              <p>2920 Danforth Ave, Toronto<br>ON M4C 1M1, Canada</p>
            </div>
          </div>
          <div class="flex-row">
            <i class="fas fa-phone-volume"></i>
            <div class="info">
              <h2>Telephone</h2>
              <p>(416)686-2498</p>
            </div>
         </div>
      </div>

      <div class="contact-map flex2">
        <iframe src="https://snazzymaps.com/embed/84088" width="100%" height="100%" style="border:none;"></iframe>
      </div>

    </div>
  </div>
</section>


<?php get_footer(); ?>
