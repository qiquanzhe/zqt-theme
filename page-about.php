<?php

/**
 * Template Name: [关于我们]模板页
 */
get_header(); ?>
<div class="box">
    <div class="banner">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/banner-about.png" alt="banner">
    </div>
    <div class="container">
		<div class="breadcrumbs text-end">
			<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
			</div>
        <div class="box-header text-center my-md-4">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#desc"><span>企业简介</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#dynamic"><span>企业动态</span></a>
                </li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="desc" class="container disc-img tab-pane active"><br>
                <img src="<?php bloginfo('template_url'); ?>/img/about-img.jpg" alt="企业简介">
            </div>
            <div id="dynamic" class="container tab-pane fade"><br>
                <?php
                $limit = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts('orderby=date&showposts=' . $limit = 20 . '&paged=' . $paged . '&cat=10');
                while (have_posts()) {
                    the_post(); ?>
                    <div class="card col-md-8 mx-auto my-md-3">
                        <a href="<?php the_permalink() ?>" class="card-body">
                            <h4 class="text-start"><?php the_title(); ?></h4>
                            <p class="description"><?php LimitChar(200); ?></p>
                        </a>
                    </div>
                <?php
                }
                wp_reset_query();
                ?>
            </div>

            <?php wp_pagenavi(); ?>
        </div>
    </div> <!-- container -->
</div> <!-- box -->
<?php
get_footer();
?>