<?php


function after_setup_theme_pharma(): void{
    //For Title
    add_theme_support('title-tag');

    //Add theme support
    add_theme_support('post-thumbnails');
    add_image_size('bd-photo', 400, 400, true);
    add_image_size('fish-photo', 400, 300, true);
    add_image_size('photo-400X250', 400, 250, true);
    add_image_size('photo-100X100', 100, 100, true);
    add_image_size('photo-800X400', 800, 400, true);
    add_image_size('photo-200X150', 200, 150, true);
    add_image_size('photo-600X350', 600, 350, true);
    add_image_size('photo-80X80', 80, 80, true);
}
add_action('after_setup_theme', 'after_setup_theme_pharma');



//pharma-css-and-js
require_once get_template_directory() . '/includes/pharma-css-and-js.php';

//pharma-theme-register-navbar
require_once get_template_directory() . '/includes/pharma-theme-register-navbar.php';

//add-classes-on-main-menu-ul-li-a
require_once get_template_directory() . '/includes/add-classes-on-menu.php';

//class-wp-bootstrap-5.3.7-navwalker
require_once get_template_directory() . '/class-wp-bootstrap-5.3.7-navwalker.php';

 /*
 *
 * 
 * For About Us
 * 
 */

//about us post type
require_once get_template_directory() . '/includes/about-us/about-us-post-type-pharma.php';

//Company profile post type
require_once get_template_directory() . '/includes/about-us/company-profile-post-type-pharma.php';

//Vision and Mission post type
require_once get_template_directory() . '/includes/about-us/vision-and-mission-post-type-pharma.php';

//Message from Chairman post type
require_once get_template_directory() . '/includes/about-us/message-from-chairman-post-type-pharma.php';

//Message from Managing Director post type
require_once get_template_directory() . '/includes/about-us/message-from-md-post-type-pharma.php';

//Board of Directors post type
require_once get_template_directory() . '/includes/about-us/board-of-directors-post-type-pharma.php';

//Board of Directors post type
require_once get_template_directory() . '/includes/about-us/quality-policy-post-type-pharma.php';

 /*
 *
 * 
 * For Divisions
 * 
 * 
 */

//Divisions post type
require_once get_template_directory() . '/includes/divisions/divisions-post-type-pharma.php';

//Divisions post type
require_once get_template_directory() . '/includes/divisions/vaccine-division-post-type-pharma.php';

//Chemical Division post type
require_once get_template_directory() . '/includes/divisions/chemical-division-post-type-pharma.php';

//Herbal and Nutricare Division post type
require_once get_template_directory() . '/includes/divisions/herbal-and-nutricare-division-post-type-pharma.php';

//Herbal and Nutricare Division post type
require_once get_template_directory() . '/includes/divisions/animal-health-division-post-type-pharma.php';

 /*
 *
 * 
 * For Products
 * 
 * 
 */

//Products post type
require_once get_template_directory() . '/includes/products/products-post-type.php';

//By trade name post type
require_once get_template_directory() . '/includes/products/by-trade-name-post-type.php';

//By Generic name post type
require_once get_template_directory() . '/includes/products/by-generic-name-post-type.php';

//By Vaccine post type
require_once get_template_directory() . '/includes/products/by-vaccine-post-type.php';

//By Animal Health Products post type
require_once get_template_directory() . '/includes/products/by-animal-health-products-post-type.php';

 /*
 *
 * 
 * For Facilities
 * 
 * 
 */

//Facilities post type
require_once get_template_directory() . '/includes/facilities/facilities-post-type-pharma.php';

//Production Facilities post type
require_once get_template_directory() . '/includes/facilities/production-facilities-post-type-pharma.php';

//R&D Facilities post type
require_once get_template_directory() . '/includes/facilities/r-and-d-facilities-post-type-pharma.php';

//Warehouse post type
require_once get_template_directory() . '/includes/facilities/warehouse-post-type-pharma.php';

//Virtual Tours post type
require_once get_template_directory() . '/includes/facilities/virtual-tours-post-type-pharma.php';

//Photo Gallery post type
require_once get_template_directory() . '/includes/facilities/photo-gallery-post-type-pharma.php';
 /*
 *
 * 
 * For Global Operations
 * 
 * 
 */

//Global Operations post type
require_once get_template_directory() . '/includes/global-operations/global-operations-post-type-pharma.php';

//Global Operations post type
require_once get_template_directory() . '/includes/global-operations/our-global-reach-and-recognitions.php';

//International Business post type
require_once get_template_directory() . '/includes/global-operations/international-business-post-type-pharma.php';

/*
 *
 * 
 * For Distribution Network
 * 
 * 
 */
//Distribution Network post type
require_once get_template_directory() . '/includes/distribution-network/distribution-network-post-type-pharma.php';

/*
 *
 * 
 * For Career
 * 
 * 
 */


//Caeer post type
require_once get_template_directory() . '/includes/career/career-post-type-pharma.php';

//Join With Us post type
require_once get_template_directory() . '/includes/career/join-with-us-post-type-pharma.php';

//Who Works Here post type
require_once get_template_directory() . '/includes/career/who-works-here-post-type-pharma.php';

//Our Culture and Values post type
require_once get_template_directory() . '/includes/career/our-culture-and-values-post-type-pharma.php';

//Working Environment post type
require_once get_template_directory() . '/includes/career/working-environment-post-type-pharma.php';

//Career Growth post type
require_once get_template_directory() . '/includes/career/career-growth-post-type-pharma.php';

/*
 *
 * 
 * For Contact and Enquiry
 * 
 * 
 */

//Contact and Enquiry post type
require_once get_template_directory() . '/includes/contact-and-enquiry/contact-and-enquiry-post-type-pharma.php';

//General Enquiry post type
require_once get_template_directory() . '/includes/contact-and-enquiry/general-enquiry-post-type-pharma.php';

//Product Complain post type
require_once get_template_directory() . '/includes/contact-and-enquiry/product-complain-post-type-pharma.php';

// slider part
require_once get_template_directory() . '/includes/slider-post-type-pharma.php';

// Ticker part
require_once get_template_directory() . '/includes/ticker-post-type-pharma.php';

// Special Products  part
require_once get_template_directory() . '/includes/special-products-post-type-pharma.php';

// fish post type
require_once get_template_directory() . '/includes/fish-post-type.php';


// About Us Single page Register Menus
function pharma_register_menus() {
    register_nav_menus(array(
        'about_menu' => __('About Section Menu', 'pharma'),
    ));
}
add_action('init', 'pharma_register_menus');



