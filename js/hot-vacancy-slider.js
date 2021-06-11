$(window).on('load', function () {
    const hvSlider = document.querySelector('.hot-vacancy-slider__slider');
    const preloader = document.querySelector('.top-slider__loader-wrap');
    const sliderWrap = document.querySelector('.slider-wrap');
    const boxArrow = document.querySelector('.hot-vacancy-slider__title-buttons');
    let arrowBox = null;


    let slidersQuery = {
        "url": "https://career.usetech.ru//wp-json/wp/v2/posts?categories=4&_fields=acf, title",
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(slidersQuery).done((rest) => {
        setCboxList(rest);
    });


    const getSliderCard = (slide) => {
        let slideBox = [];
        slide.forEach(xx => {
            let card = `
                <div>${xx.title.rendered}</div>
                <div>${xx.acf.employment}</div>
                <div>---</div>
            `
            slideBox = slideBox + card;
        });

        slideBox = String(slideBox);
        console.log(slideBox)
        return slideBox;
    }

    const setCboxList = (list) => {
        let size = 3;
        let slidesList = [];
        for (let i = 0; i < Math.ceil(list.length / size); i++) {
            slidesList[i] = list.slice((i * size), (i * size) + size);
        }

        slidesList.forEach((item, index) => {
            let slide = document.createElement('div');
            slide.innerHTML = `<div>${getSliderCard(item)}</div>`
            hvSlider.appendChild(slide);
            arrowBox = document.querySelector('.hot-vacancy-slider__title-buttons');
        });

        initHvsSlider();
        preloader && preloader.remove();
        setTimeout(() => {
            sliderWrap.classList.add('visible');
            boxArrow.classList.add('visible');
        }, 100);
    }

    const initHvsSlider = () => {
        $(`.hot-vacancy-slider__slider`).slick({
            infinite: true,
            dots: true,
            appendArrows: arrowBox,
            appendDots: arrowBox,
        });
    }
});
