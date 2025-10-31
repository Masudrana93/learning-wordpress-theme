<?php
function pharma_theme_register_navbar(){
    register_nav_menus(array(
        'primary-menu'      => __('Primary Menu', 'pharma'),
        'about-us-menu'     => __('About Us Menu', 'pharma'),
        'products-menu'     => __('Porducts Menu', 'pharma'),
        'facility-menu'     => __('Facility Menu', 'pharma'),
    ));
}
add_action('init', 'pharma_theme_register_navbar');