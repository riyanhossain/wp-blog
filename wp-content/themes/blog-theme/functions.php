<?php

function blog_theme_enqueue_styles()
{
    wp_enqueue_style('blog-theme-styles', get_template_directory_uri() . '/assets/css/output.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'blog_theme_enqueue_styles');
