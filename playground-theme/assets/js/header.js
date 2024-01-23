    function MenuOpener() {
        const menu = document.getElementsByClassName("header__menu-buttons")
        if (menu[0].classList.contains("active_header_menu")) {
            menu[0].style.height = "0px"
            menu[0].classList.remove('active_header_menu')
        } else {
            menu[0].style.height = "256px"
            menu[0].classList.add('active_header_menu')
        }
    }
  