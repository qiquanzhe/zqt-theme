<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="<?php bloginfo('description');?>"/>
	<!-- Bootstrap Core CSS -->
	<!-- https://bootswatch.com/superhero/ -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css"/>
	<title><?php bloginfo('title'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
	<?php wp_head();?>
</head>
<body>
	<input type="button" value="123456" class="btn btn-outline-primary"/>
</body>
</html>