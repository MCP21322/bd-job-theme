<?php


//  log in function

function custom_login_form_shortcode(){
    //when user already log in
    if(is_user_logged_in()){
        $current_user = wp_get_current_user();
        return '<p class="login-status">আপনি <strong>' . esc_html($current_user->display_name) . '</strong> হিসেবে লগইন আছেন। <a href="' . home_url('/post_job/') . '">ড্যাশবোর্ডে যান</a></p>';

    };
    // form setting here
   $args = array(
        'echo'           => false,
        'redirect'       => home_url('/job-post/'), 
        'form_id'        => 'custom-login-form',
        'label_username' => '', 
        'label_password' => '', 
        'label_remember' => 'মনে রাখুন',
        'label_log_in'   => 'লগইন করুন',
        'remember'       => true,
        'value_remember' => true,
    );
    $form = wp_login_form( $args );
    //error cheack here
    if(isset($_GET['login']) &&  $_GET['login'] == 'failed'){
        $form = $form = '<p style="color:red; font-size:14px;">দুঃখিত! আপনার ইউজার নাম বা পাসওয়ার্ড সঠিক নয়।</p>' . $form;
    }; 
    return '<div class="custom-loging-form">' . $form .'</div>';
    
}  

add_shortcode( 'my_login_form', 'custom_login_form_shortcode' );


