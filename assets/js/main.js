$(function(){
    $('.music__slider').slick({
        arrows: true,
        dots: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1       
    });
    $('.branch__slider').slick({
        arrows: true,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1       
    });

    const menuBtn = document.querySelector('.menu-btn');
    const menu = document.querySelector('.header__menu');

    menuBtn.addEventListener('click', () => {
    menu.classList.toggle('header__menu--active');
    });
    
});


// $(function(){
// const menuBtn = document.querySelector('.menu-btn');
// const menu = document.querySelector('.header__menu');

// menuBtn.addEventListener('click', () => {
//     menu.classList.toggle('header__menu--active');
// });
// });

