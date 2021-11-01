<?php

/**
 * 文章页模板
 */
get_header(); ?>
<div class="box">
    <div class="banner">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/banner-article.png" alt="banner">
    </div>
    <div class="container">
        <div class="card my-md-5 col-md-10 article-card row mx-auto">
            <div class="card-body col-md-10 row m-auto article-content">
                <h1 class="text-center article-title mx-auto mt-md-3"><?php the_title(); ?></h1>
                <div class="article-info col-md-10 text-center mx-auto my-2">
                    <span class="article-time mx-auto">发布时间: <?php the_time('Y年Md日 H时m分') ?></span>
                    <span class="article-view"><?php if(function_exists('the_views')) { the_views(); } ?></span>
                </div>
                <div class="content my-md-4">
                    <?php the_content(); ?>
                </div>
                
        <div class="prev mt-md-3">
            <?php if (get_previous_post()) {
                previous_post_link('上一篇: %link', '%title', true);
            } else {
                echo "没有了，已经是最后文章";
            } ?>
        </div>
        <div class="next mb-md-3">
            <?php if (get_next_post()) {
                next_post_link('下一篇: %link', '%title', true);
            } else {
                echo "没有了，已经是最新文章";
            } ?>
        </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
