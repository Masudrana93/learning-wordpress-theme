<?php

function company_profile_post_type_pharma(){
    register_post_type('company_profile', array(
        'labels' => array(
            'name'                 =>  __( 'Company Profile', 'pharma' ),
            'singular_name'        =>  __( 'Company Profile', 'pharma' ),
            'menu_name'            =>  __( 'Company Profile', 'pharma' ),
            'name_admin_bar'       =>  __( 'Company Profile', 'pharma' ),
            'add_new'              =>  __( 'Add New Company Profile', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Company Profile Item', 'pharma' ),
            'featured_image'       =>  __( 'Company Profile\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Company Profile\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Company Profile\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=about_us',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'company-profile'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'company_profile_post_type_pharma');





