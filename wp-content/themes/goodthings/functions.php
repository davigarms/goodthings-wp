<?php
  function load_stylesheets() {
    wp_register_style('reset', get_template_directory_uri() . '/css/reset.css', array(), 1, 'all');
    wp_enqueue_style('reset');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), 1, 'all');
    wp_enqueue_style('main');

    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
  }

  add_action('wp_enqueue_scripts', 'load_stylesheets');

  function goodthings_menu() {
    register_nav_menu('goodthings-menu',__( 'Goodthings menu' ));
  }

  add_action( 'init', 'goodthings_menu' );

  // Add menuitem BEM class
  add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

  function special_nav_class($classes, $item){
      $classes[] = 'navbar__menuitem';
      return $classes;
  }

  // Our custom post type function
  function create_posttype() {
  
    register_post_type( 'what-boxes',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'What Boxes' ),
                'singular_name' => __( 'What Box' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'what-boxes'),
            'show_in_rest' => true,

        )
    );
  }

  // Hooking up our function to theme setup
  add_action( 'init', 'create_posttype' );

  /*
  * Creating a function to create our CPT
  */
  
  function custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'What Boxes', 'Post Type General Name', 'goodthings' ),
            'singular_name'       => _x( 'What Box', 'Post Type Singular Name', 'goodthings' ),
            'menu_name'           => __( 'What Boxes', 'goodthings' ),
            'parent_item_colon'   => __( 'Parent What Boxes', 'goodthings' ),
            'all_items'           => __( 'All What Boxes', 'goodthings' ),
            'view_item'           => __( 'View What Boxes', 'goodthings' ),
            'add_new_item'        => __( 'Add New What Box', 'goodthings' ),
            'add_new'             => __( 'Add New', 'goodthings' ),
            'edit_item'           => __( 'Edit What Box', 'goodthings' ),
            'update_item'         => __( 'Update What Box', 'goodthings' ),
            'search_items'        => __( 'Search What Boxes', 'goodthings' ),
            'not_found'           => __( 'Not Found', 'goodthings' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'goodthings' ),
        );
        
    // Set other options for Custom Post Type
        
        $args = array(
            'label'               => __( 'what-boxes', 'goodthings' ),
            'description'         => __( 'What do we do boxes', 'goodthings' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'revisions', 'custom-fields', ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
    
        );
        
        // Registering your Custom Post Type
        register_post_type( 'what-boxes', $args );
    
    }
    
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
    
    add_action( 'init', 'custom_post_type', 0 );

?>