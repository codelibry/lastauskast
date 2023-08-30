<?php
    /*
        =====================
            Custom Taxonomies
        =====================	
    */
    
    function cptui_register_my_taxes_program_category()
    {
        
        /**
         * Taxonomy: Categories.
         */
        
        $labels = [
            "name" => __("Categories", "lastauskast"),
            "singular_name" => __("Category", "lastauskast"),
        ];
        
        
        $args = [
            "label" => __("Categories", "lastauskast"),
            "labels" => $labels,
            "public" => false,
            "publicly_queryable" => false,
            "hierarchical" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "query_var" => true,
            "rewrite" => ['slug' => 'programs_category', 'with_front' => true,],
            "show_admin_column" => false,
            "show_in_rest" => true,
            "show_tagcloud" => false,
            "rest_base" => "programs_category",
            "rest_controller_class" => "WP_REST_Terms_Controller",
            "rest_namespace" => "wp/v2",
            "show_in_quick_edit" => false,
            "sort" => false,
            "show_in_graphql" => false,
        ];
        register_taxonomy("programs_category", ["programs"], $args);
    }
    
    add_action('init', 'cptui_register_my_taxes_program_category');
