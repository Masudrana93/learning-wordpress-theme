<?php

function animal_health_division_post_type_pharma(){
    register_post_type('animal_health_divi', array(
        'labels' => array(
            'name'                 =>  __( 'Animal Health Division', 'pharma' ),
            'singular_name'        =>  __( 'Animal Health Division', 'pharma' ),
            'menu_name'            =>  __( 'Animal Health Division', 'pharma' ),
            'name_admin_bar'       =>  __( 'Animal Health Division', 'pharma' ),
            'add_new'              =>  __( 'Add New Animal Health Division', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Animal Health Division Item', 'pharma' ),
            'featured_image'       =>  __( 'Animal Health Division\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Animal Health Division\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Animal Health Division\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=divisions',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'animal-health-division'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'animal_health_division_post_type_pharma');

