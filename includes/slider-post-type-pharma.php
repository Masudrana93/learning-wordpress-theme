<?php

function slider_post_type_pharma(){
    register_post_type('slider', array(
        'labels' => array(
            'name'                 =>  __( 'Slider', 'pharma' ),
            'singular_name'        =>  __( 'Slider', 'pharma' ),
            'menu_name'            =>  __( 'Slider', 'pharma' ),
            'name_admin_bar'       =>  __( 'Slider', 'pharma' ),
            'add_new'              =>  __( 'Add New Slider', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Slider Item', 'pharma' ),
            'featured_image'       =>  __( 'Slider\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Slider\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Slider\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'menu_position'       => 5,
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'slider'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title', 'thumbnail'),
    ));
}
add_action('init', 'slider_post_type_pharma');