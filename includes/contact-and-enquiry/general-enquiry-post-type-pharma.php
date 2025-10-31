<?php

function general_enquiry_post_type_pharma(){
    register_post_type('general_enquiry', array(
        'labels' => array(
            'name'                 =>  __( 'General Enquiry', 'pharma' ),
            'singular_name'        =>  __( 'General Enquiry', 'pharma' ),
            'menu_name'            =>  __( 'General Enquiry', 'pharma' ),
            'name_admin_bar'       =>  __( 'General Enquiry', 'pharma' ),
            'add_new'              =>  __( 'Add New General Enquiry', 'pharma' ),
            'add_new_item'         =>  __( 'Add New General Enquiry Item', 'pharma' ),
            'featured_image'       =>  __( 'General Enquiry\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set General Enquiry\'s Photo', 'pharma' ),
            'archives'             =>  __( 'General Enquiry\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=contact_and_enquiry',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'general-enquiry'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'general_enquiry_post_type_pharma');

