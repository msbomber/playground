<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); 
    global $current_user;
    ?>
</head>

<body
    class="<?php
    if (is_home()): ?>home_page_background_normal<?php endif; 
    if (is_page('profile')): ?>profile_page_background_normal<?php endif; 
    if (is_page('sign-in') || is_page('sign-up')): ?>sign_in_up_page_background_normal<?php endif; 
    if (is_page('team')): ?>team_page_background_normal<?php endif; 
    if (is_page('services')): ?>services_page_background_normal<?php endif; 
    if (is_page('about-us')): ?>about-us_page_background_normal<?php endif; 
    if (is_page('contact-us')): ?>contact-us_page_background_normal<?php endif; 
    if (is_page('quote')): ?>quote_page_background_normal<?php endif; ?>
    ">
    <header>
        <div class="header__container">
            <div class="header">
                <div class="header__logo playground">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg' ?>" alt="">
                    <p><a style="text-decoration:none;color: var(--Black, #0A0A0A);
font-family: 'Poppins', sans-serif;;
font-size: 20px;
font-style: normal;
font-weight: 500;
line-height: normal; " href=" <?php echo get_site_url() . '/'; ?>">playground.</a></p>
                </div>
                <div class="header__buttons">
                    <div class="header__buttons-pages">
                        <a href="<?php the_permalink(40); ?>">Services</a>
                        <a href="<?php the_permalink(44); ?>">Team</a>
                        <a href="<?php the_permalink(42); ?>">About us</a>
                    </div>
                    <?php if (!is_user_logged_in()): ?>
                        <div class="header__buttons-reglog">
                            <a class="active_reglog" href="<?php echo esc_url(home_url('/sign-up')); ?>">Sign Up</a>
                            <a href="<?php echo esc_url(home_url('/sign-in')); ?>">Log in</a>
                        </div>
                    <?php endif; ?>
                    <?php if (is_user_logged_in()): ?>
                        <a href="<?php echo esc_url(home_url('/profile')); ?>" class="header__user">
                            <span><?php echo $current_user->display_name; ?></span>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/user.png'; ?>" alt="">
                        </a>
                    <?php endif; ?>
                </div>
                <div class="header__menu">
                    <p onclick=MenuOpener()>Menu <img src="" alt=""></p>
                </div>
                <div class="header__gradient">

                </div>
            </div>
            <div class="header__menu-buttons">
                <a href="<?php the_permalink(40); ?>" class="header__menu-button">Services</a>
                <a href="<?php the_permalink(44); ?>" class="header__menu-button">Team</a>
                <a href="<?php the_permalink(42); ?>" class="header__menu-button">About Us</a>
            </div>
        </div>
    </header>