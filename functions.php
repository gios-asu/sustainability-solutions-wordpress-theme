<?php
function sustainability_solutions_wordpress_theme_scripts () {
  wp_register_style( 'sustainability-solutions-wordpress-theme', get_stylesheet_directory_uri().'/stylesheets/sustainability-solutions-wordpress-theme.min.css', array(), '0.0.1', 'all' );
  wp_enqueue_style( 'sustainability-solutions-wordpress-theme' );

  wp_register_script( 'sustainability-solutions-wordpress-theme', get_stylesheet_directory_uri().'/javascripts/sustainability-solutions-wordpress-theme.min.js', array(), '0.0.1', 'all' );
  wp_enqueue_script( 'sustainability-solutions-wordpress-theme' );
}

add_action( 'wp_enqueue_scripts', 'sustainability_solutions_wordpress_theme_scripts', 20 );

function sustainability_solutions_wordpress_theme_logo ( $html ) {
  $html = <<<HTML
<a target="_top" href="%s" title="Walton Sustainability Solutions Initiatives" id="asu-logo-in-header">
  <img src="%s" alt="Arizona State University" style="margin-top:14px" title="Walton Sustainability Solutions Initiatives">
</a>
HTML;

  $home_url  = esc_url( home_url( '/' ) );
  $html = sprintf( $html, $home_url, get_stylesheet_directory_uri() . '/assets/asu-wssi.png' );
  return $html;
}

add_filter( 'asu_logo', 'sustainability_solutions_wordpress_theme_logo', 1 );