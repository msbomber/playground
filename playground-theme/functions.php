<?php

add_theme_support('menus');

function playground_main_files()
{
  wp_enqueue_script('jquery');
  wp_enqueue_style(get_stylesheet_uri());
  wp_enqueue_style('playground-css', get_template_directory_uri() . '/dist/css/style.min.css');

  wp_register_script( 'bootstrapminjs', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array() );
  wp_enqueue_style('splidecss',get_template_directory_uri().'/assets/css/splide.min.css');
  wp_register_script( 'splidejs', get_template_directory_uri() . '/dist/js/splide.min.js', array() );
  wp_enqueue_script('splidejs');
  wp_enqueue_script('about-us-js', get_template_directory_uri().'/assets/js/about_us.js');
  wp_register_script( 'popperminjs', get_template_directory_uri() . '/dist/js/popper.min.js', array() );
  wp_enqueue_script('bootstrapminjs');
  wp_enqueue_script('popperminjs');
  wp_register_script( 'headerjs', get_template_directory_uri() . '/dist/js/header.min.js', array() );
  wp_enqueue_script('headerjs');
  wp_register_script( 'homejs', get_template_directory_uri() . '/dist/js/home.min.js', array() );
  wp_enqueue_script('homejs');
  wp_register_script( 'servicesjs', get_template_directory_uri() . '/dist/js/services.min.js', array() );
  wp_enqueue_script('servicesjs');
  wp_register_script( 'signupjs', get_template_directory_uri() . '/dist/js/sign_up.min.js', array() );
  wp_enqueue_script('signupjs');
  wp_register_script( 'signinjs', get_template_directory_uri() . '/dist/js/sign_in.min.js', array() );
  wp_enqueue_script('signinjs');
  wp_register_script( 'profilejs', get_template_directory_uri() . '/dist/js/profile.min.js', array() );
  wp_enqueue_script('profilejs');
}

add_action('wp_enqueue_scripts', 'playground_main_files');


// Custom function with all extra field data arrays
function extra_register_fields() {
  $text_domain  = 'woocommerce';
  return array(
      'company'   => array('type' => 'text', 'placeholder' => 'Enter Your Organization',    'class' => ['form-row-wide'],  'required' => 1, 'label' => __( 'Organization', $text_domain ) ),
     
  );
}

// Add extra register fields
add_action( 'woocommerce_register_form', 'wooc_extra_register_fields' );
function wooc_extra_register_fields() {
  foreach ( extra_register_fields() as $fkey => $values ) {
      if( $fkey === 'phone' ) $values['clear'] = 1;
      if( $fkey === 'state' ) $values['validate'] = ['state'];

      $value = isset($_POST['billing_'.$fkey]) ? esc_attr($_POST['billing_'.$fkey]) : '';

      woocommerce_form_field( 'billing_'.$fkey, $values, $value );
  }
  wp_enqueue_script('wc-country-select', get_site_url().'/wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js', array('jquery'), true);
}

// Extra register fields validation
add_action( 'woocommerce_register_post', 'wc_validate_reg_form_fields', 10, 3 );
function wc_validate_reg_form_fields( $username, $email, $validation_errors ) {
  foreach ( extra_register_fields() as $fkey => $values ) {
      if (isset($_POST['billing_'.$fkey]) && empty($_POST['billing_'.$fkey]) && $values['required'] ) {
          $validation_errors->add( 'extra_fields', sprintf('%s is a required field', $values['label']) );
      }
  }
  return $validation_errors;
}

// Save extra register fields values
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );
function wooc_save_extra_register_fields( $customer_id ) {
  foreach( extra_register_fields() as $fkey => $values ) {
      if ( isset($_POST['billing_'.$fkey]) ) {
          $value = in_array($fkey, ['country', 'state']) ? sanitize_text_field($_POST['billing_'.$fkey]) : esc_attr($_POST['billing_'.$fkey]);

          update_user_meta( $customer_id, 'billing_'.$fkey, $value );

          if ( in_array($fkey, ['first_name', 'last_name']) )
              update_user_meta( $customer_id, $fkey, $value );
      }
  }
}

?>

