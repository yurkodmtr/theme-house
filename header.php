<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-house
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="preloader">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/preloader.gif" alt="">
</div>

<div class="wrapper">

	<header class="mainheader">
		
		<section class="mainheader__top">
			<div class="center">
				<a href="tel:+491702678471" class="phone">
					+49 170 2678 471
				</a>
				<span></span>
				<a href="mailto:<?php echo get_bloginfo('admin_email'); ?>" class="mail">
					<?php echo get_bloginfo('admin_email'); ?>
				</a>
			</div>
		</section>

		<section class="mainheader__middle">
			<div class="center">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
					</a>
				</div>
				<div class="nav">
					<?php wp_nav_menu(array( 'container' => '', 'menu' => 'header_menu', 'menu_class' => '')); ?>
				</div>
			</div>
		</section>
 		<?php
 			if( !is_front_page() ){
 		?>
 			<section class="mainheader__footer"></section>		
		<?php }  ?>


	</header>


	<section class="container <?php if( is_front_page() ) { ?> container__home_page <?php }?>">
