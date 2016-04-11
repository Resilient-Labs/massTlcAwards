<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package masstlcawards
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<?php include('/wp-content/themes/massTlcAwards/flickr_script_file.php'); ?>

<script src="https://query.yahooapis.com/v1/public/yql?q=select * from flickr.photos.search where api_key='11ab26be129cfecfa3242c54a9c6d66c'&format=json&callback=yqlCallback"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/massTlcAwards/front-page.css">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/massTlcAwards/font-awesome.css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'masstlcawards' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!--<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>-->
		<!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
				<img src="http://www.masstlcawards.com/wp-content/uploads/2016/04/MassTLC_logo.png">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'masstlcawards' ); ?></button>
				<?php 
				if (is_front_page()){
					wp_nav_menu ( array( 'menu' => 'Front Page Menu'));
				}else{
					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); 
				}
				?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
