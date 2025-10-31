<?php

function herbal_and_nutricare_division_post_type_pharma(){
    register_post_type('herbal_nut_division', array(
        'labels' => array(
            'name'                 =>  __( 'Herbal and Nutricare Division', 'pharma' ),
            'singular_name'        =>  __( 'Herbal and Nutricare Division', 'pharma' ),
            'menu_name'            =>  __( 'Herbal and Nutricare Division', 'pharma' ),
            'name_admin_bar'       =>  __( 'Herbal and Nutricare Division', 'pharma' ),
            'add_new'              =>  __( 'Add New Herbal and Nutricare Division', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Herbal and Nutricare Division Item', 'pharma' ),
            'featured_image'       =>  __( 'Herbal and Nutricare Division\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Herbal and Nutricare Division\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Herbal and Nutricare Division\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=divisions',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'herbal-and-nutricare-division'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'herbal_and_nutricare_division_post_type_pharma');

