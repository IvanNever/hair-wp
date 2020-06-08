<?php
add_action('wp_enqueue_scripts', 'hair_styles');
add_action('wp_enqueue_scripts', 'hair_scripts');

function hair_styles() {
    wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css');
    wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('hair-style', get_stylesheet_uri());
}

function hair_scripts() {
    wp_enqueue_script('slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow-script', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('hair-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}

