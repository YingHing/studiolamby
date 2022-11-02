<?php


function studiolamby_menus(){
    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init','studiolamby_menus');



?>