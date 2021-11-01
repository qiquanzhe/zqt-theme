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
	<meta name="Description" content="<?php bloginfo('description'); ?>" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />  
	<!-- Bootstrap Core CSS -->
	<!-- https://bootswatch.com/superhero/ -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/footer.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/header.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/services.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/news.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/about.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/single.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/contact.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

	<script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=gcRhCEw5OGaQ3Oys91eg2Edh257Bxoq3"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/baidu-map.js"></script>

	<?php $blog_title = get_bloginfo('name'); ?>
	<title><?php (is_home() ? $blog_title : wp_title('')); ?> <?php bloginfo('title'); ?> </title>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="page">
		<div class="header">
			<nav class="navbar navbar-expand-sm col-md-8 m-auto" id="nav">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>" class="navbar-brand">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo">
					</a>
				</div>
				<?php
				wp_nav_menu(array(
					'theme_location'  => 'primary',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse justify-content-end',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				));
				?>
			</nav>
		</div>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">