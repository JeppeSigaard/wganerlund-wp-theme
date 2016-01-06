<?php 

add_action( 'init', 'smamo_add_form' );

function smamo_add_form() {
	register_post_type( 'form', array(
		
        'menu_icon' 		 => 'dashicons-email',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'form' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title'),
        'labels'             => array(
            
            'name'               => _x( 'Henvendelser', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Henvendelse', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Henvendelser', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Henvendelser', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'henvendelse', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny henvendelse', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se henvendelse', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find henvendelse', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny henvendelse.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}