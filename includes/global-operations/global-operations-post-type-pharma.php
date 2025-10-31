<?php
function global_operations_post_type_pharma(){
    register_post_type('global_operations', array(
        'labels' => array(
            'name' => __('Global Operations', 'pharma'),
        ),
        'public'     => true,
        'menu_icon'  => 'dashicons-admin-site-alt3',
        'menu_position' => 29,
    )); 
}
add_action('init', 'global_operations_post_type_pharma');

//Remove default submenu items under about us
function remove_global_operations_submenus(){
    remove_submenu_page('edit.php?post_type=global_operations', 'edit.php?post_type=global_operations');
    remove_submenu_page('edit.php?post_type=global_operations', 'post-new.php?post_type=global_operations');
}
add_action('admin_menu', 'remove_global_operations_submenus');
