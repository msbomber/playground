document.addEventListener("DOMContentLoaded", (event) => {
    jQuery(document).ready(function () {
      // Toggle password visibility
      jQuery("#toggle-password_login").click(function () {
        var passwordField = jQuery("#password");
        var type =
          passwordField.attr("type") === "password" ? "text" : "password";
        passwordField.attr("type", type);
      });
    });
  
  });
  