document.addEventListener("DOMContentLoaded", (event) => {
    jQuery('#orders_button_profile').on( "click", function() {
        jQuery('.profile__content-order--wrapper---buttons_underline-orders').css('display', 'block');
        jQuery('.profile__content-order--wrapper---buttons_underline-completed').css('display', 'none');
        jQuery('.profile__content-order--wrapper---buttons_underline-quotes').css('display', 'none');
        jQuery('.profile__content-order--orders').css('display', 'block');
        jQuery('.profile__content-order--completed').css('display', 'none');
        jQuery('.profile__content-order--quotes').css('display', 'none');
      } );
      jQuery('#completed_button_profile').on( "click", function() {
        jQuery('.profile__content-order--wrapper---buttons_underline-orders').css('display', 'none');
        jQuery('.profile__content-order--wrapper---buttons_underline-completed').css('display', 'block');
        jQuery('.profile__content-order--wrapper---buttons_underline-quotes').css('display', 'none');
        jQuery('.profile__content-order--orders').css('display', 'none');
        jQuery('.profile__content-order--completed').css('display', 'block');
        jQuery('.profile__content-order--quotes').css('display', 'none');
      } );
      jQuery('#quotes_button_profile').on( "click", function() {
        jQuery('.profile__content-order--wrapper---buttons_underline-orders').css('display', 'none');
        jQuery('.profile__content-order--wrapper---buttons_underline-completed').css('display', 'none');
        jQuery('.profile__content-order--wrapper---buttons_underline-quotes').css('display', 'block');
        jQuery('.profile__content-order--orders').css('display', 'none');
        jQuery('.profile__content-order--completed').css('display', 'none');
        jQuery('.profile__content-order--quotes').css('display', 'block');
      } );
  });