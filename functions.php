<?php 
require get_template_directory().'/inc/setup.php';

add_action('wp_enqueue_scripts', 'pd_theme_styles');
add_action('after_setup_theme', 'pd_theme_setup');
add_action('widgets_init','pd_theme_widget');
?>