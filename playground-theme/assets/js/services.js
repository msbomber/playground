function textChangher(id) {
    const text = document.getElementsByClassName("services__descriptions-text--paragraph")
    const servicesButtons = document.getElementsByClassName('services__descriptions-buttons--button')
    let button_mobile_one = document.getElementById('services__descriptions-buttons--button---border-one')
    let button_mobile_two = document.getElementById('services__descriptions-buttons--button---border-two')
    for (let i = 0; i < servicesButtons.length; i++) {
        servicesButtons[i].classList.remove("active_description_button")
        text[i].classList.remove("active_paragraph")
    }
    if(id == 0){
        button_mobile_one.classList.remove('d-none')
        button_mobile_one.classList.add('d-block')
        button_mobile_two.classList.remove('d-block')
        button_mobile_two.classList.add('d-none')
    }else if(id == 1){
        button_mobile_two.classList.remove('d-none')
        button_mobile_two.classList.add('d-block')
        button_mobile_one.classList.remove('d-block')
        button_mobile_one.classList.add('d-none')
    }
    servicesButtons[id].classList.add("active_description_button")
    text[id].classList.add("active_paragraph")
        
}