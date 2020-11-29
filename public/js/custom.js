let btn_complex = document.getElementById('btn-complex');
let complex = document.getElementById('complex');
btn_complex.addEventListener('click', function() {
    hideClassTabs();
    btn_complex.classList.add('btn-tab-active');
    show(complex);
});

let btn_hygiene = document.getElementById('btn-hygiene');
let hygiene = document.getElementById('hygiene');
btn_hygiene.addEventListener('click', function() {
    hideClassTabs();
    btn_hygiene.classList.add('btn-tab-active');
    show(hygiene);
});

let btn_washing_drying = document.getElementById('btn-washing-drying');
let washing_drying = document.getElementById('washing-drying');
btn_washing_drying.addEventListener('click', function() {
    hideClassTabs();
    btn_washing_drying.classList.add('btn-tab-active');
    show(washing_drying);
});

let btn_trimming = document.getElementById('btn-trimming');
let trimming = document.getElementById('trimming');
btn_trimming.addEventListener('click', function() {
    hideClassTabs();
    btn_trimming.classList.add('btn-tab-active');
    show(trimming);
});

let btn_express_molt = document.getElementById('btn-express-molt');
let express_molt = document.getElementById('express-molt');
btn_express_molt.addEventListener('click', function() {
    hideClassTabs();
    btn_express_molt.classList.add('btn-tab-active');
    show(express_molt);
});

let btn_cats = document.getElementById('btn-cats');
let cats = document.getElementById('cats');
btn_cats.addEventListener('click', function() {
    hideClassTabs();
    btn_cats.classList.add('btn-tab-active');
    show(cats);
});

let btn_additional_services = document.getElementById('btn-additional-services');
let additional_services = document.getElementById('additional-services');
btn_additional_services.addEventListener('click', function() {
    hideClassTabs();
    btn_additional_services.classList.add('btn-tab-active');
    show(additional_services);
});

function log(data) {
    console.log(data);
}

function hideClassTabs() {
    let tab_btn = document.getElementsByClassName('tab-btn');
    let tabs_price = document.getElementsByClassName('tabs-price');

    for (let i = 0; i < tab_btn.length; i++) {
        tab_btn[i].classList.remove('btn-tab-active');
    }

    for (let i = 0; i < tabs_price.length; i++) {
        tabs_price[i].classList.add('hidden');
    }
}

function hide(el) {
    el.classList.add('hidden');
}

function show(el) {
    el.classList.remove('hidden');
}

// tab_btn_1.addEventListener('click', function() {
//     hideClassTabs();
//     tab_btn_1.classList.add('btn-tab-active');
//     show(tab_1);
// });

// tab_btn_2.addEventListener('click', function() {
//     hideClassTabs();
//     tab_btn_2.classList.add('btn-tab-active');
//     hide(tab_1);
//     show(tab_2);
// });

// tab_btn_3.addEventListener('click', function() {
//     hideClassTabs();
//     tab_btn_3.classList.add('btn-tab-active');
//     hide(tab_1);
//     show(tab_3);
// });
