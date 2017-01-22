<?php
function theme_enqueue_styles() {

  $parent_style = 'parent-style';

  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function my_home_category( $query ) {
  if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'cat', '4');
  }
}
add_action( 'pre_get_posts', 'my_home_category' );

function theme_scripts() {
  wp_enqueue_script( 'child-script', 
    get_stylesheet_directory_uri() . '/js/design-scripts.js',
    array( 'jquery'),
    true
  );

   wp_enqueue_script( 'smartresize-script', 
    get_stylesheet_directory_uri() . '/js/jquery-smartresize.js',
    array( 'jquery'),
    true
  );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function add_slug_body_class( $classes ) {
  global $post;

  if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }

  return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );

function custom_thumbnail() {
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'category-thumb', 350, 350, true ); // (cropped)
}

add_action( 'after_setup_theme', 'custom_thumbnail' );

add_filter('show_admin_bar', '__return_false');

?>