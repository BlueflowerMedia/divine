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
		<nav class="fixed">

		  <div class="nav-container">
		    <div id="item1" class="nav-item left mobile-tablet-hide">1</div>
		    <div id="item2" class="nav-item middle">2</div>
		    <div id="item3" class="nav-item right">3</div>

				<div id="item4" class="nav-item right">
	        <div class="hamburger" id="hamburger-arowL">
	          <span class="line"></span>
	          <span class="line"></span>
	          <span class="line"></span>
	        </div>
				</div>


		  </div>


		</nav>
		<div class="mobile-navbar top">
      <ul>
        <li>dsadsa</li>
        <li>dsadsa</li>
        <li>dsadsa</li>
        <li>dsadsa</li>
        <li>dsadsa</li>
        <li>dsadsa</li>
        <li>dsadsa</li>
      </ul>
    </div>

		<div class="content">
		  <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo atque, necessitatibus porro, accusantium laborum est beatae, sunt praesentium!</h1>
		</div>

	</header>

	<div id="content" class="site-content">
