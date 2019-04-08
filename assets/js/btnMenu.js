/*
const $body = document.querySelector('body');
const $menu = document.querySelector('.menu');
const $btnMenuOpen = document.querySelector('.btnMenu_open');
const $btnMenuClose = document.querySelector('.btnMenu_close');

$btnMenuOpen.addEventListener('click', function() {
    $menu.classList.add('menu_open')
    $body.classList.add('travar_tela')
})

$btnMenuClose.addEventListener('click', function() {
    $menu.classList.remove('menu_open')
    $body.classList.remove('travar_tela')
})
*/

$(function() {
    $('.btnMenu').on('click', function() {
        if ($('.leftMenu').hasClass('menuActive') == true) {
            $('.leftMenu').removeClass('menuActive')
        } else {
            $('.leftMenu').addClass('menuActive')
        }
    })


})