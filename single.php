<?php

/**
 * 用来显示单个文章或所有附件的模板
 * 
 * 「文章」的详情页模板文件。
 * 
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- <div>让企业没有难申报的政策！</div> -->

        <?php

        // Start the Loop.
        while (have_posts()) :
            the_post();
            the_title();
            the_content();
        endwhile
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>