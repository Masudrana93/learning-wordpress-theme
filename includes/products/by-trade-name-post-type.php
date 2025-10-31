<?php

function by_trade_name_post_type(){
    register_post_type('by_trade_name', array(
        'labels' => array(
            'name'                 =>  __( 'By Trade Name', 'pharma' ),
            'singular_name'        =>  __( 'By Trade Name', 'pharma' ),
            'menu_name'            =>  __( 'By Trade Name', 'pharma' ),
            'name_admin_bar'       =>  __( 'By Trade Name', 'pharma' ),
            'add_new'              =>  __( 'Add New By Trade Name', 'pharma' ),
            'add_new_item'         =>  __( 'Add New By Trade Name Item', 'pharma' ),
            'featured_image'       =>  __( 'By Trade Name\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set By Trade Name\'s Photo', 'pharma' ),
            'archives'             =>  __( 'By Trade Name\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=products',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'by-trade-name'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'by_trade_name_post_type');

