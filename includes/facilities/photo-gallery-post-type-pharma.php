<?php

function photo_gallery_post_type_pharma(){
    register_post_type('photo_gallery', array(
        'labels' => array(
            'name'                 =>  __( 'Photo Gallery', 'pharma' ),
            'singular_name'        =>  __( 'Photo Gallery', 'pharma' ),
            'menu_name'            =>  __( 'Photo Gallery', 'pharma' ),
            'name_admin_bar'       =>  __( 'Photo Gallery', 'pharma' ),
            'add_new'              =>  __( 'Add New Photo Gallery', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Photo Gallery Item', 'pharma' ),
            'featured_image'       =>  __( 'Photo Gallery\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Photo Gallery\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Photo Gallery\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=facilities',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'photo-gallery'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'photo_gallery_post_type_pharma');

