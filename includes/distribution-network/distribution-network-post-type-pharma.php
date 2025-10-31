<?php

function distribution_network_post_type_pharma(){
    register_post_type('distribution_network', array(
        'labels' => array(
            'name'                 =>  __( 'Distribution Network', 'pharma' ),
            'singular_name'        =>  __( 'Distribution Network', 'pharma' ),
            'menu_name'            =>  __( 'Distribution Network', 'pharma' ),
            'name_admin_bar'       =>  __( 'Distribution Network', 'pharma' ),
            'add_new'              =>  __( 'Add New Distribution Network', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Distribution Network Item', 'pharma' ),
            'featured_image'       =>  __( 'Distribution Network\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Distribution Network\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Distribution Network\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'menu_icon'           => 'dashicons-networking',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'distribution-network'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'distribution_network_post_type_pharma');

