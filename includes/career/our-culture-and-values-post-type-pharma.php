<?php

function our_culture_and_values_post_type_pharma(){
    register_post_type('our_culture_values', array(
        'labels' => array(
            'name'                 =>  __( 'Our Culture and Values', 'pharma' ),
            'singular_name'        =>  __( 'Our Culture and Values', 'pharma' ),
            'menu_name'            =>  __( 'Our Culture and Values', 'pharma' ),
            'name_admin_bar'       =>  __( 'Our Culture and Values', 'pharma' ),
            'add_new'              =>  __( 'Add New Our Culture and Values', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Our Culture and Values Item', 'pharma' ),
            'featured_image'       =>  __( 'Our Culture and Values\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Our Culture and Values\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Our Culture and Values\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=career',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'our-culture-and-values'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'our_culture_and_values_post_type_pharma');

