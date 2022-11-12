<?php 
    $current_page = get_queried_object();
    $content      = apply_filters( 'the_content', $current_page->post_content );
    echo $content;
?>
