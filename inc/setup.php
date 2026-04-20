<?php

function it_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);
}

add_action('after_setup_theme', 'it_theme_setup');

function it_customize_footer($wp_customize)
{
    $wp_customize->add_section('footer_section', [
        'title' => 'Footer Settings'
    ]);

    $wp_customize->add_setting('footer_text', [
        'default' => 'All rights reserved.'
    ]);

    $wp_customize->add_control('footer_text', [
        'label' => 'Footer Text',
        'section' => 'footer_section',
        'type' => 'text'
    ]);
}

add_action('customize_register', 'it_customize_footer');
