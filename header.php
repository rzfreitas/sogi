<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sogi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sogi' ); ?></a>

	<?php if(!is_singular( 'post' ) && !is_page('Blog')) {
	 get_template_part('template-parts/content' , 'header-transition');
	} else {
	 get_template_part('template-parts/content' , 'header-black');
	} ?>

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
		<nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</div>

	<div id="content" class="site-content">
