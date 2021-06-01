let list = document.querySelector('.info-project__tabs');
let listItem = document.querySelectorAll('.info-project__tab');
let listContent = document.querySelectorAll('.info-project__tabinfo');
let targetId = 't1';


list.addEventListener('click', function (event) {
    $('.info-slider').slick('unslick');

    if (event.target.classList.contains('info-project__tab')) {
        targetId = event.target.id;
        listItem.forEach(xx => {
            xx.classList.remove('active');
        });
        event.target.classList.add('active');
    }
    listContent.forEach(xx => {
        if (xx.getAttribute('data-id') === targetId) {
            xx.classList.add('active');
        } else {
            xx.classList.remove('active');
        }
    });
    initSlider();

});

const initSlider = () => {
    $('.info-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: true,
        responsive: [
            {
                breakpoint: 1350, 
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows: false,
                }
            },
            {
                breakpoint: 1170,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }
        ]
    });
};

initSlider();
