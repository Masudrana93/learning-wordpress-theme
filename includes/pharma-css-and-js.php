<?php

// pharma_project_css_and_js
function pharma_project_css_and_js(){
    //Bootstrap css Link
    wp_register_style('bootstrap-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css', array(), '5.3.7', 'all');
    // Google Fonts
    wp_register_style('fonts-googleapis', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@500;700&display=swap', array(), '', 'all');
    //Bootstrap icon link
    wp_register_style('bootstrap-icons-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', array(), '1.13.1', 'all');


    wp_enqueue_style('bootstrap-min-css');
    wp_enqueue_style('fonts-googleapis');
    wp_enqueue_style('bootstrap-icons-min-css');
    wp_enqueue_style('customer-stylesheet', get_stylesheet_uri());

    //For js
    wp_enqueue_script('bootstrap-bundle-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js', array(), '5.3.7', true);
    wp_enqueue_script('jquery-min-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), '3.1.1', true);
    wp_enqueue_script('jquery-bxslider-min-js', 'https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.js', array(), '4.2.17', true);
    wp_enqueue_script('bxslider-js', get_template_directory_uri() . '/js/bxslider.js', array('jquery'), 'null', true);

}
add_action('wp_enqueue_scripts', 'pharma_project_css_and_js'); 