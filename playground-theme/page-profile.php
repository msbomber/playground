<?php
get_header();
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

?>

<div class="profile__container">
	<div class="profile">
		<div class="profile__heading">
			<h1>Welcome to Atmos studio, get your instant quote here.</h1>
		</div>
		<div class="profile__content">
			<div class="profile__content-header">
				<div class="profile__content-header--user">
					<div class="user_image">
						<img src="<?php get_template_directory_uri() . '/assets/img/user.png' ?>" alt="">
					</div>
					<div class="user_text">
						<h2>
						<?php 
							$allowed_html = array(
								'a' => array(
										'href' => array(),
										'title' => array(),
								),
								'br' => array(),
								'em' => array(),
								'strong' => array(),
							);
	
							printf(
								/* translators: 1: user display name 2: logout url */
								wp_kses(__('%1$s', 'woocommerce'), $allowed_html),
								esc_html($current_user->display_name),
								esc_url(wc_logout_url())
							);
	 					?>
						</h2>
						<p><img src="" alt="">Johannesburg, South Africa</p>
					</div>
				</div>
				<div class="profile__content-header--quote">
					<a href="<?php echo esc_url(home_url('/quote')); ?>">Quote Now</a>
				</div>
			</div>
			<div class="profile__content-order">
				<div class="profile__content-order--wrapper">
					<div class="profile__content-order--wrapper---buttons">
						<?php ?>
						<!-- <a id="orders_button_profile">Artist<div class="profile__content-order--wrapper---buttons_underline-artist"></div></a> -->
						<a id="orders_button_profile">Orders<div class="profile__content-order--wrapper---buttons_underline-orders"></div></a>
						<a id="completed_button_profile">Completed<div class="profile__content-order--wrapper---buttons_underline-completed"></div></a>
						<a id="quotes_button_profile">Quotes<div class="profile__content-order--wrapper---buttons_underline-quotes"></div></a>
					</div>
					<div class="profile__content-order--wrapper---search">
						<a href=""><img src="<?php echo get_template_directory_uri() . '/assets/img/search.svg'; ?>" alt=""></a>
					</div>
				</div>
				<div class="profile__content-order--orders">
					<div class="order">
						<div class="order__top">
							<div class="order__top-title">
								<h3>Small World</h3>
								<h4>Jerry Sabwa</h4>
							</div>
							<div class="order__top-buttons">
								<a class="order__top-buttons--uploaded">Uploaded<img src="" alt=""></a>
								<a class="order__top-buttons--share"><img src="<?php echo get_template_directory_uri() . '/assets/img/share.svg' ;?>" alt=""></a>
							</div>
						</div>
						<div class="order__info">
							<div class="order__info-top">
								<div class="order__info-top--element">
									<div class="order__info-top--element---title">
										Format
									</div>
									<div class="order__info-top--element---info">
										Mastering
									</div>
								</div>
								<div class="order__info-top--element">
									<div class="order__info-top--element---title">
										<p>Tracks</p>
										<p>12 minutes</p>
									</div>
									<div class="order__info-top--element---info">
										<p>16 Tracks</p>
									</div>
								</div>
								<div class="order__info-top--element">
								<div class="order__info-top--element---title">
										Genre
									</div>
									<div class="order__info-top--element---info">
										R&B
									</div>
								</div>
								<div class="order__info-top--element">
								<div class="order__info-top--element---title">
										Total
									</div>
									<div class="order__info-top--element---info">
										R300.000
									</div>
								</div>
							</div>
							<div class="order_info-middle">
								<p>Engineer</p>
								<div class="order_info-middle--engineer">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/engineer.png'; ?>" alt="">
									<p>Brooklyn Simmons</p>
								</div>
							</div>
							<div class="order_info-chat">
								<p>Comment</p>
								<div class="order_info-chat--block">
									<div class="order_chatfield_small">
										<p>You: </p>
										<input type="text">
									</div>
									<div class="order_chatfield_small_send">
										<a href=""><img src="<?php echo get_template_directory_uri() . '/assets/img/chat_small_send.svg'; ?>" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="profile__content-order--completed">
				<div class="completed">
						<div class="order__top">
							<div class="order__top-title">
								<h3>Small World</h3>
								<h4>Jerry Sabwa</h4>
							</div>
							<div class="order__top-buttons">
								<a class="order__top-buttons--uploaded">Upload<img src="" alt=""></a>
								<a class="order__top-buttons--share"><img src="<?php echo get_template_directory_uri() . '/assets/img/share.svg' ;?>" alt=""></a>
							</div>
						</div>
						<div class="order__info">
							<div class="order__info-top">
								<div class="order__info-top--element">
									<div class="order__info-top--element---title">
										Format
									</div>
									<div class="order__info-top--element---info">
										Mastering
									</div>
								</div>
								<div class="order__info-top--element">
									<div class="order__info-top--element---title">
										<p>Tracks</p>
									</div>
									<div class="order__info-top--element---info">
										<p>16 Tracks</p>
									</div>
								</div>
								<div class="order__info-top--element">
								<div class="order__info-top--element---title">
										Genre
									</div>
									<div class="order__info-top--element---info">
										R&B
									</div>
								</div>
								<div class="order__info-top--element">
								<div class="order__info-top--element---title">
										Total
									</div>
									<div class="order__info-top--element---info">
										R300.000
									</div>
								</div>
							</div>
							<div class="order_info-middle">
								<p>Engineer</p>
								<div class="order_info-middle--engineer">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/engineer.png'; ?>" alt="">
									<p>Brooklyn Simmons</p>
								</div>
							</div>
							<a class="order-download">
								<p>Download<img src="" alt=""></p>
							</a>
							<a class="order-review">
								<p>Review</p>
							</a>
						</div>
					</div>
				</div>
				<div class="profile__content-order--quotes">
				<div class="quote">
						<div class="order__top">
							<div class="order__top-title">
								<h3>Small World</h3>
								<h4>Jerry Sabwa</h4>
							</div>
							<div class="order__top-buttons">
								<a class="order__top-buttons--edit"><img src="<?php echo get_template_directory_uri() . '/assets/img/share.svg' ;?>" alt=""></a>
							</div>
						</div>
						<div class="order__info">
							<div class="order__info-top">
								<div class="order__info-top--element">
									<div class="order__info-top--element---title">
										Format
									</div>
									<div class="order__info-top--element---info">
										Mastering
									</div>
								</div>
								<div class="order__info-top--element">
									<div class="order__info-top--element---title">
										<p>Tracks</p>
									</div>
									<div class="order__info-top--element---info">
										<p>16 Tracks</p>
									</div>
								</div>
								<div class="order__info-top--element">
								<div class="order__info-top--element---title">
										Genre
									</div>
									<div class="order__info-top--element---info">
										R&B
									</div>
								</div>
								<div class="order__info-top--element">
								<div class="order__info-top--element---title">
										Total
									</div>
									<div class="order__info-top--element---info">
										R300.000
									</div>
								</div>
							</div>
							<div class="order_info-middle">
								<p>Engineer</p>
								<div class="order_info-middle--engineer">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/engineer.png'; ?>" alt="">
									<p>Brooklyn Simmons</p>
								</div>
							</div>
							<div class="order-quote-pay-download-share">
								<a class="download-quote"><p>Download <img src="" alt=""></p></a>
								<a class="pay-quote"><p>Pay <img src="" alt=""></p></a>
								<a class="share-quote" href=""><img src="<?php echo get_template_directory_uri() . '/assets/img/share.svg' ;?>" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="profile__mobile-quote">
					<a href="<?php echo esc_url(home_url('/quote')); ?>">Quote Now</a>
			</div>
		</div>
	</div>
</div>

<?php
if(!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>

<?php
/**
 * My Account dashboard.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_dashboard');

/**
 * Deprecated woocommerce_before_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_before_my_account');

/**
 * Deprecated woocommerce_after_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_after_my_account');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

?>