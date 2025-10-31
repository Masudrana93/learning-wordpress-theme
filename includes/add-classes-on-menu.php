<?php

//add_classes_on_main_menu_ul_li
function add_classes_on_main_menu_ul_li($classes, $item, $args, $depth){
    if($args-> theme_location === 'primary-menu'){
        $classes[] = 'nav-item dropdown';
    }
    return $classes;
};
add_filter('nav_menu_css_class', 'add_classes_on_main_menu_ul_li', 10, 4);


//add_classes_on_<a>_tag
function add_additional_classes_on_a($atts, $item, $args, $depth){
    if($args->theme_location === 'primary-menu'){
        $existing_class = isset($atts['class']) ? $atts['class'] : '';
        $atts['class'] = $existing_class . 'nav-link text-white';
    }
    return $atts;
};
add_filter('nav_menu_link_attributes', 'add_additional_classes_on_a', 10, 4);




// Main menu dropdown with border-bottom class
function add_classes_on_main_menu_ul_li_a($atts, $item, $args, $depth) {
    if ($args->theme_location === 'primary-menu') {
        $existing_class = isset($atts['class']) ? $atts['class'] : '';

        if ($item->menu_item_parent) {
            // dropdown child item
            $atts['class'] = trim($existing_class . ' dropdown-item py-2 border-bottom border-white text-white');
        } else {
            // main parent item
            $atts['class'] = trim($existing_class . ' nav-link text-white');
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_classes_on_main_menu_ul_li_a', 10, 4);




//add class on submenu
function add_class_on_submenu($classes, $args, $depth){
    if($args->theme_location === 'primary-menu'){
        $classes[] = 'dropdown-menu hover-for-dropdown rounded-0 py-0 bg-dropdown border-0 shadow';
    }
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'add_class_on_submenu', 10, 3);

/*
*
*
*Footer Menu
*
*
*/
//Add classes on Footer menu - About Us 
function add_classes_on_about_us_menu_ul_li_a($atts, $item, $args){
    if($args->theme_location === 'about-us-menu'){
        $atts['class'] = 'text-decoration-none text-white';
    }
    return $atts;
};
add_filter('nav_menu_link_attributes', 'add_classes_on_about_us_menu_ul_li_a', 10, 3);


//Add classes on Footer menu - Products 
function add_classes_on_porducts_menu_ul_li_a($atts, $item, $args){
    if($args->theme_location === 'products-menu'){
        $atts['class'] = 'text-decoration-none text-white';
    }
    return $atts;
};
add_filter('nav_menu_link_attributes', 'add_classes_on_porducts_menu_ul_li_a', 10, 3);


//Add classes on Footer menu - Facility 
function add_classes_on_facility_menu_ul_li_a($atts, $item, $args){
    if($args->theme_location === 'facility-menu'){
        $atts['class'] = 'text-decoration-none text-white';
    }
    return $atts;
};
add_filter('nav_menu_link_attributes', 'add_classes_on_facility_menu_ul_li_a', 10, 3);


//add_classes_on_sp_about_menu_ul_li- Single page
function add_classes_on_sp_about_menu_ul_li($classes, $item, $args, $depth){
    if($args->theme_location === 'about_menu'){
        $classes[] = 'border';
    }
    return $classes;
};
add_filter('nav_menu_css_class', 'add_classes_on_sp_about_menu_ul_li', 10, 4);

//add_classes_on_sp_about_menu_ul_li_a - Single page
function add_classes_on_sp_about_menu_ul_li_a($atts, $item, $args,){
    if($args->theme_location === 'about_menu'){
        $atts['class'] = 'text-decoration-none p-2';
    }
    return $atts;
};
add_filter('nav_menu_link_attributes', 'add_classes_on_sp_about_menu_ul_li_a', 10, 3);
