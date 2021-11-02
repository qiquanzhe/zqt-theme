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

function LimitChar($max_char = 200, $more_text = '...', $more_link_text = '', $limit_type = 'content')
{
  if ($limit_type == 'title') {
    $limiter = get_the_title();
  } else {
    $limiter = get_the_content();
  }
  $limiter = apply_filters('the_content', $limiter);
  $limiter = strip_tags(str_replace(']]>', ']]>', $limiter));
  if (strlen($limiter) > $max_char) {
    $limiter = substr($limiter, 0, $max_char + 1);
    $limiter = utf8Conver($limiter);
    echo $limiter;
    echo $more_text;
    if ($more_link_text != '') {
      echo ' <a href="';
      echo the_permalink();
      echo '">' . $more_link_text . '</a>';
    }
  } else {
    echo $limiter;
  }
}

function utf8Conver($str)
{
  $len = strlen($str);
  $hex = null;
  for ($i = strlen($str) - 1; $i >= 0; $i -= 1) {
    $hex .= ' ' . ord($str[$i]);
    $ch = ord($str[$i]);
    if (($ch & 128) == 0) return (substr($str, 0, $i));
    if (($ch & 192) == 192) return (substr($str, 0, $i));
  }
  return ($str . $hex);
}


/**
 * 统计浏览次数
 */
function wpmee_post_views($before = '(浏览 ', $after = ' 次)', $echo = 1)
{
  global $post;
  $post_ID = $post->ID;
  $views = (int)get_post_meta($post_ID, 'views', true);
  if ($echo) echo $before, number_format($views), $after;
  else return $views;
}

//保护后台登录
add_action('login_enqueue_scripts','login_protection');
function login_protection(){  
    if($_GET['word'] != 'zqtytzq')header('Location: http://www.luqitong.com/');  
}

function push_to_baidu_zz($post_id, $post, $update){
    if($post->post_status != 'publish'){
        return;
    }
    $baidu_zz_api_url   = 'http://data.zz.baidu.com/urls?site=www.luqitong.com&token=9dVDLYiImbALNZDm';
    $response   = wp_remote_post($baidu_zz_api_url, array(
        'headers'   => array('Accept-Encoding'=>'','Content-Type'=>'text/plain'),
        'sslverify' => false,
        'blocking'  => false,
        'body'      => get_permalink($post_id)
    ));
}
add_action('save_post', 'push_to_baidu_zz', 10, 3);
