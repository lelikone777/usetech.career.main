const topSlider = document.querySelector('.top-slider');
const loaderTT = document.querySelector('.top-slider__loader');
const tsl = $(`.top-slider`);
let arrowBox = null;

let slidersQuery = {
    "url": "https://career.usetech.ru//wp-json/wp/v2/posts?categories=30&_fields=acf",
    "method": "GET",
    "timeout": 0,
};

$.ajax(slidersQuery).done((rest) => {
    setCboxList(rest);
});


const setCboxList = (list) => {
    list.forEach((ff) => {
        let itemSelect = document.createElement('div');
        itemSelect.classList.add('top-slider__img-wrap')
        itemSelect.innerHTML = `
            <a href="${ff.acf.page_link}" class="top-slider__img-link"></a>
            <div class="top-slider__img" style="background: url(${ff.acf.big_img})"></div>
            <div class="top-slider__img-mobil" style="background: url(${ff.acf.smol_img})"></div>
        `;
        topSlider.appendChild(itemSelect);
    });

    arrowBox = document.querySelector('.top-slider__arrows');

    setTimeout(() => {
        loaderTT.remove();
        initSliderHome();
    },100);
}

const initSliderHome = () => {
    tsl.slick({
        infinite: true,
        dots: true,
        vertical: true,
        verticalSwiping: true,
        appendArrows: arrowBox,
        appendDots: arrowBox
    });
}




