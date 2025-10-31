<?php

function working_environment_post_type_pharma(){
    register_post_type('working_environment', array(
        'labels' => array(
            'name'                 =>  __( 'Working Environment', 'pharma' ),
            'singular_name'        =>  __( 'Working Environment', 'pharma' ),
            'menu_name'            =>  __( 'Working Environment', 'pharma' ),
            'name_admin_bar'       =>  __( 'Working Environment', 'pharma' ),
            'add_new'              =>  __( 'Add New Working Environment', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Working Environment Item', 'pharma' ),
            'featured_image'       =>  __( 'Working Environment\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Working Environment\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Working Environment\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=career',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'working-environment'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'working_environment_post_type_pharma');

