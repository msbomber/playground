<?php
if(is_user_logged_in() && get_field('user_role', 'user_'.get_current_user_id()) != ''){
	wp_redirect(home_url() . '/profile', 301);
}
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

do_action('woocommerce_before_customer_login_form');

add_filter('woocommerce_billing_fields', 'additional_billing_fields', 20, 1);
function additional_billing_fields($billing_fields)
{
	if (is_wc_endpoint_url('edit-address')) {
		foreach (extra_register_fields() as $fkey => $values) {
			if (in_array($fkey, ['facebook', 'whatsapp'])) {
				$billing_fields['billing_' . $fkey] = $values;
			}
		}
	}
	return $billing_fields;
	// WordPress User: Add Facebook and WhatsApp fields to billing section
	add_filter('woocommerce_customer_meta_fields', 'wordpress_user_account_billing_birthdate_field');
	function wordpress_user_account_billing_birthdate_field($fields)
	{
		foreach (extra_register_fields() as $fkey => $values) {
			if (in_array($fkey, ['facebook', 'whatsapp'])) {
				$fields['billing']['fields']['billing_' . $fkey] = array(
					'label' => $values['label'],
					'description' => ''
				);
			}
		}
		return $fields;
	}
} ?>



<div style="display:flex; justify-content:center;" class="u-columns col2-set" id="customer_login">

	<?php if (is_user_logged_in()): ?>
		<div id="choose_user_role" class="choose_user_role">
			<h2>Choose your role</h2>
			<p>Choose one or more formats you would like for your track/s</p>
			<form method="POST">
				<div class="user_role_choices">
					<div class="user_role_choices_wrapper">
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

					<?php
					global $wp;

					$current_url = home_url(add_query_arg(array(), $wp->request));
					?>

					<button onclick="this.form.submit();this.disabled = true;window.location.href = '<?php  echo home_url() . '/profile' ; ?>'" style="margin-top:32px;" class="button-conti button-arrow-black w-100 justify-content-center"
						name="submit_form_user_role" type="submit">Continue <img
							src="<?php echo get_template_directory_uri() . '/assets/img/arrow_button_right.svg' ?>"
							alt=""></button>
			</form>

			<script>
				document.addEventListener("DOMContentLoaded", (event) => {
					if($('.check_checked').is(':checked')){
					jQuery(".button-conti").on( "click", function() {
						window.location.href = "<?php  echo home_url() . '/profile' ; ?>";
						} );
					}
				});


			</script>

		</div>
	</div>
	<?php
	function updateFieldSignUp($data)
	{
		update_field('user_role', $data, 'user_' . get_current_user_id());
	}
	if (isset($_POST['submit_form_user_role']) && isset($_POST['user_role'])) {
		updateFieldSignUp($_POST['user_role']);
		wp_redirect(home_url() . '/profile', 301);
	}

	endif; ?>
<?php if (!is_user_logged_in()): ?>

	<div class="u-column2 col-2">


		<h2 class="formInitial">Create your account</h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?>>

			<?php do_action('woocommerce_register_form_start'); ?>


			<?php if ('no' === get_option('woocommerce_registration_generate_username')): ?>

				<p class="formInitial woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username">Full Name&nbsp;<span class="required"></span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
						id="reg_username" placeholder="Enter Your Full Name" autocomplete="username"
						value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
					<?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="formInitial woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email">
					<?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
				</label>
				<input type="email" placeholder="Enter Your Email"
					class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email"
					autocomplete="email"
					value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" />
				<?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ('no' === get_option('woocommerce_registration_generate_password')): ?>

				<p class="formInitial woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password">
						<?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required"></span>
					</label>
					<label class="password-container">
						<input type="password" placeholder="Enter Your Password"
							class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password"
							autocomplete="new-password" />
						<span class="toggle-password" id="toggle-password">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/eye.svg'; ?>" alt="">
						</span>
					</label>

				</p>

			<?php else: ?>

				<p>
					<?php esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce'); ?>
				</p>

			<?php endif; ?>


			<p class="formInitial woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_password">Confirm Password&nbsp;<span class="required"></span></label>
				<label class="password-container">
					<input type="password" placeholder="Confirm Your Password"
						class="woocommerce-Input woocommerce-Input--text input-text" id="reg_confirm_password"/>
					<span class="toggle-password" id="toggle-password_confirm">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/eye.svg'; ?>" alt="">
					</span>
				</label>
			</p>





			<?php do_action('woocommerce_register_form'); ?>
			<p class="woocommerce-form-row form-row">
				<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
				<button type="submit"
					class="woocommerce-Button woocommerce-button button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> woocommerce-form-register__submit"
					name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><div>Sign
						Up</div><img
						src="<?php echo get_template_directory_uri() . '/assets/img/arrow_button_right.svg' ?>" alt="">
				</button>
			</p>






			<p style="text-align:center; color: var(--Gray, #6A6B7A);
/* 12/Regular */
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: 160%; /* 19.2px */
letter-spacing: 0.06px;" class="formInitial">Already have an account? <a style="color: var(--Blue, #0029FF);
/* 12/Medium */
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 500;
line-height: 160%;
letter-spacing: 0.06px; text-decoration:none;" href="sign-in">Log In</a></p>
			<div style="text-decoration:none; text-align:center; display:flex; justify-content:space-between; align-items:center; margin-bottom:16px;"
				class="formInitial">
				<div style="text-decoration:none; width: 126.5px;
height: 1px;background: #FFFEFE;"></div> or <div style="width: 126.5px;
height: 1px;background: #FFFEFE;"></div>
			</div>
			<p style="text-align:center; color: var(--Gray, #6A6B7A);
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


		</form>

	</div>

<?php endif; ?>

</div>

<?php do_action('woocommerce_after_customer_login_form');
?>