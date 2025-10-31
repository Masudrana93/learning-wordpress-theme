<?php

function production_facilities_post_type_pharma(){
    register_post_type('prod_facilities', array(
        'labels' => array(
            'name'                 =>  __( 'Production Facilities', 'pharma' ),
            'singular_name'        =>  __( 'Production Facilities', 'pharma' ),
            'menu_name'            =>  __( 'Production Facilities', 'pharma' ),
            'name_admin_bar'       =>  __( 'Production Facilities', 'pharma' ),
            'add_new'              =>  __( 'Add New Production Facilities', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Production Facilities Item', 'pharma' ),
            'featured_image'       =>  __( 'Production Facilities\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Production Facilities\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Production Facilities\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=facilities',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'production-facilities'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'production_facilities_post_type_pharma');

