<?php

$mb[] = array(
    'id' => 'subheader',
    'title' => __( 'Undertitel', 'rwmb' ),
    'pages' => array('post','page'),
    'context' => 'side',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Angiv undertitel', 'rwmb' ),
            'id'    => "subheader",
            'type' => 'text',
        ),
    ),
);
