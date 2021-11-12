<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 * 
 * 网站页头模板文件，通常包含您网站的文档类型、元信息、样式表、脚本链接以及其他数据。
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<!-- Bootstrap Core CSS -->
	<!-- https://bootswatch.com/superhero/ -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
	<link rel="stylesheet" media="screen and (max-width:576px)" href="<?php bloginfo('template_url'); ?>/css/main-mobile.css" />
	<link rel="stylesheet" media="screen and (min-width:576px) and (max-width:1200px)" href="<?php bloginfo('template_url'); ?>/css/main-pad.css" />
	<link rel="stylesheet" media="screen and (min-width:1200px)" href="<?php bloginfo('template_url'); ?>/css/main-pc.css" />
	<!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

	<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.15&key=25a07399eaf117b5841092df9163a3ca"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/baidu-map.js"></script>

	<?php $blog_title = get_bloginfo('name'); ?>
	<title><?php (is_home() ? $blog_title : wp_title('')); ?> <?php bloginfo('title'); ?> </title>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="page">
		<div class="header">
			<nav class="navbar navbar-expand-md col-md-8 m-auto" id="nav">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>" class="navbar-brand">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo">
					</a>
				</div>
				<a class="navbar-toggler btn" data-bs-toggle="collapse" data-bs-target="#bs-navbar-collapse-1">
					<i class="bi bi-list text-primary"></i>
				</a>
				<?php
				wp_nav_menu(array(
					'theme_location'  => 'primary',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse justify-content-end',
					'container_id'    => 'bs-navbar-collapse-1',
					'menu_class'      => 'navbar-nav  navbar-expand-md',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				));
				?>
			</nav>
		</div>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">