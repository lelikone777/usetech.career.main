const sendBtn = document.getElementById('sendBtn'); // кнопка отрпавить

let selectProfile = document.getElementById('selectProfile'); // селект профиля вакансии
let selectCity = document.getElementById('selectCity'); // селект города
let selectExperience = document.getElementById('selectExperience'); // селект опыта
let selectTypeEmployment = document.getElementById('selectTypeEmployment'); // селект типа занятости

let vacancyProfileList = []; //профиль вакансии (дизайн, разработка)
let cityList = []; // список городов
let experienceList = []; // список опыта
let typeEmploymentList = []; // список типа занятости




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

$.ajax(getPosition).done((rest) => {  // получаем профиль вакансии
    getListForSelect(rest);
    setSelect('#selectCity', cityList, selectCity);
    setSelect('#selectExperience', experienceList, selectExperience);
    setSelect('#selectTypeEmployment', typeEmploymentList, selectTypeEmployment);

});
$.ajax(getCategory).done((resp) => { // получаем профиль вакансии
    vacancyProfileList = resp;
    vacancyProfileList.forEach((ff, index) => {
        let itemSelect = document.createElement('option');
        itemSelect.value = index + 1;
        itemSelect.innerHTML = `${ff.name}`;
        selectProfile.appendChild(itemSelect);
    });
    $('#selectProfile').selectric(); // инициируем селект
});

const getListForSelect = (list) => {
    list.forEach(xx => {
        cityList = [...new Set([...cityList, xx.acf.city])];
        experienceList = [...new Set([...experienceList, xx.acf.experience])];
        typeEmploymentList = [...new Set([...typeEmploymentList, xx.acf.employment])];
    });
}
const setSelect = (idName, list, select) => {
    list.forEach((ff, index) => {
        let itemSelect = document.createElement('option');
        itemSelect.value = index + 1;
        itemSelect.innerHTML = `${ff}`;
        select.appendChild(itemSelect);
    });
    $(idName).selectric(); // инициируем селект
}

$('select').on('selectric-select', function (selectric) { // парсим изменение в селектах
    const elem = document.querySelectorAll('select');
    const onlyOneSelectVal = [...elem].findIndex(ff => ff.value !== 'all');
    sendBtn.disabled = onlyOneSelectVal == '-1';
});


sendBtn.onclick = () => { // переход с поисковым запросом
    let link = '';
    if (selectCity.value !== 'all') {
        link = link + `#sity=${selectCity.value}`;
    }
    if (selectProfile.value !== 'all') {
        link = link + `#vac=${selectProfile.value}`;
    }
    if (selectExperience.value !== 'all') {
        link = link + `#exp=${selectExperience.value}`;
    }
    if (selectTypeEmployment.value !== 'all') {
        link = link + `#emp=${selectTypeEmployment.value}`;
    }

    console.log(link)
    // link ? location.href = `https://career.usetech.ru/vacancy${link}` : null;
}



















