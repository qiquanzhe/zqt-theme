<?php

/**
 * 用来显示单个文章或所有附件的模板
 * 
 * 「文章」「业务范围」的详情页模板文件。
 * 
 */
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- <div>让企业没有难申报的政策！</div> -->
        single-2.php<br>
        <?php
        // Start the Loop.
        while (have_posts()) :
            the_post();
            the_title();
            the_content();
            echo get_the_category()[0]->cat_ID;
            echo get_the_category()[0]->category_parent;
        endwhile
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->
