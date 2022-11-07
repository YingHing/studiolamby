<?php

add_action('wp_enqueue_scripts', 'studiolamby_register_styles');

function studiolamby_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('studiolamby-style', get_template_directory_uri() . "/style.css", array('studiolamby-bootstrap'), $version, 'all');
    wp_enqueue_style('studiolamby-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css", array(), '5.2.2', 'all');
}

?>