<?php

add_action( 'wp_enqueue_scripts', 'wda_theme_enqueue_styles' );

function wda_theme_enqueue_styles() {
  
  $parent_style = 'baskerville-2-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
  );
}