<?php

function vegtables_post_type(){
    register_post_type('vegtables', array(
        'labels' => array(
            'name'                  => __('Vegtables', 'pharma'),   //here pharma is text domin
            'singular_name'         => __('Vegtables', 'pharma'),
            'menu_name'             => __('Vegtables', 'pharma'),
            'name_admin_bar'        => __('Vegtables', 'pharma'),
            'add_new'               => __('Add New Vegtables', 'pharma'),
            'Add_new_item'          => __('Add New Vegtables Item', 'pharma'),
            'featured_image'        => __('Vegtables\'s Photo', 'pharma'),
            'set_featured_image'    => __('Set Vegtable\'s Photo', 'pharma'),
            'archives'              => __('Vegtables\'s Archive', 'pharma'),
        ),
        'public'                    => true,
        // 'show_in_menu'           =>'eidt.php?post_type=about_us',
        'has_archive'               => true,
        'rewrite'                   => array('slug' => 'vegtables'),
        'publicly_queryable'        => true,
        'show_ui'                   => true,
        'query_var'                 => true,
        'capability_type'           => 'post',
        'hierarchical'              => true,
        'supports'                  => array('title', 'editor', 'thumbnail'),
    ));

}
add_action('init', 'vegtables_post_type');
