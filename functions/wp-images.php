<?php

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

?>