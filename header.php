<?php
// This is a hearder area
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('Charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="header">
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><p><?php echo get_theme_mod('top_header_text_setting'); ?></p></div>
                    <!-- sign up HTML here start -->
                    <div id="sign_up_form">
                        <!-- লগিন আবস্তায় লগ আউট বাটন দেখাবে --> 
                        <?php if(is_user_logged_in()) : ?>
                            <button><a href="<?php echo wp_logout_url( home_url() ); ?>" class="btn-logout">Log out</a></button>
                        <?php else : ?>
                        <button id="signupBtn" class="btn-signup">Sign Up</button>
                        <div id="signupModal" class="modal">
                            <div class="modal-content">
                                <span class="close-btn">&times;</span>
                                <h2>Create an Account</h2>
                                <?php echo do_shortcode('[custom_signup]'); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <!-- sign up HTML end here -->
                </div>
            </div>
        </div>
        <div id="header_area">
            <div class="container">
                <div class="row  <?php echo get_theme_mod('nurani_menu_position_setting'); ?>" id="menu_logo_area">   
                    <div class="col-md-3 logo_col">
                        <?php 
                        $logo_link = esc_url(home_url('/'));
                        $logo_url = get_theme_mod('nurani_logo_setting');
                        $default_logo = get_template_directory_uri() . '/img/image.png';
                        ?>
                        <a href="<?php echo $logo_link; ?>" rel="home">
                            <img src="<?php echo $logo_url ? $logo_url : $default_logo; ?>" alt="Logo">
                        </a>
                    </div>
                    <div class="col-md-9 menu_col">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'menu_id'        => 'nav',
                            'container'      => false,
                            'fallback_cb'    => false,
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>