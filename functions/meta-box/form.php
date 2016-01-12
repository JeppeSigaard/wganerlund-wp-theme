<?php 

$mb[] = array(
    'id' => 'form_detail',
    'title' => __( 'Detaljer', 'rwmb' ),
    'pages' => array('form'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Navn', 'rwmb' ),
            'id'    => "form_navn",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Email', 'rwmb' ),
            'id'    => "form_email",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Telefonnummer', 'rwmb' ),
            'id'    => "form_telefon",
            'type' => 'text',
            ),
        
         array(
            'name'  => __( 'Henvendelsen drejer sig om', 'rwmb' ),
            'id'    => "form_about",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Kommentar', 'rwmb' ),
            'id'    => "form_kommentar",
            'type' => 'textarea',
            ),
    ),
);