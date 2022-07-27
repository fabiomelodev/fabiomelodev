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