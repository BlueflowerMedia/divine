<?php get_header(); ?>


<div class="portfolio-top">

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		the_content();
		//
		// Post Content here
		//
	} // end while
} // end if
?>

</div>


<?php get_footer(); ?>
