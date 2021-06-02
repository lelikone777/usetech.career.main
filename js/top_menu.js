const btnList = document.querySelectorAll('.header-new__menu-item_btn');

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
}