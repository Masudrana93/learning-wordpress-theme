<?php
function contact_and_enquiry_post_type_pharma(){
    register_post_type('contact_and_enquiry', array(
        'labels' => array(
            'name' => __('Contact and Enquiry', 'pharma'),
        ),
        'public'     => true,
        'menu_icon'  => 'dashicons-buddicons-buddypress-logo',
        'menu_position' => 31,
    )); 
}
add_action('init', 'contact_and_enquiry_post_type_pharma');

//Remove default submenu items under contact and enquiry
function remove_contact_and_enquiry_submenus(){
    remove_submenu_page('edit.php?post_type=contact_and_enquiry', 'edit.php?post_type=contact_and_enquiry');
    remove_submenu_page('edit.php?post_type=contact_and_enquiry', 'post-new.php?post_type=contact_and_enquiry');
}
add_action('admin_menu', 'remove_contact_and_enquiry_submenus');
