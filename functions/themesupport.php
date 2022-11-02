<?php

function studiolamby_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
}

add_action ('after_setup_theme','studiolamby_theme_support');