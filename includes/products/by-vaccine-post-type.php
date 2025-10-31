<?php

function by_vaccine_post_type(){
    register_post_type('by_vaccine', array(
        'labels' => array(
            'name'                 =>  __( 'By Vaccine', 'pharma' ),
            'singular_name'        =>  __( 'By Vaccine', 'pharma' ),
            'menu_name'            =>  __( 'By Vaccine', 'pharma' ),
            'name_admin_bar'       =>  __( 'By Vaccine', 'pharma' ),
            'add_new'              =>  __( 'Add New By Vaccine', 'pharma' ),
            'add_new_item'         =>  __( 'Add New By Vaccine Item', 'pharma' ),
            'featured_image'       =>  __( 'By Vaccine\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set By Vaccine\'s Photo', 'pharma' ),
            'archives'             =>  __( 'By Vaccine\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=products',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'by-vaccine'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'by_vaccine_post_type');

