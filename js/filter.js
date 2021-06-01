const locationBox = document.getElementById('location'); // box локация
const profileBox = document.getElementById('profile'); // box профиль
const experienceBox = document.getElementById('exp'); // box профиль
const employmentBox = document.getElementById('emp'); // box график


let vacancyProfileList = []; //профиль вакансии (дизайн, разработка)
let cityList = []; // список городов
let experienceList = []; // список опыта
let typeEmploymentList = []; // список типа занятости

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
    });
    setCboxList(cityList, locationBox);
    setCboxList(experienceList, experienceBox);
    setCboxList(typeEmploymentList, employmentBox);

});

const setCboxList = (list, box) => {
    list.forEach((ff, index) => {
        let itemSelect = document.createElement('div');
        itemSelect.innerHTML = `
        <label class="filter__left-label">
            <input type="checkbox" name="hot" value="${ff}">
            <span>${ff}</span>
        </label>    
        `;
        box.lastElementChild.appendChild(itemSelect)
    });
}










