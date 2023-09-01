<?php

add_theme_support( 'title-tag'); // dynamic title tag support

function improvedtheme_register_styles(){

    $uri =  get_template_directory_uri();
    wp_enqueue_style('styles-basic', $uri . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'improvedtheme_register_styles');

function improvedtheme_register_scripts(){
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array(), '5.2.3', true);
}

add_action( 'wp_enqueue_scripts', 'improvedtheme_register_scripts');

?>