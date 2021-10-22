<?php
  // Register Nav Walker class_alias
  require_once('wp-bootstrap-navwalker.php');

  //Theme Support
  function wpb_theme_setup() {
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
  }

  add_action('after_setup_theme','wpb_theme_setup');

  add_theme_support( 'custom-logo' );

  function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
?>