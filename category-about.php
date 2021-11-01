<?php

/**
 * 
 * [关于我们] 分类页面模板
 */
get_header(); ?>
<div class="box">
    <div class="banner">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/banner-about.png" alt="banner">
    </div>
    <div class="container">
        <div class="box-header text-center my-md-4">
            <?php
            if ($cat == 6) {
            ?>
                <script>
                    document.location = '<?php echo get_category_link(7); ?>';
                </script>
                <?php
            }
            $subcats = get_term_children(6, 'category');
            foreach ($subcats as $sub) {
                if ($sub == $cat) {
                    echo '<span class="mx-md-5 active"><i class="bi bi-award-fill"></i>' . get_cat_name($sub) . '</span>';
                ?>
            <?php
                } else {
                    echo '<a class="mx-md-5" href="' . get_category_link($sub) . '"><i class="bi bi-award"></i>' . get_cat_name($sub) . '</a>';
                }
            }
            ?>
        </div>

        <div class="disc my-md-2">
            <?php
            if ($cat == 7) {
                query_posts('showposts=-1&cat=7');
                while (have_posts()) {
                    the_post();
            ?>
                    <div class="disc-img">
                        <?php the_content(); ?>
                    </div>
                <?php
                }
                wp_reset_query();
            } else {
                $limit = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts('orderby=date&showposts=' . $limit = 20 . '&paged=' . $paged . '&cat=' . $cat);
                ?>
                <div class="desc-container row">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
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
            <?php wp_pagenavi();
            }
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>