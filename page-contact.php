<?php

/**
 * 
 * Template Name: [联系我们]模板页
 */
get_header(); ?>
<div class="box">
    <div class="banner">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/banner-contact.png" alt="banner">
    </div>
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>
<?php
get_footer();
?>