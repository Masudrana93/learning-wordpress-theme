<?php

function product_complain_post_type_pharma(){
    register_post_type('product_complain', array(
        'labels' => array(
            'name'                 =>  __( 'Product Complain', 'pharma' ),
            'singular_name'        =>  __( 'Product Complain', 'pharma' ),
            'menu_name'            =>  __( 'Product Complain', 'pharma' ),
            'name_admin_bar'       =>  __( 'Product Complain', 'pharma' ),
            'add_new'              =>  __( 'Add New Product Complain', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Product Complain Item', 'pharma' ),
            'featured_image'       =>  __( 'Product Complain\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Product Complain\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Product Complain\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=contact_and_enquiry',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'product-complain'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'product_complain_post_type_pharma');

