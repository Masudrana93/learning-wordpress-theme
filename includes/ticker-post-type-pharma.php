<?php

function ticker_post_type_pharma(){
    register_post_type('ticker', array(
        'labels' => array(
            'name'                 =>  __( 'Ticker', 'pharma' ),
            'singular_name'        =>  __( 'Ticker', 'pharma' ),
            'menu_name'            =>  __( 'Ticker', 'pharma' ),
            'name_admin_bar'       =>  __( 'Ticker', 'pharma' ),
            'add_new'              =>  __( 'Add New Ticker', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Ticker Item', 'pharma' ),
            'archives'             =>  __( 'Ticker\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'menu_position'       => 6,
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'ticker'),
        'publicly_queryable'  => true,                                                                                                                                                       
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title'),
    ));
}
add_action('init', 'ticker_post_type_pharma');