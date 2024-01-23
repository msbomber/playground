<?php wp_footer();  ?>
<footer>
    <div class="footer__container">
        <div class="footer">
            <div class="footer__top col-12 col-md-12 col-lg-12">
                <div class="footer__top-left col-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="footer__top-left--logo playground">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg'; ?>" alt="">
                        <p>playground.</p>
                    </div>
                    <div class="footer__top-left--elements">
                        <p>We're looking for talented, passionate folks to join our team.</p>
                        <a class="button-arrow-black" href="<?php echo esc_url(home_url('/sign-up')); ?>"><div>Sign up</div><img
                            src="<?php echo get_template_directory_uri() . '/assets/img/arrow_button_right.svg'; ?>"
                            alt=""></a>
                    </div>
                </div>
                <div class="footer__top-right col-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="footer__top-right--nav-link">
                        <a href="">Facebook</a>
                        <a href="">Instagram</a>
                        <a href="">Twitter</a>
                        <a href="">LinkedIn</a>
                        <a href="">YouTube</a>
                        <a href="">TikTok</a>
                    </div>
                    <div class="footer__top-right--nav-link">
                        <a href="<?php the_permalink(40); ?>">Services</a>
                        <a href="<?php the_permalink(44); ?>">Team</a>
                        <a href="<?php the_permalink(42); ?>">About Us</a>
                        <a href="<?php echo esc_url(home_url('/sign-up')); ?>">Sign Up</a>
                        <a href="<?php echo esc_url(home_url('/sign-in')); ?>">Log in</a>
                        <a href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact</a>
                    </div>
                    <div class="footer__top-right--nav-link">
                        <a class="d-block d-md-none" href="">FAQ</a>
                        <a href="">500 Terry Francois Street
San Francisco, CA 94158</a>
                        <a href="">info@mysite.com</a>
                        <a href="">123-456-7890</a>
                        <a class="d-none d-md-block" href="">FAQ</a>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <p>© 2016 by playground.</p>
            </div>
        </div>
    </div>
</footer>

</body>

</html>