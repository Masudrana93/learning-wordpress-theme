<?php
function divisions_post_type_pharma(){
    register_post_type('divisions', array(
        'labels' => array(
            'name' => __('Divisions', 'pharma'),
        ),
        'public'     => true,
        'menu_icon'  => 'dashicons-admin-multisite',
        'menu_position' => 26,
    )); 
}
add_action('init', 'divisions_post_type_pharma');

//Remove default submenu items under about us
function remove_divisions_submenus(){
    remove_submenu_page('edit.php?post_type=divisions', 'edit.php?post_type=divisions');
    remove_submenu_page('edit.php?post_type=divisions', 'post-new.php?post_type=divisions');
}
add_action('admin_menu', 'remove_divisions_submenus');
