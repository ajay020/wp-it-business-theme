<?php

function it_enqueue_assets()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_style(
        'my-main-style',
        get_template_directory_uri() . '/assets/css/main.css'
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'it_enqueue_assets');
