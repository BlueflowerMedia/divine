<?php get_header(); ?>

<section id="section-top">

		<div class="black"></div>

		<div class="title">
			<img src="<?php echo get_template_directory_uri(); ?>/images/divine-bg.svg" alt="">
		</div>

		<div class="container txt-wrapper flex-row">
				<div class="txt-part flex1">
					<h1 class="ml10">
						<span class="text-wrapper">We Do</span><br>
						<span class="text-wrapper letters">Professional</span><br>
						<span class="text-wrapper letters">Portraits</span>
					</h1>
					<a class="service-a-tag" href="<?php echo get_the_title(get_page_by_path( 'services' )); ?>">
						Check out more details for our services.
					</a>
			  </div>

				<div class="photo-wrapper flex1">
					<img src="<?php echo get_template_directory_uri(); ?>/images/placeholders/home-portraits.jpg" alt="">
				</div>
	  </div>

</section>


<?php get_footer(); ?>
