<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Marc Jasmin
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		

		<div class="site-branding">
	<h1 class="site-title"><a href="#home<?php // echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="wp-content/uploads/2014/01/logo-header-web.png" /></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>



<nav id="site-navigation" class="main-navigation" role="navigation">
<!-- <h1 class="menu-toggle"><?php _e( 'Menu', 'marc-jasmin' ); ?></h1> -->
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'marc-jasmin' ); ?></a>
			

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="widget-area">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) : ?>
      <?php endif; ?>
  </div>