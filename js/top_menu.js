const btnList = document.querySelectorAll('.menu-item-has-children'),
    itemList = document.querySelectorAll('.menu-item'),
    menuWrap = document.querySelector(".header-new__wrap"),
    menu = document.querySelector(".header-new__menu"),
    socials = document.querySelector(".header-new__socials"),
    feedback = document.querySelector(".header-new__feedback"),
    menuItem = document.querySelector(".menu-item"),
    menuButton = document.querySelector(".header-new__button");

btnList.forEach((item, index) => {
    item.onclick = () => {
        removeClassActive(index);
        item.classList.toggle('active');
        item.firstElementChild.removeAttribute("href");
        item.firstElementChild.classList.toggle('active');
        item.lastElementChild.classList.toggle('active');
    }
});
const removeClassActive = (indexItem) => {
    btnList.forEach((item, index) => {
        if (indexItem !== index) {
            item.classList.remove('active');
            item.firstElementChild.classList.remove('active');
            item.lastElementChild.classList.remove('active');
        }
    });
};

menuButton.addEventListener("click", function () {
    if (!menuButton.classList.contains("active")) {
        menuButton.classList.add("active");
    } else {
        menuButton.classList.remove("active");
    }
    if (!menuWrap.classList.contains("active") && !menu.classList.contains("active") && !socials.classList.contains("active") && !feedback.classList.contains("active"))  {
        menuWrap.classList.add("active");
        menu.classList.add("active");
        menuItem.classList.add("active");
        socials.classList.add("active");
        feedback.classList.add("active");
        document.body.classList.add("lock");
    } else {
        menuWrap.classList.remove("active");
        menu.classList.remove("active");
        menuItem.classList.remove("active");
        socials.classList.remove("active");
        feedback.classList.remove("active");
        document.body.classList.remove("lock");
    }
});