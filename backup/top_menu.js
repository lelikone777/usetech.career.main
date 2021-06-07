const btnList = document.querySelectorAll('.header-new__menu-item_btn');
const btnListMobile = document.querySelectorAll('.header-new__menu-item_btn--mobile')

btnListMobile.forEach((item, index) => {
    item.onclick = () => {
        removeClassActiveMobile(index);
        item.parentElement.lastElementChild.classList.toggle('active');
        item.classList.toggle('active');
    }
});

const removeClassActiveMobile = (indexItem) => {
    btnListMobile.forEach((item, index) => {
        if (indexItem !== index) {
            item.parentElement.lastElementChild.classList.remove('active');
            item.classList.remove('active');
        }
    });
};

btnList.forEach((item, index) => {
    item.onclick = () => {
        removeClassActive(index);
        item.parentElement.lastElementChild.classList.toggle('active');
        item.classList.toggle('active');
    }
});

const removeClassActive = (indexItem) => {
    btnList.forEach((item, index) => {
        if (indexItem !== index) {
            item.parentElement.lastElementChild.classList.remove('active');
            item.classList.remove('active');
        }
    });
};

let menu = document.querySelector(".header-new__mobile");
let menuButton = document.querySelector(".header-new__button");


menuButton.addEventListener("click", function () {
    if (!menuButton.classList.contains("header-new__button--active")) {
        menuButton.classList.add("header-new__button--active");
    } else {
        menuButton.classList.remove("header-new__button--active");
    }
    if (!menu.classList.contains("header-new__mobile--visible")) {
        menu.classList.add("header-new__mobile--visible");
        document.body.classList.toggle("lock");

    } else {
        menu.classList.remove("header-new__mobile--visible");
        document.body.classList.remove("lock");
    }
});