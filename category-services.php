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
            <div class="col-md-9 my-md-3 text-center">
                <?php
                query_posts('posts_per_page=10&cat=' . $cat);
                while (have_posts()) :
                    the_post();
                ?>
                    <div>
                        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                            <span class="col-md-3 col-3 mx-md-4 mx-2 date-span"><?php the_time('Y-n-d'); ?></span>
                            <span class="title-span col-8 col-md-9"><?php the_title(); ?></span>
                        </a>
                    </div>
                <?php
                endwhile
                ?>
            </div>
        </div>
    </div>


</div>
<div>
</div>
<?php
get_footer();
