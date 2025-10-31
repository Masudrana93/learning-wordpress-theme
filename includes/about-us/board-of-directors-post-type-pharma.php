<?php

function board_of_directors_post_type_pharma(){
    register_post_type('directors_board', array(
        'labels' => array(
            'name'                 =>  __( 'Board of Directors', 'pharma' ),
            'singular_name'        =>  __( 'Board of Directors', 'pharma' ),
            'menu_name'            =>  __( 'Board of Directors', 'pharma' ),
            'name_admin_bar'       =>  __( 'Board of Directors', 'pharma' ),
            'add_new'              =>  __( 'Add New Board of Directors', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Board of Directors Item', 'pharma' ),
            'featured_image'       =>  __( 'Board of Directors\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Board of Directors\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Board of Directors\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=about_us',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'board-of-directors'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title', 'custom-fields', 'thumbnail'),
    ));
}
add_action('init', 'board_of_directors_post_type_pharma');
