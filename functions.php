<?php

$folder = '/functions';
$roots_includes = ['/menus.php', '/themesupport.php', '/register-styles.php'];

foreach ($roots_includes as $file) {
    $value = $folder . $file;
    if (!$filepath = locate_template($value)) {
      trigger_error("Error locating $value for inclusion!", E_USER_ERROR);
    }
  
    require_once $filepath;
  }
  unset($value, $filepath);


function studiolamby_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('studiolamby-style', get_template_directory_uri() . "/style.css", array('studiolamby-bootstrap'), $version, 'all');
    // wp_enqueue_style('studiolamby-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('studiolamby-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css", array(), '5.2.2', 'all');
    wp_enqueue_style('studiolamby-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}





add_action('wp_enqueue_scripts', 'studiolamby_register_scripts');

function studiolamby_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'studiolamby_post_image_html', 10, 3 );

function remove_default_image_sizes( $sizes ) {

    /* Default WordPress */
    unset( $sizes[ 'thumbnail' ]);       // Remove Thumbnail (150 x 150 hard cropped)
    unset( $sizes[ 'medium' ]);          // Remove Medium resolution (300 x 300 max height 300px)
    unset( $sizes[ 'medium_large' ]);    // Remove Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
    unset( $sizes[ 'large' ]);           // Remove Large resolution (1024 x 1024 max height 1024px)

    return $sizes;
}

add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );