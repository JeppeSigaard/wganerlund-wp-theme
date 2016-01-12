<?php
add_action( 'wp_ajax_front-form-submit', 'ajax_contact_form' );
add_action( 'wp_ajax_nopriv_front-form-submit', 'ajax_contact_form' );

function sendEmail( $from_name, $from, $to, $subject, $message ){
    $header = "From: ".$from_name." <".$from.">\r\n"; 
    $header.= "MIME-Version: 1.0\r\n"; 
    $header.= "Content-Type: text/html; charset=utf-8\r\n"; 
    $header.= "X-Priority: 1\r\n"; 
    $email = wp_mail($to, $subject, $message, $header);
    return $email;
}

function ajax_contact_form(){
    
    $response = array();
    $navn = (isset($_POST['navn'])) ? wp_strip_all_tags($_POST['navn']): false;
    $email = (isset($_POST['email'])) ? wp_strip_all_tags($_POST['email']): false;
    $telefon = (isset($_POST['telefon'])) ? wp_strip_all_tags($_POST['telefon']): false;
    $about = (isset($_POST['about'])) ? wp_strip_all_tags($_POST['about']): false;
    $kommentar = (isset($_POST['kommentar'])) ? esc_textarea($_POST['kommentar']): false;
    
    if(!$navn){$response['error'] = 'Indtast et navn';}
    else if(!$email){$response['error'] = 'Indtast en email';}
    
    if(!isset($response['error'])){
        
        $post_vars = array(
            'post_title'     => $navn.' ['.$email.']',
            'post_status'    => 'publish',
            'post_type'      => 'form',
        );  
        
        $response['post_id'] = wp_insert_post($post_vars,true);
        
        if(is_wp_error($response['post_id'])){$response['error'] = $return->get_error_message();} 
    }
    
    if(!isset($response['error'])){
        
        update_post_meta($response['post_id'],'form_navn',$navn);
        update_post_meta($response['post_id'],'form_email',$email);
        update_post_meta($response['post_id'],'form_telefon',$telefon);
        update_post_meta($response['post_id'],'form_about',$about);
        update_post_meta($response['post_id'],'form_kommentar',$kommentar);
        
        $response['success'] = '<article><h2>Tak for din henvendelse</h2><p>Vi vil besvare den hurtigst muligt.</p><article>';
        
        sendEmail( get_theme_mod('info_name'), get_theme_mod('info_email'), get_theme_mod('info_email'), 'Ny henvendelse fra '.$navn, $kommentar );
    }
    
    wp_die(json_encode($response));
}