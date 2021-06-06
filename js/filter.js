const listBox = document.querySelector('.filter__right');
const filterBox = document.querySelector('.filter__left');
let allCbox = null;


const locationBox = document.getElementById('location'); // box локация
const profileBox = document.getElementById('profile'); // box профиль
const experienceBox = document.getElementById('exp'); // box профиль
const employmentBox = document.getElementById('emp'); // box график
const industryBox = document.getElementById('industry'); // box тип занятости
const workFormatBox = document.getElementById('work'); // box график


let vacancyProfileList = []; //профиль вакансии (дизайн, разработка)
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

$.ajax(getCategory).done((rest2) => { // получаем профиль вакансии (дизайнер, строитель)
    vacancyProfileList = rest2;
    setCboxList(vacancyProfileList.map(item => item.name), profileBox);
});

$.ajax(getPosition).done((rest) => {  // получаем все списки
    allVacList = rest;
    rest.forEach(xx => {
        xx.acf.city && (cityList = [...new Set([...cityList, xx.acf.city])]);
        xx.acf.experience && (experienceList = [...new Set([...experienceList, xx.acf.experience])]);
        xx.acf.employment && (typeEmploymentList = [...new Set([...typeEmploymentList, xx.acf.employment])]);
        xx.acf.work_format && (workFormatList = [...new Set([...workFormatList, xx.acf.work_format])]);
        xx.acf.industry && (industryList = [...new Set([...industryList, xx.acf.industry])]);
        xx.cat = vacancyProfileList.find(dd => dd.id === xx.categories[1]).name;
    });

    setCboxList(cityList, locationBox);
    setCboxList(experienceList, experienceBox);
    setCboxList(typeEmploymentList, employmentBox);
    setCboxList(workFormatList, workFormatBox);
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

const setItemList = (list) => {
    listBox.innerHTML = ''; // очищаем блок
    list.forEach((xx, index) => {
        let item = document.createElement('div');
        item.classList.add('filter__item');
        item.innerHTML = `
               <div style="font-weight: bold; margin-bottom: 5px;">${xx.title.rendered} --- ${index + 1}</div>
               <div>Город -> ${xx.acf.city}</div>
               <div>Занятость -> ${xx.acf.employment}</div>
               <div>удаленная работа -> ${xx.acf.work_remote}</div>
               <div>Опыт -> ${xx.acf.experience}</div>
               <div>Отрасль -> ${xx.acf.industry}</div>
               <div>График -> ${xx.acf.work_format}</div>
               <div>Профиль -> ${xx.cat}</div>
               ${xx.acf.hot ? '<div>горячая вакансии</div>' : ''} 
            `
        listBox.appendChild(item);
    })
}

// слушаем клики по чекбоксам
filterBox.addEventListener("click", (event) => {
    if (event.target.classList.contains('filter__left-cbox')) {
        startFilter();
    }
});

const startFilter = () => {
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
        console.log('наш случай');
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
        checkedList.profile.length === 0 && checkedList.industry.length === 0 &&
        checkedList.exp.length === 0 && checkedList.work.length === 0 && checkedList.hot.length === 0
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
            const target = newVacList.filter(item => {
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
                return item.acf.experience === xx;
            });
            res = [...res, ...target]
        });
        newVacList = res;
    }
    if (checkedList.profile.length) {
        let res = [];
        checkedList.profile.forEach(xx => {
            const target = newVacList.filter(item => {
                return item.cat === xx;
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