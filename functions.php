<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}






require_once get_theme_file_path( 'aria-walker-nav-menu.php' );


add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_script( 'twentyseventeen-child-wai-aria', get_stylesheet_directory_uri() . '/assets/js/wai-aria.js', array( 'jquery' ), null );
} );