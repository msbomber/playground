document.addEventListener("DOMContentLoaded", (event) => {
  jQuery(".check_checked").change(function () {
    jQuery(".check_checked").parent().removeClass("role_checked");

    if (jQuery(this).is(":checked")) {
      jQuery(this).parent().addClass("role_checked");
    }
  });
});

document.addEventListener("DOMContentLoaded", (event) => {
  jQuery(document).ready(function () {
    // Toggle password visibility
    jQuery("#toggle-password").click(function () {
      var passwordField = jQuery("#reg_password");
      var type =
        passwordField.attr("type") === "password" ? "text" : "password";
      passwordField.attr("type", type);
    });
  });

  jQuery(document).ready(function () {
    // Toggle password visibility
    jQuery("#toggle-password_confirm").click(function () {
      var passwordField = jQuery("#reg_confirm_password");
      var type =
        passwordField.attr("type") === "password" ? "text" : "password";
      passwordField.attr("type", type);
    });
  });
});

// document.addEventListener('DOMContentLoaded', function () {
//     function toggleSubmitButton() {
//         var password = jQuery('#reg_password').val();
//         var confirmPassword = jQuery('#reg_confirm_password').val();

//         if (password !== '' && password === confirmPassword) {
//             jQuery('.woocommerce-form-register__submit').removeAttr('disabled');
//         } else {
//             jQuery('.woocommerce-form-register__submit').attr('disabled', 'disabled');
//         }
//     }
//     jQuery('#reg_password, #reg_confirm_password').on('input', toggleSubmitButton);
    
//     toggleSubmitButton();
// });