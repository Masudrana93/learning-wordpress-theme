<?php

function quality_policy_post_type_pharma(){
    register_post_type('quality_policy', array(
        'labels' => array(
            'name'                 =>  __( 'Quality Policy', 'pharma' ),
            'singular_name'        =>  __( 'Quality Policy', 'pharma' ),
            'menu_name'            =>  __( 'Quality Policy', 'pharma' ),
            'name_admin_bar'       =>  __( 'Quality Policy', 'pharma' ),
            'add_new'              =>  __( 'Add New Quality Policy', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Quality Policy Item', 'pharma' ),
            'featured_image'       =>  __( 'Quality Policy\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Quality Policy\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Quality Policy\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=about_us',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'quality-policy'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'quality_policy_post_type_pharma');





