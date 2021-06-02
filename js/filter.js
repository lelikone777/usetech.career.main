const listBox = document.querySelector('.filter__right');
const filterBox = document.querySelector('.filter__left');
let allCbox = null;


const locationBox = document.getElementById('location'); // box локация
const profileBox = document.getElementById('profile'); // box профиль
const experienceBox = document.getElementById('exp'); // box профиль
const employmentBox = document.getElementById('emp'); // box график
const industryBox = document.getElementById('industry'); // box график


let vacancyProfileList = []; //профиль вакансии (дизайн, разработка)
let cityList = []; // список городов
let experienceList = []; // список опыта
let typeEmploymentList = []; // список типа занятости
let industryList = []; // список отрасль

let allVacList = [] // все вакансии


// получаем посты
let getPosition = {
    "url": "https://career.usetech.ru//wp-json/wp/v2/posts?categories=3&per_page=100&_fields=acf,link,title, categories",
    "method": "GET",
    "timeout": 0,
};

// получаем профили вакансии
let getCategory = {
    "url": "https://career.usetech.ru//wp-json/wp/v2/categories?parent=3&_fields=id,name",
    "method": "GET",
    "timeout": 0,
};

$.ajax(getCategory).done((rest) => { // получаем профиль вакансии (дизайнер, строитель)
    vacancyProfileList = rest;
    setCboxList(vacancyProfileList.map(item => item.name), profileBox);
});

$.ajax(getPosition).done((rest) => {  // получаем все списки
    allVacList = rest;
    console.log(rest)
    rest.forEach(xx => {
        cityList = [...new Set([...cityList, xx.acf.city])];
        experienceList = [...new Set([...experienceList, xx.acf.experience])];
        typeEmploymentList = [...new Set([...typeEmploymentList, xx.acf.employment])];
        industryList = [...new Set([...industryList, xx.acf.industry])];
    });
    setCboxList(cityList, locationBox);
    setCboxList(experienceList, experienceBox);
    setCboxList(typeEmploymentList, employmentBox);

    industryList = industryList.filter(item =>  item !== undefined);
    industryList = industryList.filter(item =>  item !== '');
    setCboxList(industryList, industryBox);

    setItemList(allVacList); // рендерим плашки вакансий
    allCbox = document.querySelectorAll('.filter__left-cbox'); // находим все чекбоксы
    // console.log(allCbox);

});

const setCboxList = (list, box) => {
    list.forEach((ff, index) => {
        let itemSelect = document.createElement('div');
        itemSelect.innerHTML = `
            <input class="filter__left-cbox" type="checkbox" name="${ff}" value="${ff}">
            <label class="filter__left-label">${ff}</label>    
            
       
        `;
        box.lastElementChild.appendChild(itemSelect)
    });
}

const setItemList = (list) => {
    list.forEach(xx => {
        let item = document.createElement('div');
        item.classList.add('filter__item');
        item.innerHTML = `
                   ${xx.title.rendered}
            `
        listBox.appendChild(item);
    })
}


filterBox.addEventListener( "click" , (event) => {
    // console.log(event.target);
    if(event.target.classList.contains('filter__left-cbox')) {
        console.log(event.target.parentElement.parentElement);
        allCbox.forEach(xx => {
            if(xx.checked) {
                console.log(xx.value);
            }
        })

    }
});






