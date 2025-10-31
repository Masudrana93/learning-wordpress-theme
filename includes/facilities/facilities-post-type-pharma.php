<?php
function facilities_post_type_pharma(){
    register_post_type('facilities', array(
        'labels' => array(
            'name' => __('Facilities', 'pharma'),
        ),
        'public'     => true,
        'menu_icon'  => 'dashicons-editor-expand',
        'menu_position' => 28,
    )); 
}
add_action('init', 'facilities_post_type_pharma');

//Remove default submenu items under about us
function remove_facilities_submenus(){
    remove_submenu_page('edit.php?post_type=facilities', 'edit.php?post_type=facilities');
    remove_submenu_page('edit.php?post_type=facilities', 'post-new.php?post_type=facilities');
}
add_action('admin_menu', 'remove_facilities_submenus');
