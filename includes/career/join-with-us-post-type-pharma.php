<?php

function join_with_us_post_type_pharma(){
    register_post_type('join_with_us', array(
        'labels' => array(
            'name'                 =>  __( 'Join With Us', 'pharma' ),
            'singular_name'        =>  __( 'Join With Us', 'pharma' ),
            'menu_name'            =>  __( 'Join With Us', 'pharma' ),
            'name_admin_bar'       =>  __( 'Join With Us', 'pharma' ),
            'add_new'              =>  __( 'Add New Join With Us', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Join With Us Item', 'pharma' ),
            'featured_image'       =>  __( 'Join With Us\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Join With Us\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Join With Us\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=career',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'join-with-us'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'join_with_us_post_type_pharma');

