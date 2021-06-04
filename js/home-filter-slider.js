

    let arrowWrap = document.querySelector('.home-filter__right-title_buttons');
    const hfs = $(`.home-filter__slider`);



    const ititHotSlider = () => {
        hfs.slick({
            infinite: true,
            dots: true,
            appendArrows: arrowWrap,
            appendDots: arrowWrap
        });
    }

    setTimeout(() => {
        ititHotSlider();
    }, 100);

