<?php 


Kirki::add_config( 'smamo_conf', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );

Kirki::add_config( 'smamo_business_info', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );

require 'kirki/info.php';