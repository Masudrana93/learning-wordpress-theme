<?php

function by_generic_name_post_type(){
    register_post_type('by_generic_name', array(
        'labels' => array(
            'name'                 =>  __( 'By Generic Name', 'pharma' ),
            'singular_name'        =>  __( 'By Generic Name', 'pharma' ),
            'menu_name'            =>  __( 'By Generic Name', 'pharma' ),
            'name_admin_bar'       =>  __( 'By Generic Name', 'pharma' ),
            'add_new'              =>  __( 'Add New By Generic Name', 'pharma' ),
            'add_new_item'         =>  __( 'Add New By Generic Name Item', 'pharma' ),
            'featured_image'       =>  __( 'By Generic Name\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set By Generic Name\'s Photo', 'pharma' ),
            'archives'             =>  __( 'By Generic Name\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=products',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'by-generic-name'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'by_generic_name_post_type');

