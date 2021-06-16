let filterModalButton = document.querySelector('.filter__modal-button');
let acceptButton = document.querySelector('.filter__btns-accept');
let listLength = document.querySelector('#list-length');
let vacancyWord = document.querySelector('#vacancy-word');

const listBox = document.querySelector('.filter__right-result');
const filterBox = document.querySelector('.filter__left');
const btnReset = document.querySelector('.filter__btns-reset');
const searchInput = document.querySelector('.filter__search-input');
const resetSearch = document.querySelector('.filter__search-input-close');
const btnResetWrap = document.querySelector('.filter__btns');
let allCbox = null;


const locationBox = document.getElementById('location'); // box локация
const profileAcfBox = document.getElementById('profile'); // box профиль acf
const experienceBox = document.getElementById('exp'); // box профиль
const employmentBox = document.getElementById('emp'); // box график
const industryBox = document.getElementById('industry'); // box тип занятости
const workFormatBox = document.getElementById('work'); // box график


let vacancyProfileAcfList = []; //профиль вакансии (дизайн, разработка) acf
let cityList = []; // список городов
let experienceList = []; // список опыта
let typeEmploymentList = []; // список типа занятости
let industryList = []; // список отрасль
let workFormatList = []; // список занятости

let allVacList = [] // все вакансии

let chListNum = {}; //
let checkedList = {} // прочеканные чекбоксы

const resetCheckedList = () => {
    checkedList = {
        emp: [],
        location: [],
        profile: [],
        industry: [],
        exp: [],
        work: [],
        hot: []
    }
}
const resetChListNum = () => {
    chListNum = {
        hot: [],
        work: [],
        location: [],
        profile: [],
        industry: [],
        exp: [],
        emp: []
    };
};

resetCheckedList();
resetChListNum();

// получаем посты
let getPosition = {
    "url": "https://career.usetech.ru//wp-json/wp/v2/posts?categories=3&per_page=100&_fields=acf,link,title,categories",
    "method": "GET",
    "timeout": 0,
};


$.ajax(getPosition).done((rest) => {  // получаем все списки
    allVacList = rest;
    rest.forEach(xx => {
        xx.acf.city && (cityList = uniq([...cityList, xx.acf.city]));
        xx.acf.experience && (experienceList = sortExp([...new Set([...experienceList, xx.acf.experience])]));
        xx.acf.employment && (typeEmploymentList = [...new Set([...typeEmploymentList, xx.acf.employment])]);
        xx.acf.work_format && (workFormatList = [...new Set([...workFormatList, xx.acf.work_format])]);
        xx.acf.industry && (industryList = [...new Set([...industryList, xx.acf.industry])]);
        xx.acf.profile && (vacancyProfileAcfList = uniq([...vacancyProfileAcfList, xx.acf.profile]));
    });

    setCboxList(cityList, locationBox);
    setExpCboxList(experienceList, experienceBox);
    setCboxList(typeEmploymentList, employmentBox);
    setCboxList(workFormatList, workFormatBox);
    setExpCboxList(vacancyProfileAcfList, profileAcfBox);
    setCboxList(industryList, industryBox);

    setItemList(allVacList); // рендерим плашки вакансий
    allCbox = document.querySelectorAll('.filter__left-cbox'); // находим все чекбоксы
    getUrlQuery(); // получаем данные из строки
});

const setCboxList = (list, box) => {
    list.forEach((ff, index) => {
        let itemSelect = document.createElement('div');
        itemSelect.innerHTML = `
            <div class="filter__left-cbox-wrap"> 
                <input class="filter__left-cbox" data-id="${box.id}" id="${box.id}_${index}" type="checkbox"  value="${ff}">
                <label class="filter__left-label" for="${box.id}_${index}">${ff}</label>  
            </div>  
        `;
        box.lastElementChild.appendChild(itemSelect)
    });
}

const setExpCboxList = (list, box) => {
    list.forEach((ff, index) => {
        let itemSelect = document.createElement('div');
        itemSelect.innerHTML = `
            <div class="filter__left-cbox-wrap"> 
                <input class="filter__left-cbox" data-id="${box.id}" id="${box.id}_${index}" type="checkbox"  value="${ff.label}">
                <label class="filter__left-label" for="${box.id}_${index}">${ff.label}</label>  
            </div>  
        `;
        box.lastElementChild.appendChild(itemSelect)
    });
}


const setItemList = (list) => {
    listBox.innerHTML = ''; // очищаем блок


    if (list.length) {

        const hotList = list.filter(item => item.acf.hot);
        const coldList = list.filter(item => !item.acf.hot);
        list = [...hotList, ...coldList];
        list.forEach((xx, index) => {
            let item = document.createElement('div');
            item.classList.add('filter__item');

            const city = !xx.acf.work_remote ? `<div>${xx.acf.city},</div>` : '<div>Любой город,</div>';
            const work_format = !xx.acf.work_remote ? `<div> ${xx.acf.work_format}</div>` : `<div> удаленно</div>`;
            const industry = xx.acf.industry ? `<div class="filter__item-industry">${xx.acf.industry}</div>` : '';
            const excerpt = xx.acf.short_description ? `<div class="filter__item-excerpt">${xx.acf.short_description}</div>` : '';


            item.innerHTML = `
               <a href="${xx.link}" class="filter__item-link">
                   ${industry}
                   ${xx.acf.hot ? '<div class="filter__item-hot"></div>' : ''}
                   <div class="filter__item-title">${xx.title.rendered}</div>
                   ${excerpt}
                   <div class="filter__item-info"> 
                       <div class="filter__item-str">
                            <i class="filter__item-icon filter__item-icon_calendar"></i><span>Опыт:</span> <bold>${xx.acf.experience.label}</bold></div>
                       <div class="filter__item-str">
                            <i class="filter__item-icon filter__item-icon_pin"></i><div class="filter__item-city">${city}${work_format}</div>
                       </div>
                       <div class="filter__item-str">
                            <i class="filter__item-icon filter__item-icon_clock"></i>${xx.acf.employment}</div>
                   </div>
               </a>
            `
            listBox.appendChild(item);
            listLength.innerHTML = listBox.childElementCount;
        })
    } else {
        let item = document.createElement('div');
        item.classList.add('filter__right-result_wrap')
        item.innerHTML =
            `<div class="filter__right-result_img"></div>
            <div class="filter__right-result_text">По вашему запросу ничего не найдено, </br> посмотрите 
            <a class="filter__right-result_others" href="https://career.usetech.ru/vacancy/" target="_blank">другие вакансии</a> из профиля <a class="filter__right-result_design" href="https://career.usetech.ru/vacancy/#vac=1" target="_blank"> Дизайн</a></div>`;
        listBox.appendChild(item);
        listLength.innerHTML = 0;
    }
}


// слушаем клики по чекбоксам
filterBox.addEventListener("click", (event) => {
    if (event.target.classList.contains('filter__left-cbox')) {
        startFilter();
    }
});

const startFilter = () => {
    btnVisible();
    resetCheckedList();

    allCbox.forEach(xx => {
        const category = xx.getAttribute('data-id');
        if (xx.checked) {
            checkedList[category] = [...checkedList[category], xx.value];
        }
    });

    const locList = document.querySelectorAll('[data-id="location"]');
    const workList = document.querySelectorAll('[data-id="work"]');
    if (checkedList.work.includes('Удаленная работа')) {
        locList.forEach(ff => {
            ff.checked = false;
            ff.disabled = true;
        });
        workList.forEach(ff => {
            if (ff.value !== 'Удаленная работа') {
                ff.checked = false;
                ff.disabled = true;
            }
        });
        checkedList.work = ['Удаленная работа'];
        checkedList.location = [];
    } else {
        locList.forEach(ff => {
            ff.disabled = false;
        });
        workList.forEach(ff => {
            ff.disabled = false;
        });
    }
    if (checkedList.emp.length === 0 && checkedList.location.length === 0 &&
        checkedList.industry.length === 0 &&
        checkedList.exp.length === 0 && checkedList.work.length === 0 &&
        checkedList.hot.length === 0 && checkedList.profile.length == 0
    ) {
        setItemList(allVacList); // показываем все вакансии
        history.pushState({}, '', ' ');
    } else {
        getFilteredList(); // фильтруем
        setQueryUrl();
    }
}

const getFilteredList = () => {
    let newVacList = allVacList; // отфильтрованный список

    if (checkedList.hot.length) {
        let res = [];
        checkedList.hot.forEach(xx => {
            const target = newVacList.filter(item => {
                return item.acf.hot;
            });
            res = [...res, ...target]
        });
        newVacList = res;
    }
    if (checkedList.location.length) {
        let res = [];
        checkedList.location.forEach(xx => {
            const target = newVacList.filter(item => {
                return item.acf.city === xx;
            });
            res = [...res, ...target]
        });
        newVacList = res;
    }
    if (checkedList.emp.length) {
        let res = [];
        checkedList.emp.forEach(xx => {
            const target = newVacList.filter(item => {
                return item.acf.employment === xx;
            });
            res = [...res, ...target]
        });
        newVacList = res;
    }
    if (checkedList.industry.length) {
        let res = [];
        checkedList.industry.forEach(xx => {
            const target = newVacList.filter(item => {
                return item.acf.industry === xx;
            });
            res = [...res, ...target]
        });
        newVacList = res;
    }
    if (checkedList.work.length) {


        if (checkedList.work.includes('Удаленная работа')) {
            let res = [];
            let target = newVacList.filter(item => {
                return item.acf.work_remote;
            });
            res = [...res, ...target]
            newVacList = res

        } else {
            let res = [];
            checkedList.work.forEach(xx => {
                const target = newVacList.filter(item => {
                    return item.acf.work_format === xx && !item.acf.work_remote;
                });
                res = [...res, ...target]
            });
            newVacList = res;
        }

    }
    if (checkedList.exp.length) {
        let res = [];
        checkedList.exp.forEach(xx => {
            const target = newVacList.filter(item => {
                return item.acf.experience.label === xx;
            });
            res = [...res, ...target]
        });
        newVacList = res;
    }
    if (checkedList.profile.length) {
        let res = [];
        checkedList.profile.forEach(xx => {
            const target = newVacList.filter(item => {
                return item.acf.profile.label === xx;
            });
            res = [...res, ...target]
        });
        newVacList = res;
    }
    setItemList(newVacList);
}


const getChList = () => {
    allCbox.forEach(xx => {
        const category = xx.getAttribute('data-id');
        let val = {
            name: xx.value,
            value: xx.checked
        };
        chListNum[category].push(val);
    });
}

// сетим в строку запроса значения
const setQueryUrl = () => {
    resetChListNum();
    getChList();
    let url = [];
    history.pushState({}, '', ' '); // сбрасываем строку
    const keys = Object.keys(checkedList); // список имен разделов
    keys.forEach((key) => {
        const list = [];
        chListNum[key].forEach((item, index) => {
            item.value && list.push(index);
        })
        list.length && (url = [...url, `#${key}=${list}`]);
    });
    history.pushState({}, '', url.join(''));
}

// данные из адресной строки при загрузке стр
const getUrlQuery = () => {
    let query = String(document.location.href).split('#');
    query.forEach(xx => {
        let target = xx.split('=');
        if (target.length === 2) {
            const valueList = target[1].split(',');
            const tt = [...allCbox].filter(ff => { // чекбоксы в групаах
                const atr = ff.getAttribute('data-id');
                return atr === target[0];
            });
            valueList.forEach(cc => {
                tt[cc].checked = true;
            })
        }
    });
    startFilter();
}


// сброс фильтра
btnReset.onclick = () => {
    let checkboxes = document.querySelectorAll('.filter__left-cbox');
    checkboxes.forEach(item => item.checked = false);
    startFilter();
}


// живой поиск
let timer = null;

searchInput.oninput = () => {
    clearTimeout(timer);
    if (searchInput.value.length > 0) {
        resetSearch.classList.add('visible')
    } else {
        resetSearch.classList.remove('visible');
    }
    timer = setTimeout(() => {
        if (searchInput.value.length > 2) {
            let newVacList = [];
            newVacList = allVacList.filter(item => item.title.rendered.toUpperCase().indexOf(searchInput.value.toUpperCase()) !== -1);
            // сбрасываем чекбосы
            let checkboxes = document.querySelectorAll('.filter__left-cbox');
            checkboxes.forEach(item => item.checked = false);
            startFilter();
            setItemList(newVacList);
        } else if (searchInput.value.length === 0) {
            setItemList(allVacList);
        }
    }, 300);
};


resetSearch.onclick = () => {
    setItemList(allVacList);
    searchInput.value = '';
}

const sortExp = (list) => {
    let unique = Array.from(new Set(list.map(JSON.stringify))).map(JSON.parse);
    unique.sort(function (a, b) {
        return (+a.value) - (+b.value);
    });
    return unique;
}

// только уникальные значения
const uniq = (list) => {
    return Array.from(new Set(list.map(JSON.stringify))).map(JSON.parse);
}

// поазваем кнопку очистить
const btnVisible = () => {
    const target = [...allCbox].find(xx => xx.checked);
    target ? btnResetWrap.classList.add('active') : btnResetWrap.classList.remove('active')
}

// Открываем - закрываем модальное окно
filterModalButton.addEventListener('click', function () {
    if (!filterModalButton.classList.contains("active")) {
        filterModalButton.classList.add("active");
        filterBox.classList.add("active");
        document.body.classList.add("lock");
        acceptButton.classList.remove("active");
    } else {
        filterModalButton.classList.remove("active");
        filterBox.classList.remove("active");
        document.body.classList.remove("lock");

    }
});

// Закрываем модальное окно при нажатии на кнопку "Применить"
acceptButton.addEventListener('click', function () {
    if (!acceptButton.classList.contains("active")) {
        acceptButton.classList.add("active");
        filterModalButton.classList.remove("active");
        filterBox.classList.remove("active");
        document.body.classList.remove("lock");
    } else {
        acceptButton.classList.remove("active");
    }
});


