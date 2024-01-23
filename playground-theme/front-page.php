<?php
get_header(); ?>
<?php if(!wp_is_mobile()): ?>
    <video class="home--video" preload="auto" muted="" playsinline="" autoplay="autoplay" loop="loop">
        <source src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/bg-v.mp4' ); ?>" type="video/mp4">
    </video>
<?php endif; ?>
<div class="home">
    <div class="home__row">
        <div class="home__heading_block home__heading_block__container">
            <div class="heading_block__top">
                <div class="heading_block__top__left">
                    <h1>For a Realistic, Immersive Audio Experience: Dolby Atmos</h1>
                    <p>Bring your music to the next level with our expert Spatial Mixing Solutions, elevate your audio
                        to new heights.</p>
                    <a class="button-arrow-black" href="<?php echo esc_url(home_url('/sign-in')); ?>"><div>Log in</div><img
                            src="<?php echo get_template_directory_uri() . '/assets/img/arrow_button_right.svg'; ?>"
                            alt=""></a>
                </div>
                <div class="heading_block__top__right d-none">
                    <div class="heading_block__top__right-video">
                        <video src=""></video>
                    </div>
                </div>
            </div>
            <div class="heading_block__bottom">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/castle_lite_main.svg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/apple.svg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/sony.svg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/universal.svg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/warner.svg'; ?>" alt="">
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="home__slider_recent_work home__slider_recent_work__container">
                <h2>Recent Work</h2>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                    crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                    crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                    crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                    crossorigin="anonymous"></script>
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"
                    id="bootstrap-css">
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

                <div class="home__slider_recent_work--row">
                    <div id='recent_slider' class="splide" aria-labelledby="carousel-heading">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="pad15">
                                        <div class="slider_element_title">
                                            <p>Your Title</p>
                                            <p>Your description goes here.</p>
                                        </div>
                                        <div class="slider_element_absolute">
                                            <div class="slider_element_applemusic">
                                                <div class="applemusic_button">
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/listen_on_applemusic.svg'; ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="slider_element_image_block">
                                                <img class="slider_element_image"
                                                    src="<?php echo get_template_directory_uri() . '/assets/img/album_1.jpeg' ?>"
                                                    alt="">
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="pad15">
                                        <div class="slider_element_title">
                                            <p>Your Title</p>
                                            <p>Your description goes here.</p>
                                        </div>
                                        <div class="slider_element_absolute">
                                            <div class="slider_element_applemusic">
                                                <div class="applemusic_button">
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/listen_on_applemusic.svg'; ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="slider_element_image_block">
                                                <img class="slider_element_image"
                                                    src="<?php echo get_template_directory_uri() . '/assets/img/album_1.jpeg' ?>"
                                                    alt="">
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="pad15">
                                        <div class="slider_element_title">
                                            <p>Your Title</p>
                                            <p>Your description goes here.</p>
                                        </div>
                                        <div class="slider_element_absolute">
                                            <div class="slider_element_applemusic">
                                                <div class="applemusic_button">
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/listen_on_applemusic.svg'; ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="slider_element_image_block">
                                                <img class="slider_element_image"
                                                    src="<?php echo get_template_directory_uri() . '/assets/img/album_1.jpeg' ?>"
                                                    alt="">
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="pad15">
                                        <div class="slider_element_title">
                                            <p>Your Title</p>
                                            <p>Your description goes here.</p>
                                        </div>
                                        <div class="slider_element_absolute">
                                            <div class="slider_element_applemusic">
                                                <div class="applemusic_button">
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/listen_on_applemusic.svg'; ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="slider_element_image_block">
                                                <img class="slider_element_image"
                                                    src="<?php echo get_template_directory_uri() . '/assets/img/album_1.jpeg' ?>"
                                                    alt="">
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="pad15">
                                        <div class="slider_element_title">
                                            <p>Your Title</p>
                                            <p>Your description goes here.</p>
                                        </div>
                                        <div class="slider_element_absolute">
                                            <div class="slider_element_applemusic">
                                                <div class="applemusic_button">
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/listen_on_applemusic.svg'; ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="slider_element_image_block">
                                                <img class="slider_element_image"
                                                    src="<?php echo get_template_directory_uri() . '/assets/img/album_1.jpeg' ?>"
                                                    alt="">
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="pros pros__container">
            <div class="pros__block__one">
                <div class="pros__block-background_image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/icon_profile-circled.svg'; ?>"
                        alt="">
                </div>
                <div class="pros__block-content">
                    <p>Sign Up & Log In</p>
                    <p>Jumpstart your Atoms journey. Set up your account, shape your profile, and you're all set.</p>
                    <div class="pros__block-content--buttons">
                        <a class="button-arrow-black" href="<?php echo esc_url(home_url('/sign-up')); ?>"><div>Sign Up</div></a>
                        <a class="button--blue" href="<?php echo esc_url(home_url('/sign-in')); ?>"><div>Log in</div></a>
                    </div>
                </div>
            </div>
            <div class="pros__devider__one">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/home_pros_1.svg'; ?>" alt="">
            </div>
            <div class="pros__block__two">
                <div class="pros__block-background_image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/document.svg'; ?>" alt="">
                </div>
                <div class="pros__block-content">
                    <p>Get Instant Quote</p>
                    <p>No long waits. Answer a few prompts, and we'll serve up your mixing quote on the spot. </p>
                    <div class="pros__block-content--buttons">
                        <a class="button-arrow-black" href="<?php echo esc_url(home_url('/sign-up')); ?>"><div>Sign Up</div></a>
                        <a class="button--blue" href="<?php echo esc_url(home_url('/sign-in')); ?>"><div>Log in</div></a>
                    </div>
                </div>
            </div>
            <div class="pros__devider__two">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/home_pros_2.svg'; ?>" alt="">
            </div>
            <div class="pros__block__three">
                <div class="pros__block-background_image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/secure_payment.svg'; ?>" alt="">
                </div>
                <div class="pros__block-content">
                    <p>Secure Payment</p>
                    <p>Keep it simple and secure. Process your payents with stripe, paypal, paypal credit and mobicred
                    </p>
                    <div class="pros__block-content--buttons">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/paypal.svg'; ?>" alt="">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/stripe.svg'; ?>" alt="">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/mobicred.svg'; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="pros__devider__three">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/home_pros_1.svg'; ?>" alt="">
            </div>
            <div class="pros__block__four">
                <div class="pros__block-background_image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/stems.svg'; ?>" alt="">
                </div>
                <div class="pros__block-content">
                    <p>Upload Your Stems</p>
                    <p>Ready to elevate those tracks? Send over your stems, and we'll prep
                        for the mix.</p>
                    <div class="pros__block-content--buttons">
                        <a class="button-arrow-black" href="<?php echo esc_url(home_url('/sign-up')); ?>"><div>Sign Up</div></a>
                        <a class="button--blue" href="<?php echo esc_url(home_url('/sign-in')); ?>"><div>Log in</div></a>
                    </div>
                </div>
            </div>
            <div class="pros__devider__four">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/home_pros_2.svg'; ?>" alt="">
            </div>
            <div class="pros__block__five">
                <div class="pros__block-background_image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/controls.svg'; ?>" alt="">
                </div>
                <div class="pros__block-content">
                    <p>Receive Your Atmos Mix</p>
                    <p>When it's all said and done, your Dolby Atmos mix awaits in your profile. Premium sound, tailored
                        for you</p>
                </div>
            </div>
            <div class="pros__devider__five">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/home_pros_1.svg'; ?>" alt="">
            </div>
            <div class="pros__block__six">
                <div class="pros__block-background_image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/store.svg'; ?>" alt="">
                </div>
                <div class="pros__block-content">
                    <p>Store and Share your work</p>
                    <div class="pros__block-content--buttons">
                        <a class="button-arrow-black" href="<?php echo esc_url(home_url('/sign-up')); ?>"><div>Sign Up</div></a>
                        <a class="button--blue" href="<?php echo esc_url(home_url('/sign-in')); ?>"><div>Log in</div></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="overflow-hidden">
            <div class="team_home team_home__container">
                <h2>Team</h2>
                <section id='top_slider' class="splide" aria-labelledby="carousel-heading">
                    <div class="team_home_absolute_right">

                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="team_home_slider_info">
                                <p><?php echo wp_is_mobile() ? 'info' : 'i'; ?></p>
                                </div>
                                <div class="team_home_slider_background_image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/team_home_1.png' ?>"
                                        alt="">
                                    <p>Glody “Glo TheBeatz” Kasongo</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="team_home_slider_info">
                                    <p><?php echo wp_is_mobile() ? 'info' : 'i'; ?></p>
                                </div>
                                <div class="team_home_slider_background_image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/team_home_1.png' ?>"
                                        alt="">
                                    <p>Glody “Glo TheBeatz” Kasongo</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="team_home_slider_info">
                                    <p><?php echo wp_is_mobile() ? 'info' : 'i'; ?></p>
                                </div>
                                <div class="team_home_slider_background_image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/team_home_1.png' ?>"
                                        alt="">
                                    <p>Glody “Glo TheBeatz” Kasongo</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="team_home_slider_info">
                                    <p><?php echo wp_is_mobile() ? 'info' : 'i'; ?></p>
                                </div>
                                <div class="team_home_slider_background_image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/team_home_1.png' ?>"
                                        alt="">
                                    <p>Glody “Glo TheBeatz” Kasongo</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="team_home_slider_info">
                                    <p><?php echo wp_is_mobile() ? 'info' : 'i'; ?></p>
                                </div>
                                <div class="team_home_slider_background_image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/team_home_1.png' ?>"
                                        alt="">
                                    <p>Glody “Glo TheBeatz” Kasongo</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <?php get_template_part('reviews', 'slider'); ?>

    </div>
</div>
</div>


<?php get_footer(); ?>