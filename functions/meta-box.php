<?php

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    // Your boxes or requires here
    require_once 'meta-box/front-page.php';
    require_once 'meta-box/slide.php';
    require_once 'meta-box/form.php';
    require_once 'meta-box/subheader.php';
    
    
    
return $mb;

}




?>
