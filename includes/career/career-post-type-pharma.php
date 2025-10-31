<?php
function career_post_type_pharma(){
    register_post_type('career', array(
        'labels' => array(
            'name' => __('Career', 'pharma'),
        ),
        'public'     => true,
        'menu_icon'  => 'dashicons-editor-paste-word',
        'menu_position' => 30,
    )); 
}
add_action('init', 'career_post_type_pharma');

//Remove default submenu items under about us
function remove_career_submenus(){
    remove_submenu_page('edit.php?post_type=career', 'edit.php?post_type=career');
    remove_submenu_page('edit.php?post_type=career', 'post-new.php?post_type=career');
}
add_action('admin_menu', 'remove_career_submenus');
