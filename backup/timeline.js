window.addEventListener('load', () => {
    //timeline
    const slide = 1898;
    const startYear = 2018;
    const currentYear = (new Date()).getFullYear();
    const offsetSlides = [];
    let widthWindow = document.body.clientWidth;
    const itemsContainer = document.querySelector('#timeline__nav');

    let sum = 0;
    offsetSlides[startYear] = 0;
    for(let i = startYear; i < currentYear; i++){
        sum = sum + document.querySelector('.timeline-slider__item_' + i).offsetWidth;
        offsetSlides[i + 1] = sum;
    }

    function clearActive(e) {
        for(let i = startYear; i < itemsContainer.children.length + startYear; i++){
            itemsContainer.children[i - startYear].classList.remove('active');
        }
    }

    function handleToggleClick(e) {
        if (!e.target.classList.contains('timeline__nav-item')) return;
        clearActive();
        scrollTo(e.target.id);
        e.target.classList.toggle('active');
    }

    if(itemsContainer) {
        itemsContainer.addEventListener('click', handleToggleClick);
        document.getElementById('timeline-slider').scrollTo({ left: offsetSlides[currentYear], behavior: "smooth" });
        document.getElementById('timeline-slider').onscroll = logScroll;
    }

    function scrollTo(element) {
        document.getElementById('timeline-slider')
            .scrollTo({ left: offsetSlides[element], behavior: "smooth" });
    }

    function logScroll(e) {
        clearActive();
        /*
        if (e.target.scrollLeft <= slide - (widthWindow / 2))
            document.getElementById('2018').classList.add('active');
        else if (e.target.scrollLeft > slide - (widthWindow  / 2) && e.target.scrollLeft <= slide * 2 - (widthWindow / 2))
            document.getElementById('2019').classList.add('active');
        else if (e.target.scrollLeft > slide * 2 - (widthWindow  / 2) && e.target.scrollLeft <= slide * 3 - (widthWindow / 2))
            document.getElementById('2020').classList.add('active');
        else
            document.getElementById('2021').classList.add('active');
         */
        if (e.target.scrollLeft <= offsetSlides['2019'] - (widthWindow / 2))
            document.getElementById('2018').classList.add('active');
        else if (e.target.scrollLeft > offsetSlides['2019'] - (widthWindow  / 2) && e.target.scrollLeft <= offsetSlides['2020'] - (widthWindow / 2))
            document.getElementById('2019').classList.add('active');
        else if (e.target.scrollLeft > offsetSlides['2020'] - (widthWindow  / 2) && e.target.scrollLeft <= offsetSlides['2021'] - (widthWindow / 2))
            document.getElementById('2020').classList.add('active');
        else
            document.getElementById('2021').classList.add('active');
    }


    let sliderMove = document.getElementById('slider-move'); // блок слайдера
    let sliderMovelist = document.getElementById('timeline-slider'); // блок слайдера уровень выше

    sliderMove.onmousedown = (e) => {
        document.addEventListener('mousemove', listener);
    };

    sliderMove.onmouseup = (e) => {
        document.removeEventListener('mousemove', listener);
        start = 0;
        difference = 0;
    };

    let start = 0;
    let difference = 0;

    let listener = function(e) {
        if (start === 0) { // определяем старт нажатия мыши
            start = e.screenX
        }
        difference = start - e.screenX;
        start = e.screenX;
        sliderMovelist.scrollLeft =  sliderMovelist.scrollLeft + difference;
        e.preventDefault();
    };
});
