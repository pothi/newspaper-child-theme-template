<?php

add_action( 'wp_enqueue_scripts', 'newspaper_child_styles', 1002); // 1002 for child because 1001 is used by parent theme
function newspaper_child_styles() {
    wp_dequeue_style('td-theme');
    wp_enqueue_style('td-theme-parent', get_parent_theme_file_uri('/style.css'));
    wp_enqueue_style('td-theme-child', get_theme_file_uri('/style.css'));
}

