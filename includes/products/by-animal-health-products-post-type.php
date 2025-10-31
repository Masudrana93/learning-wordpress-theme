<?php

function by_animal_health_products_post_type(){
    register_post_type('by_animal_health', array(
        'labels' => array(
            'name'                 =>  __( 'By Animal Health Products', 'pharma' ),
            'singular_name'        =>  __( 'By Animal Health Products', 'pharma' ),
            'menu_name'            =>  __( 'By Animal Health Products', 'pharma' ),
            'name_admin_bar'       =>  __( 'By Animal Health Products', 'pharma' ),
            'add_new'              =>  __( 'Add New By Animal Health Products', 'pharma' ),
            'add_new_item'         =>  __( 'Add New By Animal Health Products Item', 'pharma' ),
            'featured_image'       =>  __( 'By Animal Health Products\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set By Animal Health Products\'s Photo', 'pharma' ),
            'archives'             =>  __( 'By Animal Health Products\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=products',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'by-animal-health-products'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'by_animal_health_products_post_type');

