$(document).ready(function(){

    let arrowWrap = document.querySelector('.home-filter__right-title_buttons');

    $('.home-filter__slider').slick({
        infinite: true,
        dots: true,
        appendArrows: arrowWrap,
        appendDots: arrowWrap
    });
});

