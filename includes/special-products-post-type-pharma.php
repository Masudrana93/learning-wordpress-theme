<?php

function special_products_post_type_pharma(){
    register_post_type('special_products', array(
        'labels' => array(
            'name'                 =>  __( 'Special Products', 'pharma' ),
            'singular_name'        =>  __( 'Special Products', 'pharma' ),
            'menu_name'            =>  __( 'Special Products', 'pharma' ),
            'name_admin_bar'       =>  __( 'Special Products', 'pharma' ),
            'add_new'              =>  __( 'Add New Special Products', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Special Products Item', 'pharma' ),
            'featured_image'       =>  __( 'Special Products\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Special Products\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Special Products\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'menu_position'       => 7,
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'special-roducts'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'special_products_post_type_pharma');