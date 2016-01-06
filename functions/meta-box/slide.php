<?php 

$mb[] = array(
    'id' => 'slide_options',
    'title' => __( 'Indstillinger', 'rwmb' ),
    'pages' => array('slide'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Tekst', 'rwmb' ),
            'id'    => "slide_text",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Link', 'rwmb' ),
            'id'    => "slide_link",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Link tekst', 'rwmb' ),
            'id'    => "slide_link_text",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Ikon', 'rwmb' ),
            'id'    => "slide_icon",
            'type' => 'file_advanced',
            'max_file_uploads' => 1,
        ),
    ),
);