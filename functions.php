<?php

function generatepress_child_enqueue_styles()
{
    wp_enqueue_style("preview-card", get_theme_file_uri("elementor/assets/style.css"), null, "1.0");
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'generatepress_child_enqueue_styles');

require_once 'elementor/widgets/widgets.php';
