import './bootstrap'
import {createApp} from 'vue'
import App from './App.vue'

createApp(App).mount("#app")


import.meta.glob([
    '../../images/**/**',
    '../../images/**',
    '../../logos/**',
    '../../fonts/ProximaNova/**/**.ttf',
    '../../fonts/ProximaNova/**/**.woff',
    '../../fonts/ProximaNova/**/**.eot',
]);

checkTheme();
applyTheme();
setTimeout(() => {
    applyTheme();
},1000)

function applyTheme(){
let body = document.getElementById('body');
let toggleTheme = document.getElementById('toggleTheme')

    if (themeIsDark()){
        body.classList.remove('light')
        body.classList.add('dark')
    }else{
        body.classList.remove('dark')
        body.classList.add('light')
    }
}

function checkTheme() {
    let theme = window.localStorage.getItem('siteTheme')

    if (theme === null || theme === undefined){
        window.localStorage.setItem('siteTheme','light')
    }
}
function themeIsDark(){
    let theme = window.localStorage.getItem('siteTheme')

    checkTheme();

    if (theme === 'light'){
        return false
    }else{
        return true
    }
}
function themeIsLight(){
    let theme = window.localStorage.getItem('siteTheme')

    checkTheme();

    if (theme === 'light'){
        return true
    }else{
        return false
    }
}
function getTheme() {
    let theme = window.localStorage.getItem('siteTheme')

    checkTheme();

    if (theme === 'light'){
        return 'light'
    }else{
        return 'dark'
    }
}

let burger = document.getElementById('burger');
let fullMenuWindow = document.getElementById('full-menu');
let navbarMenu = document.getElementById('navbar-menu')
let search = document.getElementById('search');
let searchWindow = document.getElementById('search-window');
let searchWindowClose = document.getElementById('search-window-close');
let accessibility = document.getElementById('accessibility');
let accessibilityBg = document.getElementById('accessibility-bg')
let accessibilityWindow = document.getElementById('accessibility-window')

let stateBurger = false;
let accessibilityState = false;
let stateSearch = false;


function toggleSearch() {
    stateSearch = !stateSearch;
    if (stateSearch) {
        search.classList.add('active')
        searchWindow.classList.add('active')
    } else {
        search.classList.remove('active')
        searchWindow.classList.remove('active')
    }
}

function closeSearch() {
    stateSearch = false;
    search.classList.remove('active')
    searchWindow.classList.remove('active')
}

function openSearch() {
    stateSearch = true;
    search.classList.add('active')
    searchWindow.classList.add('active')
}

function toggleAccessibility() {
    accessibilityState = !accessibilityState;

    if (accessibilityState) {
        accessibility.classList.add('active')
        accessibilityWindow.classList.add('active')
    } else {
        accessibility.classList.remove('active')
        accessibilityWindow.classList.remove('active')
    }
}

function openAccessibility() {
    accessibilityState = true;
    accessibility.classList.add('active')
    accessibilityWindow.classList.add('active')
}

function closeAccessibility() {
    accessibilityState = false;
    accessibility.classList.remove('active')
    accessibilityWindow.classList.remove('active')
}

function toggleFullMenu() {
    stateBurger = !stateBurger;
    if (stateBurger) {
        burger.classList.add('active');
        fullMenuWindow.classList.add('active');
    } else {
        burger.classList.remove('active')
        fullMenuWindow.classList.remove('active');
    }
}

function openFullMenu() {
    stateBurger = true;
    burger.classList.add('active')
    fullMenuWindow.classList.add('active');
}

function closeFullMenu() {
    stateBurger = false;
    burger.classList.remove('active')
    fullMenuWindow.classList.remove('active');
}


burger.addEventListener('click', function () {
    toggleFullMenu()
})


search.addEventListener('click', function () {
    closeFullMenu()
    toggleSearch()
})

searchWindowClose.addEventListener('click', function () {
    closeSearch()
})

accessibility.addEventListener('click', function () {
    closeFullMenu()
    toggleAccessibility();
})

accessibilityBg.addEventListener('click', function () {
    closeAccessibility();
})

let accessibilityClose = document.getElementById('accessibility-window-close')

accessibilityClose.addEventListener('click', function () {
    closeAccessibility()
})

navbarMenu.addEventListener('mouseenter', function () {
    closeFullMenu()
})


const rangeInputs = document.querySelectorAll('input[type="range"]')
function handleInputChange(e) {
    let target = e.target
    if (e.target.type !== 'range') {
        target = document.getElementById('range')
    }
    const min = target.min
    const max = target.max
    const val = target.value
    target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
}
rangeInputs.forEach(input => {
    input.style.backgroundSize = '0% 100%'
    input.addEventListener('input', handleInputChange)
})


const slidesContainer = document.querySelector(".slides-container");
const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");
nextButton.addEventListener("click", () => {
    slidesContainer.scrollLeft += slideWidth;
});
prevButton.addEventListener("click", () => {
    slidesContainer.scrollLeft -= slideWidth;
});
