<?php
function sustainability_solutions_wordpress_theme_scripts() {
  wp_register_style( 'sustainability-solutions-wordpress-theme', get_stylesheet_directory_uri().'/stylesheets/sustainability-solutions-wordpress-theme.min.css', array(), '0.0.1', 'all' );
  wp_enqueue_style( 'sustainability-solutions-wordpress-theme' );

  wp_register_script( 'sustainability-solutions-wordpress-theme', get_stylesheet_directory_uri().'/javascripts/sustainability-solutions-wordpress-theme.min.js', array(), '0.0.1', 'all' );
  wp_enqueue_script( 'sustainability-solutions-wordpress-theme' );
}

add_action( 'wp_enqueue_scripts', 'sustainability_solutions_wordpress_theme_scripts', 20 );
