<?php

    function basic_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'basic_theme_support');


    function theme_menus() {
        $locations = array(
            'primary' => "Top Nav",
        );

        register_nav_menus($locations);
    }

    add_action('init', 'theme_menus');


    add_action('wp_enqueue_scripts', function(){
        wp_enqueue_style('theme', get_template_directory_uri() . '/assets/src/output.css', [], time());
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', [], 'all');
        wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], 'all');
    });

    add_action('wp_enqueue_scripts', function() {
        wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/main.js', '', '', true);
        wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', '', '', true);
        wp_enqueue_script('swiper-custom-config', get_template_directory_uri() . '/assets/js/swiper-config.js', '', '', true);
    });


    function create_posttype() {
        register_post_type( 'testimonials',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'testimonial' )
            ),
            'public' => true,
            'has_archive' => false,
            'menu_icon'           => 'dashicons-editor-help',
            'rewrite' => array('slug' => 'help'),
            'show_in_rest' => true,
            'supports' => array( 
                'title', 
                'editor', 
                'author', 
                'thumbnail', 
                'excerpt',
                )
            )
        );
    };

    add_action( 'init', 'create_posttype' );


    // Allow SVG
    add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

        global $wp_version;
        if ( $wp_version !== '4.7.1' ) {
        return $data;
        }
    
        $filetype = wp_check_filetype( $filename, $mimes );
    
        return [
            'ext'             => $filetype['ext'],
            'type'            => $filetype['type'],
            'proper_filename' => $data['proper_filename']
        ];
    
    }, 10, 4 );
    
    function cc_mime_types( $mimes ){
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter( 'upload_mimes', 'cc_mime_types' );
    
    function fix_svg() {
        echo '<style type="text/css">
            .attachment-266x266, .thumbnail img {
                width: 100% !important;
                height: auto !important;
            }
            </style>';
    }
    add_action( 'admin_head', 'fix_svg' );


    add_action('init', 'my_remove_editor_from_post_type');
    function my_remove_editor_from_post_type() {
        remove_post_type_support( 'page', 'editor' );
    }