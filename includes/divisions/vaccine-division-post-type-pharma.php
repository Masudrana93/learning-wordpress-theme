<?php

function vaccine_division_post_type_pharma(){
    register_post_type('vaccine_division', array(
        'labels' => array(
            'name'                 =>  __( 'Vaccine Division', 'pharma' ),
            'singular_name'        =>  __( 'Vaccine Division', 'pharma' ),
            'menu_name'            =>  __( 'Vaccine Division', 'pharma' ),
            'name_admin_bar'       =>  __( 'Vaccine Division', 'pharma' ),
            'add_new'              =>  __( 'Add New Vaccine Division', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Vaccine Division Item', 'pharma' ),
            'featured_image'       =>  __( 'Vaccine Division\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Vaccine Division\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Vaccine Division\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=divisions',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'vaccine-division'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'vaccine_division_post_type_pharma');

