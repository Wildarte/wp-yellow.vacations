const btn_menu = document.querySelector('.btn_menu');
const btn_close_menu = document.querySelector('.btn_close_menu');
const nav_menu = document.querySelector('nav.menu');

btn_menu.addEventListener('click', () => {

    nav_menu.classList.add('open_menu_mobile');

});

btn_close_menu.addEventListener('click', () => {

    nav_menu.classList.remove('open_menu_mobile');

});