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
                    $tag = get_term_by('slug', 'top-article', 'post_tag');
                    if ($tag) {
                        $limit = get_option('posts_per_page');
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts('orderby=date&showposts=' . $limit = 20 . '&paged=' . $paged . '&tag_id=' . $tag->term_id);
                        // query_posts('showposts=-1&tag_id=' . $tag->term_id);
                ?>
                        <ul class="news-list my-md-4">
                            <?php
                            while (have_posts()) {
                                the_post();
                            ?>
                                <li class="row">
                                    <span class="col-md-2 text-center news-tag">热门文章</span>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="col-md-8"><?php the_title(); ?></a>
                                    <span class="col-md-2 text-right news-date"><?php the_time('Y-m-d') ?></span>
                                </li>
                        <?php
                            }
                            wp_reset_query();
                        }
                        ?>
                        </ul>
                    <?php
                } else {
                    $limit = get_option('posts_per_page');
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    query_posts('orderby=date&showposts=' . $limit = 20 . '&paged=' . $paged . '&cat=' . $cat);
                    ?>
                        <ul class="news-list my-md-4">
                            <?php
                            while (have_posts()) {
                                the_post();
                            ?>
                                <li class="row">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="news-title col-md-9 mx-md-1"><?php the_title(); ?></a>
                                    <span class="col-md-2 text-right news-date"><?php the_time('Y-m-d') ?></span>
                                </li>
                        <?php
                            }
                            wp_reset_query();

                             wp_pagenavi(); 
                        }
                        ?>
                        </ul>
                        <!-- 
                    <div class="wp-pagenavi" role="navigation">
                        <span class="pages"> 1 / 2 </span>
                        <span aria-current="page" class="current">1</span>
                        <a class="page larger" title="第 2 页" href="http://192.168.1.125/wordpress/news/notify/page/2">2</a>
                        <a class="nextpostslink" rel="next" aria-label="Next Page" href="http://192.168.1.125/wordpress/news/notify/page/2">下一页</a>
                    </div>
                     -->
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
