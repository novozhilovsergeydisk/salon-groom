let tab_btn_1 = document.getElementById('tab-btn-1');
let tab_btn_2 = document.getElementById('tab-btn-2');
let tab_btn_3 = document.getElementById('tab-btn-3');

let tab_1 = document.getElementById('tab-1');
let tab_2 = document.getElementById('tab-2');
let tab_3 = document.getElementById('tab-3');

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

tab_btn_1.addEventListener('click', function() {
    hideClassTabs();
    tab_btn_1.classList.add('btn-tab-active');
    show(tab_1);
});

tab_btn_2.addEventListener('click', function() {
    hideClassTabs();
    tab_btn_2.classList.add('btn-tab-active');
    hide(tab_1);
    show(tab_2);
});

tab_btn_3.addEventListener('click', function() {
    hideClassTabs();
    tab_btn_3.classList.add('btn-tab-active');
    hide(tab_1);
    show(tab_3);
});
