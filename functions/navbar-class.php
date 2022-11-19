<?php

add_filter( 'nav_menu_link_attributes', 'add_link_atts');

function add_link_atts($atts) {
    $atts['class'] = "nav-link p-0";
    return $atts;
}
  
?>