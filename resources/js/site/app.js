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
    '../../fonts/icons/**/**.ttf',
    '../../fonts/icons/**/**.woff',
    '../../fonts/icons/**/**.eot',
    '../../fonts/icons/**/**.svg',
]);

let html = document.getElementById('html');
let body = document.getElementById('body')


const toTop = document.querySelector(".to-top");
window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})

const loader = document.getElementById("loader");
setTimeout(() => {
    loader.style.display = 'none'
}, 1500);

let toggleTheme = document.getElementById('toggleTheme');
let logo = document.getElementById('logo');

toggleTheme.addEventListener('click', changeTheme)

function changeTheme() {
    if (toggleTheme.checked === true) {
        body.classList.add('dark')
        logo.classList.remove('light')
        logo.classList.add('dark')
        body.classList.remove('light')
        logo.src = window.darkLogoPath;
    } else {
        body.classList.add('light')
        logo.classList.remove('dark')
        logo.classList.add('light')
        body.classList.remove('dark')
        logo.src = window.lightLogoPath;
    }
    toggleTheme.checked === true
        ? localStorage.setItem("PageTheme", "DARK")
        : localStorage.setItem("PageTheme", "LIGHT")
}

let getTheme = localStorage.getItem("PageTheme");
if (getTheme === 'DARK') {
    toggleTheme.checked = true
    body.classList.add('dark')
    logo.src = window.darkLogoPath;
} else if (getTheme === 'LIGHT') {
    toggleTheme.checked = false
    body.classList.add('light')
    logo.src = window.lightLogoPath;
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

function mobile() {
    const mobile = document.getElementById('mobile');
    mobile.addEventListener('click', () => {
        window.open('http://127.0.0.1:8000/#', "_blank", "menubar=1,resizable=1,width=400,height=550")
    })
}

mobile()


const slider = document.getElementById('slider')
font_size_set('small');
slider.addEventListener('change', (event) => {
    if (slider.value === '1') {
        font_size_set('small');
    } else if (slider.value === '2') {
        font_size_set('medium');
    } else if (slider.value === '3') {
        font_size_set('large');
    } else if (slider.value === '4') {
        font_size_set('big');
    } else {
        font_size_set('small');
    }
});
function font_size_set(new_size) {
    let body = document.getElementById('body');
    body.classList.remove('small');
    body.classList.remove('medium');
    body.classList.remove('large');
    body.classList.remove('big');
    body.classList.add(new_size);
}


const grayscaleTheme = document.getElementById('grayscaleTheme');
const invertTheme = document.getElementById('invertTheme');
const primaryTheme = document.getElementById('primaryTheme');
grayscaleTheme.addEventListener('click', () => {
    html.style.filter = 'grayscale(100%)';
})
invertTheme.addEventListener('click', () => {
    html.style.filter = 'invert(100%)';
})
primaryTheme.addEventListener('click', () => {
    html.style.filter = 'none'
})


let btnSpeak = document.querySelector('#btnSpeak');
let synth = window.speechSynthesis;
const mute = document.getElementById('mute');
mute.addEventListener('click', (e) => {
    if (mute.checked) {
        console.log("click checked")

        btnSpeak.style.display = ''

        document.addEventListener('click', (event) => {
            let xPosition = event.clientX - body.getBoundingClientRect().left - (btnSpeak.clientWidth / 2);
            let yPosition = event.clientY - body.getBoundingClientRect().top - (btnSpeak.clientHeight / 2);

            if (window.getSelection().toString() !== '') {
                btnSpeak.style.left = xPosition + "px"
                btnSpeak.style.top = yPosition + "px"
                btnSpeak.classList.remove('hidden');
            } else btnSpeak.classList.add('hidden')
        })

        btnSpeak.addEventListener('click', () => {
            synth.cancel();

            console.log("click btnSpeak")
            console.log(window.getSelection())

            synth.getVoices();
            let toSpeak = new SpeechSynthesisUtterance(window.getSelection().toString());
            synth.speak(toSpeak);
        });

        window.addEventListener('keyup', (event) => {
            synth.cancel();

            if (event.code === 'Enter') {
                if (window.getSelection().toString() !== '') {
                    synth.getVoices();

                    let toSpeak = new SpeechSynthesisUtterance(window.getSelection().toString());
                    synth.speak(toSpeak);
                }
            }
        });

    } else {
        window.removeEventListener('keyup','')

        btnSpeak.style.display = 'none'
    }
})


const mobileSubmenu = document.getElementById('mobileSubmenu')
const menuItem = document.getElementById('menuItem');
const arrowMenu = document.getElementById('arrowMenu');
arrowMenu.addEventListener('click',  () => {
    if (arrowMenu.style.transform === '') {
        arrowMenu.style.transform = 'rotate(180deg)'
        mobileSubmenu.style.display = 'block'
    } else if (arrowMenu.style.transform === 'rotate(180deg)') {
        arrowMenu.style.transform = 'rotate(0deg)'
        mobileSubmenu.style.display = 'none'
    } else if (arrowMenu.style.transform === 'rotate(0deg)') {
        arrowMenu.style.transform = 'rotate(180deg)'
        mobileSubmenu.style.display = 'block'
    }
})

const selectBtn = document.getElementById("selectBtn");
const optionMenu = document.querySelector(".select-menu"),
    options = optionMenu.querySelectorAll(".option"),
    sBtn_text = optionMenu.querySelector(".sBtn-text");

document.addEventListener("click", (e) => {
    if(selectBtn.contains(e.target)) {
        optionMenu.classList.toggle("active")
        fullMenuWindow.classList.remove('active')
        burger.classList.remove('active')
    }
    else optionMenu.classList.remove("active")
});

options.forEach((option) => {
    option.addEventListener("click", () => {
        sBtn_text.innerText = option.querySelector(".option-text").innerText;
        optionMenu.classList.remove("active");
    });
});


