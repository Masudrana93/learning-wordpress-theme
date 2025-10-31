<?php

function chemical_division_post_type_pharma(){
    register_post_type('chemical_division', array(
        'labels' => array(
            'name'                 =>  __( 'Chemical Division', 'pharma' ),
            'singular_name'        =>  __( 'Chemical Division', 'pharma' ),
            'menu_name'            =>  __( 'Chemical Division', 'pharma' ),
            'name_admin_bar'       =>  __( 'Chemical Division', 'pharma' ),
            'add_new'              =>  __( 'Add New Chemical Division', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Chemical Division Item', 'pharma' ),
            'featured_image'       =>  __( 'Chemical Division\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Chemical Division\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Chemical Division\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=divisions',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'chemical-division'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'chemical_division_post_type_pharma');

