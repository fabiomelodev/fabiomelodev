<?php

function social_media_init() {
    $args = array(
        'public' => true,
        'label'  => 'Redes Sociais',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons-share',
        'taxonomies'          => array( 'category' ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('social-media', $args );
}
add_action( 'init', 'social_media_init' );

function projects_init() {
    $args = array(
        'public' => true,
        'label'  => 'Projetos',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons-portfolio',
        'taxonomies'          => array( 'category' ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('projects', $args );
}
add_action( 'init', 'projects_init' );

function services_init() {
    $args = array(
        'public' => true,
        'label'  => 'Serviços',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons-editor-ul',
        'taxonomies'          => array( 'category' ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('services', $args );
}
add_action( 'init', 'services_init' );

function single_temas_scripts()
{
    //css
    wp_enqueue_style('single-temas-style', get_stylesheet_uri());
    wp_enqueue_style('single-temas-main-style', get_template_directory_uri() . '/../wp-bootstrap-starter-child/assets/css/main.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');

    //js
    wp_enqueue_script('single-temas-swiper-scripts', get_template_directory_uri() . '/../wp-bootstrap-starter-child/assets/js/swiper.min.js', array(), '1.0.2', true);
    wp_enqueue_script('single-temas-swiper-folk-scripts', get_template_directory_uri() . '/../wp-bootstrap-starter-child/assets/js/swiper-folk.js', array(), '1.0.2', true);
    wp_enqueue_script('single-temas-main-scripts', get_template_directory_uri() . '/../wp-bootstrap-starter-child/assets/js/main.js', array(), '1.0.2', true);
    wp_enqueue_script('single-temas-menu-toggle', get_template_directory_uri() . '/../wp-bootstrap-starter-child/assets/js/menu-toggler.js', array(), '1.0.2', true);
    wp_enqueue_script('single-temas-project-show', get_template_directory_uri() . '/../wp-bootstrap-starter-child/assets/js/project-show.js', array(), '1.0.2', true);
    wp_enqueue_script('single-temas-widget-social-media', get_template_directory_uri() . '/../wp-bootstrap-starter-child/assets/js/widget-social-media.js', array(), '1.0.2', true);
    wp_enqueue_script('single-temas-loading', get_template_directory_uri() . '/../wp-bootstrap-starter-child/assets/js/loading.js', array(), '1.0.2', true);
    wp_enqueue_script('single-temas-change-language', get_template_directory_uri() . '/../wp-bootstrap-starter-child/assets/js/change-language.js', array(), '1.0.2', true);
}
add_action('wp_enqueue_scripts', 'single_temas_scripts');