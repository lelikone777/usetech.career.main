$(window).on('load', function () {

    const sendBtn = document.getElementById('sendBtn'); // кнопка отрпавить

    let selectProfile = document.getElementById('selectProfile'); // селект профиля вакансии
    let selectCity = document.getElementById('selectCity'); // селект города
    let selectExperience = document.getElementById('selectExperience'); // селект опыта
    let selectTypeEmployment = document.getElementById('selectTypeEmployment'); // селект типа занятости

    let vacancyProfileList = []; //профиль вакансии (дизайн, разработка)
    let cityList = []; // список городов
    let experienceList = []; // список опыта
    let typeEmploymentList = []; // список типа занятости

    const preloader = document.getElementById('home-filter-preloader');
    const contentBox = document.querySelector('.home-filter__left-box');


    // получаем посты
    let getPosition = {
        "url": "https://career.usetech.ru//wp-json/wp/v2/posts?categories=3&per_page=100&_fields=acf,link,title, categories",
        "method": "GET",
        "timeout": 0,
    };



    $.ajax(getPosition).done((rest) => {  // получаем профиль вакансии
        console.log(rest)
        getListForSelect(rest);
        setSelect('#selectCity', cityList, selectCity);
        setSelect('#selectExperience', experienceList, selectExperience);
        setSelect('#selectTypeEmployment', typeEmploymentList, selectTypeEmployment);
        setSelect('#selectProfile', vacancyProfileList, selectProfile);
        setTimeout(() => {
            preloader.classList.remove('visible'); // скрыаем прелоадер
            contentBox.classList.add('visible');
        }, 500)


    });


    const getListForSelect = (list) => {
        list.forEach(xx => {
            cityList = [...new Set([...cityList, xx.acf.city])];
            cityList = [...cityList].filter(xx => xx !== undefined);
            cityList = [...cityList].filter(xx => xx !== '');
            experienceList = [...new Set([...experienceList, xx.acf.experience.label])];
            typeEmploymentList = [...new Set([...typeEmploymentList, xx.acf.employment])];
            vacancyProfileList = [...new Set([...vacancyProfileList, xx.acf.profile.label])];

        });
    }
    const setSelect = (idName, list, select) => {
        list.forEach((ff, index) => {
            let itemSelect = document.createElement('option');
            itemSelect.value = index;
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
            link = link + `#location=${selectCity.value}`;
        }
        if (selectProfile.value !== 'all') {
            link = link + `#profile=${selectProfile.value}`;
        }
        if (selectExperience.value !== 'all') {
            link = link + `#exp=${selectExperience.value}`;
        }
        if (selectTypeEmployment.value !== 'all') {
            link = link + `#emp=${selectTypeEmployment.value}`;
        }

        link ? location.href = `https://career.usetech.ru/filter${link}` : null;

        selectCity.value = 'all';
        selectProfile.value = 'all';
        selectExperience.value = 'all';
        selectTypeEmployment.value = 'all';
    }
});