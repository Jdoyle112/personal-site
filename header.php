<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php if( is_front_page() ){ ?>
					<?php wp_nav_menu( array( 'menu' => 'Main','theme_location' => 'primary_navigation', 'container' => NULL ) ); ?>
				<?php } else { ?>
					<?php wp_nav_menu( array( 'menu' => 'Secondary', 'container' => NULL ) ); ?>
				<?php } ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<div class="site-inner">
		<div id="content" class="site-content">

