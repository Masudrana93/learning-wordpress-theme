<?php

function our_global_reach_and_recognitions(){
    register_post_type('our_global_reach', array(
        'labels' => array(
            'name'                 =>  __( 'Our Global Reach & Recognitions', 'pharma' ),
            'singular_name'        =>  __( 'Our Global Reach & Recognitions', 'pharma' ),
            'menu_name'            =>  __( 'Our Global Reach & Recognitions', 'pharma' ),
            'name_admin_bar'       =>  __( 'Our Global Reach & Recognitions', 'pharma' ),
            'add_new'              =>  __( 'Add New Our Global Reach & Recognitions', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Our Global Reach & Recognitions Item', 'pharma' ),
            'featured_image'       =>  __( 'Our Global Reach & Recognitions\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Our Global Reach & Recognitions\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Our Global Reach & Recognitions\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=global_operations',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'our-global-reach-recog'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'our_global_reach_and_recognitions');

