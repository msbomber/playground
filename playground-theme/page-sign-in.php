<?php
if(is_user_logged_in() && get_field('user_role', get_current_user_id()) != ''){
	wp_redirect(home_url() . '/profile', 301);
}
get_header();
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>

<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')): ?>

	<div style="display:flex; justify-content:center;" class="u-columns col2-set" id="customer_login">

		<div class="u-column1 col-2">

		<?php endif; ?>

		<h2>Log into your account</h2>

		<form class="woocommerce-form woocommerce-form-login login" method="post">

			<?php do_action('woocommerce_login_form_start'); ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Email<span class="required">*</span></label>
				<input placeholder="Enter Your Email" type="text"
					class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username"
					autocomplete="username"
					value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
				<?php // @codingStandardsIgnoreLine ?>
			</p>
			<p style="margin-bottom:8px;"
				class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">Password<span class="required">*</span></label>
				<label class="password-container">
					<input placeholder="Enter Your Password"
						class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password"
						id="password" autocomplete="current-password" />
					<span class="toggle-password" id="toggle-password_login">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/eye.svg'; ?>" alt="">
					</span>
				</label>
			</p>

			<?php do_action('woocommerce_login_form'); ?>

			<p class="woocommerce-LostPassword d-flex justify-content-end lost_password">
				<a style="text-decoration:none;color: var(--Blue, #0029FF);
/* 12/Regular */
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: 160%; /* 19.2px */
letter-spacing: 0.06px;" href="<?php echo esc_url(wp_lostpassword_url()); ?>">Forgot password?</a>
			</p>

			<p class="form-row ">
				<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
				<button type="submit"
					class="button-arrow-black woocommerce-button button woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
					name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">
					<div><?php esc_html_e('Log in', 'woocommerce'); ?></div><img
						src="<?php echo get_template_directory_uri() . '/assets/img/arrow_button_right.svg' ?>" alt="">
				</button>
			</p>

			<p style="text-align:center;Copy
color: var(--Gray, #6A6B7A);
/* 12/Regular */
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: 160%; /* 19.2px */
letter-spacing: 0.06px;" class="formInitial">Don’t have an account? <a style="color: var(--Blue, #0029FF);
/* 12/Medium */
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 500;
line-height: 160%;
letter-spacing: 0.06px; text-decoration:none;" href="sign-up">Sign Up</a></p>
			<div style="Copy
color: var(--Gray, #6A6B7A);
/* 12/Regular */
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: 160%; /* 19.2px */
letter-spacing: 0.06px;text-decoration:none; text-align:center; display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;"
				class="formInitial">
				<div style="text-decoration:none; width: 126.5px;
height: 1px;background: #FFFEFE;"></div> or <div style="width: 126.5px;
height: 1px;background: #FFFEFE;"></div>
			</div>
			<p style="text-align:center;Copy
color: var(--Gray, #6A6B7A);
/* 12/Regular */
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: 160%; /* 19.2px */
letter-spacing: 0.06px;" class="formInitial">By continuing, you agree to Playground’s <a style="text-decoration:none; color: var(--Blue, #0029FF);
/* 12/Medium */
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 500;
line-height: 160%;
letter-spacing: 0.06px;" href="">Terms of
					Use</a> and <a style=" text-decoration:none;color: var(--Blue, #0029FF);
/* 12/Medium */
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 500;
line-height: 160%;
letter-spacing: 0.06px;" href="">Privacy Policy.</a>
			</p>



			<?php do_action('woocommerce_login_form_end'); ?>

		</form>

	</div>



</div>
<?php do_action('woocommerce_after_customer_login_form');
?>