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

let checkedList = {} // прочеканные чекбоксы
const resetCheckedList = () => {
    checkedList = {
        emp: [],
        location: [],
        profile: [],
        industry: [],
        exp: [],
        work: []
    }
}
resetCheckedList();

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
    // console.log(rest);
    rest.forEach(xx => {
        cityList = [...new Set([...cityList, xx.acf.city])];
        experienceList = [...new Set([...experienceList, xx.acf.experience])];
        typeEmploymentList = [...new Set([...typeEmploymentList, xx.acf.employment])];
        workFormatList = [...new Set([...workFormatList, xx.acf.work_format])];
        industryList = [...new Set([...industryList, xx.acf.industry])];
        xx.cat = convertCategory(xx, 1);
        xx.hot = convertCategory(xx, 2);
    });

    setCboxList(cityList, locationBox);
    setCboxList(experienceList, experienceBox);
    setCboxList(typeEmploymentList, employmentBox);
    setCboxList(workFormatList, workFormatBox);

    industryList = industryList.filter(item => item !== undefined);
    industryList = industryList.filter(item => item !== '');
    setCboxList(industryList, industryBox);

    setItemList(allVacList); // рендерим плашки вакансий
    allCbox = document.querySelectorAll('.filter__left-cbox'); // находим все чекбоксы
});

const convertCategory = (item, index) => {
    if (index === 1) {
        return vacancyProfileList.find(xx => xx.id === item.categories[index]).name;
    }
    if (index === 2 && item.categories[index] && item.categories[index] === 12) {
        return vacancyProfileList.find(xx => xx.id === item.categories[index]).name;
    }
    return null;
}


const setCboxList = (list, box) => {
    list.forEach(ff => {
        let itemSelect = document.createElement('div');
        itemSelect.innerHTML = `
            <input class="filter__left-cbox" data-id="${box.id}"  type="checkbox" name="${ff}" value="${ff}">
            <label class="filter__left-label">${ff}</label>    
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
               <div>Опыт -> ${xx.acf.experience}</div>
               <div>Отрасль -> ${xx.acf.industry}</div>
               <div>График -> ${xx.acf.work_format}</div>
               <div>Профиль -> ${xx.cat}</div>
               <div>горяие вакансии -> ${xx.hot}</div>
            `
        listBox.appendChild(item);
    })
}


filterBox.addEventListener("click", (event) => {
    if (event.target.classList.contains('filter__left-cbox')) {
        resetCheckedList();
        allCbox.forEach(xx => {
            const category = xx.getAttribute('data-id');
            if (xx.checked) {
                checkedList[category] = [...checkedList[category], xx.value];
                // console.log(checkedList[category]);

                if (category === 'work') {
                    const locList = document.querySelectorAll('[data-id="location"]');
                    if (checkedList[category].includes('Удаленная работа')) {
                        console.log('удаленная работа');
                        locList.map(ff => ff.disabled);
                    } else {
                        locList.map(ff => ff.disabled);
                    }
                }
            }
        });
        if (checkedList.emp.length === 0 && checkedList.location.length === 0 &&
            checkedList.profile.length === 0 && checkedList.industry.length === 0 &&
            checkedList.exp.length === 0 && checkedList.work.length === 0
        ) {
            setItemList(allVacList); // показываем все вакансии
            locationBox.classList.remove('hidden');
        } else {
            getFilteredList(); // фильтруем
        }
    }
});

const getFilteredList = () => {
    let newVacList = allVacList; // отфильтрованный список

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
        let res = [];
        checkedList.work.forEach(xx => {
            const target = newVacList.filter(item => {
                return item.acf.work_format === xx;
            });
            res = [...res, ...target]
        });
        newVacList = res;
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


    // console.log(newVacList)
    setItemList(newVacList);
}
