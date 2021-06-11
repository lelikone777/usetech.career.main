let arrowBox = null;

let slidersQuery = {
    "url": "https://career.usetech.ru//wp-json/wp/v2/posts?categories=4&_fields=acf",
    "method": "GET",
    "timeout": 0,
};

$.ajax(slidersQuery).done((rest) => {
    setCboxList(rest);
});




const setCboxList = (list) => {

    list.forEach((ff) => {




        let itemSelect = document.createElement('div');
        itemSelect.classList.add('hot-vacancy-slider__slide')
        itemSelect.innerHTML = `
            <div class="hot-vacancy-slider__slide-card">Тут начинка слайдов</div>
            <div class="hot-vacancy-slider__slide-card">Тут начинка слайдов</div>
            <div class="hot-vacancy-slider__slide-card">Тут начинка слайдов</div>
        `;
        document.querySelector('.hot-vacancy-slider__slider').appendChild(itemSelect);
    });

    arrowBox = document.querySelector('.hot-vacancy-slider__title-buttons');

    setTimeout(() => {
        document.querySelector('.top-slider__loader').remove();
        initHvsSlider();
    }, 100);
}

const initHvsSlider = () => {
    $(`.hot-vacancy-slider__slider`).slick({
        infinite: true,
        dots: true,
        appendArrows: arrowBox,
        appendDots: arrowBox
    });
}



