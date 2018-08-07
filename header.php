<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

 $aboutme = get_permalink(get_page_by_path( 'aboutme' ));
 $portfolio = get_permalink(get_page_by_path( 'Portfolio' ));
 $services = get_permalink(get_page_by_path( 'services' ));
 $contact = get_permalink(get_page_by_path( 'contact' ));

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <div id="mobile-bg-black"></div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blueflowermedia' ); ?></a>

	<header id="masthead" class="site-header">
		<nav>
		  <div class="nav-container">

		    <div id="item1" class="nav-item left desktop-laptop-only">
          <ul class="menu-partial">
      			<li><a class="main-items" href="<?php echo $aboutme; ?>">BIOGRAPHY<svg><path></svg></a></li>
      			<li><a class="main-items" href="<?php echo $portfolio; ?>">PORTFOLIO<svg><path></svg></a></li>
      		</ul>
        </div>

		    <div id="item2" class="nav-item middle">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h3>DIVINE PHOTOGRAPHY</h3></a>
        </div>

		    <div id="item3" class="nav-item right desktop-laptop-only">
          <ul class="menu-partial">
        		<li><a class="main-items" href="<?php echo $services; ?>">SERVICES<svg><path></svg></a></li>
        		<li><a class="main-items" href="<?php echo $contact; ?>">CONTACT<svg><path></svg></a></li>
        	</ul>
        </div>

        <div id="item4" class="nav-item right mobile-tablet-only hamburger-container">
          <div class="hamburger" id="hamburger-arrow-right">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
        </div>

		  </div>
		</nav>

		<div class="mobile-navbar container right">

      <div id="mobile-header" class="nav-item middle">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h3>DIVINE PHOTOGRAPHY</h3></a>
      </div>
      <ul id="mobile-menu">
        <li><a class="main-items" href="<?php echo $aboutme; ?>">BIO</a></li>
        <li><a class="main-items" href="<?php echo $portfolio; ?>">PORTFOLIO</a></li>
        <li><a class="main-items" href="<?php echo $services; ?>">SERVICES</a></li>
        <li><a class="main-items" href="<?php echo $contact; ?>">CONTACT</a></li>
      </ul>
      <i class="fas fa-phone-volume">   416 686 2498</i>

      <!-- Social media -->
      <div class="social-icon flex1">
					<a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube" style="color:grey"></i></a>
					<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square" style="color:grey"></i></a>
					<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram" style="color:grey"></i></a>
      </div>

    </div>
	</header>
