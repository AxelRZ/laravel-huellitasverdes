
const SOCIAL_BUTTON = document.querySelector('.f-social-btn');
const SOCIAL_MENU = document.querySelector('.f-social-nav');
SOCIAL_BUTTON.addEventListener('click', () => {
    let ICON = document.querySelector('.f-social-btn i')

    SOCIAL_MENU.classList.toggle('active');


    let deg = (SOCIAL_MENU.classList.contains('active'))? 180:0;

    ICON.style.transform = "rotate("+deg+"deg)"


});