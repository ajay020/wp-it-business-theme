<?php

function it_register_cpt()
{

    register_post_type('service', [
        'labels' => [
            'name' => 'Services',
            'singular_name' => 'Service'
        ],
        'public' => true,
        'publicly_queryable' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'services'],
        'menu_icon' => 'dashicons-hammer',
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);

    register_post_type('testimonial', [
        'labels' => [
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial'
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);

    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);
}

add_action('init', 'it_register_cpt');
