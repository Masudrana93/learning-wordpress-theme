<?php

function message_from_managing_director_post_type_pharma(){
    register_post_type('md_message', array(
        'labels' => array(
            'name'                 =>  __( 'Message from Managing Director', 'pharma' ),
            'singular_name'        =>  __( 'Message from Managing Director', 'pharma' ),
            'menu_name'            =>  __( 'Message from Managing Director', 'pharma' ),
            'name_admin_bar'       =>  __( 'Message from Managing Director', 'pharma' ),
            'add_new'              =>  __( 'Add New Message from Managing Director', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Message from Managing Director Item', 'pharma' ),
            'featured_image'       =>  __( 'Message from Managing Director\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Message from Managing Director\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Message from Managing Director\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=about_us',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'message-from-md'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'message_from_managing_director_post_type_pharma');





