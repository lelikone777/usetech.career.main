window.addEventListener('load', () => {
    //timeline
    const slide = 1898;
    const margin = 75;
    let widthWindow = document.body.clientWidth;
    const itemsContainer = document.querySelector('#timeline__nav');

    function handleToggleClick(e) {
        if (!e.target.classList.contains('timeline__nav-item')) return;
        for(let i = 0; i < itemsContainer.children.length; i++){
            itemsContainer.children[i].classList.remove('active');
        }
        scrollTo(e.target.id);
        e.target.classList.toggle('active');
    }

    if(itemsContainer) {
        itemsContainer.addEventListener('click', handleToggleClick);
        document.getElementById('timeline-slider').scrollTo({ left: slide, behavior: "smooth" });
        document.getElementById('timeline-slider').onscroll = logScroll;
    }

    function scrollTo(element) {
        var shift = 0;
        if (element !== 0) shift = (slide * element) + margin;
        document.getElementById('timeline-slider').scrollTo({ left: shift, behavior: "smooth" });
    }

    function logScroll(e) {
        for(let i = 0; i < itemsContainer.children.length; i++){
            itemsContainer.children[i].classList.remove('active');
        }
        if (e.target.scrollLeft <= slide - (widthWindow / 2))
            document.getElementById('0').classList.add('active');
        else if (e.target.scrollLeft > slide - (widthWindow  / 2) && e.target.scrollLeft <= slide * 2 - (widthWindow / 2))
            document.getElementById('1').classList.add('active');
        else
            document.getElementById('2').classList.add('active');
    }

    let startmouse = null;
    let sliderMove = document.getElementById('timeline-slider');
    sliderMove.onmousedown = (e) => {
        //console.log(e);
        startmouse = e.clientX;
        document.addEventListener('mousemove', listener);
    };

    sliderMove.onmouseup = (e) => {
        document.removeEventListener('mousemove', listener);
    };

    let listener = function(e) {
        let currentmouse = startmouse - e.clientX;
        //console.log(currentmouse);
        sliderMove.scrollTo({ left: sliderMove.scrollLeft + currentmouse });
        console.log(startmouse);
        console.log(currentmouse);
        console.log(sliderMove.scrollLeft);
        //var mouseX = event.clientX+'px';
        console.log(sliderMove.scrollLeft + currentmouse);
    };
});
