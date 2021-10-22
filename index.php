<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link 
 *
 * @package WordPress
 * @subpackage zqt
 * @since zqt 1.0
 */

get_header() ?>

<div class="box">
	<div class="banner">
		<img src="<?php bloginfo('template_url'); ?>/img/banner-background.png" alt="banner">
	</div>
</div>

<?php
get_footer();