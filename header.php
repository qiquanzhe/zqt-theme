<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link 
 *
 * @package WordPress
 * @subpackage zqt
 * @since zqt 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="<?php bloginfo('description'); ?>" />
	<!-- Bootstrap Core CSS -->
	<!-- https://bootswatch.com/superhero/ -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
	<title><?php bloginfo('title'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="page">
		<div class="header">
			<nav>
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo">
				</a>
				<?php
				wp_nav_menu(array(
					'theme_location'  => 'primary',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class'      => 'navbar-nav mr-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				));
				?>
			</nav>
		</div>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">