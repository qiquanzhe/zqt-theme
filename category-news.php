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
            if ($cat == 4) {
                # code...
            } else {
                echo get_query_var('paged');
                $limit = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts('orderby=date&showposts=' . $limit=10 . '&paged=' . $paged.'&cat=' . $cat);
                echo $paged;
            ?>
                <ul class="news-list">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <li class="row">
                        <a href="<?php get_permalink(); ?>" title="<?php the_title(); ?>" class="news-title col-md-10"><?php the_title(); ?></a>
                        <span class="col-md-2 text-right"><?php the_time('Y-m-d') ?></span>
                    </li>
                    <?php
                }
            }
                ?>
                </ul>
                
                <?php the_posts_pagination(); ?>
        </div>
    </div>
</div>
</div>
<div>category.php - 新闻通知
    <?php single_cat_title(); ?>
    <?php echo $cat ?>
</div>
<?php
get_footer();
