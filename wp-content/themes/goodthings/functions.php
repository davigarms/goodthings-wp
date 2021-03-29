<?php
  function load_stylesheets() {
    wp_register_style('styles', get_template_directory_uri() . '/css/main.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
  }

  add_action('wp_enqueue_scripts', 'load_stylesheets');

  function goodthings_menu() {
    register_nav_menu('goodthings-menu',__( 'Goodthings menu' ));
  }

  add_action( 'init', 'goodthings_menu' );
?>