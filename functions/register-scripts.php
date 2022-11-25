<?php

add_action('wp_enqueue_scripts', 'studiolamby_register_scripts');

function studiolamby_register_scripts(){

    wp_enqueue_script('studiolamby-jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', array(), '3.6.1', true);
    wp_enqueue_script('studiolamby-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array(), '5.2.2', true);
    wp_enqueue_script('studiolamby-p5', 'https://cdn.jsdelivr.net/npm/p5@1.5.0/lib/p5.js', array(), '1.5.0', true);
    wp_enqueue_script('studiolamby-cursordot', get_template_directory_uri() . "/assets/js/lib/window.curDot.min.js", array(), '1.0', true);
    wp_enqueue_script('studiolamby-mainjs', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
    

}

?>