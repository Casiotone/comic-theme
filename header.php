<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Comic-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>

		<?php wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'menu_class' => 'nav'
		 ) ); ?>

	</header>

		<?php
		/*

		<ul class="nav">
			<li><a href="comic-static/index.html">Home</a></li>
			<li><a href="gallery/index.html">Gallery</a></li>
			<li><a href="contact/index.html">Contact</a></li>
			<li><a href="payment/index.html">Payment</a></li>
			<li><a href="session/index.html">Session</a></li>
		</ul>

		*/

	   ?>


	<main>
