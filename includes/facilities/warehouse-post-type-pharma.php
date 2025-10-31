<?php

function warehouse_post_type_pharma(){
    register_post_type('warehouse', array(
        'labels' => array(
            'name'                 =>  __( 'Warehouse', 'pharma' ),
            'singular_name'        =>  __( 'Warehouse', 'pharma' ),
            'menu_name'            =>  __( 'Warehouse', 'pharma' ),
            'name_admin_bar'       =>  __( 'Warehouse', 'pharma' ),
            'add_new'              =>  __( 'Add New Warehouse', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Warehouse Item', 'pharma' ),
            'featured_image'       =>  __( 'Warehouse\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Warehouse\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Warehouse\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=facilities',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'warehouse'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'warehouse_post_type_pharma');

