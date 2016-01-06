<?php 

function hide_front_fields() {

    $front = get_option( 'page_on_front');
    $current = (isset($_GET['post'])) ? wp_strip_all_tags($_GET['post']) : false;
    if($front !== $current){
       echo '<style type="text/css"> #front_fields{ display: none!important; } </style>';
    } 
}

add_action('admin_head', 'hide_front_fields');

$mb[] = array(
    'id' => 'front_fields',
    'title' => __( 'Forsidekasser', 'rwmb' ),
    'pages' => array('page'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Kasse', 'rwmb' ),
            'id'    => "field",
            'type' => 'group',
            'clone' => true,
            'fields' => array(

                array(
                    'name' => __('Ikon','rwmb'),
                    'id' => 'field_icon',
                    'type' => 'file_advanced',
                    'max_file_uploads' => 1,
                ),

                array(
                    'name' => __('overskrift','rwmb'),
                    'id' => 'field_heading',
                    'type' => 'text',
                ),                

                array(
                    'name' => 'tekst',
                    'id'    => 'field_text',
                    'type' => 'textarea',
                    'rows' => 4,
                ),

            ),

            ),
    ),
);
