<?php 
// sign up function
?>

<?php 
function custom_registration_form(){
    if(is_user_logged_in()) {
        return '<p>আপনি ইতিমধ্যে লগইন করা আছেন।</p>';
    };
    
    ob_start();
    
   // এরর মেসেজ চেক করা
    if(isset($_GET['signup_error'])){
        $error = $_GET['signup_error'];
        $message = '';

        if($error == 'user_exists') $message = 'ইউজারনেমটি ইতিমধ্যে ব্যবহৃত হয়েছে।';
        if($error == 'email_exists') $message = 'ইউজারনেমটি ইতিমধ্যে ব্যবহৃত হয়েছে।';
        if($error == 'failed') $message = 'রেজিস্ট্রেশন ব্যর্থ হয়েছে, আবার চেষ্টা করুন।';
        if($message){
            echo '<p style="color: #d9534f; background: #f2dede; padding: 10px; border: 1px solid #ebccd1; border-radius: 4px; margin-bottom: 15px;">' . $message . '</p>';
        }
    };
    ?>
    <form action="" method="POST" class="signup-modal-form">
        <p><input type="text" name="username" placeholder="ইউজার নেইম" required></p>
        <p><input type="email" name='email' placeholder="ইমেইল " required></p>
        <p><input type="password" name='password' placeholder="পাসওয়ার্ড" required></p>
        <p><input type="submit" name="submit_signup" value="সাইন আপ অ্যান্ড পোস্ট করুন" id='noorani_submit_signup'></p>
    </form>
    <?php
    return ob_get_clean();
}

add_shortcode('custom_signup', 'custom_registration_form');


// রেজিস্ট্রেশন লজিক আলাদা ফাংশনে (init হুকে)
add_action('init', 'handle_custom_signup');

 // ফরম সাবমিট হলে কি হবে সেটা 
 function handle_custom_signup(){
       if(isset($_POST['submit_signup'])){
        // wp_create_user হলো ওয়ার্ডপ্রেসের ডিফল্ট ফাংশন যা ডাটাবেসে নতুন ইউজার তৈরি করে।
        $username = sanitize_user( $_POST['username'] );
        $email = sanitize_email( $_POST['email'] );
        $password = $_POST['password'];

        //current url chacked
        $current_url = wp_get_referer() ? wp_get_referer() : home_url( );
       
        // check user name is already exsit;
        if(username_exists($username)){
            wp_redirect(add_query_arg('signup_error', 'user_exists',$current_url));
            exit;
        };
        // check email is already exsit;
        if(username_exists($email)){
            wp_redirect(add-add_query_arg('signup_error','email_exists', $current_url ));
            exit;
        }
        
        $user_id = wp_create_user($username, $password, $email);

        //যদি কোনো ভুল না হয় (error না থাকে)
        if(!is_wp_error($user_id)){
            wp_set_auth_cookie($user_id);
            wp_redirect(home_url('/post_job/'));
            exit;
        }else{
            error_log( $user_id->get_error_message());
        }

    };
    
};















