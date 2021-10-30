<?php
/**
 * 
 * Template Name: [项目案例]模板页
 */
get_header();?>
<div class="box">
    <div class="banner">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/banner-example.png" alt="banner">
    </div>
    <div class="container">
    <?php the_content(); ?>
    </div>
</div>
<?php
get_footer();
?>