<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


//===============================================================================
function custom_post_type() {
  
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Movies', 'Post Type General Name', 'twentytwentyone' ),
          'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentytwentyone' ),
          'menu_name'           => __( 'Movies', 'twentytwentyone' ),
          'parent_item_colon'   => __( 'Parent Movie', 'twentytwentyone' ),
          'all_items'           => __( 'All Movies', 'twentytwentyone' ),
          'view_item'           => __( 'View Movie', 'twentytwentyone' ),
          'add_new_item'        => __( 'Add New Movie', 'twentytwentyone' ),
          'add_new'             => __( 'Add New', 'twentytwentyone' ),
          'edit_item'           => __( 'Edit Movie', 'twentytwentyone' ),
          'update_item'         => __( 'Update Movie', 'twentytwentyone' ),
          'search_items'        => __( 'Search Movie', 'twentytwentyone' ),
          'not_found'           => __( 'Not Found', 'twentytwentyone' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
      );
        
  // Set other options for Custom Post Type
        
      $args = array(
          'label'               => __( 'movies', 'twentytwentyone' ),
          'description'         => __( 'Movie news and reviews', 'twentytwentyone' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array( 'genres' ),
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
      register_post_type( 'movies', $args );
    
  }
    
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
    
  add_action( 'init', 'custom_post_type', 0 );


  //Displaying Custom Post Types on The Front Page
  add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
  
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'movies' ) );
    return $query;
}
//=========================================================================================