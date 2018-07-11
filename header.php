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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blueflowermedia' ); ?></a>

	<header id="masthead" class="site-header">
		<nav>
		  <div class="nav-container">

		    <div id="item1" class="nav-item left desktop-laptop-only">
          <ul class="menu-partial">
      			<li><a class="main-items" href="<?php echo $aboutme; ?>">BIO</a></li>
      			<li><a class="main-items" href="<?php echo $portfolio; ?>">PORTFOLIO</a></li>
      		</ul>
        </div>

		    <div id="item2" class="nav-item middle">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h3>DIVINE PHOTOGRAPHY</h3></a>
        </div>

		    <div id="item3" class="nav-item right desktop-laptop-only">
          <ul class="menu-partial">
        		<li><a class="main-items" href="<?php echo $services; ?>">SERVICES</a></li>
        		<li><a class="main-items" href="<?php echo $contact; ?>">CONTACT</a></li>
        	</ul>
        </div>

        <div id="item4" class="nav-item right mobile-tablet-only">
          <div class="hamburger" id="hamburger-arrow-right">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
        </div>

		  </div>
		</nav>

		<div class="mobile-navbar right">
      <ul>
        <li>BIO</li>
        <li>PORTFOLIO</li>
        <li>SERVICES</li>
        <li>CONTACT</li>
      </ul>
    </div>


	</header>

	<div id="content" class="site-content">
