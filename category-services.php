<?php

/**
 * 
 * 分类目录存档模板文件。
 *  
 */

get_header(); ?>
<div class="box">
    <div class="banner">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/business_banner.png" alt="banner">
    </div>
    <div class="container">
        <div class="cat-title my-md-3">
            <div>
                <?php single_cat_title(); ?>
            </div>
        </div>
        <div class="row">
            <ul class="serv-cat col-md-3">
                <?php
                $subcats = get_term_children(2, 'category');
                foreach ($subcats as $sub) {
                    if ($sub == $cat) {
                        echo '<li class="active my-md-4"><i class="bi bi-arrow-right-circle-fill mx-md-2"></i>' . get_cat_name($sub) . '</li>';
                ?>
                <?php
                    } else {
                        echo '<li class="my-md-4"><a href="' . get_category_link($sub) . '"><i class="bi bi-file-text mx-md-2"></i>' . get_cat_name($sub) . '</a></li>';
                    }
                }
                ?>
            </ul>
            <div class="col-md-9 my-md-4" id="accordion">
                <?php
                if ($cat == 2) {
                    $tag = get_term_by('slug', 'top-services', 'post_tag');
                    if ($tag) :
                        query_posts('orderby=date&order=ASC&tag_id=' . $tag->term_id);
                        while (have_posts()) :
                            the_post(); ?>
                            <div class="card services-card">
                                <div class="card-header services-header">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapse<?php the_ID(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <div id="collapse<?php the_ID(); ?>" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                } else {
                    query_posts('orderby=date&order=ASC&cat=' . $cat);
                    while (have_posts()) :
                        the_post(); ?>
                        <div class="card services-card">
                            <div class="card-header services-header">
                                <a class="btn" data-bs-toggle="collapse" href="#collapse<?php the_ID(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <div id="collapse<?php the_ID(); ?>" class="collapse" data-bs-parent="#accordion">
                                <div class="card-body">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                }
                ?>
                <!-- <div class="card">
                    <div class="card-header">

                    </div>
                </div> -->
            </div>
            <div class="col-md-9 my-md-3 text-center exampled-div">
                <?php
                if ($cat == 2) {
                    $tag = get_term_by('slug', 'top-services', 'post_tag');
                    if ($tag) {
                        query_posts('showposts=-1&tag_id=' . $tag->term_id);
                        while (have_posts()) :
                            the_post(); ?>
                            <div class="row">
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="col-md-8">
                                    <span class="mx-md-4 col-md-4 date-span"><?php the_time('Y-n-d'); ?></span>
                                    <span class="col-md-8 title-span"><?php the_title(); ?></span>
                                </a>
                                <span class="col-md-3">
                                    <?php
                                    $tags = wp_get_post_tags($post->ID);
                                    foreach ($tags as $tag) {
                                        echo '<span class="badge rounded-pill bg-warning">' . $tag->name . '</span>';
                                    }
                                    ?>
                                </span>
                            </div>
                        <?php
                        // the_title();
                        endwhile;
                    }
                } else {
                    query_posts('posts_per_page=10&cat=' . $cat);
                    while (have_posts()) :
                        the_post();
                        ?>
                        <div class="row">
                            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="col-md-8">
                                <span class="col-md-4 mx-md-4 date-span"><?php the_time('Y-n-d'); ?></span>
                                <span class="title-span col-md-8"><?php the_title(); ?></span>
                            </a>
                            <span class="col-md-3">
                                <?php
                                $tags = wp_get_post_tags($post->ID);
                                foreach ($tags as $tag) {
                                    echo '<span class="badge rounded-pill bg-warning">' . $tag->name . '</span>';
                                }
                                ?>
                            </span>
                        </div>
                <?php
                    endwhile;
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div>
</div>
<?php
get_footer();
