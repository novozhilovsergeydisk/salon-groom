let tab_btn_1 = document.getElementById('tab-btn-1');
let tab_btn_2 = document.getElementById('tab-btn-2');
let tab_btn_3 = document.getElementById('tab-btn-3');
let tab_btn_4 = document.getElementById('tab-btn-4');
let tab_btn_5 = document.getElementById('tab-btn-5');
let tab_btn_6 = document.getElementById('tab-btn-6');


let tab_1 = document.getElementById('tab-1');
let tab_2 = document.getElementById('tab-2');
let tab_3 = document.getElementById('tab-3');
let tab_4 = document.getElementById('tab-4');
let tab_5 = document.getElementById('tab-5');
let tab_6 = document.getElementById('tab-6');

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

function show(el) {
    tab_1.classList.remove('hidden');
    el.classList.remove('hidden');
}

// tab_btn_1.addEventListener('click', function() {
//     hideClassTabs();
//     tab_btn_1.classList.add('btn-tab-active');
//     show(tab_2);
//     log(this);
// });

tab_btn_2.addEventListener('click', function() {
    hideClassTabs();
    tab_btn_2.classList.add('btn-tab-active');
    show(tab_2);
});

tab_btn_3.addEventListener('click', function() {
    hideClassTabs();
    tab_btn_3.classList.add('btn-tab-active');
    show(tab_3);
});

tab_btn_4.addEventListener('click', function() {
    hideClassTabs();
    tab_btn_4.classList.add('btn-tab-active');
    show(tab_4);
});

tab_btn_5.addEventListener('click', function() {
    hideClassTabs();
    tab_btn_5.classList.add('btn-tab-active');
    show(tab_5);
});

tab_btn_6.addEventListener('click', function() {
    hideClassTabs();
    tab_btn_6.classList.add('btn-tab-active');
    show(tab_6);
    console.log('listener');
});

console.log('test');
