<?php

function vision_and_mission_post_type_pharma(){
    register_post_type('vision_and_mission', array(
        'labels' => array(
            'name'                 =>  __( 'Vision and Mission', 'pharma' ),
            'singular_name'        =>  __( 'Vision and Mission', 'pharma' ),
            'menu_name'            =>  __( 'Vision and Mission', 'pharma' ),
            'name_admin_bar'       =>  __( 'Vision and Mission', 'pharma' ),
            'add_new'              =>  __( 'Add New Vision and Mission', 'pharma' ),
            'add_new_item'         =>  __( 'Add New Vision and Mission Item', 'pharma' ),
            'featured_image'       =>  __( 'Vision and Mission\'s Photo', 'pharma' ),
            'set_featured_image'   =>  __( 'Set Vision and Mission\'s Photo', 'pharma' ),
            'archives'             =>  __( 'Vision and Mission\'s Archive', 'pharma' ),
        ),
        'public'              => true,
        'show_in_menu'        => 'edit.php?post_type=about_us',
        'has_archive'         => true,
        'rewrite'             => array('slug'=> 'vision-and-mission'),
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title','editor', 'thumbnail'),
    ));
}
add_action('init', 'vision_and_mission_post_type_pharma');





