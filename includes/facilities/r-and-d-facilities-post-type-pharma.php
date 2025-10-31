<?php

function r_and_d_facilities_post_type_pharma(){
    register_post_type('r_and_d_facilities', array(
        'labels' => array(
            'name'                 =>  __( 'R&D Facilities', 'pharma' ),
            'singular_name'        =>  __( 'R&D Facilities', 'pharma' ),
            'menu_name'            =>  __( 'R&D Facilities', 'pharma' ),
            'name_admin_bar'       =>  __( 'R&D Facilities', 'pharma' ),
            'add_new'              =>  __( 'Add New R&D Facilities', 'pharma' ),
            'add_new_item'         =>  __( 'Add New R&D Facilities Item', 'pharma' ),
            'featured_image'       =>  __( 'R&D Facilities\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set R&D Facilities\'s Photo', 'pharma' ),
            'archives'             =>  __( 'R&D Facilities\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=facilities',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'r-and-d-facilities'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'r_and_d_facilities_post_type_pharma');

