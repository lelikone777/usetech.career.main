$(window).on('load', function () {
    const hvSlider = document.querySelector('.hot-vacancy-slider__slider');
    const preloader = document.querySelector('.top-slider__loader-wrap');
    const sliderWrap = document.querySelector('.slider-wrap');
    const boxArrow = document.querySelector('.hot-vacancy-slider__title-buttons');
    let arrowBox = null;


    let slidersQuery = {
        "url": "https://career.usetech.ru//wp-json/wp/v2/posts?categories=3&_fields=acf, title, link, city",
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(slidersQuery).done((rest) => {
        setCboxList(rest);
    });


    const getSliderCard = (slide) => {
        let slideBox = [];
        slide.forEach(xx => {

            $workFormat = xx.acf.work_format;
            $city = xx.acf.city;

            if(xx.acf.work_remote) {
                $city === "Любой город, ";
                $workFormat === "Удалённо"
            } else {
                $city = $city + `, `
            }

            if (xx.acf.industry) {
                $industry = `<div class="hot-vacancy-slider__slide-card_offer">` + xx.acf.industry + `</div>`
            } else {
                $industry = '';
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
        // list = list.filter(xx => xx.acf.hot)
        if (list.length === 0) {
            let text = document.createElement('div');
            text.classList.add('hot-vacancy-slider__empty');
            text.innerHTML = `<div>Пока горячих вакансий нет, посмотрите наши <a href="https://career.usetech.ru/vacancy/">другие вакансии</a></div>`
            hvSlider.appendChild(text);
        } else {
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
        }
        // console.log(slidesList);
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
// list = list.filter(xx => xx.acf.work_format === "Офис");