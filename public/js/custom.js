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

// Mobile

let btn_complex_mobile = document.getElementById('btn-complex-mobile');
let complex_mobile = document.getElementById('complex-mobile');
btn_complex_mobile.addEventListener('click', function() {
    hideClassTabs();
    btn_complex_mobile.classList.add('btn-tab-active');
    show(complex_mobile);
});

let btn_hygiene_mobile = document.getElementById('btn-hygiene-mobile');
let hygiene_mobile = document.getElementById('hygiene-mobile');
btn_hygiene_mobile.addEventListener('click', function() {
    hideClassTabs();
    btn_hygiene_mobile.classList.add('btn-tab-active');
    show(hygiene_mobile);
});

let btn_washing_drying_mobile = document.getElementById('btn-washing-drying-mobile');
let washing_drying_mobile = document.getElementById('washing-drying-mobile');
btn_washing_drying_mobile.addEventListener('click', function() {
    hideClassTabs();
    btn_washing_drying_mobile.classList.add('btn-tab-active');
    show(washing_drying_mobile);
});

let btn_trimming_mobile = document.getElementById('btn-trimming-mobile');
let trimming_mobile = document.getElementById('trimming-mobile');
btn_trimming_mobile.addEventListener('click', function() {
    hideClassTabs();
    btn_trimming_mobile.classList.add('btn-tab-active');
    show(trimming_mobile);
});

let btn_express_molt_mobile = document.getElementById('btn-express-molt-mobile');
let express_molt_mobile = document.getElementById('express-molt-mobile');
btn_express_molt_mobile.addEventListener('click', function() {
    hideClassTabs();
    btn_express_molt_mobile.classList.add('btn-tab-active');
    show(express_molt_mobile);
});

let btn_cats_mobile = document.getElementById('btn-cats-mobile');
let cats_mobile = document.getElementById('cats-mobile');
btn_cats_mobile.addEventListener('click', function() {
    hideClassTabs();
    btn_cats_mobile.classList.add('btn-tab-active');
    show(cats_mobile);
});

let btn_additional_services_mobile = document.getElementById('btn-additional-services-mobile');
let additional_services_mobile = document.getElementById('additional-services-mobile');
btn_additional_services_mobile.addEventListener('click', function() {
    hideClassTabs();
    btn_additional_services_mobile.classList.add('btn-tab-active');
    show(additional_services_mobile);
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
