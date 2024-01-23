<?php get_header(); ?>
<main>
    <div class="services__container">
        <div class="services">
            <h1>Services</h1>
            <section>
                <div class="services__inner">
                    <div class="services__descriptions">
                        <div class="services__descriptions-buttons">
                            <div onclick=textChangher(0) class="active_description_button services__descriptions-buttons--button">
                                <p><img src="<?php echo get_template_directory_uri() . '/assets/img/arrow_services_grey.svg'; ?>" alt="">Mastering</p>
                                <div id="services__descriptions-buttons--button---border-one" class="d-block d-lg-none services__descriptions-buttons--button---border"></div>
                            </div>
                            <div onclick=textChangher(1) class="services__descriptions-buttons--button">
                                <p><img src="<?php echo get_template_directory_uri() . '/assets/img/arrow_services_grey.svg'; ?>" alt="">Spatial Audio Mixing</p>
                                <div id='services__descriptions-buttons--button---border-two' class="d-none d-lg-none services__descriptions-buttons--button---border"></div>
                            </div>
                        </div>
                        <div class="services__descriptions-text">
                            <div class="services__descriptions-text--paragraph active_paragraph">
                                <p>Mastering is the art of ensuring your tracks aren’t just heard, but felt across every device. Think of it as giving your music the VIP treatment—it's about ensuring those beats hit right on club speakers, sound smooth on car drives, and have the perfect echo on headphones. Plus, with Atoms Studio, every masterpiece is delivered in pristine lossless audio and is Apple Digital Master-ready. Because quality? That's our jam.</p>
                            </div>
                            <div class="services__descriptions-text--paragraph">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi numquam tempore iusto sit quia, culpa at ipsa consequuntur nemo, velit dolorum? Quae voluptatibus aspernatur alias distinctio. Necessitatibus, quam eligendi. Rem.</p>
                            </div>
                            <div class="services__descriptions-text--button">
                                <a class="button-arrow-black" href=""><div>Book Now </div><img src="<?php echo get_template_directory_uri() . '/assets/img/arrow_services_white.svg'; ?>" alt=""></a>
                            </div>
                        </div> 
                    </div>
                    <div class="services__technologies">
                        <div class="services__technologies--technology">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/apple_services.png'; ?> " alt="">
                        </div>
                        <div class="services__technologies--technology">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/dolby_services.png'; ?>" alt="">
                        </div>
                        <div class="services__technologies--technology">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/lossless_services.png'; ?>" alt="">
                        </div>
                        <div class="services__technologies--technology">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/wav_services.png'; ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>