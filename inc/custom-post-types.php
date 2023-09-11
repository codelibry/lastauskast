<?php
    
    /*
	=====================
		Custom Post Types
	=====================	
    */
    
    /**
     * Post Type: Programs
     */
    function cptui_register_my_cpts_programs()
    {
        $labels = array(
            'name' => __('Programs', 'lastauskast'),
            'singular_name' => __('Program', 'lastauskast'),
        );
        
        $args = array(
            'label' => __('Programs', 'lastauskast'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rest_base' => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'delete_with_user' => false,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array(
                'slug' => 'programs',
                'with_front' => true,
            ),
            'query_var' => true,
            'menu_icon' => 'dashicons-clipboard',
            'supports' => array('title', 'editor'),
            'show_in_graphql' => false,
        );
        
        register_post_type('programs', $args);
    }
    
    add_action('init', 'cptui_register_my_cpts_programs');
    
    /**
     * Post Type: Blogs
     */
    function cptui_register_my_cpts_video_blogs()
    {
        $labels = array(
            'name' => __('Blogs', 'lastauskast'),
            'singular_name' => __('Blog', 'lastauskast'),
        );
        
        $args = array(
            'label' => __('Blogs', 'lastauskast'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rest_base' => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'delete_with_user' => false,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array(
                'slug' => 'blogs',
                'with_front' => true,
            ),
            'query_var' => true,
            'menu_icon' => 'dashicons-format-video',
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_graphql' => false,
        );
        
        register_post_type('blogs', $args);
    }
    
    add_action('init', 'cptui_register_my_cpts_video_blogs');
    
    /**
     * Post Type: Clients
     */
    function cptui_register_my_cpts_clients()
    {
        $labels = array(
            'name' => __('Clients', 'lastauskast'),
            'singular_name' => __('Client', 'lastauskast'),
        );
        
        $args = array(
            'label' => __('Clients', 'lastauskast'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rest_base' => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'delete_with_user' => false,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array(
                'slug' => 'clients',
                'with_front' => true,
            ),
            'query_var' => true,
            'menu_icon' => 'dashicons-businessman',
            'supports' => array('title', 'thumbnail'),
            'show_in_graphql' => false,
        );
        
        register_post_type('clients', $args);
    }
    
    add_action('init', 'cptui_register_my_cpts_clients');