<?php

function who_works_here_post_type_pharma(){
    register_post_type('who_works_here', array(
        'labels' => array(
            'name'                 =>  __( 'Who Works Here', 'pharma' ),
            'singular_name'        =>  __( 'Who Works Here', 'pharma' ),
            'menu_name'            =>  __( 'Who Works Here', 'pharma' ),
            'name_admin_bar'       =>  __( 'Who Works Here', 'pharma' ),
            'add_new'              =>  __( 'Add New Who Works Here', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Who Works Here Item', 'pharma' ),
            'featured_image'       =>  __( 'Who Works Here\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Who Works Here\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Who Works Here\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=career',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'who-works-here'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'who_works_here_post_type_pharma');

