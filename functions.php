<?php
 $args = array(
   'flex-width' => true,
   'width' => 1920,
   'flex-height' => true,
   'height' => 700,
   'default-image' => get_template_directory_uri() . '/images/strong.jpg',
   'uploads' => true,
 );
 function montheme_supports(){
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails' );
   add_theme_support('menus');
   add_theme_support('custom-header', $args);
   add_theme_support('custom-logo', array(
     'height'      => 190,
     'flex-height' => true,
     'width'       => 190,
     'flex-width' => true,
     //'flex-width'  => false,
     //'flex-height' => false,
   ));
   register_nav_menu('header', "En tête du menu");
   register_nav_menu('footer', "Footer");

 }
function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', ['popper'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style('style',get_stylesheet_uri());
}
function montheme_menu_class($classes)
{
  $classes[]='nav-item';
  return $classes;
}
function montheme_menu_link_class($attrs)
{
  $attrs['class']='nav-link';
  return $attrs;
}
  add_action('after_setup_theme','montheme_supports','register_my_menu' );
  add_action('wp_enqueue_scripts', 'montheme_register_assets');
  add_filter('nav_menu_css_class', 'montheme_menu_class');
  add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');

 ?>
