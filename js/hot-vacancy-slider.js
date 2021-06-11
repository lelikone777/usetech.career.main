$(window).on('load', function () {
    const hvSlider = document.querySelector('.hot-vacancy-slider__slider');
    const preloader = document.querySelector('.top-slider__loader-wrap');
    const sliderWrap = document.querySelector('.slider-wrap');
    const boxArrow = document.querySelector('.hot-vacancy-slider__title-buttons');
    let arrowBox = null;


    let slidersQuery = {
        "url": "https://career.usetech.ru//wp-json/wp/v2/posts?categories=4&_fields=acf, title, link, city",
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(slidersQuery).done((rest) => {
        setCboxList(rest);
    });


    const getSliderCard = (slide) => {
        let slideBox = [];
        slide.forEach(xx => {
            if (xx.acf.industry) {
                $industry = `<div class="hot-vacancy-slider__slide-card_offer">` + xx.acf.industry + `</div>`
            } else {
                $industry = '';
            }
            if (xx.acf.city) {
                $city = xx.acf.city + `,`;
            } else {
                $city = '';
            }
            if (xx.acf.work_format) {
                $workFormat = xx.acf.work_format;
            } else {
                $workFormat = '';
            }
            let card = `
                 <a href="${xx.link}" class="hot-vacancy-slider__slide-card">
                 <div class="hot-vacancy-slider__slide-card_top">
                    <h4 class="hot-vacancy-slider__slide-card_position"> ${xx.title.rendered}</h4>
                    <div class="hot-vacancy-slider__slide-card_logo"></div>
                </div>
                <div class="hot-vacancy-slider__slide-card_exp">Опыт: <span>${xx.acf.experience.label}</span></div>
                <div class="hot-vacancy-slider__slide-card_bottom">
                    <div class="hot-vacancy-slider__slide-card_location">${$city} <span> ${$workFormat} </span></div>
                    ${$industry}
                </div>
                </a>
            `
            slideBox = slideBox + card;
        });

        slideBox = String(slideBox);
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
            slide.classList.add('hot-vacancy-slider__slide');
            slide.innerHTML = `${getSliderCard(item)}`
            hvSlider.appendChild(slide);
            arrowBox = document.querySelector('.hot-vacancy-slider__title-buttons');
        });
        console.log(slidesList);
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
