<?php
function products_post_type_pharma(){
    register_post_type('products', array(
        'labels' => array(
            'name' => __('Products', 'pharma'),
        ),
        'public'     => true,
        'menu_icon'  => 'dashicons-cart',
        'menu_position' => 27,
    )); 
}
add_action('init', 'products_post_type_pharma');

//Remove default submenu items under about us
function remove_products_submenus(){
    remove_submenu_page('edit.php?post_type=products', 'edit.php?post_type=products');
    remove_submenu_page('edit.php?post_type=products', 'post-new.php?post_type=products');
}
add_action('admin_menu', 'remove_products_submenus');
