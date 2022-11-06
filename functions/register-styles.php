<?php

add_action('wp_enqueue_scripts', 'studiolamby_register_styles');

function studiolamby_register_scripts(){

    wp_enqueue_script('studiolamby-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('studiolamby-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('studiolamby-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('studiolamby-mainjs', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}

?>