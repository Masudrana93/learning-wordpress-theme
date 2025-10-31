<?php

function message_from_chairman_post_type_pharma(){
    register_post_type('chairman_message', array(
        'labels' => array(
            'name'                 =>  __( 'Message from Chairman', 'pharma' ),
            'singular_name'        =>  __( 'Message from Chairman', 'pharma' ),
            'menu_name'            =>  __( 'Message from Chairman', 'pharma' ),
            'name_admin_bar'       =>  __( 'Message from Chairman', 'pharma' ),
            'add_new'              =>  __( 'Add New Message from Chairman', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Message from Chairman Item', 'pharma' ),
            'featured_image'       =>  __( 'Message from Chairman\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Message from Chairman\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Message from Chairman\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=about_us',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'message-from-chairman'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'message_from_chairman_post_type_pharma');





