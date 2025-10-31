<?php

function virtual_tours_post_type_pharma(){
    register_post_type('virtual_tours', array(
        'labels' => array(
            'name'                 =>  __( 'Virtual Tours', 'pharma' ),
            'singular_name'        =>  __( 'Virtual Tours', 'pharma' ),
            'menu_name'            =>  __( 'Virtual Tours', 'pharma' ),
            'name_admin_bar'       =>  __( 'Virtual Tours', 'pharma' ),
            'add_new'              =>  __( 'Add New Virtual Tours', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Virtual Tours Item', 'pharma' ),
            'featured_image'       =>  __( 'Virtual Tours\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Virtual Tours\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Virtual Tours\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=facilities',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'virtual-tours'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'virtual_tours_post_type_pharma');

