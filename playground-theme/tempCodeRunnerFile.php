<?php
get_header();
global $wpdb;
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

		<div class="u-column2 col-2">

		<?php endif; ?>

		<h2>Create your account</h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?>>

			<?php do_action('woocommerce_register_form_start'); ?>


			<?php if ('no' === get_option('woocommerce_registration_generate_username')): ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username">Full Name&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
						id="reg_username" autocomplete="username"
						value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
					<?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email">
					<?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
				</label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email"
					id="reg_email" autocomplete="email"
					value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" />
				<?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ('no' === get_option('woocommerce_registration_generate_password')): ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password">
						<?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
					</label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"
						id="reg_password" autocomplete="new-password" />
				</p>

			<?php else: ?>

				<p>
					<?php esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce'); ?>
				</p>

			<?php endif; ?>


			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_password">Confirm Password&nbsp;<span class="required">*</span></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"
					id="reg_password" autocomplete="new-password" />
			</p>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<?php
				$table_name = $wpdb->prefix . 'usermeta';

				$date = date('Y-m-d H:i:s');


				?>
				<label for="reg_organization">Organization&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="organization"
					id="reg_organization" autocomplete="organization" />
				<?php // @codingStandardsIgnoreLine ?>
			</p>



			<?php do_action('woocommerce_register_form'); ?>

			<a class="button-arrow-black formInitial" onclick="signProcessForward()">Sign Up<img
					src="<?php echo get_template_directory_uri() . '/assets/img/arrow_button_right.svg' ?>" alt=""></a>


			<div id="choose_user_role" class="choose_user_role">
				<h2>Choose your role</h2>
				<p>Choose one or more formats you would like for your track/s</p>
				<div class="user_role_choices_wrapper">
					<div class="user_role_choices">
						<label class="role_choice">
							<input class="check_checked" id="artist" name="user_role" type="radio" value="artist">
							<span for="artist">Artist</span>
						</label>
						<label class="role_choice">
							<input class="check_checked" id="manager" name="user_role" type="radio" value="manager">
							<span for="manager">Manager</span>
						</label>
						<label class="role_choice">
							<input class="check_checked" id="Label" name="user_role" type="radio" value="label">
							<span for="artist">Label</span>
						</label>
						<label class="role_choice">
							<input class="check_checked" id="Podcast Studio" name="user_role" type="radio"
								value="podcast_studio">
							<span for="artist">Podcast Studio</span>
						</label>
					</div>

					<p class="woocommerce-form-row form-row">
						<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
						<button type="submit"
							class="woocommerce-Button woocommerce-button button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> woocommerce-form-register__submit"
							name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><div>Continue</div><img src="<?php get_template_directory_uri() . '/assets/img/' ?>" alt="">
						</button>
					</p>

					<?php

					function writeUserData()
					{
						update_field('user_organization', $_POST['organization'], get_current_user_id());
					}
					if (isset($_POST['register'])) {
						writeUserData();
					}

					?>
				</div>
			</div>

			<p>Already have an account? <a href="">Log In</a></p>
			<p>or</p>
			<p>By continuing, you agree to Playground’s <a href="">Terms of Use</a> and <a href="">Privacy Policy.</a>
			</p>


		</form>

	</div>

</div>

<?php do_action('woocommerce_after_customer_login_form');
get_footer();
?>