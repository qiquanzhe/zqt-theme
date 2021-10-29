<?php

/**
 * 用来显示单个文章或所有附件的模板
 * 
 * 「文章」的详情页模板文件。
 * 
 */
get_header(); ?>
<h1>page.php</h1>
<div class="banner">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/banner-article.png" alt="banner">
    </div>
<?php
echo $category;
if (in_category('2') || post_is_in_descendant_category(2)) {
    include(TEMPLATEPATH . '/page-2.php');
} elseif (in_category('4') || post_is_in_descendant_category(4)) 
{
    include(TEMPLATEPATH . '/single-4.php');
}elseif (in_category('5') || post_is_in_descendant_category(5))
{
    include(TEMPLATEPATH . '/single-5.php');
}elseif (in_category('6') || post_is_in_descendant_category(6)) 
{
    include(TEMPLATEPATH . '/single-6.php');
}elseif (in_category('9') || post_is_in_descendant_category(9))
{
    include(TEMPLATEPATH . '/single-9.php');
} else {
    include(TEMPLATEPATH . '/single-other.php');
} //给其他分类的文章调用的。
?>

<?php get_footer(); ?>