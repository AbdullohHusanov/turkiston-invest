import './bootstrap'

import.meta.glob(['../../images/**',]);
import.meta.glob(['../../logos/**',]);


let burger = document.getElementById('burger');

let stateBurger = false;
burger.addEventListener('click', function () {
    stateBurger = !stateBurger;
    if (stateBurger)
        burger.classList.add('active')
    else
        burger.classList.remove('active')
})

let search = document.getElementById('search');
let searchWindow = document.getElementById('search-window');
let searchWindowClose = document.getElementById('search-window-close');

let stateSearch = false;


search.addEventListener('click', function () {
    stateSearch = !stateSearch;
    if (stateSearch) {
        search.classList.add('active')
        searchWindow.classList.add('active')
    } else {
        search.classList.remove('active')
        searchWindow.classList.remove('active')
    }
})

searchWindowClose.addEventListener('click', function () {
    stateSearch = !stateSearch;
    if (stateSearch) {
        search.classList.add('active')
        searchWindow.classList.add('active')
    } else {
        search.classList.remove('active')
        searchWindow.classList.remove('active')
    }
})


