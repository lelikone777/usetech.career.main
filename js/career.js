$(window).on('load', function () {


    let selectItem = null;
    let selectItem2 = null;
    let selectItemName = '';
    let listbox = document.querySelector('.list');
    let sel1 = document.getElementById('select');
    let sel2 = document.getElementById('select2');
    let message = document.querySelector('.message');
    let messgeblock = document.querySelector('.message__top');
    let messgeblock2 = document.querySelector('.message__bottom');
    let filterbox = document.querySelector('.clareer-filter');




    let allList = [];
    let filtredLIst = [];

    let categoryList = [];

    let mes = document.createElement('div');
    let mes2 = document.createElement('div');

    let selectIndex1 = '';
    let selectIndex2 = '';

    let filterclear = () => {
        visibleitem(allList);

        $('select').prop('selectedIndex', 0).selectric('refresh');
        $('select2').prop('selectedIndex', 0).selectric('refresh');


        selectItem = null;
        selectItem2 = null;
        mes.innerHTML = '';
        selectIndex1 = '';
        mes2.innerHTML = '';
        selectIndex2 = '';
        message.classList.add('hidden');
        history.pushState({}, '', ' ');
    }
    const preloader = document.querySelector('.preloader-new');
    const vacancybox = document.querySelector('.vacancy-item');

    // мониторим переключение на элементах
    const sel = () => {
        // console.log(allList);

        // если в строке браузера есть данные
        if(selectIndex1) {
            $('#select').prop('selectedIndex', selectIndex1).selectric('refresh');
            selectItem = $('#select').val();
        }
        if (selectIndex2) {
            $('#select2').prop('selectedIndex', selectIndex2).selectric('refresh');
            selectItem2 = $('#select2').val();
            if (categoryList.find(xxx => xxx.id === +selectItem2)) {
                selectItemName = categoryList.find(xxx => xxx.id === +selectItem2).name;
            }
        }
        if (selectIndex1 || selectIndex2) {
            test();
        }


        // мониторим нажатие слектов
        $('select').on('selectric-select', function (selectric) {
            if ($(this).context.id === 'select') {
                selectItem = $(this).val();
                selectIndex1 = selectric.currentTarget.options.selectedIndex;
            } else {
                selectItem2 = $(this).val();
                selectIndex2 = selectric.currentTarget.options.selectedIndex;
                if (categoryList.find(xxx => xxx.id === +selectItem2)) {
                    selectItemName = categoryList.find(xxx => xxx.id === +selectItem2).name;
                }
            }
            test();
        });
    };


    const test = () => {
        let v2 = `<div>Показаны вакансии по профилю <strong>${selectItemName}</strong></div>`;
        let v3 = `<div>Показаны вакансии в <strong>${selectItem}</strong> </div>`;
        let v4 = `<div>Показаны вакансии в <strong>${selectItem}</strong> по профилю <strong>${selectItemName}</strong></div>`;

        if (!selectItem || selectItem === 'all') {
            if (!selectItem2 || selectItem2 === 'all') {
                visibleitem(allList);
                mes.innerHTML = '';
            } else {
                filtredLIst = allList.filter(gg => gg.categories.includes(+selectItem2));
                visibleitem(filtredLIst);
                mes.innerHTML = v2;
                message.classList.remove('hidden');
            }
        } else {
            filtredLIst = allList.filter(gg => gg.acf.city === selectItem);
            mes.innerHTML = v3;
            message.classList.remove('hidden');
            if (!(!selectItem2 || selectItem2 === 'all')) {
                filtredLIst = filtredLIst.filter(gg => gg.categories.includes(+selectItem2));
                mes.innerHTML = v4;
            }
            visibleitem(filtredLIst);
        }

        messgeblock.appendChild(mes);
        mes2.classList.add('message__bottom-wrap');
        mes2.innerHTML = `Найдено вакансий:<strong>${filtredLIst.length}</strong><div class="message__bottom-reset reset">очистить фильтр</div>`;
        messgeblock2.appendChild(mes2);

        // очищаем фильтры
        let resetBtn = document.querySelector('.reset');
        resetBtn.onclick = () => {
            filterclear();
        }
        // костыль если выбрали два пустых поля
        if (!selectItem || selectItem === 'all') {
            if (!selectItem2 || selectItem2 === 'all') {
                mes2.innerHTML = ''
                messgeblock2.appendChild(mes2);
                message.classList.add('hidden');
            }
        }


        // данные для адресной строки

        let url = [];
        if (selectIndex1) url = [...url, `#sity=${selectIndex1}`];
        if (selectIndex2) url = [...url, `#vac=${selectIndex2}`];
        url = url.join('');

        history.pushState({}, '', url);

        if ((selectIndex1 === 0 && selectIndex2 === 0) ||
            (selectIndex1 === 0 && !selectIndex2) ||
            (selectIndex2 === 0 && !selectIndex1)) {
            history.pushState({}, '', ' ');
        }
    }


    // получаем посты
    let getPosition = {
        "url": "https://career.usetech.ru//wp-json/wp/v2/posts?categories=3&per_page=100&_fields=acf,link,title, categories",
        "method": "GET",
        "timeout": 0,
    };

    // получаем категории
    let getCategory = {
        "url": "https://career.usetech.ru//wp-json/wp/v2/categories?parent=3&_fields=id,name",
        "method": "GET",
        "timeout": 0,
    };

    const selectCity = () => {

        let items = allList.map(xx => xx.acf.city);
        items = new Set(items);
        items = [...items].filter(xx => xx !== '');
        items = [...items].filter(xx => xx !== undefined);



        items.forEach(ff => {
            let itemselect = document.createElement('option');
            itemselect.value = ff;
            itemselect.innerHTML = `${ff}`;
            sel1.appendChild(itemselect);
        })
    };


    const selectCategory = () => {
        categoryList.forEach(ff => {
            let itemselect = document.createElement('option');
            itemselect.value = ff.id;
            itemselect.innerHTML = `${ff.name}`;
            sel2.appendChild(itemselect);
        });

        $('#select').selectric(); // инициируем селект
        $('#select2').selectric(); // инициируем селект

        sel();
        if(!selectIndex1 && !selectIndex2) {
            visibleitem(allList); // рендерим полученый список
        }

        filterbox.classList.add('active');
        vacancybox.classList.add('active');
    };


    $.ajax(getPosition).done((response) => {
        // console.log(response);
        allList = response;
        $.ajax(getCategory).done((resp) => {
            // console.log(resp);
            categoryList = resp;
            selectCity();
            selectCategory();
            preloader.classList.add('hidden');
        });
    });


    // рендерим список
    const visibleitem = (list) => {
        let hott = list.filter(dd => dd.acf.hot);
        let unhott = list.filter(dd => !dd.acf.hot);
        list = [...hott, ...unhott];

        listbox.innerHTML = '';
        list.forEach(xx => {

            let hot = '';
            const target = xx.acf.hot;
            if (target) hot = `<img src='https://career.usetech.ru/wp-content/themes/usetech/images/flame.svg'>`;


            let city = '';
            if (xx.acf.city || xx.acf.city !== undefined) {
                city = `<div class="vacancy-city">${xx.acf.city}</div>`
            }


            let item = document.createElement('div');
            item.classList.add('col-lg-4');
            item.innerHTML = `

                    <a href="${xx.link}" class="${target ? 'hott' : 'normal'}">
                        <div class="titleitem">
                            ${xx.title.rendered}
                        </div> 
                
                        <div class="short-city">
                            <div class="vacancy-exp">
                                <strong>Опыт:</strong>
                                ${xx.acf.experience}
                            </div>
                            ${city}
                            ${hot}
                        </div>
                    </a>
            `
            listbox.appendChild(item);
        });
    }


    // данные из адресной строки
    const getURLVarArr = () => {
        let query = String(document.location.href).split('#');
        query.forEach(xx => {
            let tt = xx.split('=');
            if(tt[0] === 'sity') {
                selectIndex1 = +tt[1];
            }
            if(tt[0] === 'vac') {
                selectIndex2 = +tt[1];
            }

        });
    }

    getURLVarArr();

});

