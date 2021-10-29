<?php
// Register Nav Walker class_alias
require_once('wp-bootstrap-navwalker.php');

//Theme Support
function wpb_theme_setup()
{
  // Nav Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

add_theme_support('custom-logo');

function themename_custom_logo_setup()
{
  $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

/*
 * 使子分类的页面使用父级分类模板进行渲染 
 */
function category_template($template)
{
  $category = get_queried_object();
  if ($category->parent != '0') {
    while ($category->parent != '0') {
      $category = get_category($category->parent);
    }
  }

  $templates = array();

  if ($category) {
    $templates[] = "category-{$category->slug}.php";
    $templates[] = "category-{$category->term_id}.php";
  }
  $templates[] = 'category.php';
  return locate_template($templates);
}
add_filter('category_template', 'category_template');

function get_category_root_id($cat)
{
  // 取得当前分类
  $this_category = get_category($cat);
  // 若当前分类有上级分类时循环
  while ($this_category->category_parent) {
    // 将当前分类设为上级分类
    $this_category = get_category($this_category->category_parent);
  }
  // 返回根分类的id号
  return $this_category->term_id;
}

//获取并输入某个分类的子分类
function post_is_in_descendant_category($cats, $_post = null)
{
  foreach ((array) $cats as $cat) {
    // get_term_children() accepts integer ID only
    $descendants = get_term_children((int) $cat, 'category');
    if ($descendants && in_category($descendants, $_post))
      return true;
  }
  return false;
}

/**
 * 数字分页函数
 * 因为wordpress默认仅仅提供简单分页
 * 所以要实现数字分页，需要自定义函数
 * @Param int $range            数字分页的宽度
 * @Return string|empty        输出分页的HTML代码        
 */
// function lingfeng_pagenavi($range = 4)
// {
//   global $paged, $wp_query;
//   $max_page = $wp_query->max_num_pages;
//   if ($max_page > 1) {
//     echo "<div class='fenye'>";
//     if (!$paged) {
//       $paged = 1;
//     }
//     if ($paged != 1) {
//       echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'>首页</a>";
//     }
//     previous_posts_link('上一页');
//     if ($max_page > $range) {
//       if ($paged < $range) {
//         for ($i = 1; $i <= ($range + 1); $i++) {
//           echo "<a href='" . get_pagenum_link($i) . "'";
//           if ($i == $paged) echo " class='current'";
//           echo ">$i</a>";
//         }
//       } elseif ($paged >= ($max_page - ceil(($range / 2)))) {
//         for ($i = $max_page - $range; $i <= $max_page; $i++) {
//           echo "<a href='" . get_pagenum_link($i) . "'";
//           if ($i == $paged) echo " class='current'";
//           echo ">$i</a>";
//         }
//       } elseif ($paged >= $range && $paged < ($max_page - ceil(($range / 2)))) {
//         for ($i = ($paged - ceil($range / 2)); $i <= ($paged + ceil(($range / 2))); $i++) {
//           echo "<a href='" . get_pagenum_link($i) . "'";
//           if ($i == $paged) echo " class='current'";
//           echo ">$i</a>";
//         }
//       }
//     } else {
//       for ($i = 1; $i <= $max_page; $i++) {
//         echo "<a href='" . get_pagenum_link($i) . "'";
//         if ($i == $paged) echo " class='current'";
//         echo ">$i</a>";
//       }
//     }
//     next_posts_link('下一页');
//     if ($paged != $max_page) {
//       echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'>尾页</a>";
//     }
//     echo '<span>共[' . $max_page . ']页</span>';
//     echo "</div>\n";
//   }
// }
