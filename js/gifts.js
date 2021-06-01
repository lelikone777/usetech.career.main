const $page = $('html, body');
const giftBox = document.querySelector('.list__box');
const message = null;

var requestOptions = {
    method: 'GET',
    redirect: 'follow'
};

activeItemElement = (elem) => {

    let stringgray = document.querySelector('.modal-gift__sert');
    let hiddenBox = document.querySelector('.modal-gift__form-hidden');
    hiddenBox = hiddenBox.getElementsByTagName('input')[0];
    let item = document.createElement('div');
    item.classList.add('modal-gift__sert-wrap');
    item.innerHTML = `
        <div class="modal-gift__sert-img" style="background: url(${elem.acf.img})"></div>
        <div class="modal-gift__sert-text">Подарочный <br>сертификат ${elem.title.rendered}</div>
        `;
    stringgray.innerHTML = '';
    stringgray.appendChild(item);
    hiddenBox.value = elem.acf.description;
}

// получаем список подарков
const getList = () => {
    fetch("https://career.usetech.ru//wp-json/wp/v2/posts?categories=22&per_page=100&_fields=acf,id,title", requestOptions)
        .then(response => response.text())
        .then(result => {
            const res = JSON.parse(result);
            createItems(res);
        })
        .catch(error => console.log('error', error));
};

// создаем элементы
const createItems = (items) => {
    items.forEach(xx => {
        let item = document.createElement('div');
        // console.log(xx);
        item.onclick = () => {
            activeItemElement(xx);
        }
        item.setAttribute('data-toggle', 'modal');
        item.setAttribute('data-target', '#gift');
        item.classList.add('list__item');
        item.innerHTML = `
            <div class="list__item-img" style="background: url(${xx.acf.img})"></div>
            <div class="list__item-text">${xx.acf.description}</div> 
        `
        giftBox.appendChild(item);
    });
}

document.addEventListener( 'wpcf7submit', function( event ) {
    const box1 = document.getElementById('form1');
    const box2 = document.getElementById('form2');

    if ( '3156' == event.detail.contactFormId ) {
        const messageBox = document.querySelector('.modal-gift__form-btns-message');
        messageBox.innerHTML = event.detail.apiResponse.message;
        if(event.detail.apiResponse.status === 'mail_sent') {
            box2.classList.remove('hidden');
            box1.classList.add('hidden');
        }
    }
}, false );

getList();



// плавная прокрутка к якорю
$('a[href*="#"]').click(function() {
    // console.log('scroll');
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 40 + 'px'
    }, 400);
    return false;
});

