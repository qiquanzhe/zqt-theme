<?php

/**
 * 
 * 分类目录存档模板文件。
 *  
 */

get_header(); ?>
<?php
if (in_category('2') || post_is_in_descendant_category(2)) {
    include(TEMPLATEPATH . '/category-services.php');
} elseif (in_category('4') || post_is_in_descendant_category(4)) {
    include(TEMPLATEPATH . '/category-news.php');
} elseif (in_category('5') || post_is_in_descendant_category(5)) {
    include(TEMPLATEPATH . '/category-contact.php');
} elseif (in_category('6') || post_is_in_descendant_category(6)) {
    include(TEMPLATEPATH . '/category-joinus.php');
} elseif (in_category('9') || post_is_in_descendant_category(9)) {
    include(TEMPLATEPATH . '/category-example.php');
} else {
    include(TEMPLATEPATH . '/category-other.php');
}

?>
 <?php
    get_footer();
