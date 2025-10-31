<?php

function career_growth_post_type_pharma(){
    register_post_type('career_growth', array(
        'labels' => array(
            'name'                 =>  __( 'Career Growth', 'pharma' ),
            'singular_name'        =>  __( 'Career Growth', 'pharma' ),
            'menu_name'            =>  __( 'Career Growth', 'pharma' ),
            'name_admin_bar'       =>  __( 'Career Growth', 'pharma' ),
            'add_new'              =>  __( 'Add New Career Growth', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Career Growth Item', 'pharma' ),
            'featured_image'       =>  __( 'Career Growth\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Career Growth\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Career Growth\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=career',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'career-growth'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'career_growth_post_type_pharma');

