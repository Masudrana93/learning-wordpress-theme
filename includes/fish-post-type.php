<?php

function fish_post_type(){
    register_post_type('fish', array(
        'labels' => array(
            'name'                 =>  __( 'fish', 'pharma' ),
            'singular_name'        =>  __( 'fish', 'pharma' ),
            'menu_name'            =>  __( 'Fish', 'pharma' ),
            'name_admin_bar'       =>  __( 'fish', 'pharma' ),
            'add_new'              =>  __( 'Add New fish', 'pharma' ),
            'add_new_item'         =>  __( 'Add New fish Item', 'pharma' ),
            'featured_image'       =>  __( 'fish\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set fish\'s Photo', 'pharma' ),
            'archives'             =>  __( 'fish\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        // 'show_in_menu'        => 'edit.php?post_type=about_us',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'fish'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'fish_post_type');


