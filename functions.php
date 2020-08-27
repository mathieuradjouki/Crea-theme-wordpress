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
   /*Add support for core custom header.*/
   add_theme_support('custom-header', $args);
   /*Add support for core custom logo.*/
   add_theme_support('custom-logo', array(
     'height'      => 190,
     'flex-height' => true,
     'width'       => 190,
     'flex-width' => true,
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
function mon_theme_register_post_types(){
  // Declaration des customs post types
}
function montheme_customize_register($wp_customize){
  // Toutes nos sections, paramètres et contrôles seront ajoutés ici
   $wp_customize-> add_section('montheme_new_section_name', array(
    'title' => __('Nom de la section visible', 'mon_theme'),
    'description'=> '',
  ));
  // ==============================
    // = Entrée de texte =
    // ==============================
    $wp_customize-> add_setting('montheme_theme_options [text_test]', array(
      'default'=>'',

    ));
    $wp_customize->add_control('montheme_text_test', array(
        'label'      => __('Text Test', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'themename_theme_options[text_test]',
    ));
}
  add_action('after_setup_theme','montheme_supports','register_my_menu' );
  add_action('wp_enqueue_scripts', 'montheme_register_assets');
  add_action('customize_register', 'montheme_customize_register');
  add_action('init', 'mon_theme_register_post_types');
  add_filter('nav_menu_css_class', 'montheme_menu_class');
  add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');

 ?>
