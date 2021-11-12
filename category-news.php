<?php

/**
 * 
 * 分类[新闻通知]目录存档模板文件。
 *  
 */

get_header(); ?>

<div class="box">
    <div class="banner">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/banner-news.png" alt="banner">
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
                $subcats = get_term_children(4, 'category');
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
            <div class="col-md-9">
                <?php
                $limit = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                // query_posts('showposts='.$limit = 20. '&paged=' .$paged. '&cat='.$cat)
                // query_posts('orderby=ID&order=DESC&showposts=' . $limit = 20 . '&paged=' . $paged . '&cat=' . $cat.'&ignore_sticky_posts=1&post_in='.get_option('sticky_posts'));
                $query_post_args = array(
                    'showposts' => $limit = 20,
                    'post__in' => get_option('sticky_posts'),
                    'caller_get_posts' => 1,
                    'cat' => $cat,
                    "paged" => $paged
                );
                static $post_num = 0;
                // query_posts($query_post_args);
                $var_sticky_posts = new WP_Query($query_post_args);
                ?>
                <ul class="news-list my-md-4">
                    <?php
                    while ($var_sticky_posts->have_posts()) {
                        $var_sticky_posts->the_post();
                    ?>
                        <li class="row">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="col-md-10">
                                <?php if (is_sticky()) {
                                    echo '<span class="news-tag">[热门文章]</span>';
                                } ?> <?php the_title(); ?></a>
                            <span class="col-md-2 text-right news-date"><?php the_time('Y-m-d') ?></span>
                        </li>
                    <?php
                        $post_num++;
                    }
                    wp_reset_query();

                    $query_post_args_new = array(
                        'showposts' => $limit = (20 - $post_num),
                        'cat' => $cat,
                        "paged" => $paged,
                        'orderby' => 'ID',
                        'ignore_sticky_posts' => 1,
                        'order' => 'DESC'
                    );
                    // query_posts($query_post_args_new);
                    $var_posts = new WP_Query($query_post_args_new);
                    ?>
                    <ul class="news-list">
                        <?php
                        while ($var_posts->have_posts()) {
                            $var_posts->the_post();
                        ?>
                            <li class="row">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="col-md-10">
                                    <?php the_title(); ?></a>
                                <span class="col-md-2 text-right news-date"><?php the_time('Y-m-d') ?></span>
                            </li>
                        <?php
                        }
                        wp_reset_query();
                        wp_pagenavi();
                        ?>
                    </ul>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
