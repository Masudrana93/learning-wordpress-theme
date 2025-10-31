<?php
function about_us_post_type_pharma(){
    register_post_type('about_us', array(
        'labels' => array(
            'name' => __('About Us', 'pharma'),
        ),
        'public'     => true,
        'menu_icon'  => 'dashicons-image-filter',
        'menu_position' => 25,
    )); 
}
add_action('init', 'about_us_post_type_pharma');

//Remove default submenu items under about us
function remove_about_us_submenus(){
    remove_submenu_page('edit.php?post_type=about_us', 'edit.php?post_type=about_us');
    remove_submenu_page('edit.php?post_type=about_us', 'post-new.php?post_type=about_us');
}
add_action('admin_menu', 'remove_about_us_submenus');
